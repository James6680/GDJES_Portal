<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class GradingSheetController extends Controller
{
    public function getGradingSheet()
    {

        $query = DB::table('grading_sheet')
            ->whereIn('class_id', [1, 3, 4, 6, 8, 10, 12, 14, 15, 17, 19])
            ->orderBy('class_id')
            ->get();
    
        return $query;
    }
}
