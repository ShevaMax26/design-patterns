<?php

namespace App\DesignPatterns\Behavioral\Strategy\Contracts;

interface PaymentMethodInterface
{
    public function pay(): string;
}
