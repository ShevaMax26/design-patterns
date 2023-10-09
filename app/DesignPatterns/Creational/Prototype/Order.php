<?php

namespace App\DesignPatterns\Creational\Prototype;

use Carbon\Carbon;
use function Symfony\Component\Translation\t;

class Order
{
    public int $id;

    public Carbon $deliveryDate;

    public Client $client;

    public function __construct(int $id, Carbon $deliveryDate, Client $client)
    {
        $this->id = $id;
        $this->deliveryDate = $deliveryDate;
        $this->client = $client;
    }

    public function __clone(): void
    {
        $this->id = max(array_keys($this->client->getOrders())) + 1;
        $this->deliveryDate = $this->deliveryDate->copy();
        $this->client->addOrder($this);
    }
}
