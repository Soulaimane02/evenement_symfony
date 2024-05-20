<?php

namespace App\Controller;

use App\Form\RecommandationType;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RecommandationController extends AbstractController
{
    #[Route('/recommandation', name: 'app_recommandation')]
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(RecommandationType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $data = $form->getData();
            $sonMail = $data['email'];
            $saDescrition = $data['description'];
            $email = (new Email())
                ->from('developpeur0011@gmail.com')
                ->to($sonMail)
                ->subject('Vous avez reçu une proposition pour un evenement !')
                ->text($saDescrition);
            $mailer->send($email);
            return $this->redirectToRoute('app_accueil');

        }
        return $this->renderForm('recommandation/index.html.twig', [
            'controller_name' => 'RecommandationController',
            'formulaire' =>$form
        ]);
    }
}
