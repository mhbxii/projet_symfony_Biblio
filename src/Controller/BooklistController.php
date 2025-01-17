<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\BooksRepository;

class BooklistController extends AbstractController
{
    #[Route('/booklist', name: 'app_booklist')]
    public function index(BooksRepository $repository): Response
    {
        // Example data (you can replace this with data from the database later)
        $books = $repository->findAll();
        

        // Pass the books data to the template
        return $this->render('booklist/index.html.twig', [
            'books' => $books,
            'isFilterVisible' => false,
        ]);
    }
}
