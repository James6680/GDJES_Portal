<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnrollmentRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    //
    public function index(EnrollmentRequest $request){
        $validator = $request->validated();

        if(empty($request->session()->get('student'))){
            $enrollment = new Student;
            $enrollment->fill($validator);
            $request->session()->put('student', $enrollment);
        }else{
            $enrollment = $request->session()->get('student');
            $enrollment->fill($validator);
            $request->session()->put('student', $enrollment);
        }
    }

}