<?php

namespace Lap\AnnuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Lap\UserBundle\Entity\User;


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FavoriteController
 *
 * @author lolostates
 */
class FavoriteController extends Controller{
    
    public function addAction($email){
        // get currently logged-in user
        $user = $this->container->get('security.context')->getToken()->getUser();

        // Et pour vérifier que l'utilisateur est authentifié (et non un anonyme)
        if (!is_object($user)) {
            throw new AccessDeniedException('Vous n\'êtes pas authentifié.');
        }
       
       $userManager = $this->get('fos_user.user_manager');
       $favoriteUser = $userManager->findUserBy(array('email' => $email));
        
            
       
       //on ajoute a l'utilisateur courant le favoris passé en parametre?
       $user->addMyFavorite($favoriteUser);
       // On récupère l'EntityManager
       $userManager->updateUser($user); 
       
                   
        $this->get('session')->setFlash('success', 'Utilisateur ajouté aux favoris!');
       return $this->redirect( $this->generateUrl('LapAnnuBundle_homepage') );
    }
    
    public function removeAction(){
        
    }
    
    public function showAction(){
        
         // get currently logged-in user
        $user = $this->container->get('security.context')->getToken()->getUser();

        // Et pour vérifier que l'utilisateur est authentifié (et non un anonyme)
        if (!is_object($user)) {
            throw new AccessDeniedException('Vous n\'êtes pas authentifié.');
        }
        
        
        
    }
}

?>
