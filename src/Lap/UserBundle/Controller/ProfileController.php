<?php

namespace Lap\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use JMS\SecurityExtraBundle\Annotation\Secure;

/**
 * Description of ProfileController
 *
 * @author lolostates
 */
class ProfileController extends Controller {
    /*
     * Affiche le profile de l'utilisateur. On souhaite ici afficher sur une page
     * le login, le nom,le prenom, l'@mail, le mot de passe du téléphone, le mot de passe
     * de la boite vocale, le numero de téléphone de l'user, le téléphone physique attribué
     * On cherche dans la base de donnée asterisk : @ip du registred, si la boite vocale
     * est active plus la liste de ses appels sur une semaine.
     * On cherche tout cela dans la base LDAP et MySQL pour les données Asterisk
     * On pourra egalement remonter d'autres INFO avec le CDR
     * 
     * @Secure(roles="ROLE_USER")
     */

    public function showAction() {

        //On recupere l'user courant
        $user = $this->container->get('security.context')->getToken()->getUser();

        // Et pour vérifier que l'utilisateur est authentifié (et non un anonyme)
        if (!is_object($user)) {
            throw new AccessDeniedException('Vous n\'êtes pas authentifié.');
        }

        //recuperation de l'adresse ip actuellement enregistré  
        $em = $this->getDoctrine()
                ->getEntityManager('asterisk');

        //on recupere les attributs SIP de l'utilisateur courant.
        $repository = $em->getRepository('LapAsteriskBundle:SipUsers');
        $sip = $repository->findByname($user->getUsername());

        //On recupere le journal d'appel de la semaine puis on effectue des
        //traitement sur chaque objet CDR.
        $repository = $em->getRepository('LapAsteriskBundle:Cdr');
        $cdrs = $repository->findCdrByCallerId($user->getPhoneNumber());

        foreach ($cdrs as $cdr) {
            $cdr->formatCdr($user->getPhoneNumber());
            $cdr->durationSecondstoMinutes();
        }

        //on retourne tout cela à la vue.
        return $this->render('LapUserBundle:Profile:show.html.twig', array('user' => $user,
                    'sip' => $sip[0],
                    'cdrs' => $cdrs));
    }

}

?>
