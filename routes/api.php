<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AnnouncementController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/address/{type}', function (String $type) {
    $user = \File::json(resource_path('js/ph-json/' . $type . '.json'));
    return response()->json($user);
});

Route::get('/schoolYears', function () {
    $user = DB::table('school_years')->get();
    return response()->json($user);
});

Route::get('/sections/{variableValue}', function ($variableValue) {
    // Retrieve unique section IDs for the specified school year
    $sections = DB::table('sections')
        ->where('school_year_id', $variableValue)
        ->distinct()
        ->get();

    return response()->json($sections);
});

Route::get('/getClass/{gradeLevel}/{schoolYear}/{section}', function ($gradeLevel, $schoolYear, $section) {
    // Retrieve unique section IDs for the specified school year
    $sections = DB::table('classes')
        ->where('school_year_id', $schoolYear)
        ->where('grade_level_id', $gradeLevel)
        ->get();

    // Calculate the number of slots for the specified section
    $slots = DB::table('enrollment')
        ->where('section_id', $section)
        ->where('school_year_id', $schoolYear)
        ->count();

    // Merge the section data and slot count into a single JSON object
    $responseData = [
        'sections' => $sections,
        'slots' => $slots,
    ];

    return response()->json($responseData);
});
Route::get('/subjects', function(){
    $subjects = DB::table('subjects')
    ->get();
    return response()->json($subjects);
});

Route::get('/students/{schoolYear}', function($schoolYear){
    $students = DB::table('students')
    ->join('enrollment', 'students.id', '=', 'enrollment.student_id')
    ->where('enrollment.school_year_id', $schoolYear)
    ->select('students.id', 'enrollment.school_year_id', 'students.last_name', 'students.first_name', 'students.middle_name', 'students.extension_name', 'students.username', 'students.lrn', 'enrollment.section_id', 'enrollment.grade_level_id')
    ->get();
    return response()->json($students);
});


Route::get('/teachers', [TeacherController::class, 'getAllTeacher']);

Route::get('GetAnnouncements', [AnnouncementController::class, 'getAnnouncement']);
