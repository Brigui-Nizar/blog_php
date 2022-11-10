<?php

declare(strict_types=1);

namespace App\Entity;

/**
 * Article Entity
 */
class Article
{
   public int $id;
   public string $title;
   public string $slug;
   public string $description;
   public string $content;
   public string $shortDescription;
   public string $createdAt;
   public string $updatedAt;
   public int $author;

}
