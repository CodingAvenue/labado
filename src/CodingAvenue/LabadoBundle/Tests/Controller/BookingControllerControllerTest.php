<?php

namespace CodingAvenue\LabadoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BookingControllerControllerTest extends WebTestCase
{
    public function testShowcurrent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showCurrent');
    }

}
