<?php

namespace App\DesignPatterns\Fundamental\PropertyContainer;

use App\DesignPatterns\AbstractAboutPattern;

class AboutPattern extends AbstractAboutPattern
{
    public function name(): string
    {
        return 'Property container';
    }

    public function description(): string
    {
        return 'Дозволяє додавати додаткові властивості для класу в контейнер (всередині класу) замість розширення класу новими властивостями.';
    }

    public function example()
    {
        $post = new BlogPost();

        $post->setTitle('Вина АТБ');
        $post->setCategoryId(10);

        echo $this->textFormatter->pGrayText('Стандартний пост об\'єкт');
        dump($post);

        $post->propertyContainer->addProperty('available', true);
        $post->propertyContainer->addProperty('orders_count', 98);
        $post->propertyContainer->updateProperty('orders_count', 99);

        $post->propertyContainer->addProperty('expensive', true);
        $post->propertyContainer->deleteProperty('expensive');

        echo $this->textFormatter->pGrayText('Пост об\'єкт після добавлення додаткових властивостей через контейнер');
        dump($post);
    }
}
