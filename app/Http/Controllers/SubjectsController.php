<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SubjectRequest;

class SubjectsController extends Controller
{
    //
    public function getSubject()
    {
        $query = DB::table('subjects')
            ->join('grade_levels', 'subjects.grade_level_id', '=', 'grade_levels.id')
            ->select('subjects.*', 'grade_levels.grade_level')
            ->orderBy('grade_levels.id', 'asc')
            ->orderBy('subjects.subject_name', 'asc')
            ->get();
    
        return $query;
    }

    public function CRUDSubject(SubjectRequest $request){
        if($request->formAction === "AddData"){
            $validated = $request->validated();
            $subject = [];
            $subject['subject_name'] = $request->subject_name;
            $subject['grade_level_id'] = $request->grade_level_id;
            Subject::create($subject);
        }else if($request->formAction === "EditData"){
            $validated = $request->validated();
            $select = new Subject();
            DB::table('subjects')
            ->where('id', $request->subject_id)
            ->update(['grade_level_id' => $request->grade_level_id, 'subject_name' => $request->subject_name]);
        }else if($request->formAction === "DeleteData"){
            DB::table('subjects')->where('id', '=', $request->subject_id)->delete();
        }
    }


}
