<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/categorie' , name: 'categorie_' , methods: ['GET'])]
class CategorieController extends AbstractController
{
    /**
     * Liste tous les catégories
     **/
    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(CategorieRepository $repository): Response
    {
        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CategorieController'
        ]);
    }
}