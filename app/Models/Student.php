<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'email',
        'school_year',
        'psa,birthcert_no',
        'lrn',
        'last_name',
        'first_name',
        'middle_name',
        'extension_name',
        'birth_date',
        'age',
        'gender',
        'indigenous_group',
        'mother_tongue',
        'religion',
        'special_assistance_needs',
        'house_number',
        'street',
        'barangay',
        'municipality',
        'province',
        'region',
        'relatives_id',
        'household_id',
        'status',
    ];
}
