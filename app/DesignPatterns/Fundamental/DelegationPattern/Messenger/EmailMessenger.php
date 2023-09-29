<?php

namespace App\DesignPatterns\Fundamental\DelegationPattern\Messenger;

class EmailMessenger extends AbstractMessenger
{
    public function send(): bool
    {
        dump('Send by ' . __METHOD__);

        return parent::send();
    }
}
