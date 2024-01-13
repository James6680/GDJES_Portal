<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GradingSheet;
use App\Models\Subject;
use App\Models\Classes;
use App\Models\HighestPossibleScore;
use App\Models\Student;

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

        // Update the appropriate quarter column for all grading sheets in the given class and quarter
        $columnToUpdate = 'posted_q' . $quarter;
        // Update the appropriate quarter column for the grading sheet
        GradingSheet::where('id', $gradingSheetId)
                    ->update([$columnToUpdate => true]);

        // Return a JSON response indicating success
        return response()->json(['success' => true]);
        }


}



