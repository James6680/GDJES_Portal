<?php

namespace App\Http\Controllers;

use App\Models\SchoolYears;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SchoolYearController extends Controller
{
    //

    public function addSchoolYear(Request $request){
        if (!is_numeric($request->input('schoolYear'))) {
            $year = 'error';
        }else{
            $year = $request->input('schoolYear') . "-" . $request->input('schoolYear')+1;
        }
        $request->merge(['schoolYear' => $year]);
        $request->validate([
            'schoolYear' => ['required', 'regex:/^(20[0-9][0-9])-(2[0-9][0-9][0-9])$/','unique:school_years,school_year'],
            'requiredDays' => 'required|numeric|min:200|max:300',
        ]); 
        $schoolYear = new SchoolYears();
        $schoolYear['school_year'] = $request->input('schoolYear');
        $schoolYear['school_days'] = $request->input('requiredDays');
        $schoolYear['active'] = 0;
        $schoolYear['is_enrollment'] = 0; 
        $schoolYear->save();
    }

    public function endSchoolYear(Request $request){
        DB::table('school_years')
        ->where('id', $request->id)
        ->update(['active' => 0, 'is_enrollment' => 0, 'is_finished' => 1]);
        return response()->json($request);
    }

    public function startSchoolYear(Request $request){
        DB::table('school_years')
        ->where('id', $request->id)
        ->update(['active' => 1]);
        return response()->json($request);
    }

    public function closeEnrollment(Request $request){
        DB::table('school_years')
        ->where('id', $request->id)
        ->update(['is_enrollment' => 0]);
        return response()->json($request);
    }

    public function openEnrollment(Request $request) {
        // Check if there is an existing active school year with open enrollment, excluding the specified ID
        $existingActiveSchoolYearWithOpenEnrollment = DB::table('school_years')
            ->where('id', '!=', $request->id) // Exclude the specified ID
            // ->where('active', 0)
            ->where('is_enrollment', 1)
            ->first();
        if ($existingActiveSchoolYearWithOpenEnrollment) {
            // Update the enrollment status of the existing active school year to closed
            DB::table('school_years')
                ->where('id', $existingActiveSchoolYearWithOpenEnrollment->id)
                ->update(['is_enrollment' => 0]);
        }
    
        // Update the enrollment status of the specified school year to open
        DB::table('school_years')
            ->where('id', $request->id)
            ->update(['is_enrollment' => 1]);
        return response()->json($request);
    }
}
