<?php

namespace App\DesignPatterns\Creational\Builder;

interface BlogPostBuilderInterface
{
    public function create(): BlogPostBuilderInterface;

    public function setTitle(string $value): BlogPostBuilderInterface;

    public function setBody(string $value): BlogPostBuilderInterface;

    public function setCategories(array $data): BlogPostBuilderInterface;

    public function setTags(array $data): BlogPostBuilderInterface;

    public function getBlogPost(): BlogPost;
}
