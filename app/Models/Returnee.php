<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Returnee extends Model
{
    use HasFactory;

    protected $table = 'returnees';

    protected $fillable = [
        'student_id',
        'school_year_id',
        'last_school_year_finished',
        'last_grade_attended',
    ];
}
