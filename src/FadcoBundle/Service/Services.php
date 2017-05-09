<?php
namespace FadcoBundle\Service;

use Doctrine\ORM\EntityManager;
use FadcoBundle\Entity\AlerteSms;

class Services {

    /**
     *
     * @var EntityManager
     */
    protected $em;
    
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    private function formatContact($contactBrut)
    {
        $contact = '';

        $pattern = '#[0-9]#';

        if(is_null($contactBrut)){
            $contact = '';
        }else{
            for($i=strlen($contactBrut)-1; $i>=0; $i--){
                if(preg_match($pattern, $contactBrut[$i], $matches)){
                    if(strlen($contact) < 8 )
                        $contact = $matches[0].$contact;
                }
            }
        }

        if(strlen($contact) == 8){
            $contact = '229'.$contact;
        }else{
            $contact = '';
        }

        return $contact;
    }
    
    public function sendSms($contactBrut,$message)
    {
        $contact = $this->formatContact($contactBrut);
        
        $alerteSMS = new AlerteSms();

        $alerteSMS->setDestinataire($contact);
        $alerteSMS->setMessage($message);
        $alerteSMS->setIsSent(0);
        
        $this->em->persist($alerteSMS);
        $this->em->flush();
        
        return $contact;
    }

}