<?php

namespace Adler\Corepackege;

interface AuthenticationInterfaceService
{
    public function check(): bool;

    public function getCurrentUser(): Object|null;

    public function authenticate(string $email, string $password): bool;

    public function sessionOrCookie(): int;
}