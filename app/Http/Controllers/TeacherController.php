<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\GradingSheet;
use App\Models\HighestPossibleScore;
use App\Models\TransmutationTable;




use App\Models\Teacher;

class TeacherController extends Controller
{
    public function IndexTeacher()
    {
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

    //gradingsheet
    public function calculateGrades(Request $request, $id)
    {

        $gradingSheet = GradingSheet::where('id', $request->id)->first();
        $highestPossibleScores = HighestPossibleScore::where('class_id', $request->class_id)
            ->where('quarter', $request->quarter)
            ->first();
            dd($gradingSheet);
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
       

        // return redirect()->route('faculty.grades.edit_student_grading_sheet', ['gradingSheet' => $gradingSheet])
        //     ->with('success', 'Grades calculated successfully');
    }
}
