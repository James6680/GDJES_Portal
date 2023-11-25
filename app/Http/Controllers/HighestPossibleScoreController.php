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

    public function update_hps(Request $request, $id)
    {
        $data = HighestPossibleScore::find($id);

        $data->ww1 = request()->input('ww1');
        $data->ww2 = request()->input('ww2');
        $data->ww3 = request()->input('ww3');
        $data->ww4 = request()->input('ww4');
        $data->ww5 = request()->input('ww5');
        $data->ww6 = request()->input('ww6');
        $data->ww7 = request()->input('ww7');
        $data->ww8 = request()->input('ww8');
        $data->ww9 = request()->input('ww9');
        $data->ww10 = request()->input('ww10');
        $wwtotal = 0;
        for ($i = 1; $i <= 10; $i++) {
            $data->{'ww'.$i} = request()->input('ww'.$i);
            $wwtotal += $data->{'ww'.$i};
        }      
        $data->hps_ww_ps = request()->input('hps_ww_ps');
        $data->ww_weighted_score = request()->input('ww_weighted_score');
        $data->pt1 = request()->input('pt1');
        $data->pt2 = request()->input('pt2');
        $data->pt3 = request()->input('pt3');
        $data->pt4 = request()->input('pt4');
        $data->pt5 = request()->input('pt5');
        $data->pt6 = request()->input('pt6');
        $data->pt7 = request()->input('pt7');
        $data->pt8 = request()->input('pt8');
        $data->pt9 = request()->input('pt9');
        $data->pt10 = request()->input('pt10');
        $pttotal = 0;
        for ($i = 1; $i <= 10; $i++) {
            $data->{'pt'.$i} = request()->input('pt'.$i);
            $pttotal += $data->{'pt'.$i};
        }
        $data->hps_pt_total = $pttotal;        
        $data->hps_pt_ps = request()->input('hps_pt_ps');
        $data->pp_weighted_score = request()->input('pp_weighted_score');
        $data->qa10 = request()->input('qa10');
        $data->hps_qa_ps = request()->input('hps_qa_ps');
        $data->qa_weighted_score = request()->input('qa_weighted_score');
        $data->initial_grade = request()->input('initial_grade');
        $data->quarterly_grade = request()->input('quarterly_grade');

        $data->save();
        return redirect('faculty.grades',)->back()->with('success', 'Scores saved successfully');
    }

}
