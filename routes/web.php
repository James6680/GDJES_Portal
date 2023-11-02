<?php

use App\Http\Controllers\HelloWorld;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('helloworld', function () {
    return view('HelloWorld');
});

Route::get('layouts.landing', function () {
    return view('layouts.landing');
});

Route::get('layouts.admin', function () {
    return view('layouts.admin');
});