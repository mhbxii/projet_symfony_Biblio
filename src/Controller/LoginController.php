<?php

namespace App\Controller;

use App\Service\AuthService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Repository\MembersRepository;
use App\Form\LoginFormType;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function login(Request $request, AuthService $authService,MembersRepository $m): Response
    {
        $form = $this->createForm(LoginFormType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $form_content = $request->request->all('login_form');
            $email = $form_content['email'];
            $password = $form_content['password'];
            
            $member = $m->findOneBy(
                ['email' => $email,
                'password' => $password]
            );
        
            if ($member!=null) {
                //$authService->login($member);

                $this->addFlash('success', 'Login successful!');
                return $this->redirectToRoute('home');
            }

            $this->addFlash('error', 'Invalid email or password.');
        }

        return $this->render('login/index.html.twig',[
            'form' => $form,
        ]);
    }

    #[Route('/logout', name: 'logout')]
    public function logout(AuthService $authService): Response
    {
        $authService->logout();  // Call the logout method
        return $this->redirectToRoute('home');  // Redirect them to the homepage or another route
    }

}
