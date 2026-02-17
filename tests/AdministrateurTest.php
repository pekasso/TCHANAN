<?php

namespace App\Tests;
use App\Entity\Administrateur;
use PHPUnit\Framework\TestCase;

class AdministrateurTest extends TestCase
{
    public function testValid(): void
    {
        $administrateur = new Administrateur();

        $administrateur->setNom('Connan');
        $administrateur->setPrenom('Gregory'); 
        $administrateur->setAdresse('Paris 5eme');
        $administrateur->setTelephone('06 21 12 23 01');
        $administrateur->setEmail('connan@gmail.com');
        $administrateur->setMdp('mdp123');

        //Assertions
        $this->assertSame('Connan', $administrateur-> getNom());
        $this->assertSame('Gregory', $administrateur-> getPrenom());
        $this->assertSame('Paris 5eme', $administrateur->getAdresse());
        $this->assertSame('06 21 12 23 01', $administrateur->getTelephone());
        $this->assertSame('connan@gmail.com', $administrateur->getEmail());
            $this->assertSame('mdp123', $administrateur->getMdp());
    }
    public function testInvalid (): void
    {
        $administrateur= new Administrateur ();

        $administrateur->setNom('Connan');
        $administrateur->setPrenom('Gregory'); 
        $administrateur->setAdresse('Paris 5eme');
        $administrateur->setTelephone('06 21 12 23 01');
        $administrateur->setEmail('connan@gmail.com');
        $administrateur->setMdp('mdp123');

        //Assertions
        $this->assertFalse($administrateur->getNom() === '-Connan-');
        $this->assertFalse($administrateur->getPrenom() === '-Gregory-');
        $this->assertFalse($administrateur->getAdresse() === '-Paris');
        $this->assertFalse($administrateur->getTelephone() === '06 52 25 05 26');
        $this->assertFalse($administrateur->getEmail() === '-connan@gmail.com-};');
        $this->assertFalse($administrateur->getMdp() === '-mdp123-');

    }
    public function testEmpty (): void
    {
          $administrateur= new Administrateur();

        $this->assertNull($administrateur->getId());
        $this->assertEmpty($administrateur->getNom());
        $this->assertEmpty($administrateur->getPrenom());
        $this->assertEmpty($administrateur->getAdresse());
        $this->assertEmpty($administrateur->getTelephone());
        
        $this->assertEmpty($administrateur->getMdp()); 
    }
}
