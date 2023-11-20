<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SectionController extends Controller
{
    public function addSection(Request $request){
        $validatedData = $request->validate([
            "sectionName" => 'required|max:20',
            "sectionSlots" => 'required|numeric|min:15|max:65',
            'gradeLevel' => 'required',
        ]);
        
        if($request->input('gradeLevel') != ''){
            $existingSection = Section::where('section_name', $request->input('sectionName'))
            ->where('grade_level_id', $request->input('gradeLevel'))
            ->where('school_year_id', $request->input('schoolYear'))
            ->first();
    
            if ($existingSection) {
                return response()->json([
                    'errors' => [
                        'sectionName' => ['Section name already exists in this grade level.'],
                    ],
                ], 422);
            }
        }

        $section = new Section();
        $section->section_name = $request->input('sectionName');
        $section->section_slot = $request->input('sectionSlots');    
        $section->grade_level_id = $request->input('gradeLevel');
        $section->school_year_id = $request->input('schoolYear');              
        $section->save();
        //////////CREATE THE CLASSES/////////
        $subjects = DB::table('subjects')
        ->where('grade_level_id', $request->input('gradeLevel'))
        ->pluck('id');

        foreach($subjects as $subject){
            $class = new Classes();
            $class->section_id = $section->id;
            $class->subject_id = $subject;
            $class->grade_level_id = $request->input('gradeLevel');
            $class->school_year_id = $request->input('schoolYear');
            $class->save();
        }
    }

    public function editSection(Request $request){
        $validatedData = $request->validate([
            "sectionName" => 'required',
            "sectionSlots" => 'required|numeric|min:15|max:65',
            'gradeLevel' => 'required',
        ]);
        
        if($request->input('gradeLevel') != ''){
            $existingSection = Section::where('section_name', $request->input('sectionName'))
            ->where('grade_level_id', $request->input('gradeLevel'))
            ->where('school_year_id', $request->input('schoolYear'))
            ->first();
    
            if ($existingSection) {
                return response()->json([
                    'errors' => [
                        'sectionName' => ['Section name already exists in this grade level.'],
                    ],
                ], 422);
            }
        }

        $section = Section::where('id', $request->input('section_id'))->first();
        $section->section_name = $request->input('sectionName');
        $section->section_slot = $request->input('sectionSlots');    
        $section->grade_level_id = $request->input('gradeLevel');
        $section->school_year_id = $request->input('schoolYear');              
        $section->save();
    }
}
