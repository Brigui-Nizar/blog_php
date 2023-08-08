<?php

declare(strict_types=1);

namespace App\Controller;

use App\Core\View;
use App\Table\ArticleTable;
use App\Core\BaseController;

/**
 * Ce controller affiche la page d'articles de notre blog
 */
class ArticlesController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function run(): string
    {

        if (isset($_GET['slug'])) {
            $articles = $this->container->get(ArticleTable::class)->findPreviousNextBySlug($_GET['slug']);
            return $this->container->get(View::class)->render('layout/page.tpl', [

                'articles' => $articles,
                'pageTitle' =>  $articles['main']->title,
            ]);
        };

        // Je récupére mes articles
        $articles = $this->container->get(ArticleTable::class)->findLastTen();
        // Je retourne le template (page) "home" en lui donnant tout les articles
        return $this->container->get(View::class)->render('articles', [

            'articles' => $articles,
            'pageTitle' => 'les derniers articles',
            'pageTitleDescription' => 'mes derniers voyages',
            'pageBackground' => '/assets/img/bg-articles.jpg'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function supports(string $method, string $uri): bool
    {
        return $uri === '/articles';
    }
}
