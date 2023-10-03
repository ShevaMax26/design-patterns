<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

use App\DesignPatterns\Creational\FactoryMethod\Contracts\FormInterface;
use App\DesignPatterns\Creational\FactoryMethod\Contracts\GuiFactoryInterface;

abstract class AbstractForm implements FormInterface
{
    abstract public function createGuiKit(): GuiFactoryInterface;
    public function render(): void
    {
        $guiKit = $this->createGuiKit();
        $guiKit->buildCheckbox()->draw();
        $guiKit->buildButton()->draw();
    }
}
