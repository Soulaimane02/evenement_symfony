<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConditionsUtilisationsController extends AbstractController
{
    #[Route('/conditions/utilisations', name: 'app_conditions_utilisations')]
    public function index(): Response
    {
        return $this->render('conditions_utilisations/index.html.twig', [
            'controller_name' => 'ConditionsUtilisationsController',
        ]);
    }
}
