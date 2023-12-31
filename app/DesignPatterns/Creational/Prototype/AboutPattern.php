<?php

namespace App\DesignPatterns\Creational\Prototype;

use App\DesignPatterns\AbstractAboutPattern;
use Carbon\Carbon;

class AboutPattern extends AbstractAboutPattern
{
    public function name(): string
    {
        return 'Prototype';
    }

    public function description(): string
    {
        return 'Визначає інтерфейс створення об\'єкта через клонування іншого об\'єкта замість створення через конструктор.';
    }

    public function example()
    {
        echo $this->textFormatter->image(asset('images/patterns/prototype.png'));

        $client = new Client(1, 'Тор Одінсон');
        $order = new Order(4, Carbon::parse('31.12.2023 14:00:00'), $client);
        $client->addOrder($order);
        $clonedOrder = clone $order;
        $clonedOrder->deliveryDate->addDay();
        echo $this->textFormatter->pGrayText('Створюємо клієнта');
        dump($client);
        echo $this->textFormatter->pGrayText('Створюємо замовлення клієнту');
        dump($order);
        echo $this->textFormatter->pGrayText('Клонуємо замовлення');
        dump($clonedOrder);
    }
}
