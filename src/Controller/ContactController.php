<?php

namespace App\Controller;

use App\Service\AuthService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(AuthService $authService): Response
    {
        return $this->render('contact/index.html.twig', [
            'navbar' => $this->renderView('navbar/index.html.twig', [
                'isLoggedIn' => $authService->isLoggedIn(),
            ]),
        ]);
    }
}
