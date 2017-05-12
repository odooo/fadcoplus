<?php

namespace FadcoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class StatistiqueControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'statistique-page');
    }

    public function testNbrabonnebyformule()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'statistique-by-formule');
    }

}
