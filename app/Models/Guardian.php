<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;
    protected $table = 'guardians';

    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'extension_name',
        'phone_number',
        'email_address',
    ];
}
