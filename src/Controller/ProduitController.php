<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType; // Tu devras créer ce formulaire use App\Repository\ProduitRepository; use Doctrine\ORM\EntityManagerInterface; use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; use Symfony\Component\HttpFoundation\Request; use Symfony\Component\HttpFoundation\Response; use Symfony\Component\Routing\Attribute\Route; #[Route('/produit')] class ProduitController extends AbstractController { /** * Liste tous les produits **/ #[Route('/', name: 'app_produit_index', methods: ['GET'])] public function index(ProduitRepository $repository): Response { return $this->render('produit/index.html.twig', [ 'produits' => $repository->findAll(), ]); } }
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/produit')]
class ProduitController extends AbstractController
{
    /**
     * Liste tous les produits
     **/
    #[Route('/', name: 'app_produit_index', methods: ['GET'])]
    public function index(ProduitRepository $repository): Response
    {
        return $this->render('produit/index.html.twig', [
            'produits' => $repository->findAll(),
        ]);
    }
}
