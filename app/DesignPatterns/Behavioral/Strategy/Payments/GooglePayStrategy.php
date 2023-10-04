<?php

namespace App\DesignPatterns\Behavioral\Strategy\Payments;

use App\DesignPatterns\Behavioral\Strategy\Contracts\PaymentMethodInterface;

class GooglePayStrategy implements PaymentMethodInterface
{
    public function pay(): string
    {
        return 'google pay';
    }
}
