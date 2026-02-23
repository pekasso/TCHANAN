<?php

namespace App\Tests\Functionnal\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UtilisateurControllerPhpTest extends WebTestCase
{
    public function testUtilisateurIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/utilisateur/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Utilisateur');
    }
}
