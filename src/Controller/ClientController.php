<?php

namespace App\Controller;

use App\Entity\Client;
use App\Repository\ClientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/client' , name: 'client_' , methods: ['GET'])]
class ClientController extends AbstractController
{
    
     
    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(ClientRepository $repository): Response
    {
        return $this->render('client/index.html.twig', [
            'controller_name' => 'ClientController'
        ]);
    }
}