<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Teacher;



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
            'profile_picture'=> 'required',
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
            'first_name.required' => 'First Name is Required.',
            'middle_name.required' => 'Middle Name is Required.',
            'extension_name.required' => 'Extension Name is Required.',
            'email.required' => 'Email is Required.',
            'profile_picture.required' => 'Profile picture is Required.',
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
        //return redirect()->route('')->with('success','');
        return response()->json([
            'status' => 'success',
        ]);
    }//end signout method
    
}



//REMINDER: 
