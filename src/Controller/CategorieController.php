<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType; // Tu devras créer ce formulaire
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/categorie')]
class CategorieController extends AbstractController
{
    /**
     * Liste tous les catégories
     **/
    #[Route('/', name: 'app_categorie_index', methods: ['GET'])]
    public function index(CategorieRepository $repository): Response
    {
        return $this->render('categorie/index.html.twig', [
            'categories' => $repository->findAll(),
        ]);
    }
}