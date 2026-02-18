<?php

namespace App\Tests;

use App\Entity\TypeProduit;
use PHPUnit\Framework\TestCase;

class TypeProduitTest extends TestCase
{
    public function testValid(): void
    {
        $typeProduit = new TypeProduit();
        $typeProduit->setNom('Céréales');
        // Assertions
        $this->assertSame('Céréales', $typeProduit->getNom());   
    }
    public function testInvalid(): void
    {
        $typeProduit = new TypeProduit();
        $typeProduit->setNom('Céréales');
        // Assertions
        $this->assertSame('Céréales', $typeProduit->getNom()); 
        $this->assertFalse($typeProduit->getNom() === '-Céréales-');        
    }
    public function testEmpty(): void
    {
        $typeProduit = new TypeProduit();
        // Assertions
        $this->assertNull($typeProduit->getId());
        $this->assertNull($typeProduit->getNom());  
    }   
}
