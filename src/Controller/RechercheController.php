<?php

// src/Controller/RechercheController.php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface; // Importez EntityManagerInterface
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RechercheController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/recherche', name: 'app_recherche')]
    public function rechercheAction(Request $request): Response
    {
        $recherche = $request->query->get('recherche');

        // Utilisez l'EntityManager directement
        $resultats = $this->entityManager->getRepository(User::class)->recherche($recherche);

        return $this->render('recherche/index.html.twig', [
            'resultats' => $resultats,
            'recherche' => $recherche,
        ]);
    }
}

