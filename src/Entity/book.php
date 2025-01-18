<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;

#[ORM\Entity]
#[ORM\Table(name: 'Books')]
class Book
{
    #[ORM\Id, ORM\GeneratedValue, ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column(type: 'string', length: 100)]
    private string $title;

    #[ORM\Column(type: 'text')]
    private string $description;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    private float $price;

    #[ORM\Column(type: 'string')]
    private string $image;

    #[ORM\Column(type: 'string', length: 50)]
    private string $category;

    #[ORM\ManyToOne(targetEntity: Author::class)]
    #[ORM\JoinColumn(nullable: false)]
    #[ORM\JoinColumn(name: "created_by_id", referencedColumnName: "id", nullable: false)]
    private Author $createdBy;

    #[ORM\Column(type: 'datetime')]
    private \DateTimeInterface $publishedAt;

    // Getters and setters...
}
