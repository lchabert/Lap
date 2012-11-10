<?php

namespace Lap\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lap\AsteriskBundle\Entity\Queues
 *
 * @ORM\Table(name="queues")
 * @ORM\Entity(repositoryClass="Lap\AsteriskBundle\Entity\QueuesRepository")
 */
class Queues
{
    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $name;

    /**
     * @var string $musiconhold
     *
     * @ORM\Column(name="musiconhold", type="string", length=128, nullable=true)
     */
    private $musiconhold;

    /**
     * @var string $announce
     *
     * @ORM\Column(name="announce", type="string", length=128, nullable=true)
     */
    private $announce;

    /**
     * @var string $context
     *
     * @ORM\Column(name="context", type="string", length=128, nullable=true)
     */
    private $context;

    /**
     * @var integer $timeout
     *
     * @ORM\Column(name="timeout", type="integer", nullable=true)
     */
    private $timeout;

    /**
     * @var boolean $monitorJoin
     *
     * @ORM\Column(name="monitor_join", type="boolean", nullable=true)
     */
    private $monitorJoin;

    /**
     * @var string $monitorFormat
     *
     * @ORM\Column(name="monitor_format", type="string", length=128, nullable=true)
     */
    private $monitorFormat;

    /**
     * @var string $queueYouarenext
     *
     * @ORM\Column(name="queue_youarenext", type="string", length=128, nullable=true)
     */
    private $queueYouarenext;

    /**
     * @var string $queueThereare
     *
     * @ORM\Column(name="queue_thereare", type="string", length=128, nullable=true)
     */
    private $queueThereare;

    /**
     * @var string $queueCallswaiting
     *
     * @ORM\Column(name="queue_callswaiting", type="string", length=128, nullable=true)
     */
    private $queueCallswaiting;

    /**
     * @var string $queueHoldtime
     *
     * @ORM\Column(name="queue_holdtime", type="string", length=128, nullable=true)
     */
    private $queueHoldtime;

    /**
     * @var string $queueMinutes
     *
     * @ORM\Column(name="queue_minutes", type="string", length=128, nullable=true)
     */
    private $queueMinutes;

    /**
     * @var string $queueSeconds
     *
     * @ORM\Column(name="queue_seconds", type="string", length=128, nullable=true)
     */
    private $queueSeconds;

    /**
     * @var string $queueLessthan
     *
     * @ORM\Column(name="queue_lessthan", type="string", length=128, nullable=true)
     */
    private $queueLessthan;

    /**
     * @var string $queueThankyou
     *
     * @ORM\Column(name="queue_thankyou", type="string", length=128, nullable=true)
     */
    private $queueThankyou;

    /**
     * @var string $queueReporthold
     *
     * @ORM\Column(name="queue_reporthold", type="string", length=128, nullable=true)
     */
    private $queueReporthold;

    /**
     * @var integer $announceFrequency
     *
     * @ORM\Column(name="announce_frequency", type="integer", nullable=true)
     */
    private $announceFrequency;

    /**
     * @var integer $announceRoundSeconds
     *
     * @ORM\Column(name="announce_round_seconds", type="integer", nullable=true)
     */
    private $announceRoundSeconds;

    /**
     * @var string $announceHoldtime
     *
     * @ORM\Column(name="announce_holdtime", type="string", length=128, nullable=true)
     */
    private $announceHoldtime;

    /**
     * @var integer $retry
     *
     * @ORM\Column(name="retry", type="integer", nullable=true)
     */
    private $retry;

    /**
     * @var integer $wrapuptime
     *
     * @ORM\Column(name="wrapuptime", type="integer", nullable=true)
     */
    private $wrapuptime;

    /**
     * @var integer $maxlen
     *
     * @ORM\Column(name="maxlen", type="integer", nullable=true)
     */
    private $maxlen;

    /**
     * @var integer $servicelevel
     *
     * @ORM\Column(name="servicelevel", type="integer", nullable=true)
     */
    private $servicelevel;

    /**
     * @var string $strategy
     *
     * @ORM\Column(name="strategy", type="string", length=128, nullable=true)
     */
    private $strategy;

