<?php

namespace App\Tests;

use App\Entity\Comptable;
use PHPUnit\Framework\TestCase;

class ComptableTest extends TestCase
{
    public function testValid(): void
    {
        $comptable = new Comptable();

        $comptable->setNom('Kazadi');
        $comptable->setPrenom('Denis');           
        $comptable->setAdresse('Paris 1 er');     
        $comptable->setTelephone('06 25 34 56 78');      
        $comptable->setEmail('kazadi@gmail.com');
        $comptable->setMdp('mdp123');

        // Assertions
        $this->assertSame('Kazadi', $comptable->getNom());
        $this->assertSame('Denis', $comptable->getPrenom());
        $this->assertSame('Paris 1 er', $comptable->getAdresse());
        $this->assertSame('06 25 34 56 78', $comptable->getTelephone());
        $this->assertSame('kazadi@gmail.com', $comptable->getEmail());
        $this->assertSame('mdp123', $comptable->getMdp()); 
    }
    public function testInvalid (): void
    {
        $comptable= new Comptable ();

        $comptable->setNom('Kazadi');   
        $comptable->setPrenom('Denis');           
        $comptable->setAdresse('Paris 1 er');     
        $comptable->setTelephone('06 25 34 56 78');      
        $comptable->setEmail('kazadi@gmail.com');
        $comptable->setMdp('mdp123');

        // Assertions
        $this->assertFalse($comptable->getNom() === '-Kazadi-');
        $this->assertFalse($comptable->getPrenom() === '-Denis-');
        $this->assertFalse($comptable->getAdresse() === '-Paris 1 er -');
        $this->assertFalse($comptable->getTelephone() === '06 52 25 05 26');
        $this->assertFalse($comptable->getEmail() === '-kazadi@gmail.com-');
        $this->assertFalse($comptable->getMdp() === '-mdp123-');
    }
    public function testEmpty (): void
    {         $comptable= new Comptable();

        // Assertions
        $this->assertNull($comptable->getId());
        $this->assertNull($comptable->getNom());
        $this->assertNull($comptable->getPrenom());
        $this->assertNull($comptable->getAdresse());
        $this->assertNull($comptable->getTelephone());
        $this->assertNull($comptable->getEmail());
        $this->assertNull($comptable->getMdp());
    }        
}