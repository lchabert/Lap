<?php
/**
 * PHP Version 5
 *
 * @category Lap
 * @package Entity
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

namespace Lap\AsteriskBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Lap\AnnuBundle\Service\LapLdapSearch;

/**
 * Lap\AsteriskBundle\Entity\Cdr
 *
 * @ORM\Table(name="cdr")
 * @ORM\Entity(repositoryClass="Lap\AsteriskBundle\Entity\CdrRepository")
 */
class Cdr {

	/**
	 * @var string $uniqueid
	 *
	 * @ORM\Column(name="uniqueid", type="string", length=32, nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $uniqueid;

	/**
	 * @var datetime $calldate
	 *
	 * @ORM\Column(name="calldate", type="datetime", nullable=false)
	 */
	private $calldate;

	/**
	 * @var string $clid
	 *
	 * @ORM\Column(name="clid", type="string", length=80, nullable=false)
	 */
	private $clid;

	/**
	 * @var string $src
	 *
	 * @ORM\Column(name="src", type="string", length=80, nullable=false)
	 */
	private $src;

	/**
	 * @var string $dst
	 *
	 * @ORM\Column(name="dst", type="string", length=80, nullable=false)
	 */
	private $dst;

	/**
	 * @var string $dcontext
	 *
	 * @ORM\Column(name="dcontext", type="string", length=80, nullable=false)
	 */
	private $dcontext;

	/**
	 * @var string $channel
	 *
	 * @ORM\Column(name="channel", type="string", length=80, nullable=false)
	 */
	private $channel;

	/**
	 * @var string $dstchannel
	 *
	 * @ORM\Column(name="dstchannel", type="string", length=80, nullable=false)
	 */
	private $dstchannel;

	/**
	 * @var string $lastapp
	 *
	 * @ORM\Column(name="lastapp", type="string", length=80, nullable=false)
	 */
	private $lastapp;

	/**
	 * @var string $lastdata
	 *
	 * @ORM\Column(name="lastdata", type="string", length=80, nullable=false)
	 */
	private $lastdata;

	/**
	 * @var integer $duration
	 *
	 * @ORM\Column(name="duration", type="integer", nullable=false)
	 */
	private $duration;

	/**
	 * @var integer $billsec
	 *
	 * @ORM\Column(name="billsec", type="integer", nullable=false)
	 */
	private $billsec;

	/**
	 * @var string $disposition
	 *
	 * @ORM\Column(name="disposition", type="string", length=45, nullable=false)
	 */
	private $disposition;

	/**
	 * @var integer $amaflags
	 *
	 * @ORM\Column(name="amaflags", type="integer", nullable=false)
	 */
	private $amaflags;

	/**
	 * @var string $accountcode
	 *
	 * @ORM\Column(name="accountcode", type="string", length=20, nullable=false)
	 */
	private $accountcode;

	/**
	 * @var string $userfield
	 *
	 * @ORM\Column(name="userfield", type="string", length=255, nullable=false)
	 */
	private $userfield;

	/**
	 * @var string $state
	 * Set by formatCDR, this attribut permit to known if call is outgoing or
	 * incoming.
	 * Two values possible. 
	 */
	private $state;

	/**
	 * Function which permit to known if call is outgoing or incoming.
	 * Need a parameter, phone number of current user.
	 * @param type $phoneNumber 
	 */
	public function formatCdr($phoneNumber) {

		if ($this->dst == $phoneNumber) {
			$this->setState("incoming");
		} else {
			$this->setState("outgoing");
		}
	}

	/**
	 * Permit to convert seconds from CDR to minutes.  
	 */
	public function durationSecondstoMinutes() {

		if ($this->duration > 60) {
			$minutes = ($this->duration / 60) % 60;
			$seconds = $this->duration % 60;
			$this->duration = $minutes . '"' . $seconds . ' sec';
		} else {
			$this->duration = $this->duration . ' sec';
		}
	}

	public function convertCallerID($phoneNumber) {
		$ldap = $this->container->get('Lap_annu.ldapsearch');
		$callerID = $ldap->findByPhoneNumber(array('cn'), $phoneNumber);
		var_dump($callerID);
	}

	/**
	 * Get uniqueid
	 *
	 * @return string 
	 */
	public function getUniqueid() {
		return $this->uniqueid;
	}

	/**
	 * Set calldate
	 *
	 * @param datetime $calldate
	 */
	public function setCalldate($calldate) {
		$this->calldate = $calldate;
	}

