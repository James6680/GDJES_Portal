<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function CreateTeacher(){
        return view('admin.teacher-management.create');
    }//end signout method
    
}



//REMINDER: 
