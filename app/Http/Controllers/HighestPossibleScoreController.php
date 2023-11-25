<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HighestPossibleScore;


class HighestPossibleScoreController extends Controller
{
    
    // ScoreController
    public function store(Request $request)
    {
        $data = $request->all();
        $score = HighestPossibleScore::create($data);
        return redirect()->back()->with('success', 'Scores saved successfully');
    }

    public function update_hps($id)
    {
        $score = HighestPossibleScore::find($id);

       $score->w1 = request()->input('w1');
         $score->w2 = request()->input('w2');
            $score->w3 = request()->input('w3');
        return view('faculty.edit_hps', compact('score'));
    }

}
