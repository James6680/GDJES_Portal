<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HighestPossibleScore;


class HighestPossibleScoreController extends Controller
{
    
    // ScoreController
    public function store(Request $request)
    {
        $data = new HighestPossibleScore;

        $data->ww1 = $request->input('ww1');
        $data->ww2 = $request->input('ww2');
        $data->ww3 = $request->input('ww3');
        $data->ww4 = $request->input('ww4');
        $data->ww5 = $request->input('ww5');
        $data->ww6 = $request->input('ww6');
        $data->ww7 = $request->input('ww7');
        $data->ww8 = $request->input('ww8');
        $data->ww9 = $request->input('ww9');
        $data->ww10 = $request->input('ww10');
        $wwtotal = 0;
        for ($i = 1; $i <= 10; $i++) {
            $data->{'ww'.$i} = $request->input('ww'.$i);
            $wwtotal += $data->{'ww'.$i};
        }
        $data->hps_ww_total = $wwtotal;        
        $data->hps_ww_ps = $request->input('hps_ww_ps');
        $data->ww_weighted_score = $request->input('ww_weighted_score');
        $data->pt1 = $request->input('pt1');
        $data->pt2 = $request->input('pt2');
        $data->pt3 = $request->input('pt3');
        $data->pt4 = $request->input('pt4');
        $data->pt5 = $request->input('pt5');
        $data->pt6 = $request->input('pt6');
        $data->pt7 = $request->input('pt7');
        $data->pt8 = $request->input('pt8');
        $data->pt9 = $request->input('pt9');
        $data->pt10 = $request->input('pt10');
        $pttotal = 0;
        for ($i = 1; $i <= 10; $i++) {
            $data->{'pt'.$i} = $request->input('pt'.$i);
            $pttotal += $data->{'pt'.$i};
        }
        $data->hps_pt_total = $pttotal;
        $data->hps_pt_ps = $request->input('hps_pt_ps');
        $data->pp_weighted_score = $request->input('pp_weighted_score');
        $data->qa10 = $request->input('qa10');
        $data->hps_qa_ps = $request->input('hps_qa_ps');
        $data->qa_weighted_score = $request->input('qa_weighted_score');
        $data->initial_grade = $request->input('initial_grade');
        $data->quarterly_grade = $request->input('quarterly_grade');
        
        $data->save();
        return redirect()->back()->with('success', 'Scores saved successfully');
    }

    //edit highest possible scores
    public function edit(Request $request, $id)
    {
       /* $request->validate([
            'edit_ww_weighted_score' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'edit_pp_weighted_score' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'edit_qa_weighted_score' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
        ], [
            'edit_ww_weighted_score.regex' => 'Please enter the :attribute in the format .XX (two decimal places).',
            'edit_pp_weighted_score.regex' => 'Please enter the :attribute in the format .XX (two decimal places).',
            'edit_qa_weighted_score.regex' => 'Please enter the :attribute in the format .XX (two decimal places).',
        ]);
        */

        //$data = HighestPossibleScore::find($id);

        // Calculate total for 'ww1' to 'ww10'
        $wwTotal = $request->edit_ww1 + $request->edit_ww2 + $request->edit_ww3 + $request->edit_ww4 + $request->edit_ww5 +
                    $request->edit_ww6 + $request->edit_ww7 + $request->edit_ww8 + $request->edit_ww9 + $request->edit_ww10;

        // Calculate total for 'pt1' to 'pt10'
        $ptTotal = $request->edit_pt1 + $request->edit_pt2 + $request->edit_pt3 + $request->edit_pt4 + $request->edit_pt5 +
                    $request->edit_pt6 + $request->edit_pt7 + $request->edit_pt8 + $request->edit_pt9 + $request->edit_pt10;

        HighestPossibleScore::where('id', $request->edit_id)->update([
        'ww1' => $request->edit_ww1,
        'ww2' => $request->edit_ww2,
        'ww3' => $request->edit_ww3,
        'ww4' => $request->edit_ww4,
        'ww5' => $request->edit_ww5,
        'ww6' => $request->edit_ww6,
        'ww7' => $request->edit_ww7,
        'ww8' => $request->edit_ww8,
        'ww9' => $request->edit_ww9,
        'ww10' => $request->edit_ww10,
        'hps_ww_total' => $wwTotal,
        'hps_ww_ps' => $request->edit_hps_ww_ps,
        'ww_weighted_score' => $request->edit_ww_weighted_score,
        'pt1' => $request->edit_pt1,
        'pt2' => $request->edit_pt2,
        'pt3' => $request->edit_pt3,
        'pt4' => $request->edit_pt4,
        'pt5' => $request->edit_pt5,
        'pt6' => $request->edit_pt6,
        'pt7' => $request->edit_pt7,
        'pt8' => $request->edit_pt8,
        'pt9' => $request->edit_pt9,
        'pt10' => $request->edit_pt10,
        'hps_pt_total' => $ptTotal,
        'hps_pt_ps' => $request->edit_hps_pt_ps,
        'pp_weighted_score' => $request->edit_pp_weighted_score,
        'qa10' => $request->edit_qa10,
        'hps_qa_ps' => $request->edit_hps_qa_ps,
        'qa_weighted_score' => $request->edit_qa_weighted_score,
        'initial_grade' => $request->edit_initial_grade,
        'quarterly_grade' => $request->edit_quarterly_grade,
        ]);
    
    }

}
