<?php

namespace App\Http\Controllers;
use App\Models\GradeSum; // Import your GradeSum model

use Illuminate\Http\Request;

class SearchStudent extends Controller
{
public function search(Request $request)
{
    $term = $request->query('term');

    $results = GradeSum::whereHas('student', function ($query) use ($term) {
        $query->where('last_name', 'LIKE', "%{$term}%")
            ->orWhere('first_name', 'LIKE', "%{$term}%")
            ->orWhere('middle_name', 'LIKE', "%{$term}%");
    })->with('student','class.subject')->get();
    
    return response()->json($results);
}

}
