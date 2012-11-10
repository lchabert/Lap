<?php
/**
 * PHP Version 5
 *
 * @category Lap
 * @package Service
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

namespace Lap\AsteriskBundle\Service;
use PAMI\Client\Impl\ClientImpl as PamiClient;
use PAMI\Message\Action\OriginateAction;

/**
 * Sami is a concatenation between AMI and Service. He become Sami.
 * Sami is based on PAMI library.
 *
 * @author lolostates
 */
class Sami {
	private $pamiClient;

	private $pamiClientOptions = array();

	public function __construct($ami_server, $ami_scheme, $ami_port,
			$ami_username, $ami_passwd, $ami_connect_timeout, $ami_read_timeout) {
		$this->pamiClientOptions['host'] = $ami_server;
		$this->pamiClientOptions['scheme'] = $ami_scheme;
		$this->pamiClientOptions['port'] = $ami_port;
		$this->pamiClientOptions['username'] = $ami_username;
		$this->pamiClientOptions['secret'] = $ami_passwd;
		$this->pamiClientOptions['connect_timeout'] = $ami_connect_timeout;
		$this->pamiClientOptions['read_timeout'] = $ami_read_timeout;
		$this->pamiClient = new PamiClient($this->pamiClientOptions);
		var_dump($this->pamiClientOptions);
		$this->pamiClient->open();
	}

	public function dial($channel, $callerid, $extension) {
		$originateMsg = new OriginateAction($channel);
		$originateMsg->setCallerId($callerid);
		$originateMsg->setContext('default');
		$originateMsg->setPriority('1');
		$originateMsg->setExtension($extension);
		$response = $this->pamiClient->send($originateMsg);
		$this->logout();
	}

	public function logout() {
		$this->pamiClient->close();
	}
	public function login() {
		$this->pamiClient->open();
	}
}

?>
