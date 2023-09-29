<?php

namespace App\DesignPatterns\Fundamental\DelegationPattern\Messenger;

class SmsMessenger extends AbstractMessenger
{
    public function send(): bool
    {
        dump('Send by ' . __METHOD__);

        return parent::send();
    }
}
