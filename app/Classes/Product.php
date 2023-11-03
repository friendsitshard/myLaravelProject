<?php

namespace App\Classes;

use App\Notifications\ProductNotification;
use Illuminate\Notifications\Notifiable;

class Product
{
    use Notifiable;

    public string $name;
    public float $price;
    public int $quantity;

    public function __construct(string $name, float $price, int $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function routeNotificationFor($driver, $notification = null): string
    {
        return 'product@example.com';
    }
}
