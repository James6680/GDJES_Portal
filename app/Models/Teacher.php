<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Carbon\Carbon; //for getting the current year
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\SoftDeletes; //for archiving

class Teacher extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $guard = 'teachers';
    protected $table= 'teachers';
    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'extension_name',
        'email',
        'profile_picture',
        'birth_date',
        'age',
        'gender',
        'phone_number',
        'house_number',
        'street',
        'barangay',
        'municipality',
        'province',
        'region',
        'facebook_link',
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

        static::creating(function ($teacher) {
            $teacher->username = $teacher->generateUsername();
            $teacher->password = Hash::make($teacher->generatePassword());
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
        return "Teacher123";
    }
    
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function classes()
    {
        return $this->hasMany(Classes::class, 'teacher_id');
    }

}