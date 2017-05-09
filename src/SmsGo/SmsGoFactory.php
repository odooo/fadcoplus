<?php

namespace SmsGo;

use Symfony\Component\DependencyInjection\ContainerInterface;

class SmsGoFactory
{    
    public static function create(ContainerInterface $container)
    {
        $smsSender = $container->get($container->getParameter('smsgo.sender'));

        if ($smsSender instanceof SmsSenderInterface) {

            $smsgo = new SmsGo($smsSender);
            $smsgo->setDefaultSenderId($container->getParameter('smsgo.sender_id'));

            return $smsgo;                
        }

        return null;
    }
}

