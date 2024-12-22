<?php

namespace App\Controller;

use App\Service\AuthService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function login(Request $request, AuthService $authService): Response
    {
        if ($request->isMethod('POST')) {
            $email = $request->get('email');
            $password = $request->get('password');

            // Dummy validation (replace with database or API authentication)
            if ($email === 'boss@gmail.com' && $password === '123') {

                $userData = ['name' => 'Mhbxii', 'email' => $email];
                $authService->login($userData);

                $this->addFlash('success', 'Login successful!');
                return $this->redirectToRoute('home');
            }

            $this->addFlash('error', 'Invalid email or password.');
        }

        return $this->render('login/index.html.twig');
    }

    #[Route('/logout', name: 'logout')]
    public function logout(AuthService $authService): Response
    {
        $authService->logout();  // Call the logout method
        return $this->redirectToRoute('home');  // Redirect them to the homepage or another route
    }

}
