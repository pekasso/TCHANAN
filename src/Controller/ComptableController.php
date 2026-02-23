<?php

namespace App\Controller;

use App\Entity\Comptable;
use App\Repository\ComptableRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/comptable' , name: 'comptable_' , methods: ['GET'])]
class ComptableController extends AbstractController
{
    /**
     * Liste tous les comptables
     **/
    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(ComptableRepository $repository): Response
    {
        return $this->render('comptable/index.html.twig', [
            'controller_name' => 'ComptableController'  
        ]);
    }
}