<?php

use App\Http\Controllers\HelloWorld;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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

Route::get('layouts.student', function () {
    return view('layouts.student');
});
