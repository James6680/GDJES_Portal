<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TeacherController extends Controller
{
    public function IndexTeacher(){
        return view('login.FacultyTeacherLoginPage');
    }//end index method
    public function LoginTeacher(Request $request ){
       // dd($request->all()); /*--for dumping data--*/
       $check = $request->all();
       if(Auth::guard('teachers')->
            attempt(['username' => $check['username'], 'password' => $check['password']])){
            return redirect()->route('faculty.announcements')->with('error', 'Teacher Login Successfully');
        }else{
            return back()->with('error', 'Invalid Username or Password');
        }
    }//end login method
    public function SignoutTeacher(){
        Auth::guard('teachers')->logout();
        return redirect()->route('teacher_login_from')->with('error', 'Teacher Logout Successfully');
    }//end index method
}
