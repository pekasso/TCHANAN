<?php

namespace App\Controller;

use App\Entity\Comptable;
use App\Form\ComptableType; // Tu devras créer ce formulaire
use App\Repository\ComptableRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/comptable')]
class ComptableController extends AbstractController
{
    /**
     * Liste tous les comptables
     **/
    #[Route('/', name: 'app_comptable_index', methods: ['GET'])]
    public function index(ComptableRepository $repository): Response
    {
        return $this->render('comptable/index.html.twig', [
            'comptables' => $repository->findAll(),
        ]);
    }
}