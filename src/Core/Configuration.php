<?php

declare(strict_types=1);

namespace App\Core;

use PDO;
use Exception;
use Dotenv\Dotenv;

class Configuration
{
    public function __construct(string $envDir)
    {
        Dotenv::createImmutable($envDir)->load();
    }
    /**
     *  Tester si une configuration éxsiste :
     *  */ 
    public function has(string $envVariable): bool
    {
        return isset($_ENV[$envVariable]);
    }
    /**
     * Récupére une valeur de configuration
     */ 
    public function get(string $envVariable): mixed
    {
        if ($this->has($envVariable)) {

            return $_ENV[$envVariable];
        }

        throw new Exception("Errorr , $envVariable n'existe pas");
    }

    /* public function connectDatabase() :PDO
    {
        $pdo =new PDO(
            "mysql:host={$this->get('DATABASE_HOST')};
            port={$this->get('DATABASE_PORT')};
            dbname={$this->get('DATABASE_NAME')}",
            $this->get('DATABASE_USER'),
            $this->get('DATABASE_PASSWORD'),);
            return $pdo;
    } */
}
