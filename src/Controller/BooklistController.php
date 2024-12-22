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
        // Example data (you can replace this with data from the database later)
        $books = [
            [
                'id' => 1,
                'title' => 'Book 1',
                'description' => 'Description for book 1.',
                'price' => 10.99,
                'image' => '0.jpg',
                'category' => 'Fiction',
                'publishedAt' => '2024-01-01T10:00:00',
                'createdBy' => ['id' => 1, 'name' => 'Auth 1'],
                'country' => 'Tunisia'
            ],
            [
                'id' => 2,
                'title' => 'Book 2',
                'description' => 'Description for book 2.',
                'price' => 12.99,
                'image' => '0.jpg',
                'category' => 'Fiction',
                'publishedAt' => '2024-01-01T10:00:00',
                'createdBy' => ['id' => 1, 'name' => 'Auth 10'],
                'country' => 'Tunisia'
            ],
            [
                'id' => 2,
                'title' => 'Book 2',
                'description' => 'Description for book 2.',
                'price' => 12.99,
                'image' => '0.jpg',
                'category' => 'Fiction',
                'publishedAt' => '2024-01-01T10:00:00',
                'createdBy' => ['id' => 1, 'name' => 'Auth 11'],
                'country' => 'Tunisia'
            ],
            [
                'id' => 2,
                'title' => 'Book 2',
                'description' => 'Description for book 2.',
                'price' => 12.99,
                'image' => '0.jpg',
                'category' => 'Fiction',
                'publishedAt' => '2024-01-01T10:00:00',
                'createdBy' => ['id' => 1, 'name' => 'Auth 13'],
                'country' => 'Tunisia'
            ],
            [
                'id' => 2,
                'title' => 'Book 2',
                'description' => 'Description for book 2.',
                'price' => 12.99,
                'image' => '0.jpg',
                'category' => 'Fiction',
                'publishedAt' => '2024-01-01T10:00:00',
                'createdBy' => ['id' => 1, 'name' => 'Auth 13'],
                'country' => 'Tunisia'
            ],
            [
                'id' => 2,
                'title' => 'Book 2',
                'description' => 'Description for book 2.',
                'price' => 12.99,
                'image' => '0.jpg',
                'category' => 'Fiction',
                'publishedAt' => '2024-01-01T10:00:00',
                'createdBy' => ['id' => 1, 'name' => 'Auth 13'],
                'country' => 'Tunisia'
            ],
            [
                'id' => 2,
                'title' => 'Book 2',
                'description' => 'Description for book 2.',
                'price' => 12.99,
                'image' => '0.jpg',
                'category' => 'Fiction',
                'publishedAt' => '2024-01-01T10:00:00',
                'createdBy' => ['id' => 1, 'name' => 'Auth 13'],
                'country' => 'Tunisia'
            ],
            [
                'id' => 2,
                'title' => 'Book 2',
                'description' => 'Description for book 2.',
                'price' => 12.99,
                'image' => '0.jpg',
                'category' => 'Fiction',
                'publishedAt' => '2024-01-01T10:00:00',
                'createdBy' => ['id' => 1, 'name' => 'Auth 13'],
                'country' => 'Tunisia'
            ],
            [
                'id' => 2,
                'title' => 'Book 2',
                'description' => 'Description for book 2.',
                'price' => 12.99,
                'image' => '0.jpg',
                'category' => 'Fiction',
                'publishedAt' => '2024-01-01T10:00:00',
                'createdBy' => ['id' => 1, 'name' => 'Auth 13'],
                'country' => 'Tunisia'
            ],
            [
                'id' => 2,
                'title' => 'Book 2',
                'description' => 'Description for book 2.',
                'price' => 12.99,
                'image' => '0.jpg',
                'category' => 'Fiction',
                'publishedAt' => '2024-01-01T10:00:00',
                'createdBy' => ['id' => 1, 'name' => 'Auth 13'],
                'country' => 'Tunisia'
            ],
            [
                'id' => 2,
                'title' => 'Book 2',
                'description' => 'Description for book 2.',
                'price' => 12.99,
                'image' => '0.jpg',
                'category' => 'Fiction',
                'publishedAt' => '2024-01-01T10:00:00',
                'createdBy' => ['id' => 1, 'name' => 'Auth 13'],
                'country' => 'Tunisia'
            ],
            [
                'id' => 2,
                'title' => 'Book 2',
                'description' => 'Description for book 2.',
                'price' => 12.99,
                'image' => '0.jpg',
                'category' => 'Fiction',
                'publishedAt' => '2024-01-01T10:00:00',
                'createdBy' => ['id' => 1, 'name' => 'Auth 13'],
                'country' => 'Tunisia'
            ],
            [
                'id' => 2,
                'title' => 'Book 2',
                'description' => 'Description for book 2.',
                'price' => 12.99,
                'image' => '0.jpg',
                'category' => 'Fiction',
                'publishedAt' => '2024-01-01T10:00:00',
                'createdBy' => ['id' => 1, 'name' => 'Auth 13'],
                'country' => 'Tunisia'
            ],
            [
                'id' => 2,
                'title' => 'Book 2',
                'description' => 'Description for book 2.',
                'price' => 12.99,
                'image' => '0.jpg',
                'category' => 'Fiction',
                'publishedAt' => '2024-01-01T10:00:00',
                'createdBy' => ['id' => 1, 'name' => 'Auth 13'],
                'country' => 'Tunisia'
            ],
            [
                'id' => 2,
                'title' => 'Book 2',
                'description' => 'Description for book 2.',
                'price' => 12.99,
                'image' => '0.jpg',
                'category' => 'Fiction',
                'publishedAt' => '2024-01-01T10:00:00',
                'createdBy' => ['id' => 1, 'name' => 'Auth 13'],
                'country' => 'Tunisia'
            ],
            // Add more books here...
        ];

        // Pass the books data to the template
        return $this->render('booklist/index.html.twig', [
            'books' => $books,
            'isFilterVisible' => false,
        ]);
    }
}
