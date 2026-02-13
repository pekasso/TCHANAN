<?php

namespace App\Controller;

use App\Entity\Secretaire;
use App\Form\SecretaireType; // Tu devras créer ce formulaire
use App\Repository\SecretaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/secretaire')]
class SecretaireController extends AbstractController
{
    /**
     * Liste tous les secretaire
     **/
    #[Route('/', name: 'app_secretaire_index', methods: ['GET'])]
    public function index(SecretaireRepository $repository): Response
    {
        return $this->render('secretaire/index.html.twig', [
            'secretaires' => $repository->findAll(),
        ]);
    }
}