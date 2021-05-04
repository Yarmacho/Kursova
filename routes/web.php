<?php

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
    return view('mainPage', ['page'=>'main']);
});

Route::get('menu', function()
{
    echo '<script type=text/javascript> setScreenWidthCookie() </script>';
    $pizzas = Pizza::all();
    $drinks = Drink::all();

    return view('menu', ['page'=>'menu', 'pizzas'=>$pizzas, 'drinks'=>$drinks]);
});