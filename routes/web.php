<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\EnrollmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('helloworld', function () {
    return view('helloworld');
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

Route::get('admin.user-accounts', function () {
    return view('layouts.admin');
});

Route::get('admin.document-request', function () {
    return view('layouts.admin');
});

Route::get('admin.student-management', function () {
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

Route::get('student-registration-1', [EnrollmentController::class, 'getEnrollment'])
    ->name('enrollment.StudentportalRegistrationPage1');
Route::post('student-registration-1', [EnrollmentController::class, 'postEnrollment'])
    ->name('enrollment.StudentportalRegistrationPage1.post');

Route::get('student-registration-2', [EnrollmentController::class, 'getEnrollment1'])
    ->name('enrollment.StudentportalRegistrationPage2');
Route::post('student-registration-2', [EnrollmentController::class, 'postEnrollment1'])
    ->name('enrollment.StudentportalRegistrationPage2.post');

Route::get('student-registration-3', [EnrollmentController::class, 'getEnrollment2'])
    ->name('enrollment.StudentportalRegistrationPage3');
Route::post('student-registration-3', [EnrollmentController::class, 'postEnrollment2'])
    ->name('enrollment.StudentportalRegistrationPage3.post');

Route::get('student-registration-4', [EnrollmentController::class, 'getEnrollment3'])
    ->name('enrollment.StudentportalRegistrationPage4');
Route::post('student-registration-4', [EnrollmentController::class, 'postEnrollment3'])
    ->name('enrollment.StudentportalRegistrationPage4.post');

Route::get('student-registration-5', [EnrollmentController::class, 'getEnrollment4'])
    ->name('enrollment.StudentportalRegistrationPage5');
Route::post('student-registration-5', [EnrollmentController::class, 'postEnrollment4'])
    ->name('enrollment.StudentportalRegistrationPage5.post');

Route::get('student-registration-Completed', [EnrollmentController::class, 'enrollmentComplete'])
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

Route::get('/student.login', function(){
    return view('login.StudentLoginPage');
});

Route::get('/faculty.login', function(){
    return view('login.FacultyTeacherLoginPage');
});

Route::get('/forget-password', function(){
    return view('login.forgotPasswordForm');
});
