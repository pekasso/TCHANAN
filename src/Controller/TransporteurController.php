<?php

namespace App\Controller;

use App\Entity\Transporteur;
use App\Form\TransporteurType; // Tu devras créer ce formulaire
use App\Repository\TransporteurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/transporteur')]
class TransporteurController extends AbstractController
{
    /**
     * Liste tous les transporteurs
     **/
    #[Route('/', name: 'app_transporteur_index', methods: ['GET'])]
    public function index(TransporteurRepository $repository): Response
    {
        return $this->render('transporteur/index.html.twig', [
            'transporteurs' => $repository->findAll(),
        ]);
    }
}