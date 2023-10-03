<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Tailwind;

use App\DesignPatterns\Creational\FactoryMethod\Contracts\ButtonInterface;
use App\DesignPatterns\Creational\FactoryMethod\Contracts\CheckboxInterface;
use App\DesignPatterns\Creational\FactoryMethod\Contracts\GuiFactoryInterface;

class TailwindFactory implements GuiFactoryInterface
{

    public function buildButton(): ButtonInterface
    {
        return new ButtonTailwind();
    }

    public function buildCheckbox(): CheckboxInterface
    {
        return new CheckboxTailwind();
    }
}
