<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('includes.sidebar.seller');
});
//Pueden cambiar la vista para ver como queda cada blade