<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gwa extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'grade_level_id',
        'section_id',
        'school_year_id',
        'gwa',
        'remarks',
        'descriptors',
        'status',
        'status_no',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function gradeLevel()
    {
        return $this->belongsTo(GradeLevel::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function schoolYears()
    {
        return $this->belongsTo(SchoolYears::class);
    }
}