    /**
     * @var string $joinempty
     *
     * @ORM\Column(name="joinempty", type="string", length=128, nullable=true)
     */
    private $joinempty;

    /**
     * @var string $leavewhenempty
     *
     * @ORM\Column(name="leavewhenempty", type="string", length=128, nullable=true)
     */
    private $leavewhenempty;

    /**
     * @var boolean $eventmemberstatus
     *
     * @ORM\Column(name="eventmemberstatus", type="boolean", nullable=true)
     */
    private $eventmemberstatus;

    /**
     * @var boolean $eventwhencalled
     *
     * @ORM\Column(name="eventwhencalled", type="boolean", nullable=true)
     */
    private $eventwhencalled;

    /**
     * @var boolean $reportholdtime
     *
     * @ORM\Column(name="reportholdtime", type="boolean", nullable=true)
     */
    private $reportholdtime;

    /**
     * @var integer $memberdelay
     *
     * @ORM\Column(name="memberdelay", type="integer", nullable=true)
     */
    private $memberdelay;

    /**
     * @var integer $weight
     *
     * @ORM\Column(name="weight", type="integer", nullable=true)
     */
    private $weight;

    /**
     * @var boolean $timeoutrestart
     *
     * @ORM\Column(name="timeoutrestart", type="boolean", nullable=true)
     */
    private $timeoutrestart;

    /**
     * @var string $periodicAnnounce
     *
     * @ORM\Column(name="periodic_announce", type="string", length=50, nullable=true)
     */
    private $periodicAnnounce;

    /**
     * @var integer $periodicAnnounceFrequency
     *
     * @ORM\Column(name="periodic_announce_frequency", type="integer", nullable=true)
     */
    private $periodicAnnounceFrequency;



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
     * Set announce
     *
     * @param string $announce
     */
    public function setAnnounce($announce)
    {
        $this->announce = $announce;
    }

    /**
     * Get announce
     *
     * @return string 
     */
    public function getAnnounce()
    {
        return $this->announce;
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
     * Set timeout
     *
     * @param integer $timeout
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
    }

    /**
     * Get timeout
     *
     * @return integer 
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * Set monitorJoin
     *
     * @param boolean $monitorJoin
     */
    public function setMonitorJoin($monitorJoin)
    {
        $this->monitorJoin = $monitorJoin;
    }

    /**
     * Get monitorJoin
     *
     * @return boolean 
     */
    public function getMonitorJoin()
    {
        return $this->monitorJoin;
    }

    /**
     * Set monitorFormat
     *
     * @param string $monitorFormat
     */
    public function setMonitorFormat($monitorFormat)
    {
        $this->monitorFormat = $monitorFormat;
    }

    /**
     * Get monitorFormat
     *
     * @return string 
     */
    public function getMonitorFormat()
    {
        return $this->monitorFormat;
    }

    /**
     * Set queueYouarenext
     *
     * @param string $queueYouarenext
     */
    public function setQueueYouarenext($queueYouarenext)
    {
        $this->queueYouarenext = $queueYouarenext;
    }

    /**
     * Get queueYouarenext
     *
     * @return string 
     */
    public function getQueueYouarenext()
    {
        return $this->queueYouarenext;
    }

    /**
     * Set queueThereare
     *
     * @param string $queueThereare
     */
    public function setQueueThereare($queueThereare)
    {
        $this->queueThereare = $queueThereare;
    }

    /**
     * Get queueThereare
     *
     * @return string 
     */
    public function getQueueThereare()
    {
        return $this->queueThereare;
    }

    /**
     * Set queueCallswaiting
     *
     * @param string $queueCallswaiting
     */
    public function setQueueCallswaiting($queueCallswaiting)
    {
        $this->queueCallswaiting = $queueCallswaiting;
    }

    /**
     * Get queueCallswaiting
     *
     * @return string 
     */
    public function getQueueCallswaiting()
    {
        return $this->queueCallswaiting;
    }

