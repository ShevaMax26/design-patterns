<?php

namespace App\DesignPatterns\Behavioral\TemplateMethod\MakingSandwiches;

class TurkeySandwich extends AbstractSandwich
{
    protected function addPrimaryFilling(): AbstractSandwich
    {
        dump('add some turkey');
        return $this;
    }
}
