<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolYears extends Model
{
    use HasFactory;

    protected $table = 'school_years';
    
    protected $fillable = [
        'school_year',
        'school_days',
        'active',
        'isPreEnrollment',
    ];
}
