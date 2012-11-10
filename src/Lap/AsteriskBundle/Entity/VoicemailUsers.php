<?php

namespace Lap\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lap\AsteriskBundle\Entity\VoicemailUsers
 *
 * @ORM\Table(name="voicemail_users")
 * 
 */
class VoicemailUsers
{
    /**
     * @var integer $uniqueid
     *
     * @ORM\Column(name="uniqueid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uniqueid;

    /**
     * @var string $customerId
     *
     * @ORM\Column(name="customer_id", type="string", length=11, nullable=false)
     */
    private $customerId;

    /**
     * @var string $context
     *
     * @ORM\Column(name="context", type="string", length=50, nullable=false)
     */
    private $context;

    /**
     * @var string $mailbox
     *
     * @ORM\Column(name="mailbox", type="string", length=11, nullable=false)
     */
    private $mailbox;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=10, nullable=false)
     */
    private $password;

    /**
     * @var string $fullname
     *
     * @ORM\Column(name="fullname", type="string", length=150, nullable=false)
     */
    private $fullname;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string $pager
     *
     * @ORM\Column(name="pager", type="string", length=50, nullable=false)
     */
    private $pager;

    /**
     * @var string $tz
     *
     * @ORM\Column(name="tz", type="string", length=10, nullable=false)
     */
    private $tz;

    /**
     * @var string $attach
     *
     * @ORM\Column(name="attach", type="string", length=4, nullable=false)
     */
    private $attach;

    /**
     * @var string $saycid
     *
     * @ORM\Column(name="saycid", type="string", length=4, nullable=false)
     */
    private $saycid;

    /**
     * @var string $dialout
     *
     * @ORM\Column(name="dialout", type="string", length=10, nullable=false)
     */
    private $dialout;

    /**
     * @var string $callback
     *
     * @ORM\Column(name="callback", type="string", length=10, nullable=false)
     */
    private $callback;

    /**
     * @var string $review
     *
     * @ORM\Column(name="review", type="string", length=4, nullable=false)
     */
    private $review;

    /**
     * @var string $operator
     *
     * @ORM\Column(name="operator", type="string", length=4, nullable=false)
     */
    private $operator;

    /**
     * @var string $envelope
     *
     * @ORM\Column(name="envelope", type="string", length=4, nullable=false)
     */
    private $envelope;

    /**
     * @var string $sayduration
     *
     * @ORM\Column(name="sayduration", type="string", length=4, nullable=false)
     */
    private $sayduration;

    /**
     * @var boolean $saydurationm
     *
     * @ORM\Column(name="saydurationm", type="boolean", nullable=false)
     */
    private $saydurationm;

    /**
     * @var string $sendvoicemail
     *
     * @ORM\Column(name="sendvoicemail", type="string", length=4, nullable=false)
     */
    private $sendvoicemail;

    /**
     * @var string $delete
     *
     * @ORM\Column(name="delete", type="string", length=4, nullable=false)
     */
    private $delete;

    /**
     * @var string $nextaftercmd
     *
     * @ORM\Column(name="nextaftercmd", type="string", length=4, nullable=false)
     */
    private $nextaftercmd;

    /**
     * @var string $forcename
     *
     * @ORM\Column(name="forcename", type="string", length=4, nullable=false)
     */
    private $forcename;

    /**
     * @var string $forcegreetings
     *
     * @ORM\Column(name="forcegreetings", type="string", length=4, nullable=false)
     */
    private $forcegreetings;

    /**
     * @var string $hidefromdir
     *
     * @ORM\Column(name="hidefromdir", type="string", length=4, nullable=false)
     */
    private $hidefromdir;

    /**
     * @var datetime $stamp
     *
     * @ORM\Column(name="stamp", type="datetime", nullable=false)
     */
    private $stamp;



    /**
     * Get uniqueid
     *
     * @return integer 
     */
    public function getUniqueid()
    {
        return $this->uniqueid;
    }

    /**
     * Set customerId
     *
     * @param string $customerId
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    /**
     * Get customerId
     *
     * @return string 
     */
    public function getCustomerId()
    {
        return $this->customerId;
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
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
    }

    /**
     * Get fullname
     *
     * @return string 
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set pager
     *
     * @param string $pager
     */
    public function setPager($pager)
    {
        $this->pager = $pager;
    }

    /**
     * Get pager
     *
     * @return string 
     */
    public function getPager()
    {
        return $this->pager;
    }

    /**
     * Set tz
     *
     * @param string $tz
     */
    public function setTz($tz)
    {
        $this->tz = $tz;
    }

    /**
     * Get tz
     *
     * @return string 
     */
    public function getTz()
    {
        return $this->tz;
    }

    /**
     * Set attach
     *
     * @param string $attach
     */
    public function setAttach($attach)
    {
        $this->attach = $attach;
    }

    /**
     * Get attach
     *
     * @return string 
     */
    public function getAttach()
    {
        return $this->attach;
    }

    /**
     * Set saycid
     *
     * @param string $saycid
     */
    public function setSaycid($saycid)
    {
        $this->saycid = $saycid;
    }

    /**
     * Get saycid
     *
     * @return string 
     */
    public function getSaycid()
    {
        return $this->saycid;
    }

    /**
     * Set dialout
     *
     * @param string $dialout
     */
    public function setDialout($dialout)
    {
        $this->dialout = $dialout;
    }

    /**
     * Get dialout
     *
     * @return string 
     */
    public function getDialout()
    {
        return $this->dialout;
    }

    /**
     * Set callback
     *
     * @param string $callback
     */
    public function setCallback($callback)
    {
        $this->callback = $callback;
    }

    /**
     * Get callback
     *
     * @return string 
     */
    public function getCallback()
    {
        return $this->callback;
    }

    /**
     * Set review
     *
     * @param string $review
     */
    public function setReview($review)
    {
        $this->review = $review;
    }

    /**
     * Get review
     *
     * @return string 
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * Set operator
     *
     * @param string $operator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }

    /**
     * Get operator
     *
     * @return string 
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Set envelope
     *
     * @param string $envelope
     */
    public function setEnvelope($envelope)
    {
        $this->envelope = $envelope;
    }

    /**
     * Get envelope
     *
     * @return string 
     */
    public function getEnvelope()
    {
        return $this->envelope;
    }

    /**
     * Set sayduration
     *
     * @param string $sayduration
     */
    public function setSayduration($sayduration)
    {
        $this->sayduration = $sayduration;
    }

    /**
     * Get sayduration
     *
     * @return string 
     */
    public function getSayduration()
    {
        return $this->sayduration;
    }

    /**
     * Set saydurationm
     *
     * @param boolean $saydurationm
     */
    public function setSaydurationm($saydurationm)
    {
        $this->saydurationm = $saydurationm;
    }

    /**
     * Get saydurationm
     *
     * @return boolean 
     */
    public function getSaydurationm()
    {
        return $this->saydurationm;
    }

    /**
     * Set sendvoicemail
     *
     * @param string $sendvoicemail
     */
    public function setSendvoicemail($sendvoicemail)
    {
        $this->sendvoicemail = $sendvoicemail;
    }

    /**
     * Get sendvoicemail
     *
     * @return string 
     */
    public function getSendvoicemail()
    {
        return $this->sendvoicemail;
    }

    /**
     * Set delete
     *
     * @param string $delete
     */
    public function setDelete($delete)
    {
        $this->delete = $delete;
    }

    /**
     * Get delete
     *
     * @return string 
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * Set nextaftercmd
     *
     * @param string $nextaftercmd
     */
    public function setNextaftercmd($nextaftercmd)
    {
        $this->nextaftercmd = $nextaftercmd;
    }

    /**
     * Get nextaftercmd
     *
     * @return string 
     */
    public function getNextaftercmd()
    {
        return $this->nextaftercmd;
    }

    /**
     * Set forcename
     *
     * @param string $forcename
     */
    public function setForcename($forcename)
    {
        $this->forcename = $forcename;
    }

    /**
     * Get forcename
     *
     * @return string 
     */
    public function getForcename()
    {
        return $this->forcename;
    }

    /**
     * Set forcegreetings
     *
     * @param string $forcegreetings
     */
    public function setForcegreetings($forcegreetings)
    {
        $this->forcegreetings = $forcegreetings;
    }

    /**
     * Get forcegreetings
     *
     * @return string 
     */
    public function getForcegreetings()
    {
        return $this->forcegreetings;
    }

    /**
     * Set hidefromdir
     *
     * @param string $hidefromdir
     */
    public function setHidefromdir($hidefromdir)
    {
        $this->hidefromdir = $hidefromdir;
    }

    /**
     * Get hidefromdir
     *
     * @return string 
     */
    public function getHidefromdir()
    {
        return $this->hidefromdir;
    }

    /**
     * Set stamp
     *
     * @param datetime $stamp
     */
    public function setStamp($stamp)
    {
        $this->stamp = $stamp;
    }

    /**
     * Get stamp
     *
     * @return datetime 
     */
    public function getStamp()
    {
        return $this->stamp;
    }
}