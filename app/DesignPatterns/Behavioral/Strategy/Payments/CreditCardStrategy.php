<?php

namespace App\DesignPatterns\Behavioral\Strategy\Payments;

use App\DesignPatterns\Behavioral\Strategy\Contracts\PaymentMethodInterface;

class CreditCardStrategy implements PaymentMethodInterface
{
    public function pay(): string
    {
        return 'credit card';
    }
}
