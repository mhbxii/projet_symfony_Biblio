<?php

namespace App\Controller;

use App\Service\AuthService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ViewbookController extends AbstractController
{
    #[Route('/viewbook', name: 'app_viewbook')]
    public function index(AuthService $authService): Response
    {
        return $this->render('viewbook/index.html.twig', [
            'navbar' => $this->renderView('navbar/index.html.twig', [
                'isLoggedIn' => $authService->isLoggedIn(),
            ]),
        ]);
    }
}
