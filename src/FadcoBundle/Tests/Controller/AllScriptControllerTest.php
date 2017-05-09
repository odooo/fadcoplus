<?php

namespace GSPBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AllScriptControllerTest extends WebTestCase
{
    public function testMyscript()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/myScript');
    }

}
