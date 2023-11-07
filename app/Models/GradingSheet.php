<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradingSheet extends Model
{
    use HasFactory;
    protected $table = 'grading_sheet';
    protected $fillable = [
        'student_id',
        'class_id',
        'highest_possible_score_id',
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
        'pp_weighted_score',
        'qa10',
        'qa_weighted_score',
        'initial_grade',
        'quarterly_grade',
    ];
}
