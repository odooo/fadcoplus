<?php

namespace GSPBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TaskControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

    public function testPreview()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/{taskId}');
    }

    public function testAjaxnew()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ajaxNew');
    }

    public function testAjaxcreate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ajax');
    }

}
