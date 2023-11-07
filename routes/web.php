<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HelloWorld;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('helloworld', function () {
    return view('HelloWorld');
});

Route::get('layouts.landing', function () {
    $announcements = DB::table('announcements')
    ->select('*')
    ->orderBy('created_at', 'desc')
    ->get();
    return view('layouts.landing', ['announcements' => $announcements]);
});





// Admin Routes
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
//End of Admin Routes





//Student Routes
Route::get('student.announcements', function () {
    return view('layouts.student');
});

Route::get('student.grades', function () {
    return view('layouts.student');
});

Route::get('student.class-schedule', function () {
    return view('layouts.student');
});

Route::get('student.enrollment-status', function () {
    return view('layouts.student');
});

Route::get('student.request-documents', function () {
    return view('layouts.student');
});

Route::get('student.student-information', function () {
    return view('layouts.student');
});
//End of Student Routes





// Faculty Routes
Route::get('faculty.announcements', function () {
    return view('layouts.faculty');
});

Route::get('faculty.my-students', function () {
    return view('layouts.faculty');
});

Route::get('faculty.enrollments', function () {
    return view('layouts.faculty');
});

Route::get('faculty.grades', function () {
    return view('layouts.faculty');
});
// End of Faculty Routes