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

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function gradeLevel()
    {
        return $this->belongsTo(GradeLevel::class, 'grade_level_id');
    }

    public function schoolYears()
    {
        return $this->belongsTo(SchoolYears::class, 'school_year_id');
    }

    public function gradingSheets() {
        return $this->hasMany(GradingSheet::class, 'class_id');
    }


}
