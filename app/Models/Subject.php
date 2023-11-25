<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subjects';
    protected $fillable = [
        'subject_name',
        'grade_level_id',
    ];
    
    public function grades()
    {
        return $this->hasMany(GradingSheet::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

   
}
