<?php

namespace App\Tests;

use App\Entity\Categorie;
use PHPUnit\Framework\TestCase;

class CategorieTest extends TestCase
{
    public function testValid(): void
    {
        $caterogie = new Categorie();
        $caterogie->setcatNom('Fruitier');
        // Assertions
        $this->assertSame('Fruitier', $caterogie->getcatNom());   
    }
    public function testInvalid(): void
    {
        $caterogie = new Categorie();
        $caterogie->setcatNom('Fruitier');
        // Assertions
        $this->assertFalse($caterogie->getcatNom() === '-Fruitier-');   
    }
    public function testEmpty(): void
    {
        $caterogie = new Categorie();
        // Assertions
        $this->assertNull($caterogie->getId());
        $this->assertNull($caterogie->getcatNom());  
    }               
}
