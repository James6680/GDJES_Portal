<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class GradeLevel extends Model
{
    use HasFactory;
    protected $table = 'sections';

    
    public function section(): belongsTo{
        return $this->belongsTo(Section::class);
    }
}
