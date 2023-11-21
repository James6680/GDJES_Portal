<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SectionController extends Controller
{
    public function assignTeacher(Request $request){
        $inputNames = array_diff(array_slice($request->keys(), 2), ['token', 'method']);

        foreach($inputNames as $input){
            $variableId = null;
            if(strpos($input, "adviser") !== false){
                $variableId = substr_replace($input, '', 0, strlen("adviser-"));
                DB::table('sections')
                ->where('id', $variableId)
                ->update(['adviser_id' => $request->input($input)]);
            }else if(strpos($input, "subject") !== false){
                $variableId = substr_replace($input, '', 0, strlen("subject-"));
                DB::table('classes')
                ->where('id', $variableId)
                ->update(['teacher_id' => $request->input($input)]);
            }
        }
    }

    
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
