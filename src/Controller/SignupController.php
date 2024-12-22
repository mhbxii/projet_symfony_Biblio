<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;


class SignupController extends AbstractController
{
    #[Route('/signup', name: 'signup')]
    public function signup(Request $request)
    {
        if ($request->isMethod('POST')) {
            $username = $request->get('username');
            $email = $request->get('email');
            $password = $request->get('password');
            $passwordConfirm = $request->get('passwordConfirm');
            $phoneNumber = $request->get('phoneNumber');
            $location = $request->get('location');

            // Proceed with saving the user or other logic
            return $this->redirectToRoute('login');  // or wherever you want
        }

        return $this->render('signup/index.html.twig');
    }
}