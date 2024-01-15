<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $table = 'sections';

    protected $fillable = [
        'section_name',
        'grade_level_id',
        'school_year_id',
        'adviser_id',
    ];


    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function gwas()
    {
        return $this->hasMany(Gwa::class, 'section_id');
    }

}
