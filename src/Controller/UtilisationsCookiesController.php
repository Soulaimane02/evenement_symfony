<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UtilisationsCookiesController extends AbstractController
{
    #[Route('/utilisations/cookies', name: 'app_utilisations_cookies')]
    public function index(): Response
    {
        return $this->render('utilisations_cookies/index.html.twig', [
            'controller_name' => 'UtilisationsCookiesController',
        ]);
    }
}
