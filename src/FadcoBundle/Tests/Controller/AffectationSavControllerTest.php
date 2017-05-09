<?php

namespace GSPBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AffectationSavControllerTest extends WebTestCase
{
    public function testGsp()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/gsp');
    }

}
