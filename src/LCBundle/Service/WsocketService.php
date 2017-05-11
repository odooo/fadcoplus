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
use Symfony\Component\DependencyInjection\ContainerInterface;

class WsocketService implements TopicInterface, PushableTopicInterface
{
    
    private $container;
    
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
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
        //this will broadcast the message to ALL subscribers of this topic.
        //$topic->broadcast(['msg' => $connection->resourceId . " has joined " . $topic->getId()]); 
        //$pusher = $this->container->get('gos_web_socket.wamp.pusher');
        //$pusher->push(['cmd' => 'lc', 'route' => 'connect', 'msg' => $request->getAttributes()->get("userid")], 'cd_topic');             
        
        /*foreach ($topic as $client) {
            $client->
        }*/
        //$connection->event("channel/cd", '{"cmd": "lc", "route": "connect", "msg": "'.$request->getAttributes()->get("userid").'"}');
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
        //this will broadcast the message to ALL subscribers of this topic.
        //$topic->broadcast(['msg' => $connection->resourceId . " has left " . $topic->getId()]);
        //$pusher = $this->container->get('gos_web_socket.wamp.pusher');
        //$pusher->push(['cmd' => 'lc', 'route' => 'deconnect', 'msg' => $request->getAttributes()->get("userid")], 'cd_topic');
    
        //$connection->event("channel/cd", '{"cmd": "lc", "route": "deconnect", "msg": "'.$request->getAttributes()->get("userid").'"}');
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
        $topic->broadcast($event);
    }

    /**
    * Like RPC is will use to prefix the channel
    * @return string
    */
    public function getName()
    {
        return 'acme.topic';
    }
}