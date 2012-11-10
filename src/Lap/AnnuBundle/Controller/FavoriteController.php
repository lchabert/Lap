<?php
/**
 * PHP Version 5
 *
 * @category Lap
 * @package Controller
 * @author Chabert Loic <chabert.loic.74@gmail.com>
 * @license http://github.com/lolostates/Lap/blob/master/LICENSE
 * @link https://github.com/lolostates/Lap
 *
 * Copyright 2012 Chabert Loic <chabert.loic.74@gmail.com>
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License*
 *   along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

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
class FavoriteController extends Controller {

	public function addAction($email) {
		// get currently logged-in user
		$user = $this->container->get('security.context')->getToken()
				->getUser();

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

		$this->get('session')
				->setFlash('success', 'Utilisateur ajouté aux favoris!');
		return $this->redirect($this->generateUrl('LapAnnuBundle_homepage'));
	}

	public function removeAction() {

	}

	public function showAction() {

		// get currently logged-in user
		$user = $this->container->get('security.context')->getToken()
				->getUser();

		// Et pour vérifier que l'utilisateur est authentifié (et non un anonyme)
		if (!is_object($user)) {
			throw new AccessDeniedException('Vous n\'êtes pas authentifié.');
		}

	}
}

?>
