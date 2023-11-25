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

    public function index()
{
    // Get unique combinations of section, subject, grade level from Classes
    $classCombinations = Classes::select('section_id', 'subject_id', 'grade_level_id')
        ->distinct()
        ->get();

    // Get quarters
    $quarters = ['1st Quarter', '2nd Quarter', '3rd Quarter', '4th Quarter', 'Quarterly Summary'];

    return view('grading_sheets.index', compact('classCombinations', 'quarters'));
}

    public function show(Request $request)
    {
        // Display the grading sheet based on the selected filters
        $subjectId = $request->input('subject_id');
        $classId = $request->input('class_id');
        $quarter = $request->input('quarter');

        $gradingSheet = GradingSheet::where('subject_id', $subjectId)
            ->where('class_id', $classId)
            ->where('quarter', $quarter)
            ->first();

        // You might also need to pass other data, such as highest possible scores, to the view
        $highestPossibleScores = HighestPossibleScore::all();
        $students = Student::all();

        return view('grading_sheets.show', compact('gradingSheet', 'highestPossibleScores', 'students'));
    }
/*
    public function edit(GradingSheet $gradingSheet)
    {
        // Show the form for editing the grading sheet
        return view('grading_sheets.edit', compact('gradingSheet'));
    }

    public function update(Request $request, GradingSheet $gradingSheet)
    {
        // Update the grading sheet with the inputted data
        // Implement your logic to handle the input and update the data
        // You might want to use validation here to ensure data integrity

        $gradingSheet->update($request->all());

        return redirect()->route('grading_sheets.show', ['gradingSheet' => $gradingSheet])
            ->with('success', 'Grading sheet updated successfully');
    }

*/

}



