<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SectionRequest;
use Illuminate\Database\Eloquent\Builder;

class SectionsController extends Controller
{
    public function getSection()
    {
        $query = DB::table('sections')
            ->join('grade_levels', 'sections.grade_level_id', '=', 'grade_levels.id')
            ->select('sections.*', 'grade_levels.grade_level')
            ->orderBy('grade_levels.id', 'asc')
            ->orderBy('sections.section_name', 'asc')
            ->get();
    
        return $query;
    }

    public function CRUDSection(SectionRequest $request){
        if($request->formAction === "AddData"){
            $validated = $request->validated();
            $section = [];
            $section['section_name'] = $request->section_name;
            $section['grade_level_id'] = $request->grade_level_id;
            Section::create($section);
        }else if($request->formAction === "EditData"){
            $validated = $request->validated();
            $select = new Section();
            DB::table('sections')
            ->where('id', $request->section_id)
            ->update(['grade_level_id' => $request->grade_level_id, 'section_name' => $request->section_name]);
        }else if($request->formAction === "DeleteData"){
            DB::table('sections')->where('id', '=', $request->section_id)->delete();
        }
    }
}

