<?php

namespace Lap\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use FR3D\LdapBundle\Model\LdapUserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="lap_user")
 */
class User extends BaseUser implements LdapUserInterface {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Ldap Object Distinguished Name
     * @var string $dn
     */
    private $dn;

    /**
     * @ORM\Column(name="firstname", type="string", length=255)
     * @var string $firstName
     */
    private $firstName;

    /**
     * @ORM\Column(name="lastname", type="string", length=255)
     * @var string $lastName
     */
    private $lastName;
    
     /**
     * @ORM\Column(name="service", type="string", length=255)
     * @var string $service
     */
    private $service;

    /**
     * @ORM\Column(name="phoneNumber", type="string", length=255)
     * @var string $phoneNumber;
     */
    private $phoneNumber;

    /**
     * @ORM\Column(name="phoneHardware", type="string", length=255)
     * @var string $phoneHardware;
     */
    private $phoneHardware;

    /**
     * @ORM\Column(name="phonepin", type="string", length=255)
     * @var string $goFonPIN;
     */
    private $phonePin;

    /**
     * @ORM\Column(name="voicemailpin", type="string", length=255)
     * @var string $voicemailPin;
     */
    private $voicemailPin;
    
    /**
     * @ORM\ManyToMany(targetEntity="Lap\UserBundle\Entity\User")
     */
    private $myFavorite;

    /**
     * {@inheritDoc}
     */
    public function setDn($dn) {
        $this->dn = $dn;
    }

    /**
     * {@inheritDoc}
     */
    public function getDn() {
        return $this->dn;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }
    
    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
    }

    public function getPhoneHardware() {
        return $this->phoneHardware;
    }

    public function setPhoneHardware($phoneHardware) {
        $this->phoneHardware = $phoneHardware;
    }

    public function getPhonePin() {
        return $this->phonePin;
    }

    public function setPhonePin($phonePin) {
        $this->phonePin = $phonePin;
    }

    public function getVoicemailPin() {
        return $this->voicemailPin;
    }

    public function setVoicemailPin($voicemailPin) {
        $this->voicemailPin = $voicemailPin;
    }

    public function getService() {
        return $this->service;
    }

    public function setService($service) {
        $this->service = $service;
    }

    /**
     * Add favorite
     *
     * @param Lap\UserBundle\Entity\User $user
     */
    public function addMyFavorite(\Lap\UserBundle\Entity\User $user)
    {
        $this->myFavorite[] = $user;
    }

    /**
     * Get favorites
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getMyFavorite()
    {
        return $this->myFavorite;
    }

}

?>
