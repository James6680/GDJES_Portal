<?php

namespace App\Models;

use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon; //for getting the current year
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Student extends Authenticatable
{
    use HasFactory;

    protected $guard = 'students';
    protected $table = 'students';

    protected $fillable = [
        'school_year',
        'psa_birthcert_no',
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
        $inc=1;
        $username = strtolower($this->last_name) . '.' . strtolower($this->first_name) . '.' . $year;
        $is_duplicate = true;
        while($is_duplicate){
            $exists = DB::table('students')
            ->where('username', $username)
            ->exists();
            if($exists){
                $username= strtolower($this->last_name) . $inc. '.' . strtolower($this->first_name) . '.' . $year;
                $inc++;
            }else{
                $is_duplicate = false;
            }
        }
        return $username;
    }

    protected function generatePassword()
    {
        return "Student123";
    }

    public function grades()
    {
        return $this->hasMany(GradingSheet::class);
    }

    public function relative() {
        return $this->belongsTo('App\Models\Relatives', 'relatives_id');
    }

}