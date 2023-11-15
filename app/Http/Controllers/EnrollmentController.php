<?php

namespace App\Http\Controllers;

use ErrorException;
use Illuminate\Http\Request;
use App\Models\Father;
use App\Models\Mother;
use App\Models\Student;
use App\Models\Guardian;
use App\Models\Returnee;
use App\Models\Relatives;
use App\Models\Enrollment;
use App\Models\LearningInfo;
use App\Models\EnrollmentForm;
use App\Models\DocumentRequirements;

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
            $enrollment = new EnrollmentForm();

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
            $enrollment = new EnrollmentForm();
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
            'street_text' => 'required',
            'house_number' => 'nullable',
        ]);
        if(empty($request->session()->get('enrollment'))){
            $enrollment = new EnrollmentForm();
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
            $enrollment = new EnrollmentForm();
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
            $pageSpecificField = $request->session()->get('enrollment')->fourps;
        }catch(ErrorException $e){
        }
        // if(!is_null($pageSpecificField)){    //CHANGED FOR TESTING
        if(true){ 
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
            $enrollment = new EnrollmentForm();
            $enrollment->fill($validatedData);
            $request->session()->put('enrollment', $enrollment);
        }else{
            $enrollment = $request->session()->get('enrollment');
            $enrollment->fill($validatedData);
            $request->session()->put('enrollment', $enrollment);
        }

        $returnval = '';
        $this->createStudentInDatabase($enrollment);
        //  return view('checking',compact('returnval')) ////FOR CHECKING;
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

    public function createStudentInDatabase(EnrollmentForm $enrollmentForm){
        // if($enrollmentForm->lrn_status == '1'){
        //     $student = Student::where('lrn', $enrollmentForm->lrn_number)->first();
        // }else{
        //     $student = new Student(); 
        // }

        $enrollment = new Enrollment;
        $student = Student::where('lrn', $enrollmentForm->lrn_number)->first();
        $father = Father::where('last_name', $enrollmentForm->lastName_ng_ama)->where('first_name', $enrollmentForm->firstName_ng_ama)->where('middle_name', $enrollmentForm->middleName_ng_ama)->first();
        $mother = Mother::where('last_name', $enrollmentForm->lastName_ng_ina)->where('first_name', $enrollmentForm->firstName_ng_ina)->where('middle_name', $enrollmentForm->middleName_ng_ina)->first();
        $guardian = Guardian::where('last_name', $enrollmentForm->lastName_ng_guardian)->where('first_name', $enrollmentForm->firstName_ng_guardian)->where('middle_name', $enrollmentForm->middleName_ng_guardian)->first();
        $relatives = new Relatives();
        $returnee = new Returnee();
        $learningInfo = new LearningInfo();

        //////DECLARING LEARNING INFO;
        $learningInfo->distance_learning = $enrollmentForm->distance_learning;
        foreach($enrollmentForm->learning_info as $learning_info){
            if($learning_info == "cellphoneVtablet"){
                $learningInfo->may_sariling_tablet_ang_bata = 1;
            }
            if($learning_info == "Computer"){
                $learningInfo->may_computer_sa_bahay = 1;
            }
            if($learning_info == "No_gadget"){
                $learningInfo->walang_sariling_gadget_ang_bata = 1;
            }
            if($learning_info == "Tv"){
                $learningInfo->may_tv_sa_bahay = 1;
            }
            if($learning_info == "Tv"){
                $learningInfo->may_tv_sa_bahay = 1;
            }
            if($learning_info == "Internet"){
                $learningInfo->may_internet_sa_bahay = 1;
            }
            if($learning_info == "Mobile_data"){
                $learningInfo->mobile_data_lang_ang_gamit = 1;
            }
        }
                $learningInfo->save();  
        ////////////////////////////////////////////////////////

        ////////////////////Mother FATHER GUARDIAN//////////////
        if($mother == null){
            $mother = new Mother();
            $mother->last_name = $enrollmentForm->lastName_ng_ina;
            $mother->first_name = $enrollmentForm->firstName_ng_ina;
            $mother->middle_name = $enrollmentForm->middleName_ng_ina;
            $mother->extension_name = $enrollmentForm->extensionName_ng_ina;
            $mother->phone_number = $enrollmentForm->mother_phone;
            $mother->email_address = $enrollmentForm->email_ng_ina;

            $mother->save();
        }

        if($father ==  null){
            $father = new Father();
            $father->last_name = $enrollmentForm->lastName_ng_ama;
            $father->first_name = $enrollmentForm->firstName_ng_ama;
            $father->middle_name = $enrollmentForm->middleName_ng_ama;
            $father->extension_name = $enrollmentForm->extensionName_ng_ama;
            $father->phone_number = $enrollmentForm->father_phone;
            $father->email_address = $enrollmentForm->email_ng_ama;

            $father->save();
        }
        if($guardian  == null){
            $guardian = new Guardian();
            $guardian->last_name = $enrollmentForm->lastName_ng_guardian;
            $guardian->first_name = $enrollmentForm->firstName_ng_guardian;
            $guardian->middle_name = $enrollmentForm->middleName_ng_guardian;
            $guardian->extension_name = $enrollmentForm->extensionName_ng_guardian;
            $guardian->phone_number = $enrollmentForm->guardian_phone;
            $guardian->email_address = $enrollmentForm->email_ng_guardian;

            $guardian->save();
        }
        ////////////////////////////////////////////
        /////////////////RELATIVES///////////////////
        $relatives->mother_id = $mother->id;
        $relatives->father_id = $father->id;
        $relatives->guardian_id = $guardian->id;
        ///////////////////////////////////////////
        
        ////////////////////////////////Student/////////////////////////////
        if($student == null){
            $relatives->save();

            $student = new Student();
            $student->first_name = $enrollmentForm->firstName_ng_bata;
            $student->middle_name = $enrollmentForm->middleName_ng_bata;
            $student->last_name = $enrollmentForm->lastName_ng_bata;
            $student->extension_name = $enrollmentForm->extensionName_ng_bata;
            $student->birth_date = date('Y-m-d', strtotime($enrollmentForm->birth_date));
            $student->gender = $enrollmentForm->gender;
            $student->mother_tongue = $enrollmentForm->primary_language;
            $student->relatives_id = $relatives->id;
            $student->school_year = 2023;
        }
        if($enrollmentForm->lrn_status == 1){
            $student->lrn = $enrollmentForm->lrn_number;
        } 
        $student->psa_birthcert_no = $enrollmentForm->psa_birth_cert;    
        $student->age = $enrollmentForm->age_on_oct_31;
        $student->indigenous_group = $enrollmentForm->indigenous_group_name;
        $student->religion = $enrollmentForm->religion;
        $student->special_assistance_needs = $enrollmentForm->special_needs_description;
        $student->house_number = $enrollmentForm->house_number;
        $student->street = $enrollmentForm->street_text;
        $student->barangay = $enrollmentForm->barangay;
        $student->municipality = $enrollmentForm->city;
        $student->province = $enrollmentForm->province;
        $student->region = $enrollmentForm->region;
        $student->household_4ps_id = $enrollmentForm->fourps_id;
        $student->status = 'active';

        $student->save();
        ///////////////////////////////////////////////////////////////////



        //////////////////RETURNEE//////////////////
        if($enrollmentForm->aralStatus == "OO dahil siya ay nag-DROP o huminto sa pag-aaral noong nakaraang taon"){
            $returnee->student_id = $student->id;
            $returnee->school_year_id = 1;
            $returnee->last_school_year_finished = $enrollmentForm->lastSchoolYearAttended;
            $returnee->last_grade_attended = $enrollmentForm->returnee;
            $returnee->last_school_attended = $enrollmentForm->lastSchoolAttended;
            $returnee->save();
        }
        /////////////////////////////////////////////////

        $documentRequirements = DocumentRequirements::where('student_id', $student->id)->first();
        ////////////////DOCUMENT REQUIREMENTS///////////////
        $documentrequest = [];
        $checklist = [];
        if($documentRequirements == null){
            $documentRequirements = new DocumentRequirements();
        }
        if($enrollmentForm->lrn_status == "0"){
            array_push($documentrequest, 'Birth Certificate');
        }
        if($enrollmentForm->lrn_status == "1" && $enrollmentForm->grade_level == "0"){
            array_push($documentrequest, 'ECCD');
            array_push($documentrequest, 'Birth Certificate');
        }
        if($enrollmentForm->lrn_status == "1" && $enrollmentForm->grade_level != "0"){
            array_push($documentrequest, 'Report Card');
        }

        for($i = 0; $i < count($documentrequest); $i++){
            array_push($checklist, "0");
        }

        $documentRequirements->student_id = $student->id;
        $documentRequirements->checklist = json_encode($checklist);
        $documentRequirements-> requirements = json_encode($documentrequest);
        $documentRequirements-> submission_deadline = date_add(date_create(date("Y-m-d")),date_interval_create_from_date_string("40 days"));
        $documentRequirements->save();
        /////////////////////
    }
}


