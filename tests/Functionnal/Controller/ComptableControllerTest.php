<?php

namespace App\Tests\Functionnal\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ComptableControllerTest extends WebTestCase
{
    public function testComptableIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/comptable/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Comptable');
    }
}
