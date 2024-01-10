<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;




class AdminController extends Controller
{
    public function Index(){
        return view('admin.login');
    }//end index method

    public function Login(Request $request ){
       // dd($request->all()); /*--for dumping data--*/
       $check = $request->all();
       if(Auth::guard('admin')->
            attempt(['username' => $check['username'], 'password' => $check['password']])){
            return redirect()->route('admin.dashboard')->with('error', 'Admin Login Successfully');
        }else{
            return back()->with('error', 'Invalid Username or Password');
        }
    }//end login method
    
    public function Signout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login_from')->with('error', 'Admin Logout Successfully');
    }//end signout method

    public function ViewTeacher(){
        $teacher = Teacher::latest()->paginate(10);
        return view('admin.teacher-management', compact('teacher'));

    }//end view method
    public function CreateTeacher(Request $request){
        $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'extension_name'=> 'required',
            'email'=> 'required',
            'birth_date'=> 'required',
            'age'=> 'required',
            'gender'=> 'required',
            'phone_number' => 'required',
            'house_number' => 'required',
            'street' => 'required',
            'barangay' => 'required',
            'municipality'=> 'required',
            'province'=> 'required',
            'region'=> 'required',
            'facebook_link' => 'required',
        ],[
            'last_name.required' => 'Last Name is Required.',
            'last_name.exists' => 'Teacher already exists.',
            'first_name.required' => 'First Name is Required.',
            'middle_name.required' => 'Middle Name is Required.',
            'extension_name.required' => 'Extension Name is Required.',
            'email.required' => 'Email is Required.',
            'birth_date.required' => 'Birthday is Required.',
            'age.required' => 'Age is Required.',
            'gender.required' => 'Gender is Required.',
            'phone_number.required' => 'Phone number is Required.',
            'house_number.required' => 'House number is Required.',
            'street.required' => 'Street is Required.',
            'barangay.required' => 'Barangay is Required.',
            'municipality.required' => 'Municipality is Required.',
            'province.required' => 'Province is Required.',
            'region.required' => 'Region is Required.',
            'facebook_link.required' => 'Facebook link is Required.',
        ]
    );
        $teacher = Teacher::create($request->all());
        $teacher->profile_picture = 'none';
        //return redirect()->route('')->with('success','');
        return response()->json([
            'status' => 'success',
        ]);
    }//end CreateTeacher method

    public function EditStudent(Request $request){
        $validatedData = $request->validate([
            // 'aralStatus' => 'required',
            // 'returnee' => 'nullable',
            // 'lastSchoolAttended' => 'nullable',
            // 'lastSchoolYearAttended' => 'nullable',
            // 'grade_level' => 'required',
            'username' => 'required',
            'lrn_number' => 'nullable',
            'psa_birth_cert' => 'required',
            'lastName_ng_bata' => 'required',
            'firstName_ng_bata' => 'required',
            'middleName_ng_bata' => 'required',
            'extensionName_ng_bata' => 'required',
            'birth_date' => 'required',
            'age_on_oct_31' => 'required',
            'gender' => 'required',
            'indigenous_group_name' => 'nullable',
            'primary_language'=>'required',
            'religion' => 'required',
            'special_needs_description' => 'nullable',
            'region' => 'nullable',
            'province'  => 'nullable',
            'city'  => 'nullable',
            'barangay'  => 'nullable',
            'street_text' => 'nullable',
            'house_number' => 'required',
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
            "fourps_id" => 'nullable',
            // "learning_info" => 'required',
            // "distance_learning" => 'required', 
        ]);

        if (isset($validatedData['lrn_number'])) {
            $validatedData['lrn_status'] = 1; // Set lrn_status to 1
        }

        $student = Student::where('username', '=', $validatedData['username'])->first();
        $student->psa_birthcert_no = $validatedData['psa_birth_cert'];
        $student->last_name = $validatedData['lastName_ng_bata'];
        $student->first_name = $validatedData['firstName_ng_bata'];
        $student->middle_name = $validatedData['middleName_ng_bata'];
        $student->extension_name = $validatedData['extensionName_ng_bata'];
        $student->lrn = $validatedData['lrn_number'];
        $student->birth_date = $validatedData['birth_date'];
        $student->age = $validatedData['age_on_oct_31']; 
        $student->gender = $validatedData['gender'];
        $student->indigenous_group = $validatedData['indigenous_group_name'];
        $student->mother_tongue = $validatedData['primary_language'];
        $student->religion = $validatedData['religion'];
        $student->special_assistance_needs = $validatedData['special_needs_description'];

        if (!is_null($validatedData['house_number']) && !is_null($validatedData['street_text']) && !is_null($validatedData['barangay']) && !is_null($validatedData['city']) && !is_null($validatedData['region'])) {
            $student->house_number = $validatedData['house_number'];
            $student->street = $validatedData['street_text'];
            $student->barangay = $validatedData['barangay'];
            $student->municipality = $validatedData['city'];
            $student->region = $validatedData['region'];
        }

        if(!is_null($validatedData['fourps_id'])){
            $student->fourps_id = $validatedData['fourps_id'];
        }

        $student->save();
    }

    public function ArchiveStudent(Request $request){
        $student = Student::where('id',$request->input('id'))->first();
        $student->status = 1;
        $student->save();   
        return $request;
    }

    public function changePassword(Request $request){
        $validatedData = $request->validate([
            'email' => 'required',
            'username' => 'required',
        ]);

        $bytes = random_bytes(4);

        $val = Admin::where('email', $validatedData['email'])
                ->where('username', $validatedData['username'])
                ->first();

        $val->password = Hash::make(bin2hex($bytes));
        $val->save();
        
        if(!is_null($val)){
            $receiver = new stdClass();
            $receiver->name = $val->first_name;
            $receiver->email = $val->email;
            $receiver->username = $val->username;
            $receiver->newPassword = bin2hex($bytes);
            Mail::to($receiver->email)->send(new resetPassword($receiver));
        }
    }

    public function EditTeacher(Request $request){
        $request->validate([
            'edit_last_name' => 'required',       
            'edit_first_name' => 'required',
            'edit_middle_name' => 'required',
            'edit_extension_name'=> 'required',
            'edit_email'=> 'required',
            'edit_birth_date'=> 'required',
            'edit_age'=> 'required',
            'edit_gender'=> 'required',
            'edit_phone_number' => 'required',
            'edit_house_number' => 'required',
            'edit_street' => 'required',
            'edit_barangay' => 'required',
            'edit_municipality'=> 'required',
            'edit_province'=> 'required',
            'edit_region'=> 'required',
            'edit_facebook_link' => 'required',
        ],[
            'edit_last_name.required' => 'Last Name is Required.',
            'edit_first_name.required' => 'First Name is Required.',
            'edit_middle_name.required' => 'Middle Name is Required.',
            'edit_extension_name.required' => 'Extension Name is Required.',
            'edit_email.required' => 'Email is Required.',
            'edit_birth_date.required' => 'Birthday is Required.',
            'edit_age.required' => 'Age is Required.',
            'edit_gender.required' => 'Gender is Required.',
            'edit_phone_number.required' => 'Phone number is Required.',
            'edit_house_number.required' => 'House number is Required.',
            'edit_street.required' => 'Street is Required.',
            'edit_barangay.required' => 'Barangay is Required.',
            'edit_municipality.required' => 'Municipality is Required.',
            'edit_province.required' => 'Province is Required.',
            'edit_region.required' => 'Region is Required.',
            'edit_facebook_link.required' => 'Facebook link is Required.',
        ]);

       Teacher::where('id', $request->edit_id)->update([
        'last_name' => $request->edit_last_name,
       'first_name' => $request->edit_first_name,
        'middle_name' => $request->edit_middle_name,
       'extension_name' => $request->edit_extension_name,
       'email' => $request->edit_email,
        'profile_picture' => "none",
        'birth_date' => $request->edit_birth_date,  
        'age' => $request->edit_age,
        'gender' => $request->edit_gender,
        'phone_number' => $request->edit_phone_number,
       'house_number' => $request->edit_house_number,
        'street' => $request->edit_street,
        'barangay' => $request->edit_barangay,
        'municipality' => $request->edit_municipality,
        'province' => $request->edit_province,
        'region' => $request->edit_region,
        'facebook_link' => $request->edit_facebook_link,
    ]);
       
       
    
        return response()->json([
            'status' => 'success',
        ]);
    }//end EditTeacher method
    
    public function getStudentAccounts(){
        $studentAccounts = DB::table('students')
                            ->join('enrollment','enrollment.student_id','=','students.id')
                            ->join('school_years','school_years.id', '=', 'enrollment.school_year_id')
                            ->where('school_years.active', 1)
                            ->join('learning_info', 'learning_info.id','=','enrollment.learning_info_id')
                            ->select('students.*', 'enrollment.grade_level_id', 'learning_info.*')
                            ->get();
        return  json_encode($studentAccounts);
    }

    public function documentRequest(Request $request){
        DB::table('document_request')
            ->where('id', $request->input('id'))
            ->update(['status' => $request->input('status')]);
    }
}

//REMINDER: 
