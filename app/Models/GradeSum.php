<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeSum extends Model
{
    use HasFactory;

    protected $table = 'grade_sum';
    protected $fillable = [
        'student_id',
        'class_id',
        'school_year_id',
        'grade_q1',
        'grade_q2',
        'grade_q3',
        'grade_q4',
        'average',
        'remarks',
        'descriptor',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }

    public function schoolYear()
    {
        return $this->belongsTo(SchoolYears::class, 'school_year_id');
    }
}
