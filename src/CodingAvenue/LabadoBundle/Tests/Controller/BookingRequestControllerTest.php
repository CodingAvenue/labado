<?php

namespace CodingAvenue\LabadoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BookingRequestControllerTest extends WebTestCase
{
    public function testStore()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/bookingrequest');
    }

    public function testCheckstatus()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/bookingrequest/{id}/status');
    }

}
