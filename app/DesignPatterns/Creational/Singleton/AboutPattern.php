<?php

namespace App\DesignPatterns\Creational\Singleton;

use App\DesignPatterns\AbstractAboutPattern;
use App\DesignPatterns\Creational\Singleton\Traits\PostSingleton;

class AboutPattern extends AbstractAboutPattern
{

    public function name(): string
    {
        return 'Singleton';
    }

    public function description(): string
    {
        return 'Шаблон проєктування гарантує, що клас матиме тільки один екземпляр, і забезпечує глобальну точку доступу до цього екземпляра. Через низку притаманних недоліків деякі розробники вважають його антипатерном або «душком» коду.';
    }

    public function example()
    {
        echo $this->textFormatter->image(asset('images/patterns/singleton.png'));

        echo $this->textFormatter->pGrayText('Перший раз створюємо обʼєкт як одинака і наділяємо властивістю');
        $postFirst = PostSingleton::getInstance();
        $postFirst->setText('First message!');
        dump($postFirst);

        echo $this->textFormatter->pGrayText('Ще раз дістаємо об\'єкт');
        $postSecond = PostSingleton::getInstance();
        $postSecond->setText('Second message!');
        dump($postSecond);

        echo $this->textFormatter->pGrayText('Порівнюємо обʼєкти');
        dump($postFirst === $postSecond);
    }
}


