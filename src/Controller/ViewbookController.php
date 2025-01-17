<?php

namespace App\Controller;

use App\Service\AuthService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Repository\BooksRepository;
use App\Repository\AuthorsRepository;
use App\Entity\Books;

class ViewbookController extends AbstractController
{
    #[Route('/viewbook/{id<\d+>}', name: 'app_viewbook')]
    public function index($id,AuthService $authService,BooksRepository $book_repository,AuthorsRepository $author_repository): Response
    {
        $book = new Books;
        $book = $book_repository->find($id);
        $author = $author_repository->find($book->getAuthorId());
        //dd($book);
        return $this->render('viewbook/index.html.twig', [
            'navbar' => $this->renderView('navbar/index.html.twig', [
                'isLoggedIn' => $authService->isLoggedIn()
            ]),
            'book' => $book,
            'author' => $author
        ]);
    }
}
