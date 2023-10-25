<?php

namespace App\Http\Controllers;

use App\Models\SchoolYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SchoolYearController extends Controller
{
    public function getSchoolYearView(Request $request){
        $school_years = DB::table('school_years')->where('active', 1)->get();
        return view('admin.schoolyear',compact('school_years'));    
    }

    public function addSchoolYear(Request $request){
        $request->validate([
            'school_year' => 'required|unique:school_years,school_year',
        ]);
        $school_year = [];
        $school_year['school_year'] = $request->school_year;
        $school_year['active'] = 1;
        SchoolYear::create($school_year);
    }

    public function endSchoolYear(Request $request){
        DB::table('school_years')
            ->where('school_year', $request->school_year)
            ->update(['active' => false]);
    }
}
