<?php

namespace FadcoBundle\Services;

use Doctrine\ORM\EntityManager;
use FadcoBundle\Services\ServiceSms;

class AutoritesSmsSender
{
    private $sms;

    private $em;

    private $message = '';

    public function __construct(EntityManager $entityManager, ServiceSms $sms)
    {
        $this->em = $entityManager;
        $this->sms = $sms;
    }

    public function message($message)
    {
        $this->message = $message;

        return $this;
    }

    public function to()
    {
        if (!empty($this->message)) {
            $receivers = func_get_args();
            
            foreach ($receivers as $receiver) {
                $method = 'sendSmsTo' . strtoupper($receiver);

                if (method_exists($this, $method)) {
                    $this->{$method}($this->message);
                }
            }
        }  

        return $this;         
    }


    public function sendSmsToADMIN($msg){

        $dgs = $this->em->getRepository('FadcoBundle:Prestataire')->findBy(
            array(
                'type' => 'ADMIN'
            )
        );

        foreach($dgs as $dg){
            $contact = $dg->getContact();
            if(!is_null($contact)){
                $this->sms->sendSms($contact, $msg);
            }
        }

        return true;
    }
}