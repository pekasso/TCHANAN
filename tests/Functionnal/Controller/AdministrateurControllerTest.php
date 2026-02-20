<?php

namespace App\Tests\Functionnal\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdministrateurControllerTest extends WebTestCase
{
    public function testAdministrateurIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/administrateur/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Administrateur');
    }
}
