<?php

namespace App\Tests\Functionnal\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategorieControllerTest extends WebTestCase
{
    public function testCategorieIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/categorie/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Categorie');
    }
}