    /**
     * Set queueHoldtime
     *
     * @param string $queueHoldtime
     */
    public function setQueueHoldtime($queueHoldtime)
    {
        $this->queueHoldtime = $queueHoldtime;
    }

    /**
     * Get queueHoldtime
     *
     * @return string 
     */
    public function getQueueHoldtime()
    {
        return $this->queueHoldtime;
    }

    /**
     * Set queueMinutes
     *
     * @param string $queueMinutes
     */
    public function setQueueMinutes($queueMinutes)
    {
        $this->queueMinutes = $queueMinutes;
    }

    /**
     * Get queueMinutes
     *
     * @return string 
     */
    public function getQueueMinutes()
    {
        return $this->queueMinutes;
    }

    /**
     * Set queueSeconds
     *
     * @param string $queueSeconds
     */
    public function setQueueSeconds($queueSeconds)
    {
        $this->queueSeconds = $queueSeconds;
    }

    /**
     * Get queueSeconds
     *
     * @return string 
     */
    public function getQueueSeconds()
    {
        return $this->queueSeconds;
    }

    /**
     * Set queueLessthan
     *
     * @param string $queueLessthan
     */
    public function setQueueLessthan($queueLessthan)
    {
        $this->queueLessthan = $queueLessthan;
    }

    /**
     * Get queueLessthan
     *
     * @return string 
     */
    public function getQueueLessthan()
    {
        return $this->queueLessthan;
    }

    /**
     * Set queueThankyou
     *
     * @param string $queueThankyou
     */
    public function setQueueThankyou($queueThankyou)
    {
        $this->queueThankyou = $queueThankyou;
    }

    /**
     * Get queueThankyou
     *
     * @return string 
     */
    public function getQueueThankyou()
    {
        return $this->queueThankyou;
    }

    /**
     * Set queueReporthold
     *
     * @param string $queueReporthold
     */
    public function setQueueReporthold($queueReporthold)
    {
        $this->queueReporthold = $queueReporthold;
    }

    /**
     * Get queueReporthold
     *
     * @return string 
     */
    public function getQueueReporthold()
    {
        return $this->queueReporthold;
    }

    /**
     * Set announceFrequency
     *
     * @param integer $announceFrequency
     */
    public function setAnnounceFrequency($announceFrequency)
    {
        $this->announceFrequency = $announceFrequency;
    }

    /**
     * Get announceFrequency
     *
     * @return integer 
     */
    public function getAnnounceFrequency()
    {
        return $this->announceFrequency;
    }

    /**
     * Set announceRoundSeconds
     *
     * @param integer $announceRoundSeconds
     */
    public function setAnnounceRoundSeconds($announceRoundSeconds)
    {
        $this->announceRoundSeconds = $announceRoundSeconds;
    }

    /**
     * Get announceRoundSeconds
     *
     * @return integer 
     */
    public function getAnnounceRoundSeconds()
    {
        return $this->announceRoundSeconds;
    }

    /**
     * Set announceHoldtime
     *
     * @param string $announceHoldtime
     */
    public function setAnnounceHoldtime($announceHoldtime)
    {
        $this->announceHoldtime = $announceHoldtime;
    }

    /**
     * Get announceHoldtime
     *
     * @return string 
     */
    public function getAnnounceHoldtime()
    {
        return $this->announceHoldtime;
    }

    /**
     * Set retry
     *
     * @param integer $retry
     */
    public function setRetry($retry)
    {
        $this->retry = $retry;
    }

    /**
     * Get retry
     *
     * @return integer 
     */
    public function getRetry()
    {
        return $this->retry;
    }

    /**
     * Set wrapuptime
     *
     * @param integer $wrapuptime
     */
    public function setWrapuptime($wrapuptime)
    {
        $this->wrapuptime = $wrapuptime;
    }

    /**
     * Get wrapuptime
     *
     * @return integer 
     */
    public function getWrapuptime()
    {
        return $this->wrapuptime;
    }

    /**
     * Set maxlen
     *
     * @param integer $maxlen
     */
    public function setMaxlen($maxlen)
    {
        $this->maxlen = $maxlen;
    }

