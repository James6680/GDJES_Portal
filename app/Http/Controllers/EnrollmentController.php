<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use ErrorException;
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

        if($enrollment->aralStatus == "OO dahil siya ay nag-DROP o huminto sa pag-aaral noong nakaraang taon"){
            return redirect()->route('enrollment.StudentportalRegistrationPage2');
        }else{
            return redirect()->route('enrollment.StudentportalRegistrationPage3');
        }

    }

    public function getEnrollment1(Request $request)
    {
        $enrollment = $request->session()->get('enrollment');
        $isAralStatusSet = "";
        try{
            $isAralStatusSet = $request->session()->get('enrollment')->aralStatus;
        }catch(ErrorException $e){
            $isAralStatusSet = "";
        }
        if($isAralStatusSet == "OO dahil siya ay nag-DROP o huminto sa pag-aaral noong nakaraang taon"){
            return view('enrollment.StudentportalRegistrationPage2',compact('enrollment'));
        }else if($isAralStatusSet == "HINDI"){
            return redirect()->route('enrollment.StudentportalRegistrationPage3');
        }else{
            return redirect()->route('enrollment.StudentportalRegistrationPage1');
        }
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
        return redirect()->route('enrollment.StudentportalRegistrationPage3');
    }

    public function getEnrollment2(Request $request)
    {
        $enrollment = $request->session()->get('enrollment');
        $isAralStatusSet = "1";
        $pageSpecificField = null;
        try{
            $isAralStatusSet = $request->session()->get('enrollment')->aralStatus;
            $pageSpecificField = $request->session()->get('enrollment')->returnee;
        }catch(ErrorException $e){
            $isAralStatusSet = "";
        }
        if($isAralStatusSet == "HINDI" || !is_null($pageSpecificField)){    
            return view('enrollment.StudentportalRegistrationPage3',compact('enrollment'));
        }else if($isAralStatusSet == "OO dahil siya ay nag-DROP o huminto sa pag-aaral noong nakaraang taon" && !is_null($pageSpecificField)){
            return redirect()->route('enrollment.StudentportalRegistrationPage2');
        }else{
            return redirect()->route('enrollment.StudentportalRegistrationPage1');
        }
    }

    public function postEnrollment2(Request $request)
    {
        $validatedData = $request->validate([
            'grade_level' => 'nullable',
            'school_year' => 'required',
            'lrn_status' => 'required',
            'lrn_number' => 'nullable',
            'psa_birth_cert' => 'nullable',
            'lastName_ng_bata' => 'required',
            'firstName_ng_bata' => 'required',
            'middleName_ng_bata' => 'nullable',
            'extensionName_ng_bata' => 'nullable',
            'birth_date' => 'required',
            'age_on_oct_31' => 'required',
            'gender' => 'required',
            'indigenous_group' => 'required',
           'indigenous_group_name' => 'nullable',
            'primary_language'=>'required',
            'religion' => 'nullable',
            'special_needs' => 'required',
            'special_needs_description' => 'nullable',
            'region' => 'required',
            'province'  => 'required',
            'city'  => 'required',
            'barangay'  => 'nullable',
            'street_text' => 'nullable',
            'house_number' => 'nullable',
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
        return redirect()->route('enrollment.StudentportalRegistrationPage4');
    }

    public function getEnrollment3(Request $request)
    {
        $enrollment = $request->session()->get('enrollment');
        $pageSpecificField = null;
        try{
            $pageSpecificField = $request->session()->get('enrollment')->street_text;
        }catch(ErrorException $e){
        }
        if(!is_null($pageSpecificField)){    
            return view('enrollment.StudentportalRegistrationPage4',compact('enrollment'));
        }else{
            return redirect()->route('enrollment.StudentportalRegistrationPage1');
        }
    }

    public function postEnrollment3(Request $request)
    {
        $validatedData = $request->validate([
            "lastName_ng_ama" => 'required',
            "firstName_ng_ama" => 'required',
            "middleName_ng_ama" => 'required',
            "extensionName_ng_ama" => 'required', 
            "father_phone" => 'required', 
            "email_ng_ama" => 'required',
            "lastName_ng_ina" => 'required', 
            "firstName_ng_ina" => 'required', 
            "middleName_ng_ina" => 'required', 
            "extensionName_ng_ina" => 'required', 
            "mother_phone" => 'required', 
            "email_ng_ina" => 'required',
            "lastName_ng_guardian" => 'required', 
            "firstName_ng_guardian" => 'required', 
            "middleName_ng_guardian" => 'required', 
            "extensionName_ng_guardian" => 'required', 
            "guardian_phone" => 'required', 
            "email_ng_guardian" => 'required',
            "fourps" => 'required',
            "fourps_id" => 'nullable',
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
        return redirect()->route('enrollment.StudentportalRegistrationPage5');
    }

    public function getEnrollment4(Request $request)
    {   
        $enrollment = $request->session()->get('enrollment');
        $pageSpecificField = null;
        try{
            $pageSpecificField = $request->session()->get('enrollment')->last_name;
        }catch(ErrorException $e){
        }
        if(!is_null($pageSpecificField)){    
            return view('enrollment.StudentportalRegistrationPage5',compact('enrollment'));
        }else{
            return redirect()->route('enrollment.StudentportalRegistrationPage1');
        }
    }

    public function postEnrollment4(Request $request)
    {
        $validatedData = $request->validate([
            "learning_info" => 'required',
            "distance_learning" => 'required',    
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


    //////////////////process of ENROLLMENT////////////////////////////////
    // $student_table = 






        return redirect()->route('enrollment.StudentportalRegistrationCompletedPage');
    }
    public function enrollmentComplete(Request $request)
    {
        $pageSpecificField = null;
        try{
            $pageSpecificField = $request->session()->get('enrollment')->distance_learning;
        }catch(ErrorException $e){
        }
        if(!is_null($pageSpecificField)){    
            return view('enrollment.StudentportalRegistrationCompletedPage');
        }else{
            return redirect()->route('enrollment.StudentportalRegistrationPage1');
        }
    }
}
