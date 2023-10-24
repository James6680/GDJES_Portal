<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\SchoolYearController;

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

Route::get('GetSections', [SectionsController::class, 'getSection']);
Route::get('GetSubjects', [SubjectsController::class, 'getSubject']);