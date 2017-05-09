<?php

namespace SmsGo;

class SmsGo
{
    /**
     * @var SmsGo\SmsSender
     */
    private $smsSender;

    private $defaultSenderId;

    public function __construct(SmsSenderInterface $smsSender)
    {
        $this->smsSender = $smsSender;
    }

    public function send(Sms $sms)
    {
        return $this->smsSender->send($sms);
    }

    public function getDefaultSenderId()
    {
        return $this->defaultSenderId;
    }

    public function setDefaultSenderId($senderId)
    {
        $this->defaultSenderId = $senderId;
    }
}

