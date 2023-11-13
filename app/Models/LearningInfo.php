<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningInfo extends Model
{
    use HasFactory;

    protected $table = 'learning_info';

    protected $fillable = [
        'distance_learning',
        'may_sariling_tablet_ang_bata',
        'may_computer_sa_bahay',
        'walang_sariling_gadget_ang_bata',
        'may_tv_sa_bahay',
        'may_internet_sa_bahay',
        'mobile_data_lang_ang_gamit',
    ];
}
