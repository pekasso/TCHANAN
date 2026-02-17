<?php

namespace App\Tests;
use App\Entity\Secretaire;
use PHPUnit\Framework\TestCase;

class SecretaireTest extends TestCase
{
    public function testValid(): void
    {
        $secretaire = new Secretaire();

        $secretaire->setNom('Herera');
        $secretaire->setPrenom('Jeannette');           
        $secretaire->setAdresse('Paris 10 eme');     
        $secretaire->setTelephone('06 22 34 56 78');      
        $secretaire->setEmail('herera@gmail.com');
        $secretaire->setMdp('mdp123');

        // Assertions
        $this->assertSame('Herera', $secretaire->getNom());
        $this->assertSame('Jeannette', $secretaire->getPrenom());
        $this->assertSame('Paris 10 eme', $secretaire->getAdresse());
        $this->assertSame('06 22 34 56 78', $secretaire->getTelephone());
        $this->assertSame('herera@gmail.com', $secretaire->getEmail());
        $this->assertSame('mdp123', $secretaire->getMdp()); 
    }
    public function testInvalid (): void
    {
        $secretaire= new Secretaire ();

        $secretaire->setNom('Herera');
        $secretaire->setPrenom('Jeannette');           
        $secretaire->setAdresse('Paris 10 eme');     
        $secretaire->setTelephone('06 22 34 56 78');      
        $secretaire->setEmail('herera@gmail.com');

        // Assertions
        $this->assertFalse($secretaire->getNom() === '-Herera-');
        $this->assertFalse($secretaire->getPrenom() === '-Jeannette-');
        $this->assertFalse($secretaire->getAdresse() === '-Paris 10 eme-');
        $this->assertFalse($secretaire->getTelephone() === '06 52 25 05 26');
        $this->assertFalse($secretaire->getEmail() === '-herera@gmail.com-');
        $this->assertFalse($secretaire->getMdp() === '-mdp123-');       
        }
    public function testEmpty (): void
    {         $secretaire= new Secretaire();

        $this->assertNull($secretaire->getId());
        $this->assertEmpty($secretaire->getNom());
        $this->assertEmpty($secretaire->getPrenom());
        $this->assertEmpty($secretaire->getAdresse());
        $this->assertEmpty($secretaire->getTelephone());
        $this->assertEmpty($secretaire->getEmail());
        $this->assertEmpty($secretaire->getMdp()); 
    }        
}