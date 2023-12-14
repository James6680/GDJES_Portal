<?php

namespace App\Http\Controllers;

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
