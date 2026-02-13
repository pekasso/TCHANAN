<?php

namespace App\Controller;

use App\Entity\Agriculteur;
use App\Form\AgriculteurType; // Tu devras créer ce formulaire
use App\Repository\AgriculteurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/agriculteur')]
class AgriculteurController extends AbstractController
{
    /**
     * Liste tous les agriculteurs
     */
    #[Route('/', name: 'app_agriculteur_index', methods: ['GET'])]
    public function index(AgriculteurRepository $repository): Response
    {
        return $this->render('agriculteur/index.html.twig', [
            'agriculteurs' => $repository->findAll(),
        ]);
    }

}