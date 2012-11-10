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

	public function clickToDialAction($phoneNumber) {
		$user = $this->container->get('security.context')->getToken()
				->getUser();

		// Et pour vérifier que l'utilisateur est authentifié (et non un anonyme)
		if (!is_object($user)) {
			throw new AccessDeniedException('Vous n\'êtes pas authentifié.');
		}

		$username = $user->getUsername();
		$channel = "SIP/" . $username;
		$ami = $this->container->get('lap_asterisk.sami');
		$ami->dial($channel, "test", $phoneNumber);

		return $this->redirect($this->generateUrl('LapAnnuBundle_homepage'));
	}

}

?>
