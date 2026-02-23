<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\UtilisateurType; // Tu devras créer ce formulaire
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/utilisateur' , name: 'utilisateur_' , methods: ['GET'])]
class UtilisateurController extends AbstractController
{
    /**
     * Liste tous les utilisateurs
     */
    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(UtilisateurRepository $repository): Response
    {
        return $this->render('utilisateur/index.html.twig', [
            'controller_name' => 'UtilisateurController'
        ]);
    }

}