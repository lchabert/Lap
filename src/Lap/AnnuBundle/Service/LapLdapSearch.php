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

namespace Lap\AnnuBundle\Service;
/**
 * Description of LapLdapSearch
 *
 * @author lolostates
 */
class LapLdapSearch {

	private $server;
	private $root_dn;
	private $root_pw;
	private $dn;
	private $filter;
	private $restrictions;
	private $ds;
	private $r;

	function __construct($server, $root_dn, $root_pw, $dn, $filter,
			$restrictions) {
		$this->server = $server;
		$this->root_dn = $root_dn;
		$this->root_pw = $root_pw;
		$this->dn = $dn;
		$this->filter = $filter;
		$this->restrictions = explode(",", $restrictions);

		//connexion lors de la construction
		$this->ds = ldap_connect($this->server);
		if ($this->ds) {
			ldap_set_option($this->ds, LDAP_OPT_PROTOCOL_VERSION, 3);
			$this->r = ldap_bind($this->ds, $this->root_dn, $this->root_pw);
			if (!$this->r) {
				echo "Authentification impossible.";
			}
		} else {
			echo "Connexion LDAP possible.";
		}
	}

	public function process() {
		$sr = ldap_search($this->ds, $this->dn, $this->filter,
				$this->restrictions);
		$info = ldap_get_entries($this->ds, $sr);
		$users = array();
		$user = array();

		for ($i = 0; $i < $info["count"]; $i++) {

			foreach ($this->restrictions as $restriction) {
				if (!isset($info[$i][strtolower($restriction)][0])) {
					$user[$restriction] = "Element non renseigné";
				} else {
					$user[$restriction] = $info[$i][strtolower($restriction)][0];
				}
			}
			$users[] = $user;
		}

		return $users;
	}

	public function findAll($restrictions) {
		$this->setRestriction($restrictions);
		return $this->process();
	}

	public function findByInitiale($restrictions, $letter) {
		$this->setRestriction($restrictions);
		$this->filter = substr_replace($this->filter, "(sn=$letter*)", -1, 0);
		return $this->process();
	}

	public function findByMyService($restrictions, $service) {
		$this->setRestriction($restrictions);
		$this->filter = substr_replace($this->filter, "(ou=$service)", -1, 0);
		return $this->process();
	}

	public function findByUsername($restrictions, $username) {
		$this->setRestriction($restrictions);
		$this->filter = substr_replace($this->filter, "(uid=$username)", -1, 0);
		return $this->process();
	}

	public function findByUid($restrictions, $uid) {
		$this->setRestriction($restrictions);
		$this->filter = substr_replace($this->filter, "(uidNumber=$uid)", -1, 0);
		return $this->process();
	}

	public function findByPhoneNumber($restrictions, $phoneNumber) {
		$this->setRestriction($restrictions);
		$this->filter = "(&(objectclass=person)(telephoneNumber=$phoneNumber))";
		return $this->process();
	}

	public function getServer() {
		return $this->server;
	}

	public function getRoot_dn() {
		return $this->root_dn;
	}

	public function getRoot_pw() {
		return $this->root_pw;
	}

	public function getDn() {
		return $this->dn;
	}

	public function getFilter() {
		return $this->filter;
	}

	public function getRestriction() {
		return $this->restrictions;
	}

	public function getDs() {
		return $this->ds;
	}

	public function getR() {
		return $this->r;
	}

	public function setServer($server) {
		$this->server = $server;
	}

	public function setRoot_dn($root_dn) {
		$this->root_dn = $root_dn;
	}

	public function setRoot_pw($root_pw) {
		$this->root_pw = $root_pw;
	}

	public function setDn($dn) {
		$this->dn = $dn;
	}

	public function setFilter($filter) {
		$this->filter = $filter;
	}

	public function setRestriction($restrictions) {
		$this->restrictions = $restrictions;
	}

}

?>
