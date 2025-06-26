<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('includes.sidebar.seller');
});

Route::view('/kkck', 'includes.login');

Route::view('/slidebar', 'includes.sidebar.seller');

route::view('/navbar', 'includes.navbar');

Route::view('/addProduct', 'vendedor.addProduct');
