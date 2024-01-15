<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Gwa;
use App\Models\Classes;
use App\Models\Teacher;

class GwaController extends Controller
{
    // ... existing methods ...

    public function postGwa(Request $request)
    {
        $teacher = Auth::guard('teacher')->user();

    // Check if the user is a teacher
    if ($teacher) {
        $teacherId = $teacher->id; // Get the teacher's ID
        $sectionId = $request->input('section_id');
        $gradeLevelId = $request->input('grade_level_id');
        $schoolYearId = $request->input('school_year_id');

        // Verify if the teacher is authorized for the specified class
        $isAuthorized = $teacher->classes()->where([
            'id' => $teacherId,
            'grade_level_id' => $gradeLevelId,
            'section_id' => $sectionId,
            'school_year_id' => $schoolYearId,
        ])->exists();

        if ($isAuthorized) {
            // Update 'posted' column in gwas table
            Gwa::where([
                'grade_level_id' => $gradeLevelId,
                'section_id' => $sectionId,
                'school_year_id' => $schoolYearId,
            ])->update(['posted' => true]);

            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Unauthorized']);
        }
    }

    return response()->json(['error' => 'Invalid user role']);
}

}