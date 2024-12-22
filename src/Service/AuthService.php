<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;

class AuthService
{
    private $session;

    public function __construct(RequestStack $requestStack)
    {
        $this->session = $requestStack->getSession();
    }

    public function login(array $userData): void
    {
        $this->session->set('isLoggedIn', true);
        $this->session->set('userData', $userData);
    }

    public function logout(): void
    {
        $this->session->remove('isLoggedIn');
        $this->session->remove('userData');
    }

    public function isLoggedIn(): bool
    {
        return $this->session->get('isLoggedIn', false);
    }

    public function getUserData(): ?array
    {
        return $this->session->get('userData', null);
    }
}
