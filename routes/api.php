<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::get('GetAnnouncements', [AnnouncementController::class, 'getAnnouncement']);
