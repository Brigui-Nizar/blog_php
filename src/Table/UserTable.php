<?php

declare(strict_types=1);

namespace App\Table;

use PDO;
use App\Core\BaseTable;
use App\Entity\User;

/**
 * Search User in DataBase FROM users
 */
class UserTable extends BaseTable
{
    protected string $tableName="users";
    /**
     * Search All User in DataBase FROM users
     * @return array([User::class],[User::class],...)
     */
    public function findAll(): array
    {
        $request = $this->pdo->prepare('SELECT * FROM users');
        $request->execute();

        return  $request->fetchAll(PDO::FETCH_CLASS, User::class);
    }

    /**
     * Search User in DataBase FROM users
     * @param int $id
     * @return User::class
     */
    public function findbyId(int $id)
    {
        $request = $this->pdo->prepare('SELECT * FROM users WHERE id=:id');
        $request->bindParam(':id', $id, PDO::PARAM_INT);
        $request->execute();
        $request->setFetchMode(PDO::FETCH_CLASS, User::class);
        return  $request->fetch();
    }

    public function FunctionName()
    {
       return $this::class;
    }
}
