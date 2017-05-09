<?php

namespace SmsGo;

use Psr\Log\LoggerInterface;

class SmsLogger implements SmsSenderInterface
{
    /**
     * @var Psr\Log\LoggerInterface
     */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function send(Sms $sms)
    {
        $sent = 0;

        if (count($sms->getRecipients()) > 0 and $sms->getMessage() != null) {
            
            foreach($sms->getRecipients() as $recipient) {
                $this->writeSmsToLog($sms->getSender(), $recipient, $sms->getMessage());
                $sent++;
            }
        }

        return $sent;
    }

    private function writeSmsToLog($sender, $recipient, $message)
    {
        $this->logger->debug(
            sprintf("From: %s\nTo: %s\n\n%s\n", $sender, $recipient, $message)
        );
    }
}