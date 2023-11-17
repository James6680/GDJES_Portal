<?php

namespace App\Http\Controllers;

use App\Models\SchoolYears;
use Illuminate\Http\Request;

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
        $schoolYear['isPreEnrollment'] = 0; 
        $schoolYear->save();
    }
}
