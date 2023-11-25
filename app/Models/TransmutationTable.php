<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransmutationTable extends Model
{
  protected $table = 'transmutation_table';

    protected $fillable = [
        'high',
        'low',
        'equivalent',
    ];
}
