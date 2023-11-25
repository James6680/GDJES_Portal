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
<<<<<<< HEAD
=======
        'quarter',
>>>>>>> ee89a0866638f073a8cd7cb2d2ccb64a909924fd
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
        'ww_total',
        'ww_ps',
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
        'pt_total',
        'pt_ps',
        'pp_weighted_score',
        'qa10',
        'qa_ps',
        'qa_weighted_score',
        'initial_grade',
        'quarterly_grade',
<<<<<<< HEAD
        'quarter',
=======
>>>>>>> ee89a0866638f073a8cd7cb2d2ccb64a909924fd
        'school_year_id',
    ];

     public function student()
     {
         return $this->belongsTo(Student::class, 'student_id');
     }

     public function schoolClass()
     {
         return $this->belongsTo(Classes::class, 'class_id');
     }

     public function highestPossibleScore()
     {
         return $this->belongsTo(HighestPossibleScore::class, 'highest_possible_score_id');
     }
}
