<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;



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

/*----------------Added Admin Routes-----------------------*/
Route::prefix('admin')->group(function(){
    Route::get('/login',[AdminController::class, 'Index'])->name('login_from');
    Route::post('/login/owner',[AdminController::class, 'Login'])->name('admin.login');
    Route::get('/signout',[AdminController::class, 'Signout'])->name('admin.signout');
    
});
/*----------------End Added Admin Routes-----------------------*/
//R: FIX THE ADMIN ROUTES AND ADD THE OTHER ROUTES FOR THE OTHER USERS
//- :ADD EMAIL FOR RESETTIN PASSWORD IN DATABASE TABLE


// Admin Routes
Route::get('admin.dashboard', function () {
    return view('layouts.admin');
})->middleware('admin')->name('admin.dashboard');

Route::get('admin.announcements', function () {
    return view('layouts.admin');
})->middleware('admin')->name('admin.announcements');

Route::get('admin.document-request', function () {
    return view('layouts.admin');
})->middleware('admin')->name('admin.document-request');

Route::get('admin.student-management', function () {
    return view('layouts.admin');
})->middleware('admin')->name('admin.student-management');

Route::get('admin.teacher-management', function () {
    return view('layouts.admin');
})->middleware('admin')->name('admin.teacher-management');

Route::get('admin.enrollment-management', function () {
    return view('layouts.admin');
})->middleware('admin')->name('admin.enrollment-management');

Route::get('admin.school-information', function () {
    return view('layouts.admin');
})->middleware('admin')->name('admin.school-information');
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


/*----------------Added Faculty Routes-----------------------*/
Route::prefix('teacher')->group(function(){
    Route::get('/login',[TeacherController::class, 'IndexTeacher'])->name('teacher_login_from');
    Route::post('/login/owner',[TeacherController::class, 'LoginTeacher'])->name('login.FacultyTeacherLoginPage');
    Route::get('/signout',[TeacherController::class, 'SignoutTeacher'])->name('teacher.signout');
    
});
/*----------------End Added Faculty Routes-----------------------*/
//R: FIX THE FACuLTY ROUTES AND ADD THE OTHER ROUTES FOR THE OTHER USERS
//- :FIX THE LOGIN ROUTE

// Faculty Routes
Route::get('faculty.announcements', function () {
    return view('layouts.faculty');
})->middleware('teachers')->name('faculty.announcements');

Route::get('faculty.my-students', function () {
    return view('layouts.faculty');
})->middleware('teachers')->name('faculty.my-students');

Route::get('faculty.enrollments', function () {
    return view('layouts.faculty');
})->middleware('teachers')->name('faculty.enrollments');

Route::get('faculty.grades', function () {
    return view('layouts.faculty');
})->middleware('teachers')->name('faculty.grades');
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

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    
    require __DIR__.'/auth.php';

    
Route::get('/student.login', function(){
    return view('login.StudentLoginPage');
});

Route::get('/faculty.login', function(){
    return view('login.FacultyTeacherLoginPage');
});

Route::get('/forget-password', function(){
    return view('login.forgotPasswordForm');
});

Route::get('/Admin.login', function(){
    return view('admin.login');
});
