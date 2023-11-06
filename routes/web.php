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

///////////////////////////////////////////////////////ALL ADMIN/////////////////////////////////////
Route::get('admin.dashboard', function () {
    return view('layouts.admin');
});

Route::get('admin.announcements', function () {
    return view('layouts.admin');
});

Route::get('admin.accounts', function () {
    return view('layouts.admin');
});

Route::get('admin.document-request', function () {
    return view('layouts.admin');
});
Route::get('admin.teacher-management', function () {
    return view('layouts.admin');
});

Route::get('admin.enrollment-management', function () {
    return view('layouts.admin');
});

Route::get('admin.school-information', function () {
    return view('layouts.admin');
});
///////////////////////////////////////////////////////////////////////////////////////////////