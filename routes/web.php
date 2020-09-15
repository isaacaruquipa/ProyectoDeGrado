<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

App::setlocale('es');

Route::get('/', function () {
    return view('welcome');
});
