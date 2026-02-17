<?php

namespace App\Tests;
use App\Entity\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testValid(): void
    {
        $client = new Client();

        $client->setNom('Bizembel');
        $client->setPrenom('Honoré');
        $client->setAdresse('Paris');
        $client->setTelephone('06 52 25 05 25');
        $client->setEmail('bizembel@gmail.com');
        $client->setMdp('mdp123');

        // Assertions
        $this->assertSame('Bizembel', $client->getNom());
        $this->assertSame('Honoré', $client->getPrenom());
        $this->assertSame('Paris', $client->getAdresse());
        $this->assertSame('06 52 25 05 25', $client->getTelephone());
        $this->assertSame('bizembel@gmail.com', $client->getEmail());
        $this->assertSame('mdp123', $client->getMdp()); 
    }
    public function testInvalid(): void
    {
        $client = new Client();

        $client->setNom('Bizembel');
        $client->setPrenom('Honoré');
        $client->setAdresse('Paris');
        $client->setTelephone('06 52 25 05 25');
        $client->setEmail('bizembel@gmail.com');    
        $client->setMdp('mdp123');

        // Assertions
        $this->assertFalse($client->getNom() === '-Bizembel-');
        $this->assertFalse($client->getPrenom() === '-Honoré-');
        $this->assertFalse($client->getAdresse() === '-Paris');
        $this->assertFalse($client->getTelephone() === '06 52 25 05 26');
        $this->assertFalse($client->getEmail() === '-bizembel@gmail.com-};');
        $this->assertFalse($client->getMdp() === '-mdp123-');
    }

    public function testEmpty(): void
    {
        $client = new Client();

        $this->assertNull($client->getId());
        $this->assertEmpty($client->getNom());
        $this->assertEmpty($client->getPrenom());
        $this->assertEmpty($client->getAdresse());
        $this->assertEmpty($client->getTelephone());
        $this->assertEmpty($client->getMdp());  
    }
}
