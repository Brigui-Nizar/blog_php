<?php

declare(strict_types=1);

namespace App\Entity;

#[\AllowDynamicProperties]
class Article
{
    public int $id;

    public string $slug;

    public string $title;

    public string $description;

    public string $shortDescription;

    public string $content;

    public string $createdAt;

    public string $updatedAt;

    public int $author;
}
