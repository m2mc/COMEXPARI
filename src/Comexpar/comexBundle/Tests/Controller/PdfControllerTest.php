<?php

namespace Comexpar\comexBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PdfControllerTest extends WebTestCase
{
    public function testPdfjour()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Pdfjour');
    }

}
