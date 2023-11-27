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
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'relatives';

    protected $fillable = [
        'mother_id',
        'father_id',
        'guardian_id',
    ];

    public function father() {
        return $this->belongsTo('App\Models\Father', 'father_id');
    }

    public function mother() {
        return $this->belongsTo('App\Models\Mother', 'mother_id');
    }

    public function guardian() {
        return $this->belongsTo('App\Models\Guardian', 'guardian_id');
    }
}
