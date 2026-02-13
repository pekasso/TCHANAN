<?php

namespace App\Controller;

use App\Entity\Administrateur;
use App\Form\AdministrateurType; // Tu devras créer ce formulaire
use App\Repository\AdministrateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/administrateur')]
class AdministrateurController extends AbstractController
{
    
    #[Route('/', name: 'app_administrateur_index', methods: ['GET'])]
    public function index(AdministrateurRepository $repository): Response
    {
        return $this->render('administrateur/index.html.twig', [
            'administrateurs' => $repository->findAll(),
        ]);
    }

    /**
     * Créer un nouvel administrateur
     */
    /*
    #[Route('/new', name: 'app_administrateur_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $administrateur = new Administrateur();
        $form = $this->createForm(AdministrateurType::class, $administrateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Note : Pense à hasher le mot de passe ici si nécessaire !
            $entityManager->persist($administrateur);
            $entityManager->flush();

            $this->addFlash('success', 'Administrateur créé avec succès.');
            return $this->redirectToRoute('app_administrateur_index');
        }

        return $this->render('administrateur/new.html.twig', [
            'administrateur' => $administrateur,
            'form' => $form,
        ]);
    }

    /**
     * Modifier un administrateur
     */
    /** 
    #[Route('/{id}/edit', name: 'app_administrateur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Administrateur $administrateur, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AdministrateurType::class, $administrateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Administrateur mis à jour.');
            return $this->redirectToRoute('app_administrateur_index');
        }

        return $this->render('administrateur/edit.html.twig', [
            'administrateur' => $administrateur,
            'form' => $form,
        ]);/*
    }

    /**
     * Supprimer un administrateur (avec vérification du jeton CSRF)
     
    #[Route('/{id}', name: 'app_administrateur_delete', methods: ['POST'])]
    public function delete(Request $request, Administrateur $administrateur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$administrateur->getId(), $request->request->get('_token'))) {
            $entityManager->remove($administrateur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_administrateur_index'
        );*/
    }
    


