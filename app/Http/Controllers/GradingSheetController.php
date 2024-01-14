<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use App\Models\Subject;
use App\Models\GradeSum;
use App\Models\GradingSheet;
use Illuminate\Http\Request;
use App\Models\HighestPossibleScore;

class GradingSheetController extends Controller
{
    /*public function updatePostedStatus(Request $request)
    {
        
        $gradingSheetId = $request->input('grading_sheet_id');
        $quarter = $request->input('quarter'); 

        // Update the appropriate quarter column based on the condition
        $columnToUpdate = 'posted_q' . $quarter;
        $gradingSheet = GradingSheet::find($gradingSheetId);
        $gradingSheet->update([$columnToUpdate => true]);

        return response()->json(['success' => true]);
    }
    */
        public function updatePostedStatus(Request $request)
        {
            $quarter = $request->input('quarter');
            $gradingSheetId = $request->input('grading_sheet_id');
        
            // Update the appropriate quarter column for the grading sheet
            $columnToUpdate = 'posted_q' . $quarter;
            GradingSheet::where('id', $gradingSheetId)
                        ->update([$columnToUpdate => true]);
        
            // Retrieve the grading sheet
            $gradingSheet = GradingSheet::find($gradingSheetId);
        
            // Check if at least one quarter is posted for the corresponding student, class, and school year
            if ($gradingSheet->posted_q1 || $gradingSheet->posted_q2 || $gradingSheet->posted_q3 || $gradingSheet->posted_q4) {
                // Retrieve the corresponding GradeSum record
                $gradeSum = GradeSum::where('student_id', $gradingSheet->student_id)
                                    ->where('class_id', $gradingSheet->class_id)
                                    ->where('school_year_id', $gradingSheet->school_year_id)
                                    ->first();
        
                if ($gradeSum) {
                    // Update the corresponding grade_q{quarter} column in GradeSum with the quarterly_grade value
                    $gradeSum->{'grade_q' . $quarter} = $gradingSheet->quarterly_grade;
                    $gradeSum->save();
                }
            }
        
            // Return a JSON response indicating success
            return response()->json(['success' => true]);
        }
        


}



