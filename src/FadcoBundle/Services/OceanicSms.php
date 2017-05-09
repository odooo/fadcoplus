<?php

namespace FadcoBundle\Services;

use Symfony\Component\DependencyInjection\ContainerAware;

use SmsGo\SmsSenderInterface;
use SmsGo\Sms;

class OceanicSms extends ContainerAware implements SmsSenderInterface
{
    private $api;
    private $user;
    private $password;

    public function send(Sms $sms)
    {
        $sent = 0;

        if (count($sms->getRecipients()) > 0 and $sms->getMessage() != null) {
            
            foreach($sms->getRecipients() as $recipient) {
                
                $url = "http://oceanicsms.com/api/http/sendmsg.php?api=";
                $url .= $this->getApi() . "&user=";
                $url .= $this->getUser() . "&password=";
                $url .= $this->getPassword() . "&to=";
                $url .= $this->formatNumber($recipient) . "&text=";
                $url .= urlencode($sms->getMessage()) . "&from=";
                $url .= urlencode($sms->getSender());

                $this->container->get('logger')->debug('Call ' . $url);
                
                $result = file_get_contents($url);

                if (strpos($result, 'ID:') !== false) {
                    $this->container->get('logger')->debug('SMS sent !');
                    $sent++;
                } else {
                    $this->container->get('logger')->debug('SMS not sent !');
                    $this->container->get('logger')->debug('SMS Error: ' . $result);
                }
            }
        }

        return $sent;
    }

    public function getApi()
    {
        if ($this->api == null) {

            $this->api = $this->container->getParameter('oceanicsms_api');
        }   

        return $this->api;     
    }

    public function getUser()
    {
        if ($this->user == null) {

            $this->user = $this->container->getParameter('oceanicsms_user');
        }   

        return $this->user;     
    }

    public function getPassword()
    {
        if ($this->password == null) {

            $this->password = $this->container->getParameter('oceanicsms_password');
        }   

        return $this->password;     
    }

    private function formatNumber($number)
    {
        $number = str_replace([' ', '+'], ['', ''], $number);

        if (substr($number, 0, 2) == '00') {
            $number = substr($number, 2);
        }

        $start = substr($number, 0, 3);

        if ($start != '229') {
            $number = '229' . $number;
        }

        return $number;
    }
}

