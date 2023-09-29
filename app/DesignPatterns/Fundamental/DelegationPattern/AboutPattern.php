<?php

namespace App\DesignPatterns\Fundamental\DelegationPattern;

use App\DesignPatterns\AbstractAboutPattern;

class AboutPattern extends AbstractAboutPattern
{

    public function name(): string
    {
        return 'Delegation pattern';
    }

    public function description(): string
    {
        return 'Об\'єкт зовнішньо виражає деяку поведінку, але в реальності передає відповідальність за виконання цієї поведінки іншому об\'єкту.';
    }

    public function example()
    {
        $appMessenger = new AppMessenger();

        echo $this->textFormatter->pGrayText('Стандартна відправка через емейл');
        $appMessenger->setSender('max-email@gmail.com')
            ->setRecipient('alex@gmail.com')
            ->setMessage('Hello! This is email method')
            ->send();
        dump($appMessenger);

        echo $this->textFormatter->pGrayText('Відправка через смс');

        $appMessenger->toSms()
            ->setSender('max-sms@gmail.com')
            ->setRecipient('alex@gmail.com')
            ->setMessage('Hello! This is SMS method')
            ->send();
        dump($appMessenger);
    }
}
