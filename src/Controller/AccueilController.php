<?php

namespace App\Controller;

use App\Repository\AgriculteurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/accueil')]
class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil_index', methods: ['GET'])]
    public function index(AgriculteurRepository $repository): Response
    {
        return $this->render('accueil/index.html.twig');
        }
}