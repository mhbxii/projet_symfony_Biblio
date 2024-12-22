<?php

namespace App\Controller;

use App\Service\AuthService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AboutController extends AbstractController
{
    #[Route('/about', name: 'app_about')]
    public function index(AuthService $authService): Response
    {
        return $this->render('about/index.html.twig', [
            'navbar' => $this->renderView('navbar/index.html.twig', [
                'isLoggedIn' => $authService->isLoggedIn(),
            ]),
        ]);
    }
}
