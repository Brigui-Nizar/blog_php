<?php

declare(strict_types=1);

namespace App\Controller;

use App\Core\View;
use App\Table\ArticleTable;
use App\Core\BaseController;

/**
 * Ce controller affiche la page d'accueil de notre blog
 */
class HelloController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function run(): string
    {
        // Je récupére mes articles
        $name = 'Nizar';

        // Je retourne le template (page) "hello" en lui donnant tout le
        // name
        return $this->container->get(View::class)->render('hello', [
            'name' => $name,
        ]);
    }

    /**
     * @inheritdoc
     */
    public function supports(string $uri): bool
    {
        return $uri === '/hello';
    }
}
