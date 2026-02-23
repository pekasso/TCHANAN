<?php

namespace App\Tests\Functionnal\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ClientControllerTest extends WebTestCase
{
    public function testClientIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/client/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Client');
    }
}
