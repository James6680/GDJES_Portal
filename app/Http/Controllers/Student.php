<?php

namespace App\Http\Controllers;

use App\Models\DocumentRequest;
use App\Models\Classes;
use App\Models\GradingSheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use stdClass;
use Illuminate\Support\Facades\Mail;
use App\Mail\resetPassword;
use Illuminate\Support\Facades\Hash;


class Student extends Controller
{
    public function getStudentRequests(){
        $student_request = DB::table('document_request')->where('student_id', Auth::guard('students')->user()->id)->get();
        return $student_request;
    }

    public function studentRequestDocument(Request $request){
    $documentRequest = new DocumentRequest();
    $documentRequest->student_id = Auth::guard('students')->user()->id;
    $documentRequest->document_requests = $request->input('document')[0];
    $documentRequest->purpose = $request->input('purpose');
    $documentRequest->status = "For Validation";
    $documentRequest->save();
    }

    public function StudentInfo(){
        $student = DB::table('students')
            ->join('document_requirements', 'document_requirements.student_id','=','students.id')
            ->join('enrollment','enrollment.student_id','=','students.id')
            ->join('school_years','school_years.id','=','enrollment.school_year_id')
            ->where('school_years.active',1)
            ->where('enrollment.student_id', Auth::guard('students')->user()->id)
            ->select('enrollment.enrollment_status','document_requirements.requirements','document_requirements.checklist')
            ->first();
        return $student;
    }
    public function StudentIndex(){
        return view('login.StudentLoginPage');
    }//end index method

    public function changePassword(Request $request){
        $validatedData = $request->validate([
            'email' => 'required',
            'username' => 'required',
        ]);

        $bytes = random_bytes(4);

        $affectedRows = DB::table('students')
        ->join('relatives', 'relatives.id', '=', 'students.relatives_id')
        ->join('guardians', 'guardians.id', '=', 'relatives.guardian_id')
        ->where('guardians.email_address', $validatedData['email'])
        ->where('students.username', $validatedData['username'])
        ->update(['password' => Hash::make(bin2hex($bytes))]);
    
        if ($affectedRows > 0) {
        // Retrieve the updated row
        $val = DB::table('students')
            ->join('relatives', 'relatives.id', '=', 'students.relatives_id')
            ->join('guardians', 'guardians.id', '=', 'relatives.guardian_id')
            ->where('guardians.email_address', $validatedData['email'])
            ->where('students.username', $validatedData['username'])
            ->select('students.*','guardians.email_address')
            ->first();
    
        // Send email with updated data
            $receiver = new stdClass();
            $receiver->name = $val->first_name;
            $receiver->email = $val->email_address;
            $receiver->username = $val->username;
            $receiver->newPassword = bin2hex($bytes);
            Mail::to($receiver->email)->send(new resetPassword($receiver));
        }
        
        return $affectedRows;
    }

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
    }//end signout method

}

