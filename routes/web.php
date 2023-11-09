<?php

use App\Models\Enrollment;
use App\Http\Controllers\EnrollmentController;
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
    return view('helloworld');
});


Route::get('StudentportalRegistrationPage1', [EnrollmentController::class, 'getEnrollment'])
    ->name('enrollment.StudentportalRegistrationPage1');
Route::post('StudentportalRegistrationPage1', [EnrollmentController::class, 'postEnrollment'])
    ->name('enrollment.StudentportalRegistrationPage1.post');

Route::get('StudentportalRegistrationPage2', [EnrollmentController::class, 'getEnrollment1'])
    ->name('enrollment.StudentportalRegistrationPage2');
Route::post('StudentportalRegistrationPage2', [EnrollmentController::class, 'postEnrollment1'])
    ->name('enrollment.StudentportalRegistrationPage2.post');

Route::get('StudentportalRegistrationPage3', [EnrollmentController::class, 'getEnrollment2'])
    ->name('enrollment.StudentportalRegistrationPage3');
Route::post('StudentportalRegistrationPage3', [EnrollmentController::class, 'postEnrollment2'])
    ->name('enrollment.StudentportalRegistrationPage3.post');

Route::get('StudentportalRegistrationPage4', [EnrollmentController::class, 'getEnrollment3'])
    ->name('enrollment.StudentportalRegistrationPage4');
Route::post('StudentportalRegistrationPage4', [EnrollmentController::class, 'postEnrollment3'])
    ->name('enrollment.StudentportalRegistrationPage4.post');

Route::get('StudentportalRegistrationPage5', [EnrollmentController::class, 'getEnrollment4'])
    ->name('enrollment.StudentportalRegistrationPage5');
Route::post('StudentportalRegistrationPage5', [EnrollmentController::class, 'postEnrollment4'])
    ->name('enrollment.StudentportalRegistrationPage5.post');

Route::get('StudentportalRegistrationCompletedPage', [EnrollmentController::class, 'enrollmentComplete'])
    ->name('enrollment.StudentportalRegistrationCompletedPage');


/*
Route::get('enrollment1', [EnrollmentController::class, 'getEnrollment1'])
    ->name('get.enrollment1');
Route::post('enrollment1', [EnrollmentController::class, 'postEnrollment1'])
    ->name('post.enrollment1');

Route::get('enrollment2', [EnrollmentController::class, 'getEnrollment2'])
    ->name('get.enrollment2');
Route::post('enrollment2', [EnrollmentController::class, 'postEnrollment2'])
    ->name('post.enrollment2');

Route::get('enrollment3', [EnrollmentController::class, 'getEnrollment3'])
    ->name('get.enrollment3');
Route::post('enrollment3', [EnrollmentController::class, 'postEnrollment3'])
    ->name('post.enrollment3');

Route::get('enrollment4', [EnrollmentController::class, 'getEnrollment4'])
    ->name('get.enrollment4');
Route::post('enrollment4', [EnrollmentController::class, 'postEnrollment4'])
    ->name('post.enrollment4');

Route::get('enrollmentComplete', [EnrollmentController::class, 'enrollmentComplete'])
->name('enrollmentComplete');
*/



/*Added

Route::get('/student-registration-1', function () {
    return view('enrollment.StudentportalRegistrationPage1');
});

Route::get('/student-registration-2', function () {
    return view('enrollment.StudentportalRegistrationPage2');
});

Route::get('/student-registration-3', function () {
    return view('enrollment.StudentportalRegistrationPage3');
});

Route::get('/student-registration-4', function () {
    return view('enrollment.StudentportalRegistrationPage4');
});
Route::get('/student-login', function () {
    return view('enrollment.StudentLoginPage');
});

Route::get('/student-registration-completed', function () {
    return view('enrollment.StudentportalRegistrationCompletedPage');
});

Added*/

Route::get('/StudentLoginPage', function(){
    return view('login.StudentLoginPage');
});

Route::get('/FacultyTeacherLoginPage', function(){
    return view('login.FacultyTeacherLoginPage');
});

Route::get('/forgotPasswordForm', function(){
    return view('login.forgotPasswordForm');
});

Route::get('/Dummy', function(){
    return view('login.dummyBladeComponents');
});