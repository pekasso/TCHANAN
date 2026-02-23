<?php

namespace App\Tests;

use App\Entity\Agriculteur;
use PHPUnit\Framework\TestCase;

class AgriculteurTest extends TestCase
{
    public function testValid(): void
    {
        $agriculteur = new Agriculteur();

        $agriculteur->setNom('Bongoyala');
        $agriculteur->setPrenom('jean-Olivier');
        $agriculteur->setAdresse('Seine-et-Marne');
        $agriculteur->setTelephone('06 52 31 07 31');
        $agriculteur->setEmail('bongoyala@gmail.com');
        $agriculteur->setMdp('mdp123');
        $agriculteur->setNumChambreAgriculture('220323sm');

        // Assertions
        $this->assertSame('Bongoyala', $agriculteur->getNom());
        $this->assertSame('jean-Olivier', $agriculteur->getPrenom());
        $this->assertSame('Seine-et-Marne', $agriculteur->getAdresse());
        $this->assertSame('06 52 31 07 31', $agriculteur->getTelephone());
        $this->assertSame('bongoyala@gmail.com', $agriculteur->getEmail());
        $this->assertSame('mdp123', $agriculteur->getMdp());
        $this->assertSame('220323sm', $agriculteur->getNumChambreAgriculture()); 
    }

    public function testInvalid(): void
    {
        $agriculteur = new Agriculteur();

        $agriculteur->setNom('Bongoyala');
        $agriculteur->setPrenom('jean-Olivier');
        $agriculteur->setAdresse('Seine-et-Marne');
        $agriculteur->setTelephone('06 52 31 07 31');
        $agriculteur->setEmail('bongoyala@gmail.com');

        // Assertions
        $this->assertFalse($agriculteur->getNom() === '-Bongoyala-');
        $this->assertFalse($agriculteur->getPrenom() === '-jean-Olivier-');
        $this->assertFalse($agriculteur->getAdresse() === '-Seine-et-Marne');
        $this->assertFalse($agriculteur->getTelephone() === '06 52 31 07 32');
        $this->assertFalse($agriculteur->getEmail() === 'invalid-email');

    }

    public function testEmpty(): void
    {
        $agriculteur = new Agriculteur();

        $this->assertNull($agriculteur->getId());
        $this->assertEmpty($agriculteur->getNom());
        $this->assertEmpty($agriculteur->getEmail());
        $this->assertEmpty($agriculteur->getPrenom());
        $this->assertEmpty($agriculteur->getAdresse());
        $this->assertEmpty($agriculteur->getTelephone());
        }
}