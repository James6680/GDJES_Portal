<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relatives extends Model
{
    use HasFactory;

    protected $table = 'relatives';

    protected $fillable = [
        'mother_id',
        'father_id',
        'guardian_id',
    ];
}
