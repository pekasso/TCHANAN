<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


final class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    #[Route('/default', name: 'app_default')]
    #[Route('/home', name: 'app_home')]
    #[Route('/accueil', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }


    #[Route('/agriculteur', name: 'app_agriculteur')]
    public function agriculteur(): Response
    {
        return $this->render('default/agriculteur.html.twig', [
            'controller_agriculteur' => 'DefaultController',
        ]);
    }
    #[Route('/administrateur', name: 'app_admnistrateur')]
    public function admnistrateur(): Response
    {
        return $this->render('default/administrateur.html.twig', [
            'controller_admnistrateur' => 'DefaultController',
        ]);
    }
    #[Route('/client', name: 'app_client', methods: ['GET'])]
    public function client(): Response
    {
        return $this->render('default/client.html.twig', [
            'controller_client' => 'DefaultController',
        ]);
    }
    #[Route('/transporteur', name: 'app_transporteur', methods: ['GET'])]
    public function transporteur(): Response
    {
        return $this->render('default/transporteur.html.twig', [
            'controller_transporteur' => 'DefaultController',
        ]);
    }
    #[Route('/utilisateur', name: 'app_utilisateur', methods: ['GET'])]
     public function utilisateur(): Response
      { 
        return $this->render('default/utilisateur.html.twig', [ 'controller_utilisateur' => 'DefaultController', ]);  
}
#[Route('/type-produit', name: 'app_type_produit', methods: ['GET'])] 
public function typeProduit(): Response 
{
     return $this->render('default/type_produit.html.twig', [ 'controller_type_produit' => 'DefaultController', ]);
}
 #[Route('/produit', name: 'app_produit', methods: ['GET'])]public function produit(): Response
  {
     return $this->render('default/produit.html.twig', ['controller_produit' => 'DefaultController', ]);
   }
   #[Route('/categorie', name: 'app_categorie', methods: ['GET'])]
    public function categorie(): Response
    {
         return $this->render('default/categorie.html.twig', [ 'controller_categorie' => 'DefaultController', ]);
    
    }
#[Route('/comptable', name: 'app_comptable', methods: ['GET'])] public function comptable(): Response
 { 
    return $this->render('default/comptable.html.twig', [ 'controller_comptable' => 'DefaultController', ]);
     } 
#[Route('/secretaire', name: 'app_secretaire', methods: ['GET'])] 
public function secretaire(): Response 
{
     return $this->render('default/secretaire.html.twig', [ 'controller_secretaire' => 'DefaultController', ]); 
     }
 }    

