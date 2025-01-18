<?php

// src/Repository/BookRepository.php

namespace App\Repository;

use App\Entity\Book;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class BookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Book::class);
    }

    // Method to fetch books along with their authors
    // src/Repository/BookRepository.php

    public function findAllBooksWithAuthors(?string $searchInput = null, ?string $selectedCategory = null, ?string $sortOrder = null): array
    {
        $queryBuilder = $this->createQueryBuilder('b')
            ->leftJoin('b.createdBy', 'a')  // Join with Author entity
            ->addSelect('a');  // Select Author fields

        if ($searchInput) {
            $queryBuilder->andWhere('b.title LIKE :searchInput OR b.description LIKE :searchInput')
                ->setParameter('searchInput', '%' . $searchInput . '%');
        }
        // Apply category filter if provided
        if ($selectedCategory) {
            $queryBuilder->andWhere('b.category = :category')
                ->setParameter('category', $selectedCategory);
        }

        // Apply sorting if provided
        if ($sortOrder) {
            // Determine sort direction (ASC or DESC)
            $sortDirection = (in_array($sortOrder, ['+', 'ASC'], true)) ? 'ASC' : 'DESC';
            $queryBuilder->orderBy('b.title', $sortDirection);  // You can change 'b.title' to any field for sorting
        }

        return $queryBuilder->getQuery()->getArrayResult();  // Return as array
    }

}
