<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ChatService
 *
 * @author crrs
 */
namespace LCBundle\Service;

use Gos\Bundle\WebSocketBundle\Topic\TopicInterface;
use \Gos\Bundle\WebSocketBundle\Topic\PushableTopicInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Wamp\Topic;
use Gos\Bundle\WebSocketBundle\Router\WampRequest;
use Doctrine\Common\Collections\ArrayCollection;

class WcdService implements TopicInterface, PushableTopicInterface
{
    
    public  $connectedUserId;
    
    function __construct() {
        $this->connectedUserId = new ArrayCollection();
    }

    /**
     * @param Topic $topic 
     * @param WampRequest $$request 
     * @param array|string $$data 
     * @param string $provider 
     */
    public function  onPush(Topic $topic, WampRequest $request, $data, $provider)
    {   
        $topic->broadcast($data);   
    }    

    /**
     * This will receive any Subscription requests for this topic.
     *
     * @param ConnectionInterface $connection
     * @param Topic $topic
     * @param WampRequest $request
     * @return void
     */
    public function onSubscribe(ConnectionInterface $connection, Topic $topic, WampRequest $request)
    {
        
    }    

    /**
     * This will receive any UnSubscription requests for this topic.
     *
     * @param ConnectionInterface $connection
     * @param Topic $topic
     * @param WampRequest $request
     * @return void
     */
    public function onUnSubscribe(ConnectionInterface $connection, Topic $topic, WampRequest $request)
    {
        
        $topic->broadcast('{ "cmd": "lc", "route": "deconnect", "id": "'.
                $this->connectedUserId->get("u".$connection->WAMP->sessionId)
        .'"}');
        $this->connectedUserId->remove("u".$connection->WAMP->sessionId);
    }

    /**
     * This will receive any Publish requests for this topic.
     *
     * @param ConnectionInterface $connection
     * @param Topic $topic
     * @param WampRequest $request
     * @param $event
     * @param array $exclude
     * @param array $eligible
     * @return mixed|void
     */
    public function onPublish(ConnectionInterface $connection, Topic $topic, WampRequest $request, $event, array $exclude, array $eligible)
    {   
        $x = null;
        if(is_array($event)){
            $x = $event['cd'];
        }else{
            $x = json_decode($event)->cd;
        }
        
        if(strcmp($x, "cr") != 0){
            $this->connectedUserId->set("u".$connection->WAMP->sessionId, $event['id']);
            $route = "connect";
            if(strcmp($event['cd'],"d") == 0) $route = "deconnect";
            $topic->broadcast('{ "cmd": "lc", "route": "'.$route.'", "id": "'.$event['id'].'"}');
            $connection->event("channel/cd", '{"cmd": "lc", "route": "ou", "ids": "'.json_encode(array_values($this->connectedUserId->toArray())).'"}');
        }
  
        if(strcmp($x, "cr") == 0){
            $topic->broadcast('{ "cmd": "lc", "route": "ou", "ids": "'.json_encode(array_values($this->connectedUserId->toArray())).'"}');
        }
    }

    /**
    * Like RPC is will use to prefix the channel
    * @return string
    */
    public function getName()
    {
        return 'cd.topic';
    }
}