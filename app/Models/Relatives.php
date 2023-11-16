<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Carbon\Carbon; //for getting the current year
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class Relatives extends Authenticatable
{
    use HasFactory;

    protected $table = 'relatives';

    protected $fillable = [
        'mother_id',
        'father_id',
        'guardian_id',
    ];
}
