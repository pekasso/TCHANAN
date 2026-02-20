<?php

namespace App\Tests\Functionnal\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecretaireControllerPhpTest extends WebTestCase
{
    public function testSecretaireIndex(): void                                                                 
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/secretaire/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Secretaire');
    }
}
