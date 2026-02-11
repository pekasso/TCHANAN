<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


final class DefaultController extends AbstractController
{
    #[Route('/default', name: 'app_default')]
    #[Route('/home', name: 'app_home')]
    #[Route('/accueil', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    #[Route('/a-propos', name: 'app_apropos')]


    public function apropos(): Response
    {
        return $this->render('default/apropos.html.twig', [
            'controller_apropos' => 'DefaultController',
        ]);
    }

    #[Route('/ressource', name: 'app_ressource')]
    public function ressource(): Response
    {
        return $this->render('default/ressource.html.twig', [
            'controller_ressource' => 'DefaultController',
        ]);
    }
    #[Route('/membre2', name: 'app_admnistrateur')]
    public function admnistrateur(): Response
    {
        return $this->render('default/administrateur.html.twig', [
            'controller_admnistrateur' => 'DefaultController',
        ]);
    }
    #[Route('/nous-contactez', name: 'app_contact', methods: ['GET'])]
    public function nousContactez(): Response
    {
        return $this->render('default/nous-contactez.html.twig', [
            'controller_contact' => 'DefaultController',
        ]);
    }
    #[Route('/nous-ecrire', name: 'app_write', methods: ['GET'])]
    public function nousEcrire(): Response
    {
        return $this->render('default/nous-ecrire.html.twig', [
            'controller_write' => 'DefaultController',
        ]);
    }
}
