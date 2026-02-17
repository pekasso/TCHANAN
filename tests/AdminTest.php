<?php

namespace App\Tests;

use App\Entity\Administrateur;
use PHPUnit\Framework\TestCase;

class AdministrateurTest extends TestCase
{
    protected function testValid(): void
    {
        $administrateur = new Administrateur();

        $administrateur->setNom('Bizembel');
        $administrateur->setPrenom('Honré');
        $administrateur->setAdresse('Paris');
        $administrateur->setTelephone('06 52 25 05 25');
        $administrateur->setEmail('bizembel@gmail.com');
        $administrateur->setMdp('mdp123');
        
        // Assertions
        $this->assertSame('Bizembel', $administrateur->getNom());
        $this->assertSame('Honoré', $administrateur->getPrenom());
        $this->assertSame('Paris', $administrateur->getAdresse());
        $this->assertSame('06 52 25 05 25', $administrateur->getTelephone());
        $this->assertSame('bizembel@gmail.com', $administrateur->getEmail());
        $this->assertSame('mdp123', $administrateur->getMdp());
    }

    protected function testInvalid(): void
    {
        $administrateur = new Administrateur();

        $administrateur->setNom('Bizembel');
        $administrateur->setPrenom('Honré');
        $administrateur->setAdresse('Paris');
        $administrateur->setTelephone('06 52 25 05 25');
        $administrateur->setEmail('bizembel@gmail.com');
        $administrateur->setMdp('mdp123');

        // Assertions
        $this->assertFalse($administrateur->getNom() === '-Bizembel-');
        $this->assertFalse($administrateur->getPrenom() === '-Honoré-');
        $this->assertFalse($administrateur->getAdresse() === '-Seine-et-Marne');
        $this->assertFalse($administrateur->getTelephone() === '06 52 31 07 32');
        $this->assertFalse($administrateur->getEmail() === 'invalid-email');

    }

    protected function testEmpty(): void
    {
        $administrateur = new Administrateur();

        $this->assertNull($administrateur->getId());
        $this->assertEmpty($administrateur->getNom());
        $this->assertEmpty($administrateur->getEmail());
        $this->assertEmpty($administrateur->getPrenom());
        $this->assertEmpty($administrateur->getAdresse());
        $this->assertEmpty($administrateur->getTelephone());
        $this->assertEmpty($administrateur->getMdp());
        }
}