    /**
     * Get maxlen
     *
     * @return integer 
     */
    public function getMaxlen()
    {
        return $this->maxlen;
    }

    /**
     * Set servicelevel
     *
     * @param integer $servicelevel
     */
    public function setServicelevel($servicelevel)
    {
        $this->servicelevel = $servicelevel;
    }

    /**
     * Get servicelevel
     *
     * @return integer 
     */
    public function getServicelevel()
    {
        return $this->servicelevel;
    }

    /**
     * Set strategy
     *
     * @param string $strategy
     */
    public function setStrategy($strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * Get strategy
     *
     * @return string 
     */
    public function getStrategy()
    {
        return $this->strategy;
    }

    /**
     * Set joinempty
     *
     * @param string $joinempty
     */
    public function setJoinempty($joinempty)
    {
        $this->joinempty = $joinempty;
    }

    /**
     * Get joinempty
     *
     * @return string 
     */
    public function getJoinempty()
    {
        return $this->joinempty;
    }

    /**
     * Set leavewhenempty
     *
     * @param string $leavewhenempty
     */
    public function setLeavewhenempty($leavewhenempty)
    {
        $this->leavewhenempty = $leavewhenempty;
    }

    /**
     * Get leavewhenempty
     *
     * @return string 
     */
    public function getLeavewhenempty()
    {
        return $this->leavewhenempty;
    }

    /**
     * Set eventmemberstatus
     *
     * @param boolean $eventmemberstatus
     */
    public function setEventmemberstatus($eventmemberstatus)
    {
        $this->eventmemberstatus = $eventmemberstatus;
    }

    /**
     * Get eventmemberstatus
     *
     * @return boolean 
     */
    public function getEventmemberstatus()
    {
        return $this->eventmemberstatus;
    }

    /**
     * Set eventwhencalled
     *
     * @param boolean $eventwhencalled
     */
    public function setEventwhencalled($eventwhencalled)
    {
        $this->eventwhencalled = $eventwhencalled;
    }

    /**
     * Get eventwhencalled
     *
     * @return boolean 
     */
    public function getEventwhencalled()
    {
        return $this->eventwhencalled;
    }

    /**
     * Set reportholdtime
     *
     * @param boolean $reportholdtime
     */
    public function setReportholdtime($reportholdtime)
    {
        $this->reportholdtime = $reportholdtime;
    }

    /**
     * Get reportholdtime
     *
     * @return boolean 
     */
    public function getReportholdtime()
    {
        return $this->reportholdtime;
    }

    /**
     * Set memberdelay
     *
     * @param integer $memberdelay
     */
    public function setMemberdelay($memberdelay)
    {
        $this->memberdelay = $memberdelay;
    }

    /**
     * Get memberdelay
     *
     * @return integer 
     */
    public function getMemberdelay()
    {
        return $this->memberdelay;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set timeoutrestart
     *
     * @param boolean $timeoutrestart
     */
    public function setTimeoutrestart($timeoutrestart)
    {
        $this->timeoutrestart = $timeoutrestart;
    }

    /**
     * Get timeoutrestart
     *
     * @return boolean 
     */
    public function getTimeoutrestart()
    {
        return $this->timeoutrestart;
    }

    /**
     * Set periodicAnnounce
     *
     * @param string $periodicAnnounce
     */
    public function setPeriodicAnnounce($periodicAnnounce)
    {
        $this->periodicAnnounce = $periodicAnnounce;
    }

    /**
     * Get periodicAnnounce
     *
     * @return string 
     */
    public function getPeriodicAnnounce()
    {
        return $this->periodicAnnounce;
    }

    /**
     * Set periodicAnnounceFrequency
     *
     * @param integer $periodicAnnounceFrequency
     */
    public function setPeriodicAnnounceFrequency($periodicAnnounceFrequency)
    {
        $this->periodicAnnounceFrequency = $periodicAnnounceFrequency;
    }

    /**
     * Get periodicAnnounceFrequency
     *
     * @return integer 
     */
    public function getPeriodicAnnounceFrequency()
    {
        return $this->periodicAnnounceFrequency;
    }
}