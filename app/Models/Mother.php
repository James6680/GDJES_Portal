<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mother extends Authenticatable
{
    use HasFactory;

    protected $table = 'mothers';

    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'extension_name',
        'phone_number',
        'email_address',
    ];
}
