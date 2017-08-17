<?php

namespace CodingAvenue\LabadoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserInteractionControllerControllerTest extends WebTestCase
{
    public function testInputestimate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/{id}/estimate');
    }

}
