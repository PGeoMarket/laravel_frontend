<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('includes.sidebar.seller');
});

Route::view('/login', 'includes.login');

Route::view('/registroC', 'Registro_consumidor');
Route::view('/registroV', 'Registro_vendedor');

Route::view('/slidebar', 'includes.sidebar.seller');

route::view('/navbar', 'includes.navbar');

Route::view('/addProduct', 'vendedor.addProduct');

Route::view('/home', 'home');

Route::view('/registrarse_como', 'registrarse_como');

