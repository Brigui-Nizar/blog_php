<?php

declare(strict_types=1);

namespace App\Core;

use Exception;

/**
 * Permet d'afficher un template PHP
 */
class View
{
    protected string $templateDir;

    public function __construct(string $templateDir)
    {
        $this->templateDir=$templateDir;
    }

    public function render(string $template, array $data=[]) :string
    {
        //On demarre le buffer
        ob_start();

        extract($data);

        $filename= "{$this->templateDir}/$template.php";

        if(!file_exists( $filename)){

            throw new Exception(" il n'y a pas de pages qui corresond à $filename");

        };

        include $filename;

        return ob_get_clean();
    }

}