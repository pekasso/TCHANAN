<?php

namespace App\Tests;

use App\Entity\Transporteur;
use PHPUnit\Framework\TestCase;

class TransporteurTest extends TestCase
{
    public function testValid(): void
    {
        $transporteur = new Transporteur();

        $transporteur->setNom('Bwana');
        $transporteur->setPrenom('Jean');       
        $transporteur->setAdresse('123 Rue Test');
        $transporteur->setTelephone('06 12 34 56 78');      
        $transporteur->setEmail('bwana@gmail.com');
        $transporteur->setMdp('mdp123');
        $transporteur->setNomEntreprise('Bwana Transport');

        // Assertions
        $this->assertSame('Bwana', $transporteur->getNom());
        $this->assertSame('Jean', $transporteur->getPrenom());
        $this->assertSame('123 Rue Test', $transporteur->getAdresse());
        $this->assertSame('06 12 34 56 78', $transporteur->getTelephone());
        $this->assertSame('bwana@gmail.com', $transporteur->getEmail());
        $this->assertSame('mdp123', $transporteur->getMdp()); 
        $this->assertSame('Bwana Transport', $transporteur->getNomEntreprise());    
    }
    public function testInvalid(): void
    {
        $transporteur = new Transporteur();

        $transporteur->setNom('Bwana');
        $transporteur->setPrenom('Jean');       
        $transporteur->setAdresse('123 Rue Test');
        $transporteur->setTelephone('06 12 34 56 78');      
        $transporteur->setEmail('bwana@gmail.com'); 
        $transporteur->setMdp('mdp123');
        $transporteur->setNomEntreprise('Bwana Transport'); 

        // Assertions
        $this->assertFalse($transporteur->getNom() === '-Bwana-');
        $this->assertFalse($transporteur->getPrenom() === '-Jean-');
        $this->assertFalse($transporteur->getAdresse() === '-123 Rue Test');
        $this->assertFalse($transporteur->getTelephone() === '06 52 25 05 26');
        $this->assertFalse($transporteur->getEmail() === '-bwana@gmail.com-');
        $this->assertFalse($transporteur->getMdp() === '-mdp123-');
        $this->assertFalse($transporteur->getNomEntreprise() === '-Bwana Transport-'); 
    }   
    public function testEmpty(): void
    {
        $transporteur = new Transporteur();

        $this->assertNull($transporteur->getId());
        $this->assertEmpty($transporteur->getNom());
        $this->assertEmpty($transporteur->getPrenom());
        $this->assertEmpty($transporteur->getAdresse());
        $this->assertEmpty($transporteur->getTelephone());
        $this->assertEmpty($transporteur->getEmail());
        $this->assertEmpty($transporteur->getMdp());  
        $this->assertEmpty($transporteur->getNomEntreprise()); 
    }
}   
