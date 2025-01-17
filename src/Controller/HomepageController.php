<?php

namespace App\Controller;

use App\Service\AuthService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\BooksRepository;
use App\Repository\authorsRepository;

class HomepageController extends AbstractController
{
    #[Route('/home', name: 'home', methods: ['GET', 'POST'])]
    public function index(AuthService $authService, Request $request,BooksRepository $repository): Response
    {
        $isFilterVisible = false;

        $searchInput = $request->request->get('searchInput', '');
        $sortOrder = $request->request->get('sortOrder', '');
        $selectedCategory = $request->request->get('selectedCategory', '');

        $books = $repository->findAll();


        return $this->render('homepage/index.html.twig', [
            'isLoggedIn' => $authService->isLoggedIn(),
            'navbar' => $this->renderView('navbar/index.html.twig', [
                'isLoggedIn' => $authService->isLoggedIn(),
            ]),
            'booklist' => $this->renderView('booklist/index.html.twig', [
                'books' => $books,
                'isFilterVisible' => $isFilterVisible,
                //'debugValue' => $authService->isLoggedIn(), 
            ]),
            'footer' => $this->renderView('footer/index.html.twig'),
            'filter' => $this->renderView('filter/index.html.twig'),
            'hero' => $this->renderView('hero/index.html.twig'),
            'selectedCategory' => $selectedCategory,
            'sortOrder' => $sortOrder, 
            'searchInput' => $searchInput,
        ]);
    }    
}