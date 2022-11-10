<?php

declare(strict_types=1);

namespace App\Core;

use PDO;
use App\Entity\User;
/**
 * Classe parente de la base de donnée
 * @return PDO Object
 */

class BaseTable
{
    protected PDO $pdo;

    public function __construct(PDO $pdo)
    {
        // Utiliser l'objet Configuration !
        $this->pdo = $pdo;       

        return $this->pdo;
    }

    // une méthode fetchAll fetchOne
     /**
     * Search User in DataBase FROM users
     * @param int $id
     * @return User::class
     */
    public function fetchOne(int $id):User
    {
        $request = $this->pdo->prepare('SELECT * FROM users WHERE id=:id');
        $request->bindParam('id', $id);
        $request->execute();
        $request->setFetchMode(PDO::FETCH_CLASS, User::class);
        return  $request->fetch();
    }
}
