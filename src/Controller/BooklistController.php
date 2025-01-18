<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BooklistController extends AbstractController
{
    #[Route('/booklist', name: 'app_booklist')]
    public function index(): Response
    {
        $book = [];

        // Pass the books data to the template
        return $this->render('booklist/index.html.twig', [
            'books' => $books,
            'isFilterVisible' => false,
        ]);
    }
}
