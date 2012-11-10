<?php

namespace Lap\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lap\AsteriskBundle\Entity\Extensions
 *
 * @ORM\Table(name="extensions")
 * @ORM\Entity(repositoryClass="Lap\AsteriskBundle\Entity\ExtensionsRepository")
 */
class Extensions
{
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
    public function setContext($context)
    {
        $this->context = $context;
    }

    /**
     * Get context
     *
     * @return string 
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set exten
     *
     * @param string $exten
     */
    public function setExten($exten)
    {
        $this->exten = $exten;
    }

    /**
     * Get exten
     *
     * @return string 
     */
    public function getExten()
    {
        return $this->exten;
    }

    /**
     * Set priority
     *
     * @param boolean $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    /**
     * Get priority
     *
     * @return boolean 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set id
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set app
     *
     * @param string $app
     */
    public function setApp($app)
    {
        $this->app = $app;
    }

    /**
     * Get app
     *
     * @return string 
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * Set appdata
     *
     * @param string $appdata
     */
    public function setAppdata($appdata)
    {
        $this->appdata = $appdata;
    }

    /**
     * Get appdata
     *
     * @return string 
     */
    public function getAppdata()
    {
        return $this->appdata;
    }
}