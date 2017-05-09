<?php

namespace GSPBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MessageBotControllerTest extends WebTestCase
{
    public function testPersistmessages()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'persist_messages');
    }

}
