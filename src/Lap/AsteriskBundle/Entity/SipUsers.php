<?php

namespace Lap\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/*
 * WARNING : Call-limit retiré car pose probeleme pour les requetes SQL
 */


/**
 * Lap\AsteriskBundle\Entity\SipUsers
 *
 * @ORM\Table(name="sip_users")
 * @ORM\Entity(repositoryClass="Lap\AsteriskBundle\Entity\SipUsersRepository")
 * 
 */
class SipUsers
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=80, nullable=false)
     */
    private $name;

    /**
     * @var string $accountcode
     *
     * @ORM\Column(name="accountcode", type="string", length=20, nullable=true)
     */
    private $accountcode;

    /**
     * @var string $amaflags
     *
     * @ORM\Column(name="amaflags", type="string", length=7, nullable=true)
     */
    private $amaflags;

    /**
     * @var string $callgroup
     *
     * @ORM\Column(name="callgroup", type="string", length=10, nullable=true)
     */
    private $callgroup;

    /**
     * @var string $callerid
     *
     * @ORM\Column(name="callerid", type="string", length=80, nullable=true)
     */
    private $callerid;

    /**
     * @var string $canreinvite
     *
     * @ORM\Column(name="canreinvite", type="string", length=3, nullable=true)
     */
    private $canreinvite;

    /**
     * @var string $context
     *
     * @ORM\Column(name="context", type="string", length=80, nullable=true)
     */
    private $context;

    /**
     * @var string $defaultip
     *
     * @ORM\Column(name="defaultip", type="string", length=15, nullable=true)
     */
    private $defaultip;

    /**
     * @var string $dtmfmode
     *
     * @ORM\Column(name="dtmfmode", type="string", length=7, nullable=true)
     */
    private $dtmfmode;

    /**
     * @var string $fromuser
     *
     * @ORM\Column(name="fromuser", type="string", length=80, nullable=true)
     */
    private $fromuser;

    /**
     * @var string $fromdomain
     *
     * @ORM\Column(name="fromdomain", type="string", length=80, nullable=true)
     */
    private $fromdomain;

    /**
     * @var string $fullcontact
     *
     * @ORM\Column(name="fullcontact", type="string", length=80, nullable=true)
     */
    private $fullcontact;

    /**
     * @var string $host
     *
     * @ORM\Column(name="host", type="string", length=31, nullable=false)
     */
    private $host;

    /**
     * @var string $insecure
     *
     * @ORM\Column(name="insecure", type="string", length=4, nullable=true)
     */
    private $insecure;

    /**
     * @var string $language
     *
     * @ORM\Column(name="language", type="string", length=2, nullable=true)
     */
    private $language;

    /**
     * @var string $mailbox
     *
     * @ORM\Column(name="mailbox", type="string", length=50, nullable=true)
     */
    private $mailbox;

    /**
     * @var string $md5secret
     *
     * @ORM\Column(name="md5secret", type="string", length=80, nullable=true)
     */
    private $md5secret;

    /**
     * @var string $nat
     *
     * @ORM\Column(name="nat", type="string", length=5, nullable=false)
     */
    private $nat;

    /**
     * @var string $permit
     *
     * @ORM\Column(name="permit", type="string", length=95, nullable=true)
     */
    private $permit;

    /**
     * @var string $deny
     *
     * @ORM\Column(name="deny", type="string", length=95, nullable=true)
     */
    private $deny;

    /**
     * @var string $mask
     *
     * @ORM\Column(name="mask", type="string", length=95, nullable=true)
     */
    private $mask;

    /**
     * @var string $pickupgroup
     *
     * @ORM\Column(name="pickupgroup", type="string", length=10, nullable=true)
     */
    private $pickupgroup;

    /**
     * @var string $port
     *
     * @ORM\Column(name="port", type="string", length=5, nullable=false)
     */
    private $port;

    /**
     * @var string $qualify
     *
     * @ORM\Column(name="qualify", type="string", length=3, nullable=true)
     */
    private $qualify;

    /**
     * @var string $restrictcid
     *
     * @ORM\Column(name="restrictcid", type="string", length=1, nullable=true)
     */
    private $restrictcid;

    /**
     * @var string $rtptimeout
     *
     * @ORM\Column(name="rtptimeout", type="string", length=3, nullable=true)
     */
    private $rtptimeout;

    /**
     * @var string $rtpholdtimeout
     *
     * @ORM\Column(name="rtpholdtimeout", type="string", length=3, nullable=true)
     */
    private $rtpholdtimeout;

    /**
     * @var string $secret
     *
     * @ORM\Column(name="secret", type="string", length=80, nullable=true)
     */
    private $secret;

    /**
     * @var string $type
     *
     * @ORM\Column(name="type", type="string", length=6, nullable=false)
     */
    private $type;

    /**
     * @var string $defaultuser
     *
     * @ORM\Column(name="defaultuser", type="string", length=80, nullable=false)
     */
    private $defaultuser;

    /**
     * @var string $disallow
     *
     * @ORM\Column(name="disallow", type="string", length=100, nullable=true)
     */
    private $disallow;

    /**
     * @var string $allow
     *
     * @ORM\Column(name="allow", type="string", length=100, nullable=true)
     */
    private $allow;

    /**
     * @var string $musiconhold
     *
     * @ORM\Column(name="musiconhold", type="string", length=100, nullable=true)
     */
    private $musiconhold;

    /**
     * @var integer $regseconds
     *
     * @ORM\Column(name="regseconds", type="integer", nullable=false)
     */
    private $regseconds;

    /**
     * @var string $ipaddr
     *
     * @ORM\Column(name="ipaddr", type="string", length=45, nullable=false)
     */
    private $ipaddr;

    /**
     * @var string $regexten
     *
     * @ORM\Column(name="regexten", type="string", length=80, nullable=false)
     */
    private $regexten;

    /**
     * @var string $cancallforward
     *
     * @ORM\Column(name="cancallforward", type="string", length=3, nullable=true)
     */
    private $cancallforward;

    /**
     * @var string $setvar
     *
     * @ORM\Column(name="setvar", type="string", length=100, nullable=false)
     */
    private $setvar;

    /**
     * @var string $regserver
     *
     * @ORM\Column(name="regserver", type="string", length=100, nullable=true)
     */
    private $regserver;

    /**
     * @var integer $lastms
     *
     * @ORM\Column(name="lastms", type="integer", nullable=false)
     */
    private $lastms;

    /**
     * @var string $useragent
     *
     * @ORM\Column(name="useragent", type="string", length=255, nullable=false)
     */
    private $useragent;



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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set accountcode
     *
     * @param string $accountcode
     */
    public function setAccountcode($accountcode)
    {
        $this->accountcode = $accountcode;
    }

    /**
     * Get accountcode
     *
     * @return string 
     */
    public function getAccountcode()
    {
        return $this->accountcode;
    }

    /**
     * Set amaflags
     *
     * @param string $amaflags
     */
    public function setAmaflags($amaflags)
    {
        $this->amaflags = $amaflags;
    }

    /**
     * Get amaflags
     *
     * @return string 
     */
    public function getAmaflags()
    {
        return $this->amaflags;
    }

    /**
     * Set callgroup
     *
     * @param string $callgroup
     */
    public function setCallgroup($callgroup)
    {
        $this->callgroup = $callgroup;
    }

    /**
     * Get callgroup
     *
     * @return string 
     */
    public function getCallgroup()
    {
        return $this->callgroup;
    }

    /**
     * Set callerid
     *
     * @param string $callerid
     */
    public function setCallerid($callerid)
    {
        $this->callerid = $callerid;
    }

    /**
     * Get callerid
     *
     * @return string 
     */
    public function getCallerid()
    {
        return $this->callerid;
    }

    /**
     * Set canreinvite
     *
     * @param string $canreinvite
     */
    public function setCanreinvite($canreinvite)
    {
        $this->canreinvite = $canreinvite;
    }

    /**
     * Get canreinvite
     *
     * @return string 
     */
    public function getCanreinvite()
    {
        return $this->canreinvite;
    }

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
     * Set defaultip
     *
     * @param string $defaultip
     */
    public function setDefaultip($defaultip)
    {
        $this->defaultip = $defaultip;
    }

    /**
     * Get defaultip
     *
     * @return string 
     */
    public function getDefaultip()
    {
        return $this->defaultip;
    }

    /**
     * Set dtmfmode
     *
     * @param string $dtmfmode
     */
    public function setDtmfmode($dtmfmode)
    {
        $this->dtmfmode = $dtmfmode;
    }

    /**
     * Get dtmfmode
     *
     * @return string 
     */
    public function getDtmfmode()
    {
        return $this->dtmfmode;
    }

    /**
     * Set fromuser
     *
     * @param string $fromuser
     */
    public function setFromuser($fromuser)
    {
        $this->fromuser = $fromuser;
    }

    /**
     * Get fromuser
     *
     * @return string 
     */
    public function getFromuser()
    {
        return $this->fromuser;
    }

    /**
     * Set fromdomain
     *
     * @param string $fromdomain
     */
    public function setFromdomain($fromdomain)
    {
        $this->fromdomain = $fromdomain;
    }

    /**
     * Get fromdomain
     *
     * @return string 
     */
    public function getFromdomain()
    {
        return $this->fromdomain;
    }

    /**
     * Set fullcontact
     *
     * @param string $fullcontact
     */
    public function setFullcontact($fullcontact)
    {
        $this->fullcontact = $fullcontact;
    }

    /**
     * Get fullcontact
     *
     * @return string 
     */
    public function getFullcontact()
    {
        return $this->fullcontact;
    }

    /**
     * Set host
     *
     * @param string $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * Get host
     *
     * @return string 
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set insecure
     *
     * @param string $insecure
     */
    public function setInsecure($insecure)
    {
        $this->insecure = $insecure;
    }

    /**
     * Get insecure
     *
     * @return string 
     */
    public function getInsecure()
    {
        return $this->insecure;
    }

    /**
     * Set language
     *
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set mailbox
     *
     * @param string $mailbox
     */
    public function setMailbox($mailbox)
    {
        $this->mailbox = $mailbox;
    }

    /**
     * Get mailbox
     *
     * @return string 
     */
    public function getMailbox()
    {
        return $this->mailbox;
    }

    /**
     * Set md5secret
     *
     * @param string $md5secret
     */
    public function setMd5secret($md5secret)
    {
        $this->md5secret = $md5secret;
    }

    /**
     * Get md5secret
     *
     * @return string 
     */
    public function getMd5secret()
    {
        return $this->md5secret;
    }

    /**
     * Set nat
     *
     * @param string $nat
     */
    public function setNat($nat)
    {
        $this->nat = $nat;
    }

    /**
     * Get nat
     *
     * @return string 
     */
    public function getNat()
    {
        return $this->nat;
    }

    /**
     * Set permit
     *
     * @param string $permit
     */
    public function setPermit($permit)
    {
        $this->permit = $permit;
    }

    /**
     * Get permit
     *
     * @return string 
     */
    public function getPermit()
    {
        return $this->permit;
    }

    /**
     * Set deny
     *
     * @param string $deny
     */
    public function setDeny($deny)
    {
        $this->deny = $deny;
    }

    /**
     * Get deny
     *
     * @return string 
     */
    public function getDeny()
    {
        return $this->deny;
    }

    /**
     * Set mask
     *
     * @param string $mask
     */
    public function setMask($mask)
    {
        $this->mask = $mask;
    }

    /**
     * Get mask
     *
     * @return string 
     */
    public function getMask()
    {
        return $this->mask;
    }

    /**
     * Set pickupgroup
     *
     * @param string $pickupgroup
     */
    public function setPickupgroup($pickupgroup)
    {
        $this->pickupgroup = $pickupgroup;
    }

    /**
     * Get pickupgroup
     *
     * @return string 
     */
    public function getPickupgroup()
    {
        return $this->pickupgroup;
    }

    /**
     * Set port
     *
     * @param string $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    /**
     * Get port
     *
     * @return string 
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set qualify
     *
     * @param string $qualify
     */
    public function setQualify($qualify)
    {
        $this->qualify = $qualify;
    }

    /**
     * Get qualify
     *
     * @return string 
     */
    public function getQualify()
    {
        return $this->qualify;
    }

    /**
     * Set restrictcid
     *
     * @param string $restrictcid
     */
    public function setRestrictcid($restrictcid)
    {
        $this->restrictcid = $restrictcid;
    }

    /**
     * Get restrictcid
     *
     * @return string 
     */
    public function getRestrictcid()
    {
        return $this->restrictcid;
    }

    /**
     * Set rtptimeout
     *
     * @param string $rtptimeout
     */
    public function setRtptimeout($rtptimeout)
    {
        $this->rtptimeout = $rtptimeout;
    }

    /**
     * Get rtptimeout
     *
     * @return string 
     */
    public function getRtptimeout()
    {
        return $this->rtptimeout;
    }

    /**
     * Set rtpholdtimeout
     *
     * @param string $rtpholdtimeout
     */
    public function setRtpholdtimeout($rtpholdtimeout)
    {
        $this->rtpholdtimeout = $rtpholdtimeout;
    }

    /**
     * Get rtpholdtimeout
     *
     * @return string 
     */
    public function getRtpholdtimeout()
    {
        return $this->rtpholdtimeout;
    }

    /**
     * Set secret
     *
     * @param string $secret
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;
    }

    /**
     * Get secret
     *
     * @return string 
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Set type
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set defaultuser
     *
     * @param string $defaultuser
     */
    public function setDefaultuser($defaultuser)
    {
        $this->defaultuser = $defaultuser;
    }

    /**
     * Get defaultuser
     *
     * @return string 
     */
    public function getDefaultuser()
    {
        return $this->defaultuser;
    }

    /**
     * Set disallow
     *
     * @param string $disallow
     */
    public function setDisallow($disallow)
    {
        $this->disallow = $disallow;
    }

    /**
     * Get disallow
     *
     * @return string 
     */
    public function getDisallow()
    {
        return $this->disallow;
    }

    /**
     * Set allow
     *
     * @param string $allow
     */
    public function setAllow($allow)
    {
        $this->allow = $allow;
    }

    /**
     * Get allow
     *
     * @return string 
     */
    public function getAllow()
    {
        return $this->allow;
    }

    /**
     * Set musiconhold
     *
     * @param string $musiconhold
     */
    public function setMusiconhold($musiconhold)
    {
        $this->musiconhold = $musiconhold;
    }

    /**
     * Get musiconhold
     *
     * @return string 
     */
    public function getMusiconhold()
    {
        return $this->musiconhold;
    }

    /**
     * Set regseconds
     *
     * @param integer $regseconds
     */
    public function setRegseconds($regseconds)
    {
        $this->regseconds = $regseconds;
    }

    /**
     * Get regseconds
     *
     * @return integer 
     */
    public function getRegseconds()
    {
        return $this->regseconds;
    }

    /**
     * Set ipaddr
     *
     * @param string $ipaddr
     */
    public function setIpaddr($ipaddr)
    {
        $this->ipaddr = $ipaddr;
    }

    /**
     * Get ipaddr
     *
     * @return string 
     */
    public function getIpaddr()
    {
        return $this->ipaddr;
    }

    /**
     * Set regexten
     *
     * @param string $regexten
     */
    public function setRegexten($regexten)
    {
        $this->regexten = $regexten;
    }

    /**
     * Get regexten
     *
     * @return string 
     */
    public function getRegexten()
    {
        return $this->regexten;
    }

    /**
     * Set cancallforward
     *
     * @param string $cancallforward
     */
    public function setCancallforward($cancallforward)
    {
        $this->cancallforward = $cancallforward;
    }

    /**
     * Get cancallforward
     *
     * @return string 
     */
    public function getCancallforward()
    {
        return $this->cancallforward;
    }

    /**
     * Set setvar
     *
     * @param string $setvar
     */
    public function setSetvar($setvar)
    {
        $this->setvar = $setvar;
    }

    /**
     * Get setvar
     *
     * @return string 
     */
    public function getSetvar()
    {
        return $this->setvar;
    }

    /**
     * Set callLimit
     *
     * @param integer $callLimit
     */
    public function setCallLimit($callLimit)
    {
        $this->callLimit = $callLimit;
    }

    /**
     * Get callLimit
     *
     * @return integer 
     */
    public function getCallLimit()
    {
        return $this->callLimit;
    }

    /**
     * Set regserver
     *
     * @param string $regserver
     */
    public function setRegserver($regserver)
    {
        $this->regserver = $regserver;
    }

    /**
     * Get regserver
     *
     * @return string 
     */
    public function getRegserver()
    {
        return $this->regserver;
    }

    /**
     * Set lastms
     *
     * @param integer $lastms
     */
    public function setLastms($lastms)
    {
        $this->lastms = $lastms;
    }

    /**
     * Get lastms
     *
     * @return integer 
     */
    public function getLastms()
    {
        return $this->lastms;
    }

    /**
     * Set useragent
     *
     * @param string $useragent
     */
    public function setUseragent($useragent)
    {
        $this->useragent = $useragent;
    }

    /**
     * Get useragent
     *
     * @return string 
     */
    public function getUseragent()
    {
        return $this->useragent;
    }
}