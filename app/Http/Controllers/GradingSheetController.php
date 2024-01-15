<?php

namespace App\Http\Controllers;

use App\Models\Gwa;
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

                    // Count the number of quarters with values
                    $quartersWithValue = collect([$gradeSum->grade_q1, $gradeSum->grade_q2, $gradeSum->grade_q3, $gradeSum->grade_q4])
                    ->filter()
                    ->count();

                    // Recalculate and update the average
                    $average = ($quartersWithValue > 0)
                        ? ($gradeSum->grade_q1 + $gradeSum->grade_q2 + $gradeSum->grade_q3 + $gradeSum->grade_q4) / $quartersWithValue
                        : 0;
                    $gradeSum->average = $average;

                    // Update the remarks based on the average
                    $gradeSum->remarks = ($average >= 75) ? 'PASSED' : 'FAILED';

                    // Update the descriptor based on the average
                    if ($average >= 90 && $average <= 100) {
                        $gradeSum->descriptor = 'OUTSTANDING';
                    } elseif ($average >= 85 && $average <= 89) {
                        $gradeSum->descriptor = 'VERY SATISFACTORY';
                    } elseif ($average >= 80 && $average <= 84) {
                        $gradeSum->descriptor = 'SATISFACTORY';
                    } elseif ($average >= 75 && $average <= 79) {
                        $gradeSum->descriptor = 'FAIRLY SATISFACTORY';
                    } else {
                        $gradeSum->descriptor = 'DID NOT MEET EXPECTATIONS';
                    }
                    $gradeSum->save();


                    // Retrieve the corresponding GradeSum records
                        $gradeSums = GradeSum::where('student_id', $gradingSheet->student_id)
                        ->where('school_year_id', $gradingSheet->school_year_id)
                        ->get();

                        // Calculate the total average and count
                        $totalAverage = $gradeSums->sum('average');
                        $numberOfGradeSums = $gradeSums->count();
                        
                        $countBelow75 = $gradeSums->where('average', '<', 75)->count();

                        // Calculate GWA
                        $gwa = ($numberOfGradeSums > 0) ? $totalAverage / $numberOfGradeSums : 0;

                        // Update the GWA in the corresponding record in the gwa table
                        $gwaRecord = Gwa::where('student_id', $gradingSheet->student_id)
                        ->where('school_year_id', $gradingSheet->school_year_id)
                        ->first();

                        if ($gwaRecord) {
                        $gwaRecord->gwa = $gwa;

                        // Check if the values of average do not match the count of averages
                        if ($totalAverage != $numberOfGradeSums) {
                            $gwaRecord->descriptors = 'INC Grades';
                            $gwaRecord->remarks = 'INC Grades';
                            if($countBelow75 > 1) {
                                $gwaRecord->status_no = $countBelow75;
                                $gwaRecord->status = 'INCOMPLETE GRADES';   }
                        } else {
                            // Set descriptors based on GWA ranges
                            if ($gwa >= 90 && $gwa <= 100) {
                                $gwaRecord->descriptors = 'Outstanding';
                                $gwaRecord->remarks = 'PASSED';
                                $countBelow75 = '0';
                                $gwaRecord->status = 'PROMOTED';
                            } elseif ($gwa >= 85 && $gwa <= 89) {
                                $gwaRecord->descriptors = 'Very Satisfactory';
                                $gwaRecord->remarks = 'PASSED';
                                $countBelow75 = '0';
                                $gwaRecord->status = 'PROMOTED';
                            } elseif ($gwa >= 80 && $gwa <= 84) {
                                $gwaRecord->descriptors = 'Satisfactory';
                                $gwaRecord->remarks = 'PASSED';
                                $countBelow75 = '0';
                                $gwaRecord->status = 'PROMOTED';
                            } elseif ($gwa >= 75 && $gwa <= 79) {
                                $gwaRecord->descriptors = 'Fairly Satisfactory';
                                $gwaRecord->remarks = 'PASSED';
                                $countBelow75 = '0';
                                $gwaRecord->status = 'PROMOTED';
                            } else {
                                $gwaRecord->descriptors = 'Did not meet expectations';
                                // Set status_no based on the countBelow75 value
                                if ($countBelow75 == 1 || $countBelow75 == 2) {
                                    $gwaRecord->status_no = $countBelow75;
                                    $gwaRecord->status = 'REMEDIAL';
                                } elseif ($countBelow75 > 2) {
                                    $gwaRecord->status_no = $countBelow75;
                                    $gwaRecord->status = 'RETAIN';
                                }
                            }
                        }

                        $gwaRecord->save();
                        }

                }
                
            }
        
            // Return a JSON response indicating success
            return response()->json(['success' => true]);
        }
        


}



