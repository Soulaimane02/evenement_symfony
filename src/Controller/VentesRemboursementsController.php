<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VentesRemboursementsController extends AbstractController
{
    #[Route('/ventes/remboursements', name: 'app_ventes_remboursements')]
    public function index(): Response
    {
        return $this->render('ventes_remboursements/index.html.twig', [
            'controller_name' => 'VentesRemboursementsController',
        ]);
    }
}
