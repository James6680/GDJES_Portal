<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Student;
use App\Models\HighestPossibleScore;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\HighestPossibleScoreController;


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
    $user = DB::table('school_years')
    ->orderBy('school_year', 'asc')
    ->get();
    return response()->json($user);
});

Route::get('/sections/{variableValue}', function ($variableValue) {
    // Retrieve unique section IDs for the specified school year
    $sections = DB::table('sections')
        ->where('school_year_id', $variableValue)
        ->orderBy('grade_level_id', 'asc')
        ->distinct()
        ->get();

    return response()->json($sections);
});

Route::get('/getClass/{gradeLevel}/{schoolYear}/{section}', function ($gradeLevel, $schoolYear, $section) {
    // Retrieve unique section IDs for the specified school year
    $sections = DB::table('classes')
        ->where('school_year_id', $schoolYear)
        ->where('grade_level_id', $gradeLevel)
        ->where('section_id', $section)
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
    ->orderBy('subject_name', 'asc')
    ->get();
    return response()->json($subjects);
});

Route::get('/students/{schoolYear}', function($schoolYear){
    $students = DB::table('students')
    ->join('enrollment', 'students.id', '=', 'enrollment.student_id')
    ->where('enrollment.school_year_id', $schoolYear)
    ->select('students.id', 'enrollment.school_year_id', 'students.last_name', 'students.first_name', 'students.middle_name', 'students.extension_name', 'students.username', 'students.lrn', 'enrollment.section_id', 'enrollment.grade_level_id')
    ->orderBy('students.last_name', 'asc')
    ->get();
    return response()->json($students);
});

Route::get('modeOfLearningStatistics/{schoolYear}', function($schoolYear){
    $uniqueValues = ['Modular Printed', 'Modular Digital', 'Online', 'Educational Television', 'Homeschooling', 'Blended'];

    $distanceLearningCounts = [];
    
    // Initialize all counts to 0
    foreach ($uniqueValues as $distanceLearningType) {
        $distanceLearningCounts[$distanceLearningType] = 0;
    }
    
    // Get all learning_info_id in the enrollments table where school_year_id is == 1
    $learningInfoIds = DB::table('enrollment')
        ->where('school_year_id', $schoolYear)
        ->pluck('learning_info_id');
    
    // Iterate through each learning_info_id
    foreach ($learningInfoIds as $id) {
        // Get the distance_learning value for the current learning_info_id
        $distanceLearning = DB::table('learning_info')
            ->where('id', $id)
            ->value('distance_learning');
    
        // Check if the distance_learning value is in the $uniqueValues array
        if (in_array($distanceLearning, $uniqueValues)) {
            // Increment the count for the current distance_learning value
            $distanceLearningCounts[$distanceLearning]++;
        }
    }
    return response()->json($distanceLearningCounts);
});

Route::get('/learningInfoStatistics/{schoolYear}', function($schoolYear){
    $learningInfoIds = DB::table('enrollment')
    ->where('school_year_id', $schoolYear)
    ->pluck('learning_info_id');

    $gadgetsAndInternetAccess = [
        'may_sariling_tablet_ang_bata',
        'may_computer_sa_bahay',
        'walang_sariling_gadget_ang_bata',
        'may_tv_sa_bahay',
        'may_internet_sa_bahay',
        'mobile_data_lang_ang_gamit'
    ];

    $attributeCounts = collect([]);

    foreach ($gadgetsAndInternetAccess as $attribute) {
        $trueCount = DB::table('learning_info')
            ->whereIn('id', $learningInfoIds)
            ->where($attribute, 1)
            ->count();

        $attributeCounts->push([
            'attribute' => $attribute,
            'true_count' => $trueCount
        ]);
    }
    return response()->json($attributeCounts);
});

Route::get('/currentYearStats/{currentSY}', function($currentSY){
    $results = collect([]);

    $students = DB::table('enrollment')
    ->join('students', 'enrollment.student_id', '=', 'students.id')
    ->where('enrollment.school_year_id', $currentSY)
    ->select('students.*')
    ->get();

    $maleCount = DB::table('enrollment')
        ->join('students', 'enrollment.student_id', '=', 'students.id')
        ->where('enrollment.school_year_id', $currentSY)
        ->where('students.gender', 'Male')
        ->count();

    $femaleCount = DB::table('enrollment')
        ->join('students', 'enrollment.student_id', '=', 'students.id')
        ->where('enrollment.school_year_id', $currentSY)
        ->where('students.gender', 'Female')
        ->count();

    $specialAssistanceNeedsCount = DB::table('enrollment')
        ->join('students', 'enrollment.student_id', '=', 'students.id')
        ->where('enrollment.school_year_id', $currentSY)
        ->where('students.special_assistance_needs', '!=', null)
        ->count();

    $transferredOutCount = DB::table('enrollment')
        ->where('school_year_id', $currentSY)
        ->where('enrollment_status', 'transferred out')
        ->count();
    
    $transferredInCount = DB::table('enrollment')
        ->where('school_year_id', $currentSY)
        ->where('enrollment_status', 'transferred in')
        ->count();

    $droppedCount = DB::table('enrollment')
        ->where('school_year_id', $currentSY)
        ->where('enrollment_status', 'dropped')
        ->count();        
        
    $results->push([
        'male' => $maleCount,
        'female' => $femaleCount,
        'special_assistance' => $specialAssistanceNeedsCount,
        'enrollees' => count($students),
        'transferred_in' =>$transferredInCount,
        'transferred_out' =>$transferredOutCount,    
        'dropped' => $droppedCount,    
    ]);

    return response()->json($results);
});

Route::get('/schoolYearsWGender', function(){
    $recentSchoolYears = DB::table('school_years')
    ->where('active', 0)
    ->orderBy('created_at', 'desc')
    ->take(4)
    ->get();

// Create an empty array to store the results
$results = [];

// Iterate through each school year
foreach ($recentSchoolYears as $schoolYear) {
    // Count the number of enrolled male students for the school year
    $maleCount = DB::table('enrollment')
        ->join('students', 'enrollment.student_id', '=', 'students.id')
        ->where('enrollment.school_year_id', $schoolYear->id)
        ->where('students.gender', 'Male')
        ->count();

    // Count the number of enrolled female students for the school year
    $femaleCount = DB::table('enrollment')
        ->join('students', 'enrollment.student_id', '=', 'students.id')
        ->where('enrollment.school_year_id', $schoolYear->id)
        ->where('students.gender', 'Female')
        ->count();

    $completionCount = DB::table('enrollment')
        ->where('school_year_id', $schoolYear->id)
        ->where('enrollment_status', 'completed')
        ->count();

    // Add the school year and enrollment counts to the results array
    $results[] = [
        "school_year" => $schoolYear->school_year,
        "male_enrolled" => $maleCount,
        "female_enrolled" => $femaleCount,
        "completion" => $completionCount,
    ];
}
    return response()->json($results);
});

Route::get('studentAccounts', [AdminController::class, 'getStudentAccounts']);

Route::get('/teachers', [TeacherController::class, 'getAllTeacher']);

Route::get('GetAnnouncements', [AnnouncementController::class, 'getAnnouncement']);

