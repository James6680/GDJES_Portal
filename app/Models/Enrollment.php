<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'aralStatus',
        'returnee',
        'lastSchoolAttended',
        'lastSchoolYearAttended',

        'grade_level',
        'school_year',
        'lrn_status',
        'lrn_number',
        'psa_birth_cert',
        'last_name',
        'first_name',
        'middle_name',
        'extension_name',
        'birth_date',
        'age',
        'gender',   
        'indigenous_group',
        'indigenous_group_name',
        'primary_language',
        'religion',
        'special_needs',
        'special_needs_description',
        'region',
        'province',
        'city',
        'barangay',
        'street_text',


    ];
}
