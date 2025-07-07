<?php

use Illuminate\Support\Facades\Route;

route::view('/slidebar/seller','includes.sidebars.seller');

route::view('/slidebar/buyer','includes.sidebars.buyer');

route::view('/slidebar/guest','includes.sidebars.guest');

route::view('/slidebar/admin','includes.sidebars.admin');

Route::view('/login', 'includes.login');

Route::view('/registroC', 'Registro_consumidor');
Route::view('/registroV', 'Registro_vendedor');

Route::view('/slidebar', 'includes.sidebar.seller');

route::view('/navbar', 'includes.navbar');

Route::view('/addProduct', 'vendedor.addProduct');

Route::view('/home', 'home');

Route::view('/registrarse_como', 'registrarse_como');

Route::view('/editProduct', 'vendedor.editProduct');

route::view('/notifications', 'notifications');

Route::view('/ConsumerProfile', 'consumer.profile');

Route::view('/productdetail', 'productdetail');

Route::view('/reasonforthereport', 'reasonforthereport');

Route::view('/chatList', 'chatList');

Route::view('/SellerProfile', 'vendedor.profile');

Route::view('/favoritos', 'registered.favoritos');

route::view('/chat/{id}', 'individualChatMobile')->name('chat.show');

Route::view('/SellerConsumerProfile', 'vendedor.consumer-profile');

Route::view('/ConsumerSellerProfile', 'consumer.seller-profile');