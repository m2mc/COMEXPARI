<?php

namespace Comexpar\comexBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MailControllerTest extends WebTestCase
{
    public function testInfo()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Info');
    }

}
