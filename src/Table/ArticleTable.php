<?php

declare(strict_types=1);

namespace App\Table;

use PDO;
use App\Core\BaseTable;
use App\Entity\Article;

/**
 * Search article in DataBase FROM articles
 */
class ArticleTable extends BaseTable
{
    /**
     * Search All Article in DataBase FROM articles
     * @return array([Article::class],[Article::class],...)
     */
    public function findAll(): array
    {
        $request = $this->pdo->prepare('SELECT * FROM articles ');
        $request->execute();

        return  $request->fetchAll(PDO::FETCH_CLASS, Article::class);
    }
}
