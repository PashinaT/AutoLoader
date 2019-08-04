<?php

namespace MyProject\Models\Articles;

class Article
{
    private $title;
    private $text;
    private $author;

    public function __construct(string $title, string $text, \MyProject\Models\Users\User $author)
    {
        $this->title = $title;
        $this->text = $text;
        $this->author = $author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getAuthor(): \MyProject\Models\Users\User
    {
        return $this->author;
    }
}
