<?php

namespace App\DesignPatterns\Behavioral\Strategy\Payments;

use App\DesignPatterns\Behavioral\Strategy\Contracts\PaymentMethodInterface;

class ApplePayStrategy implements PaymentMethodInterface
{
    public function pay(): string
    {
        return 'apple pay';
    }
}
