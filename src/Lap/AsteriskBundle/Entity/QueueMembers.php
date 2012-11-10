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

/**
 * Lap\AsteriskBundle\Entity\QueueMembers
 *
 * @ORM\Table(name="queue_members")
 * @ORM\Entity(repositoryClass="Lap\AsteriskBundle\Entity\QueueMembersRepository")
 */
class QueueMembers {
	/**
	 * @var integer $uniqueid
	 *
	 * @ORM\Column(name="uniqueid", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $uniqueid;

	/**
	 * @var string $membername
	 *
	 * @ORM\Column(name="membername", type="string", length=40, nullable=true)
	 */
	private $membername;

	/**
	 * @var string $queueName
	 *
	 * @ORM\Column(name="queue_name", type="string", length=128, nullable=true)
	 */
	private $queueName;

	/**
	 * @var string $interface
	 *
	 * @ORM\Column(name="interface", type="string", length=128, nullable=true)
	 */
	private $interface;

	/**
	 * @var integer $penalty
	 *
	 * @ORM\Column(name="penalty", type="integer", nullable=true)
	 */
	private $penalty;

	/**
	 * @var boolean $paused
	 *
	 * @ORM\Column(name="paused", type="boolean", nullable=true)
	 */
	private $paused;

	/**
	 * Get uniqueid
	 *
	 * @return integer 
	 */
	public function getUniqueid() {
		return $this->uniqueid;
	}

	/**
	 * Set membername
	 *
	 * @param string $membername
	 */
	public function setMembername($membername) {
		$this->membername = $membername;
	}

	/**
	 * Get membername
	 *
	 * @return string 
	 */
	public function getMembername() {
		return $this->membername;
	}

	/**
	 * Set queueName
	 *
	 * @param string $queueName
	 */
	public function setQueueName($queueName) {
		$this->queueName = $queueName;
	}

	/**
	 * Get queueName
	 *
	 * @return string 
	 */
	public function getQueueName() {
		return $this->queueName;
	}

	/**
	 * Set interface
	 *
	 * @param string $interface
	 */
	public function setInterface($interface) {
		$this->interface = $interface;
	}

	/**
	 * Get interface
	 *
	 * @return string 
	 */
	public function getInterface() {
		return $this->interface;
	}

	/**
	 * Set penalty
	 *
	 * @param integer $penalty
	 */
	public function setPenalty($penalty) {
		$this->penalty = $penalty;
	}

	/**
	 * Get penalty
	 *
	 * @return integer 
	 */
	public function getPenalty() {
		return $this->penalty;
	}

	/**
	 * Set paused
	 *
	 * @param boolean $paused
	 */
	public function setPaused($paused) {
		$this->paused = $paused;
	}

	/**
	 * Get paused
	 *
	 * @return boolean 
	 */
	public function getPaused() {
		return $this->paused;
	}
}
