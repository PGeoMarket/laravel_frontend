<?php

use Illuminate\Support\Facades\Route;

route::view('/slidebar/seller','includes.sidebars.seller');

route::view('/slidebar/buyer','includes.sidebars.buyer');

route::view('/slidebar/guest','includes.sidebars.guest');

Route::view('/login', 'includes.login');

Route::view('/slidebar', 'includes.sidebar.seller');

route::view('/navbar', 'includes.navbar');

Route::view('/addProduct', 'vendedor.addProduct');

Route::view('/home', 'home');

Route::view('/registrarse_como', 'registrarse_como');

Route::view('/editProduct', 'vendedor.editProduct');

route::view('/notifications', 'notifications');
