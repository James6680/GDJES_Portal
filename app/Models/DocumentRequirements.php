<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentRequirements extends Model
{
    use HasFactory;
    
    protected $table = 'document_requirements';

    protected $fillable = [
        'student_id',
        'requirements',
        'checklist',
        'submission_deadline'
    ];
}
