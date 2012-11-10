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
use Lap\AnnuBundle\Service\LapLdapSearch;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of AnnuaireController
 *
 * @author lolostates
 */
class AnnuaireController extends Controller {

	public function indexAction() {
		$ldap = $this->container->get('Lap_annu.ldapsearch');
		$users = $ldap
				->findAll(
						array("uidNumber", "sn", "givenName", "mail",
								"telephoneNumber"));
		return $this
				->render('LapAnnuBundle:Annuaire:index.html.twig',
						array('users' => $users));
	}

	public function showAction() {

		$request = $this->container->get('request');
		$ldap = $this->container->get('Lap_annu.ldapsearch');

		if ($request->isXmlHttpRequest()) {
			$uid = '';
			$uid = $request->request->get('uid');

			if ($uid != '') {
				$users = $ldap
						->findByUid(
								array("uidNumber", "sn", "givenName", "mail",
										"gender", "dateOfBirth",
										"preferredLanguage", "ou", "o",
										"roomNumber"), $uid);
				return $this
						->render('LapAnnuBundle:Annuaire:show.html.twig',
								array('users' => $users));
			} else {
				return $this
						->redirect($this->generateUrl('LapAnnuBundle_homepage'));
			}
		} else {
			return $this
					->redirect($this->generateUrl('LapAnnuBundle_homepage'));
		}
	}

	/**
	 * Controller implement myService action. In fact, this contoller will provide
	 * webpage with user in same organization unit in LDAP. 
	 */
	public function serviceAction() {
		// get currently logged-in user
		$user = $this->container->get('security.context')->getToken()
				->getUser();

		// Et pour vérifier que l'utilisateur est authentifié (et non un anonyme)
		if (!is_object($user)) {
			throw new AccessDeniedException('Vous n\'êtes pas authentifié.');
		}

		$ldap = $this->container->get('Lap_annu.ldapsearch');
		$users = $ldap
				->findByMyService(
						array("uidNumber", "sn", "givenName", "mail",
								"telephoneNumber"), $user->getService());

		return $this
				->render('LapAnnuBundle:Annuaire:index.html.twig',
						array('users' => $users));
	}

	/* Function use to call another phone with the current login user. If user is not
	 * registred, no phone call.
	 * Depends on PAMI
	 * ToDO : Implemnet pami
	 * WhyNot : create a service in Asterisk Bundle !!!
	 */

	public function dialAction() {

		$options = array(
				'log4php.properties' => realpath(__DIR__) . DIRECTORY_SEPARATOR
						. 'log4php.properties', 'host' => $argv[1],
				'port' => $argv[2], 'username' => $argv[3],
				'secret' => $argv[4], 'connect_timeout' => $argv[5],
				'read_timeout' => $argv[6], 'scheme' => 'tcp://' // try tls://
		);
		$a = new ClientImpl($options);
		$a->open();

		//Backup Data information from DataBase or Store in user profile
		$originateMsg = new OriginateAction('SIP/marcelog');
		$originateMsg->setContext('netlabs');
		$originateMsg->setPriority('1');
		$originateMsg->setExtension('51992266');
		var_dump($a->send($originateMsg));

		return $this->render('::base.html.twig', array('fp' => $ret));
	}

}

?>
