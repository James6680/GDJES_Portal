<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HighestPossibleScore extends Model
{
    use HasFactory;

    protected $table = 'highest_possible_scores';

    protected $fillable = [
        'ww1',
        'ww2',
        'ww3',
        'ww4',
        'ww5',
        'ww6',
        'ww7',
        'ww8',
        'ww9',
        'ww10',
        'hps_ww_total',
        'hps_ww_ps',
        'ww_weighted_score',
        'pt1',
        'pt2',
        'pt3',
        'pt4',
        'pt5',
        'pt6',
        'pt7',
        'pt8',
        'pt9',
        'pt10',
        'hps_pt_total',
        'hps_pt_ps',
        'pp_weighted_score',
        'qa10',
        'hps_qa_ps',
        'qa_weighted_score',
        'initial_grade',
        'quarterly_grade',
    ];
}