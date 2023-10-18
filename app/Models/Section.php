<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;

    protected $table = 'sections';
    protected $fillable =[
        'section_name',
        'grade_level_id',
    ];

    public function gradeLevel(): hasOne{
        return $this->hasOne(GradeLevel::class);
    }
}
