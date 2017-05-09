<?php

namespace GSPBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GestionRolesControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/index');
    }

    public function testListevalidations()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'validations');
    }

}
