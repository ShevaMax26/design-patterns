<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Tailwind;

use App\DesignPatterns\Creational\FactoryMethod\Contracts\CheckboxInterface;

class CheckboxTailwind implements CheckboxInterface
{

    public function draw(): void
    {
        dump(__CLASS__);
    }
}
