<?php

namespace App\DesignPatterns\Fundamental\PropertyContainer;

class BlogPost
{
    private string $title;

    private int $category_id;

    public PropertyContainer $propertyContainer;

    public function __construct()
    {
        $this->propertyContainer = new PropertyContainer;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->category_id;
    }

    /**
     * @param int $id
     */
    public function setCategoryId(int $id): void
    {
        $this->category_id = $id;
    }


}
