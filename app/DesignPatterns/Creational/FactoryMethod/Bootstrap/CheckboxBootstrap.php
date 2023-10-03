<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Bootstrap;

use App\DesignPatterns\Creational\FactoryMethod\Contracts\CheckboxInterface;

class CheckboxBootstrap implements CheckboxInterface
{

    public function draw(): void
    {
        dump(__CLASS__);
    }
}
