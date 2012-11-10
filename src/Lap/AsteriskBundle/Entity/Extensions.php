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
 * Lap\AsteriskBundle\Entity\Extensions
 *
 * @ORM\Table(name="extensions")
 * @ORM\Entity(repositoryClass="Lap\AsteriskBundle\Entity\ExtensionsRepository")
 */
class Extensions {
	/**
	 * @var string $context
	 *
	 * @ORM\Column(name="context", type="string", length=20, nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="NONE")
	 */
	private $context;

	/**
	 * @var string $exten
	 *
	 * @ORM\Column(name="exten", type="string", length=20, nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="NONE")
	 */
	private $exten;

	/**
	 * @var boolean $priority
	 *
	 * @ORM\Column(name="priority", type="boolean", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="NONE")
	 */
	private $priority;

	/**
	 * @var integer $id
	 *
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 */
	private $id;

	/**
	 * @var string $app
	 *
	 * @ORM\Column(name="app", type="string", length=20, nullable=false)
	 */
	private $app;

	/**
	 * @var string $appdata
	 *
	 * @ORM\Column(name="appdata", type="string", length=254, nullable=false)
	 */
	private $appdata;

	/**
	 * Set context
	 *
	 * @param string $context
	 */
	public function setContext($context) {
		$this->context = $context;
	}

	/**
	 * Get context
	 *
	 * @return string 
	 */
	public function getContext() {
		return $this->context;
	}

	/**
	 * Set exten
	 *
	 * @param string $exten
	 */
	public function setExten($exten) {
		$this->exten = $exten;
	}

	/**
	 * Get exten
	 *
	 * @return string 
	 */
	public function getExten() {
		return $this->exten;
	}

	/**
	 * Set priority
	 *
	 * @param boolean $priority
	 */
	public function setPriority($priority) {
		$this->priority = $priority;
	}

	/**
	 * Get priority
	 *
	 * @return boolean 
	 */
	public function getPriority() {
		return $this->priority;
	}

	/**
	 * Set id
	 *
	 * @param integer $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set app
	 *
	 * @param string $app
	 */
	public function setApp($app) {
		$this->app = $app;
	}

	/**
	 * Get app
	 *
	 * @return string 
	 */
	public function getApp() {
		return $this->app;
	}

	/**
	 * Set appdata
	 *
	 * @param string $appdata
	 */
	public function setAppdata($appdata) {
		$this->appdata = $appdata;
	}

	/**
	 * Get appdata
	 *
	 * @return string 
	 */
	public function getAppdata() {
		return $this->appdata;
	}
}
