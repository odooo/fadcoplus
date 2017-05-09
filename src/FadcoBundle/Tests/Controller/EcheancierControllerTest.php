<?php

namespace GSPBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EcheancierControllerTest extends WebTestCase
{
    public function testPreviewecheancierinvestisseur()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/previewEcheancierInvestisseur');
    }

}
