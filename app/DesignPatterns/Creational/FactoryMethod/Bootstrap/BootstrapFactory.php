<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Bootstrap;

use App\DesignPatterns\Creational\FactoryMethod\Contracts\ButtonInterface;
use App\DesignPatterns\Creational\FactoryMethod\Contracts\CheckboxInterface;
use App\DesignPatterns\Creational\FactoryMethod\Contracts\GuiFactoryInterface;

class BootstrapFactory implements GuiFactoryInterface
{

    public function buildButton(): ButtonInterface
    {
        return new ButtonBootstrap();
    }

    public function buildCheckbox(): CheckboxInterface
    {
        return new CheckboxBootstrap();
    }
}
