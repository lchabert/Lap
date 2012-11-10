<?php

namespace Lap\AsteriskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PAMI\Client\Impl\ClientImpl as PamiClient;
use PAMI\Message\Action\OriginateAction;

/**
 * Description of AmiController
 *
 * @author lolostates
 */
class AmiController extends Controller {
    
    public function clickToDialAction($phoneNumber){
        $user = $this->container->get('security.context')->getToken()->getUser();

        // Et pour vérifier que l'utilisateur est authentifié (et non un anonyme)
        if (!is_object($user)) {
            throw new AccessDeniedException('Vous n\'êtes pas authentifié.');
        }

        $username = $user->getUsername();
        $channel = "SIP/".$username;
        $ami = $this->container->get('lap_asterisk.sami');
        $ami->dial($channel,"test",$phoneNumber);
    
        return $this->redirect($this->generateUrl('LapAnnuBundle_homepage'));
    }

}

?>
