<?php

namespace App\Tests\Functionnal\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProduitControllerTest extends WebTestCase
{
    public function testProduitIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/produit/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Produit');
    }
}
