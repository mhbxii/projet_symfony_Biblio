<?php

namespace App\Controller;

use App\Service\AuthService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomepageController extends AbstractController
{
    #[Route('/home', name: 'home', methods: ['GET', 'POST'])]
    public function index(AuthService $authService, Request $request): Response
    {
        $isFilterVisible = false;

        $searchInput = $request->request->get('searchInput', '');
        $sortOrder = $request->request->get('sortOrder', '');
        $selectedCategory = $request->request->get('selectedCategory', '');


        $book1 = [
                'id' => 1,
                'title' => 'Book 1',
                'description' => 'Description for book 1.',
                'price' => 10.99,
                'image' => '0.jpg',
                'category' => 'Fiction',
                'publishedAt' => '2024-01-01T10:00:00',
                'createdBy' => ['id' => 1, 'name' => 'Auth 1'],
                'country' => 'Tunisia'
        ];
        $book2 = [
                'id' => 2,
                'title' => 'Book 2',
                'description' => 'Description for book 2.',
                'price' => 12.99,
                'image' => '0.jpg',
                'category' => 'Fiction',
                'publishedAt' => '2024-01-01T10:00:00',
                'createdBy' => ['id' => 1, 'name' => 'Auth 10'],
                'country' => 'Tunisia'
        ];


        $books = [$book1, $book2, $book1, $book2, $book1, $book2, $book1, $book2];


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