<?php

use App\Models\Comment;
use App\Models\Order;
use App\Models\Pizza;
use \App\Models\Drink;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('main', function () {
    $comments = Comment::all();

    return view('mainPage', ['page'=>'main', 'comments'=>$comments]);
});

Route::get('menu', function()
{
    $pizzas = Pizza::all();
    $drinks = Drink::all();

    return view('menu', ['page'=>'menu', 'pizzas'=>$pizzas, 'drinks'=>$drinks]);
});

Route::get('constructor', function()
{
   return view('constructor', ['page'=>'ctor']);
});

Route::get('cart', function()
{
    $orders = Order::Retrieve(1);
    foreach ($orders as $order)
    {
        if ($order->pizzaId)
        {
            $order->img = 'pizzas/'.Pizza::find($order->pizzaId)['image_title'];
        }
        else
        {
            $order->img = 'drinks/'.Drink::find($order->drinkId)['image_title'];
        }
    }

    return view('cart', ['page'=>'cart', 'order_list'=>$orders]);
});

