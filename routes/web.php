<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\SubjectsController;
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
    return view('helloworld');
});


Route::get('enrollment', [EnrollmentController::class, 'getEnrollment'])->name('get.enrollment');
Route::post('enrollment', [EnrollmentController::class, 'postEnrollment'])->name('post.enrollment');

Route::get('enrollment1', [EnrollmentController::class, 'getEnrollment1'])->name('get.enrollment1');
Route::post('enrollment1', [EnrollmentController::class, 'postEnrollment1'])->name('post.enrollment1');

Route::get('enrollment2', [EnrollmentController::class, 'getEnrollment2'])->name('get.enrollment2');
Route::post('enrollment2', [EnrollmentController::class, 'postEnrollment2'])->name('post.enrollment2');

Route::get('enrollment3', [EnrollmentController::class, 'getEnrollment3'])->name('get.enrollment3');
Route::post('enrollment3', [EnrollmentController::class, 'postEnrollment3'])->name('post.enrollment3');

Route::get('enrollment4', [EnrollmentController::class, 'getEnrollment4'])->name('get.enrollment4');
Route::post('enrollment4', [EnrollmentController::class, 'postEnrollment4'])->name('post.enrollment4');

Route::get('enrollmentComplete', [EnrollmentController::class, 'enrollmentComplete'])->name('enrollmentComplete');






///////////ADMIN SIDE///////////////
Route::get('sections', function () {
    return view('admin.sections');
});

Route::post('settings/addSection', [SectionsController::class, 'CRUDSection'])->name('admin.CRUDSection');

Route::get('subjects', function () {
    return view('admin.subjects');
});

Route::post('settings/addSubject', [SubjectsController::class, 'CRUDSubject'])->name('admin.CRUDSubject');

// Route::post('settings/addSection', [SectionsController::class, 'CRUDSection'])->name('admin.CRUDSection');


//////////////////////////////////////////////





// Route::get('sample', function () {
//     return view('admin.sampleform');
// });

// Route::post('ajax.store', [StudentController::class, 'index'])->name('ajax.store');
