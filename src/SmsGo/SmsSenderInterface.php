<?php

namespace SmsGo;

interface SmsSenderInterface
{
    public function send(Sms $sms);
}

