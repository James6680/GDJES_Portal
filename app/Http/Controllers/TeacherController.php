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
    }//end logout method

    public function getAllTeacher(){
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

    public function delete($id){
        $data=Teacher::find($id);
        $data->delete();
        return redirect()->back();
    }

    //added for grading
    public function inputScores(GradingSheet $gradingSheet)
    {
        $highestPossibleScores = HighestPossibleScore::all();

        return view('teacher.input_scores', compact('gradingSheet', 'highestPossibleScores'));
    }

    public function calculateGrades(GradingSheet $gradingSheet)
    {
        $highestPossibleScores = HighestPossibleScore::find($gradingSheet->highest_possible_score_id);

        //calculating ww scores
        $wwScores = [$gradingSheet->ww1, $gradingSheet->ww2, 
                    $gradingSheet->ww3, $gradingSheet->ww4, 
                    $gradingSheet->ww5, $gradingSheet->ww6, 
                    $gradingSheet->ww7, $gradingSheet->ww8, 
                    $gradingSheet->ww9, $gradingSheet->ww10, 
                    ];
        //total ww scores
        $WwTotal = array_sum($wwScores);
        $WwPs = ($WwTotal / $highestPossibleScores->hps_ww_total) * $highestPossibleScores->hps_ww_ps ;
        //ww_weighted_score mudt be converted from percentage to decimal like 
        // 50% to .50 
        $wwWeightedScore = $WwPs*$highestPossibleScores->ww_weighted_score;
       // $gradingSheet->ww_weighted_score;

        $ptScores = [$gradingSheet->pt1, $gradingSheet->pt2, 
                    $gradingSheet->pt3, $gradingSheet->pt4, 
                    $gradingSheet->pt5, $gradingSheet->pt6, 
                    $gradingSheet->pt7, $gradingSheet->pt8,
                    $gradingSheet->pt9, $gradingSheet->pt10,  
                    ];
        //total pt scores
        $PtTotal = array_sum($ptScores);
        //ww_weighted_score mudt be converted from percentage to decimal like 
        // 50% to .50 
        $PtPs = ($PtTotal / $highestPossibleScores->hps_pt_total) * $highestPossibleScores->hps_pt_ps;
        $ppWeightedScore =  $PtPs*$highestPossibleScores->pp_weighted_score;
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
                    $gradingSheet->update([
                        'ww_total' => $WwTotal,
                        'ww_ps' => $WwPs,
                        'ww_weighted_score' => $wwWeightedScore,
                        'pt_total' => $PtTotal,
                        'pt_ps' => $PtPs,
                        'pp_weighted_score' => $ppWeightedScore,
                        'qa_ps' => $QaPs,
                        'initial_grade' => $initialGrade,
                        'quarterly_grade' => $quarterlyGrade,
                    ]);

                    return redirect()->route('grading_sheets.show', ['gradingSheet' => $gradingSheet])
                        ->with('success', 'Grades calculated successfully');

    }
    
}




