<?php

namespace GSPBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RecetteControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/index');
    }

    public function testValider()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/valider');
    }

}
