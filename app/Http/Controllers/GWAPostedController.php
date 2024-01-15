<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Gwa;
use App\Models\Classes;
use App\Models\Teacher;

class GWAPostedController extends Controller
{
    // ... existing methods ...

    public function postGwa(Request $request)
    {
        // Retrieve data from the request
    $schoolYearId = $request->input('schoolYearId');
    $sectionId = $request->input('sectionId');
    $gradeLevelId = $request->input('gradeLevelId');

    // Update the 'posted' column in the gwas table
    Gwa::where([
        'school_year_id' => $schoolYearId,
        'section_id' => $sectionId,
        'grade_level_id' => $gradeLevelId,
    ])->update(['posted' => 1]);

    return response()->json(['message' => 'success']);
}

}