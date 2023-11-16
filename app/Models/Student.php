<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Carbon\Carbon; //for getting the current year
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class Student extends Authenticatable
{
    use HasFactory;

    protected $guard = 'students';
     protected $table = 'students';

    protected $fillable = [
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
        'household_4ps_id',

        'username',
        'password',

        'status',
    ];  
    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($student) {
            $student->username = $student->generateUsername();
            $student->password = Hash::make($student->generatePassword());
        });
    }

    protected function generateUsername()
    {
        $year = Carbon::now()->year;
        return strtolower($this->last_name) . '.' . strtolower($this->first_name) . '.' . $year;
    }

    protected function generatePassword()
    {
        //return 8 random characters as password
        return Str::random(8);
    }
}