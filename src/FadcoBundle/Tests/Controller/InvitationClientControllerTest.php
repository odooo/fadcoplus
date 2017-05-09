<?php

namespace GSPBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class InvitationClientControllerTest extends WebTestCase
{
    public function testNew()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/new/invitation');
    }

    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/list/invitation');
    }

}
