<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FadcoBundle\Services;

use Doctrine\ORM\EntityManager;

/**
 * Description of ServiceSms
 *
 * @author crrs
 */
class ServiceSms {
    

    private $entityManager;

    /**
     * Constructeur
     */
    public function __construct(EntityManager $entityManager)
    {   
        $this->entityManager = $entityManager;
    }

    /**
     * send sms
     */
    
    public function sendSms($telephoneDestinataire, $message )
    {   
        $contact =  $this->formatContact($telephoneDestinataire);
        $alertSms = new \FadcoBundle\Entity\AlerteSms();
        $alertSms->setDestinataire($contact);
        $alertSms->setMessage($message);
        $alertSms->setIsSent(FALSE);
        $this->entityManager->persist($alertSms);
        $this->entityManager->flush();
    }
    
    public function formatContact($contactBrut)
    {
        $contact = '';

        $pattern = '#[0-9]#';

        if (is_null($contactBrut)) {
            $contact = '';
        } else {
            for($i = strlen($contactBrut) - 1; $i >= 0; $i--) {
                if (preg_match($pattern, $contactBrut[$i], $matches)) {
                    if (strlen($contact) < 8) {
                        $contact = $matches[0] . $contact;
                    }                        
                }
            }
        }

        if (strlen($contact) == 8) {
            $contact = '229'.$contact;
        } else {
            $contact = '';
        }

        return $contact;
    }
}
