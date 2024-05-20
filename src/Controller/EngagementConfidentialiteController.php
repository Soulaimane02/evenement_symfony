<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EngagementConfidentialiteController extends AbstractController
{
    #[Route('/engagement/confidentialite', name: 'app_engagement_confidentialite')]
    public function index(): Response
    {
        return $this->render('engagement_confidentialite/index.html.twig', [
            'controller_name' => 'EngagementConfidentialiteController',
        ]);
    }
}
