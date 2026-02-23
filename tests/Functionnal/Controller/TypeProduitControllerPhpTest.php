<?php

namespace App\Tests\Functionnal\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TypeProduitControllerPhpTest extends WebTestCase
{
    public function testTypeProduitIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/type-produit/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Type Produit');
    }
}
