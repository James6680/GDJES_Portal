<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $table = 'enrollment';

    protected $fillable = [
        'student_id',
        'grade_level_id',
        'school_year_id',
        'section_id',
        'learning_info_id',
        'enrollment_status',
    ];
}
