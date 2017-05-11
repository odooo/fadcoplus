<?php

namespace FadcoBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use SmsGo\Sms;

class SmsSenderCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('fadcoplus:sms-sender')
            ->setDescription('Envoi les SMS en attente d\'envoi !');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $logger = $this->getContainer()->get('logger');
        $smsgo = $this->getContainer()->get('smsgo');
        $em = $this->getContainer()->get('doctrine.orm.entity_manager');

        $logger->debug('FADCO+ SMS Sender called !');

        $messages = $em->getRepository('FadcoBundle:AlerteSms')->findByIsSent(false);

        foreach ($messages as $message) {
            
            $sms = Sms::create()
                    ->sender($smsgo->getDefaultSenderId())
                    ->to($message->getDestinataire())
                    ->message($message->getMessage());

            if($smsgo->send($sms) > 0) {

                $message->setIsSent(true);
                $em->persist($message);
                $em->flush();
            }
        }
    }
}

