<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Repository\MembersRepository;
use App\Entity\Members;
use App\Form\SignupType;

use Doctrine\ORM\EntityManagerInterface;



class SignupController extends AbstractController
{
    #[Route('/signup', name: 'signup')]
    public function signup(Request $request,EntityManagerInterface $em)
    {
        $member = new Members;  
        $form = $this->createForm(SignupType::class,$member);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em->persist($member);
            $em->flush();


            // Proceed with saving the user or other logic
            return $this->redirectToRoute('login');  // or wherever you want
        }

        return $this->render('signup/index.html.twig',[
            'form' => $form,
        ]);
    }
}
