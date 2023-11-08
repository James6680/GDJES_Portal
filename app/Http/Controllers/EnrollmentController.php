<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    //
    public function getEnrollment(Request $request)
    {
        $enrollment = $request->session()->get('enrollment');
        return view('enrollment.StudentportalRegistrationPage1',compact('enrollment'));
    }

    public function postEnrollment(Request $request)
    {
        $validatedData = $request->validate([
            'aralStatus' => 'required',
        ]);

        if(empty($request->session()->get('enrollment'))){
            $enrollment = new enrollment();
            $enrollment->fill($validatedData);
            $request->session()->put('enrollment', $enrollment);
        }else{
            $enrollment = $request->session()->get('enrollment');
            $enrollment->fill($validatedData);
            $request->session()->put('enrollment', $enrollment);
        }
        return redirect()->route('get.enrollment1');
    }

    public function getEnrollment1(Request $request)
    {
        $enrollment = $request->session()->get('enrollment');
        return view('enrollment.StudentportalRegistrationPage2',compact('enrollment'));
    }

    public function postEnrollment1(Request $request)
    {
        $validatedData = $request->validate([
            'returnee' => 'required',
            'lastSchoolAttended' => 'required',
            'lastSchoolYearAttended' => 'required',
        ]);
        if(empty($request->session()->get('enrollment'))){
            $enrollment = new enrollment();
            $enrollment->fill($validatedData);
            $request->session()->put('enrollment', $enrollment);
        }else{
            $enrollment = $request->session()->get('enrollment');
            $enrollment->fill($validatedData);
            $request->session()->put('enrollment', $enrollment);
        }
        return redirect()->route('get.enrollment2');
    }

    public function getEnrollment2(Request $request)
    {
        $enrollment = $request->session()->get('enrollment');
        return view('enrollment.StudentportalRegistrationPage3',compact('enrollment'));
    }

    public function postEnrollment2(Request $request)
    {
        $validatedData = $request->validate([
            'grade_level' => 'required',
            'school_year' => 'required',
            'lrn_status' => 'required',
            //'lrn_number' => 'required',
            'psa_birth_cert' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'extension_name' => 'required',
            'birth_date' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'indigenous_group' => 'required',
           // 'indigenous_group_name' => 'required',
            'primary_language'=>'required',
            'religion' => 'required',
            'special_needs' => 'required',
            //'special_needs_description' => 'required',
            'region' => 'required',
            'province'  => 'required',
            'city'  => 'required',
            'barangay'  => 'required',
            'street_text' => 'required',

        ]);
        if(empty($request->session()->get('enrollment'))){
            $enrollment = new enrollment();
            $enrollment->fill($validatedData);
            $request->session()->put('enrollment', $enrollment);
        }else{
            $enrollment = $request->session()->get('enrollment');
            $enrollment->fill($validatedData);
            $request->session()->put('enrollment', $enrollment);
        }
        return redirect()->route('get.enrollment3');
    }

    public function getEnrollment3(Request $request)
    {
        $enrollment = $request->session()->get('enrollment');
        return view('enrollment.StudentportalRegistrationPage4',compact('enrollment'));
    }

    public function postEnrollment3(Request $request)
    {
        $validatedData = $request->validate([
        ]);
        if(empty($request->session()->get('enrollment'))){
            $enrollment = new enrollment();
            $enrollment->fill($validatedData);
            $request->session()->put('enrollment', $enrollment);
        }else{
            $enrollment = $request->session()->get('enrollment');
            $enrollment->fill($validatedData);
            $request->session()->put('enrollment', $enrollment);
        }
        return redirect()->route('get.enrollment4');
    }

    public function getEnrollment4(Request $request)
    {
        $enrollment = $request->session()->get('enrollment');
        return view('enrollment.StudentportalRegistrationPage5',compact('enrollment'));
    }

    public function postEnrollment4(Request $request)
    {
        $validatedData = $request->validate([
        ]);
        if(empty($request->session()->get('enrollment'))){
            $enrollment = new enrollment();
            $enrollment->fill($validatedData);
            $request->session()->put('enrollment', $enrollment);
        }else{
            $enrollment = $request->session()->get('enrollment');
            $enrollment->fill($validatedData);
            $request->session()->put('enrollment', $enrollment);
        }
        return redirect()->route('get.enrollment5');
    }
    public function enrollmentComplete(Request $request)
    {
        return view('enrollment.StudentportalRegistrationCompletedPage');
    }
}
