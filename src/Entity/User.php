<?php

declare(strict_types=1);

namespace App\Entity;
/**
 * User Entity 
 */
class User
{
    public int $id;
    public string $email;
    public string $password;
    public string $firstname;
    public string $lastname;
    public string $createdAt;
    public string $updateAt;
}
