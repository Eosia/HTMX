<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/first-test', function () {
    return "Coucou HTMX";
});
