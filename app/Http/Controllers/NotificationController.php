<?php

namespace App\Http\Controllers;

use App\Classes\Product;
use App\Notifications\ProductNotification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function store(Request $request){

        $product = new Product(
            $request['name'],
            $request['price'],
            $request['quantity']
        );

        $product->notify(new ProductNotification());
    }
}
