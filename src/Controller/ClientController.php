<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\ClientType; // Tu devras créer ce formulaire
use App\Repository\ClientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/client')]
class ClientController extends AbstractController
{
    /**
     * Liste tous les clients
     **/
    #[Route('/', name: 'app_client_index', methods: ['GET'])]
    public function index(ClientRepository $repository): Response
    {
        return $this->render('client/index.html.twig', [
            'clients' => $repository->findAll(),
        ]);
    }
}