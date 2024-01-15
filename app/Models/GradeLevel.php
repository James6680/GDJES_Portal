<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeLevel extends Model
{
    use HasFactory;
    protected $table = 'grade_levels';
    
    public function gwas()
    {
        return $this->hasMany(Gwa::class, 'grade_level_id');
    }
    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}
