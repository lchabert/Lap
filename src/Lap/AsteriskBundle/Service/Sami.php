<?php

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
    
    public function __construct($ami_server, $ami_scheme, $ami_port, $ami_username, $ami_passwd, $ami_connect_timeout, $ami_read_timeout){
        $this->pamiClientOptions['host'] = $ami_server;
        $this->pamiClientOptions['scheme'] = $ami_scheme;
        $this->pamiClientOptions['port'] = $ami_port;
        $this->pamiClientOptions['username'] = $ami_username;
        $this->pamiClientOptions['secret'] = $ami_passwd;
        $this->pamiClientOptions['connect_timeout'] = $ami_connect_timeout;
        $this->pamiClientOptions['read_timeout'] = $ami_read_timeout;
        $this->pamiClient= new PamiClient($this->pamiClientOptions);
        var_dump($this->pamiClientOptions);
        $this->pamiClient->open();
    }
    
    public function dial($channel,$callerid,$extension){
        $originateMsg = new OriginateAction($channel);
        $originateMsg->setCallerId($callerid);
        $originateMsg->setContext('default');
        $originateMsg->setPriority('1');
        $originateMsg->setExtension($extension);
        $response = $this->pamiClient->send($originateMsg);
        $this->logout();
    }
    
    public function logout(){
        $this->pamiClient->close();
    }
    public function login(){
        $this->pamiClient->open();
    }
}

?>
