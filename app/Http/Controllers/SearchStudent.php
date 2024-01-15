<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\GradeSum; // Import your GradeSum model

class SearchStudent extends Controller
{
public function search(Request $request)
{
    $term = $request->query('term');
    $teacherId = $request->query('teacherId');

    $results = GradeSum::join('school_years', 'school_years.id', '=', 'grade_sum.school_year_id')
    ->where('school_years.active', 1)
    ->whereHas('class.section', function ($query) use ($teacherId) {
        $query->where('adviser_id', $teacherId);
    })
    ->whereHas('student', function ($query) use ($term) {
        $query->where('last_name', 'LIKE', "%{$term}%")
            ->orWhere('first_name', 'LIKE', "%{$term}%")
            ->orWhere('middle_name', 'LIKE', "%{$term}%");
    })
    ->with('student', 'class.subject')
    ->get();


return response()->json($results);

}

}
