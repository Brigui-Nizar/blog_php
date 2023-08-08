<?php

declare(strict_types=1);

namespace App\Table;

use App\Core\BaseTable;
use App\Entity\Article;
use PDO;

/**
 * Représente la table des articles
 */
class ArticleTable extends BaseTable
{
    /**
     * Retourne le tableau de tout les article de la
     * base de données
     */
    public function findAll(): array
    {
        // Préparation de la requête SQL
        $request = $this->pdo->prepare("SELECT * FROM articles");

        // Lancement de la requête
        $request->execute();

        // Récupérer les résultats, sous forme de tableaux de la class
        // Article
        $articles = $request->fetchAll(PDO::FETCH_CLASS, Article::class);

        return $articles;
    }

    /**
     * Retourne le tableau des 10 derniers articles de la
     * base de données
     */
    public function findLastTen(): array
    {
        // Préparation de la requête SQL
        $request = $this->pdo->prepare("SELECT  articles.*,users.firstname,users.lastname FROM articles
        LEFT JOIN users ON users.id = articles.author
         ORDER BY articles.createdAt DESC LIMIT 10");

        // Lancement de la requête
        $request->execute();

        // Récupérer les résultats, sous forme de tableaux de la class Article
        $articles = $request->fetchAll(PDO::FETCH_CLASS, Article::class);

        return $articles;
    }

    /**
     * search one article by slug
     */
    public function findOneBySlug(string $slug): Article
    {
        // Préparation de la requête SQL
        $request = $this->pdo->prepare("SELECT  articles.*,users.firstname,users.lastname FROM articles
        LEFT JOIN users ON users.id = articles.author
         WHERE slug = :slug");

        $request->bindParam(':slug', $slug);
        $request->setFetchMode(PDO::FETCH_INTO, new  Article());
        $request->execute();

        $article = $request->fetch();
        return $article;
    }

    /**
     * search one article by slug
     * return 3 Article : [previous, main, next]
     * @param string $slug
     * @return Article[]
     */
    public function findPreviousNextBySlug(string $slug): array
    {
        // Obtenir l'enregistrement correspondant au champ slug
        $request = $this->pdo->prepare("SELECT articles.*,users.firstname,users.lastname FROM articles
    LEFT JOIN users ON users.id = articles.author
    WHERE slug = :slug");
        $request->bindParam(':slug', $slug);
        $request->setFetchMode(PDO::FETCH_CLASS, Article::class);
        $request->execute();
        $mainArticle = $request->fetch();

        // Obtenir les enregistrements avant et après celui du champ slug par createdAt
        $requestBefore = $this->pdo->prepare("SELECT articles.id,articles.createdAt,articles.slug,articles.description,articles.title FROM articles
    WHERE articles.id!=:id AND articles.createdAt > :createdAt  
    ORDER BY articles.createdAt ASC
    LIMIT 1");

        $requestBefore->bindValue(':createdAt', $mainArticle->createdAt);
        $requestBefore->bindValue(':id', $mainArticle->id, PDO::PARAM_INT);

        $requestBefore->setFetchMode(PDO::FETCH_CLASS, Article::class);
        $requestBefore->execute();
        $previousArticle = $requestBefore->fetch();

        $requestAfter = $this->pdo->prepare("SELECT articles.id,articles.createdAt,articles.slug,articles.description,articles.title FROM articles
    WHERE articles.createdAt < :createdAt AND articles.id!=:id
    ORDER BY articles.createdAt DESC
    LIMIT 1");

        $requestAfter->bindValue(':createdAt', $mainArticle->createdAt);
        $requestAfter->bindValue(':id', $mainArticle->id);
        $requestAfter->setFetchMode(PDO::FETCH_CLASS, Article::class);
        $requestAfter->execute();
        $nextArticle = $requestAfter->fetch();

        // Combinez les résultats
        $articles = [
            'previous' => $previousArticle,
            'main' => $mainArticle,
            'next' => $nextArticle,
        ];

        return $articles;
    }
}
