<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function findUserByLogin(?string $email = null, ?string $password = null): ?array
    {
        if (!$email || !$password) {
            return null;
        }

        return $this->createQueryBuilder('u')
            ->select('u.id, u.username, u.email') // Specify only necessary fields
            ->andWhere('u.email = :email')
            ->setParameter('email', $email)
            ->andWhere('u.password = :password')
            ->setParameter('password', $password)
            ->getQuery()
            ->getOneOrNullResult(); // Return as array or null
    }

    public function createUser(string $username, string $email, string $password, ?string $phoneNumber = null, ?string $location = null, ?string $role = null): void
    {
        $entityManager = $this->getEntityManager();

        $user = new User();
        $user->setUsername($username);
        $user->setEmail($email);
        $user->setPassword($password); // Consider hashing the password here
        $user->setPhoneNumber($phoneNumber);
        $user->setLocation($location);
        $user->setRole($role);

        $entityManager->persist($user);
        $entityManager->flush();
    }


}
