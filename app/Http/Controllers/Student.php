<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Student extends Controller
{
    public function StudentIndex(){
        return view('login.StudentLoginPage');
    }//end index method
    public function StudentLogin(Request $request ){
       // dd($request->all()); /*--for dumping data--*/
       $check = $request->all();
       if(Auth::guard('students')->
            attempt(['username' => $check['username'], 'password' => $check['password']])){
            return redirect()->route('student.announcements')->with('error', 'Student Login Successfully');
        }else{
            return back()->with('error', 'Invalid Username or Password');
        }
    }//end login method
    public function StudentSignout(){
        Auth::guard('students')->logout();
        return redirect()->route('students_login_from')->with('error', 'Student Logout Successfully');
    }//end index method
}