	/**
	 * Get calldate
	 *
	 * @return datetime 
	 */
	public function getCalldate() {
		return $this->calldate;
	}

	/**
	 * Set clid
	 *
	 * @param string $clid
	 */
	public function setClid($clid) {
		$this->clid = $clid;
	}

	/**
	 * Get clid
	 *
	 * @return string 
	 */
	public function getClid() {
		return $this->clid;
	}

	/**
	 * Set src
	 *
	 * @param string $src
	 */
	public function setSrc($src) {
		$this->src = $src;
	}

	/**
	 * Get src
	 *
	 * @return string 
	 */
	public function getSrc() {
		return $this->src;
	}

	/**
	 * Set dst
	 *
	 * @param string $dst
	 */
	public function setDst($dst) {
		$this->dst = $dst;
	}

	/**
	 * Get dst
	 *
	 * @return string 
	 */
	public function getDst() {
		return $this->dst;
	}

	/**
	 * Set dcontext
	 *
	 * @param string $dcontext
	 */
	public function setDcontext($dcontext) {
		$this->dcontext = $dcontext;
	}

	/**
	 * Get dcontext
	 *
	 * @return string 
	 */
	public function getDcontext() {
		return $this->dcontext;
	}

	/**
	 * Set channel
	 *
	 * @param string $channel
	 */
	public function setChannel($channel) {
		$this->channel = $channel;
	}

	/**
	 * Get channel
	 *
	 * @return string 
	 */
	public function getChannel() {
		return $this->channel;
	}

	/**
	 * Set dstchannel
	 *
	 * @param string $dstchannel
	 */
	public function setDstchannel($dstchannel) {
		$this->dstchannel = $dstchannel;
	}

	/**
	 * Get dstchannel
	 *
	 * @return string 
	 */
	public function getDstchannel() {
		return $this->dstchannel;
	}

	/**
	 * Set lastapp
	 *
	 * @param string $lastapp
	 */
	public function setLastapp($lastapp) {
		$this->lastapp = $lastapp;
	}

	/**
	 * Get lastapp
	 *
	 * @return string 
	 */
	public function getLastapp() {
		return $this->lastapp;
	}

	/**
	 * Set lastdata
	 *
	 * @param string $lastdata
	 */
	public function setLastdata($lastdata) {
		$this->lastdata = $lastdata;
	}

	/**
	 * Get lastdata
	 *
	 * @return string 
	 */
	public function getLastdata() {
		return $this->lastdata;
	}

	/**
	 * Set duration
	 *
	 * @param integer $duration
	 */
	public function setDuration($duration) {
		$this->duration = $duration;
	}

	/**
	 * Get duration
	 *
	 * @return integer 
	 */
	public function getDuration() {
		return $this->duration;
	}

	/**
	 * Set billsec
	 *
	 * @param integer $billsec
	 */
	public function setBillsec($billsec) {
		$this->billsec = $billsec;
	}

	/**
	 * Get billsec
	 *
	 * @return integer 
	 */
	public function getBillsec() {
		return $this->billsec;
	}

	/**
	 * Set disposition
	 *
	 * @param string $disposition
	 */
	public function setDisposition($disposition) {
		$this->disposition = $disposition;
	}

	/**
	 * Get disposition
	 *
	 * @return string 
	 */
	public function getDisposition() {
		return $this->disposition;
	}

	/**
	 * Set amaflags
	 *
	 * @param integer $amaflags
	 */
	public function setAmaflags($amaflags) {
		$this->amaflags = $amaflags;
	}

	/**
	 * Get amaflags
	 *
	 * @return integer 
	 */
	public function getAmaflags() {
		return $this->amaflags;
	}

	/**
	 * Set accountcode
	 *
	 * @param string $accountcode
	 */
	public function setAccountcode($accountcode) {
		$this->accountcode = $accountcode;
	}

	/**
	 * Get accountcode
	 *
	 * @return string 
	 */
	public function getAccountcode() {
		return $this->accountcode;
	}

	/**
	 * Set userfield
	 *
	 * @param string $userfield
	 */
	public function setUserfield($userfield) {
		$this->userfield = $userfield;
	}

	/**
	 * Get userfield
	 *
	 * @return string 
	 */
	public function getUserfield() {
		return $this->userfield;
	}

	/**
	 * Get state
	 *
	 * @return string 
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Set state
	 *
	 * @param string $state
	 */
	public function setState($state) {
		$this->state = $state;
	}

}
