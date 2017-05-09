<?php

namespace GSPBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MailBoxControllerTest extends WebTestCase
{
    public function testInbox()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/inbox');
    }

}
