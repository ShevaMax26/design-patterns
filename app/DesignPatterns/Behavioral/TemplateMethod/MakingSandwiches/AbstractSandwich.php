<?php

namespace App\DesignPatterns\Behavioral\TemplateMethod\MakingSandwiches;

abstract class AbstractSandwich
{
    public function make(): bool
    {
        $this->layBread()
            ->addLettuce()
            ->addPrimaryFilling()
            ->addSauces();

        return true;
    }
    protected function layBread(): self
    {
        dump('laying down the bread');
        return $this;
    }

    protected function addLettuce(): self
    {
        dump('add some lettuce');
        return $this;
    }

    protected function addSauces(): self
    {
        dump('add ketchup and mayonnaise');
        return $this;
    }

    protected abstract function addPrimaryFilling(): self;
}
