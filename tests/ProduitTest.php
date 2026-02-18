<?php

namespace App\Tests;

use App\Entity\Produit;
use PHPUnit\Framework\TestCase;

class ProduitTest extends TestCase
{
    public function testValid(): void
    {
        $produit = new Produit();
        $date = new \DateTime('2026-02-18');
        $datePeremption = new \DateTime('2026-12-31');
        $produit->setNom('Produit Test');
        $produit->setDateMiseEnVente($date);
        $produit->setDatePeremption($datePeremption);
        $produit->setPrix(5.99);

        // Assertions
        $this->assertSame('Produit Test', $produit->getNom());
        $this->assertSame($date, $produit->getDateMiseEnVente());
        $this->assertSame($datePeremption, $produit->getDatePeremption());
        $this->assertSame(5.99, $produit->getPrix());
    }
    public function testInvalid(): void
    {
        $produit = new Produit();
        $date = new \DateTime('2026-02-18');
        $datePeremption = new \DateTime('2025-02-28'        ); 
        $produit->setNom('Produit Test');
        $produit->setDateMiseEnVente($date);
        $produit->setDatePeremption($datePeremption);
        $produit->setPrix(5.99);

        // Assertions
        $this->assertFalse($produit->getNom() === '-Produit Test-');
        $this->assertFalse($produit->getDateMiseEnVente() === new \DateTime('2025-01-01'));
        $this->assertFalse($produit->getDatePeremption() === new \DateTime('2026-12-31'));
        $this->assertFalse($produit->getPrix() === 10.99);

    }
    public function testEmpty(): void
    {
        $produit = new Produit();

        // Assertions
        $this->assertNull($produit->getId());
        $this->assertNull($produit->getNom());
        $this->assertNull($produit->getDateMiseEnVente());
        $this->assertNull($produit->getDatePeremption());
        $this->assertNull($produit->getPrix());
    }   
}
