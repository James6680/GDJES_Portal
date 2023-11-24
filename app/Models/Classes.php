<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $table = "classes";

    protected $fillable = [
        'section_id',
        'teacher_id',
        'subject_id',
        'grade_level_id',
        'school_year_id',
    ];

   

}
