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
        'lastName_ng_bata',
        'firstName_ng_bata',
        'middleName_ng_bata',
        'extensionName_ng_bata',
        'birth_date',
        'age_on_oct_31',
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
        'house_number',
        
        'lastName_ng_ama',
        'firstName_ng_ama',
        'middleName_ng_ama',
        'extensionName_ng_ama', 
        'father_phone', 
        'email_ng_ama',
        'lastName_ng_ina', 
        'firstName_ng_ina', 
        'middleName_ng_ina', 
        'extensionName_ng_ina', 
        'mother_phone', 
        'email_ng_ina',
        'lastName_ng_guardian', 
        'firstName_ng_guardian', 
        'middleName_ng_guardian', 
        'extensionName_ng_guardian', 
        'guardian_phone', 
        'email_ng_guardian',
        'fourps',
        'fourps_id',

        "learning_info",
        "distance_learning", 
    ];
}
