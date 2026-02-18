<?php

namespace App\Tests;

use App\Entity\Utilisateur; 
use PHPUnit\Framework\TestCase;

class UtilisateurTest extends TestCase
{
    public function testValid(): void
    {
        $utilisateur = new Utilisateur();

        $utilisateur->setNom('Nobody');
        $utilisateur->setPrenom('Knows');           
        $utilisateur->setAdresse('Val-de-Marne');     
        $utilisateur->setTelephone('06 25 34 55 55');      
        $utilisateur->setEmail('nobody@gmail.com');
        $utilisateur->setMdp('mdp123');

        // Assertions
        $this->assertSame('Nobody', $utilisateur->getNom());
        $this->assertSame('Knows', $utilisateur->getPrenom());
        $this->assertSame('Val-de-Marne', $utilisateur->getAdresse());
        $this->assertSame('06 25 34 55 55', $utilisateur->getTelephone());
        $this->assertSame('nobody@gmail.com', $utilisateur->getEmail());
        $this->assertSame('mdp123', $utilisateur->getMdp()); 
    }
    public function testInvalid (): void
    {
        $utilisateur= new Utilisateur ();

        $utilisateur->setNom('Nobody');   
        $utilisateur->setPrenom('Knows');           
        $utilisateur->setAdresse('Val-de-Marne');     
        $utilisateur->setTelephone('06 25 34 55 55');      
        $utilisateur->setEmail('nobody@gmail.com');
        $utilisateur->setMdp('mdp123');     
        
        // Assertions
        $this->assertFalse($utilisateur->getNom() === '-Nobody-');
        $this->assertFalse($utilisateur->getPrenom() === '-Knows-');
        $this->assertFalse($utilisateur->getAdresse() === '-Val-de-Marne -');
        $this->assertFalse($utilisateur->getTelephone() === '06 52 25 05 26');
        $this->assertFalse($utilisateur->getEmail() === '-nobody@gmail.com-');
        $this->assertFalse($utilisateur->getMdp() === '-mdp123-');
    }
    public function testEmpty (): void
    {         $utilisateur= new Utilisateur();

        // Assertions
        $this->assertNull($utilisateur->getId());
        $this->assertNull($utilisateur->getNom());
        $this->assertNull($utilisateur->getPrenom());
        $this->assertNull($utilisateur->getAdresse());
        $this->assertNull($utilisateur->getTelephone());
        $this->assertNull($utilisateur->getEmail());
        $this->assertNull($utilisateur->getMdp());
    }        
}
