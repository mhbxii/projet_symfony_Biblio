<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'users')]
class User
{
    #[ORM\Id, ORM\GeneratedValue, ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column(type: 'string', length: 50)]
    private string $username;

    #[ORM\Column(type: 'string', unique: true)]
    private string $email;

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $image;

    #[ORM\Column(type: 'string', length: 15, nullable: true)]
    private ?string $phoneNumber;

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $location;

    #[ORM\Column(type: 'string')]
    private string $role;

    #[ORM\Column(type: 'datetime')]
    private \DateTimeInterface $createdAt;

    #[ORM\Column(type: 'datetime')]
    private \DateTimeInterface $updatedAt;

    // Getters and setters...
}
