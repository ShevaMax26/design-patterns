<?php

namespace App\DesignPatterns\Creational\Singleton\Traits;

class PostSingleton
{
    use Singleton;

    private string $text;

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }
}
