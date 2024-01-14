<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\GradingSheet;
use Illuminate\Http\Request;
use App\Models\TransmutationTable;
use Illuminate\Support\Facades\DB;
use App\Models\DocumentRequirements;
use stdClass;
use Illuminate\Support\Facades\Mail;
use App\Mail\resetPassword;
use Illuminate\Support\Facades\Hash;

use App\Models\HighestPossibleScore;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function getAdvisoryStudents(){
        $students = DB::table('sections')
                    ->join('enrollment', 'sections.id','=','enrollment.section_id')
                    ->join('students', 'students.id','=','enrollment.student_id')
                    ->join('document_requirements','students.id','=','document_requirements.id')
                    ->select('enrollment.enrollment_status','document_requirements.*','students.birth_date','students.gender','students.last_name','students.first_name','students.middle_name','students.extension_name','students.lrn','sections.grade_level_id','sections.school_year_id','sections.section_name')
                    ->where('sections.adviser_id', '=' ,Auth::guard('teachers')->user()->id)
                    ->orderBy('students.last_name', 'asc')
                    ->get();
        return $students;
    }

    public function changePassword(Request $request){
        $validatedData = $request->validate([
            'email' => 'required',
            'username' => 'required',
        ]);

        $bytes = random_bytes(4);

        $val = Teacher::where('email', $validatedData['email'])
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

    public function editEnrollmentStatus(Request $request){
        DB::table('enrollment')
            ->join('school_years', 'school_years.id','=','enrollment.school_year_id')
            ->where('school_years.active',1)
            ->where('enrollment.student_id',$request->input('student_id'))
            ->update(['enrollment.enrollment_status' => $request->input('status')]);
        return $request->input('status');
    }

    public function updateDocumentRequirements(Request $request){
        $document_requirements = DocumentRequirements::where('student_id', $request->input('student_id'))->first();
        $checklist = json_decode($document_requirements->checklist, true);
        $checklist[$request->input('index')] = (string) $request->input('is_checked');
        $document_requirements->checklist = $checklist;
        $document_requirements->save();
    }

    public function IndexTeacher(){
        return view('login.FacultyTeacherLoginPage');
    } //end index method
    public function LoginTeacher(Request $request)
    {
        // dd($request->all()); /*--for dumping data--*/
        $check = $request->all();
        if (Auth::guard('teachers')->attempt(['username' => $check['username'], 'password' => $check['password']])
        ) {
            return redirect()->route('faculty.announcements')->with('error', 'Teacher Login Successfully');
        } else {
            return back()->with('error', 'Invalid Username or Password');
        }
    } //end login method
    public function SignoutTeacher()
    {
        Auth::guard('teachers')->logout();
        return redirect()->route('teacher_login_from')->with('error', 'Teacher Logout Successfully');
    } //end logout method

    public function getAllTeacher()
    {
        $teachers = DB::table('teachers')
            ->select(
                'teachers.id',
                'teachers.last_name',
                'teachers.first_name',
                'teachers.middle_name',
                DB::raw('COALESCE(teachers.extension_name, \'\') AS extension_name')
            )
            ->orderBy('teachers.last_name', 'asc')
            ->get();
        return $teachers;
    }

    public function delete($id)
    {
        $data = Teacher::find($id);
        $data->delete();
        return redirect()->back();
    }

    //gradingsheet for calculating of grades
    public function calculateGrades(Request $request, $id)
    {

        $gradingSheet = GradingSheet::where('id', $request->id)->first();
        $highestPossibleScores = HighestPossibleScore::where('class_id', $request->class_id)
            ->where('quarter', $request->quarter)
            ->first();
        
        $WwTotal = (float) $request->input('wwTotal');
        $WwPs = ($WwTotal / $highestPossibleScores->hps_ww_total) * $highestPossibleScores->hps_ww_ps;
        
        //ww_weighted_score mudt be converted from percentage to decimal like 
        // 50% to .50 
        $wwWeightedScore = $WwPs * $highestPossibleScores->ww_weighted_score;
       
        //ww_weighted_score mudt be converted from percentage to decimal like 
        // 50% to .50 
        $PtTotal = (float) $request->input('ptTotal');
        $PtPs = ($PtTotal / $highestPossibleScores->hps_pt_total) * $highestPossibleScores->hps_pt_ps;
        $ppWeightedScore =  $PtPs * $highestPossibleScores->pp_weighted_score;
        //$gradingSheet->pp_weighted_score;

        $qa10 = $gradingSheet->qa10;
        $QaPs = ($qa10 / $highestPossibleScores->qa10) * $highestPossibleScores->hps_qa_ps;
        $QaWs = $QaPs * $highestPossibleScores->qa_weighted_score;

        //calculate initial grade scores
        $initialGrade = $wwWeightedScore + $ppWeightedScore + $QaWs;

        $transmutationRow = TransmutationTable::where('low', '<=', $initialGrade)
            ->where('high', '>=', $initialGrade)
            ->first();

        if ($transmutationRow) {
            $quarterlyGrade = $transmutationRow->equivalent;
        } else {
            // Handle the case where no matching row is found in the transmutation table
            $quarterlyGrade = null;
        }
        
        // Update the grading sheet with the calculated grades
        GradingSheet::where('id', $request->id)->update([
            'ww1' => $request->input('ww1'),
            'ww2' => $request->input('ww2'),
            'ww3' => $request->input('ww3'),
            'ww4' => $request->input('ww4'),
            'ww5' => $request->input('ww5'),
            'ww6' => $request->input('ww6'),
            'ww7' => $request->input('ww7'),
            'ww8' => $request->input('ww8'),
            'ww9' => $request->input('ww9'),
            'ww10' => $request->input('ww10'),
            'ww_total' => $WwTotal,
            'ww_ps' => $WwPs,
            'ww_weighted_score' => $wwWeightedScore,
            'pt1' => $request->input('pt1'),
            'pt2' => $request->input('pt2'),
            'pt3' => $request->input('pt3'),
            'pt4' => $request->input('pt4'),
            'pt5' => $request->input('pt5'),
            'pt6' => $request->input('pt6'),
            'pt7' => $request->input('pt7'),
            'pt8' => $request->input('pt8'),
            'pt9' => $request->input('pt9'),
            'pt10' => $request->input('pt10'),
            'pt_total' => $PtTotal,
            'pt_ps' => $PtPs,
            'pp_weighted_score' => $ppWeightedScore,
            'qa10' => $request->input('qa10'),
            'qa_ps' => $QaPs,
            'qa_weighted_score' => $request->qa_weighted_score,
            'initial_grade' => $initialGrade,
            'quarterly_grade' => $quarterlyGrade,
        ]);
    }

    //gradingsheet for posting of grades
    public function getToStudentPortal(Request $request)
    {
        // Get the data from the AJAX request
        $gradingSheetId = $request->input('id');

        // Retrieve the quarterly grade from the database (replace 'YourModel' with your actual model)
        $gradingSheet = GradingSheet::find($gradingSheetId);
        $quarterlyGrade = $gradingSheet->quarterly_grade;

        // Return the quarterly grade in the response
        return response()->json(['quarterly_grade' => $quarterlyGrade]);
    }

}
