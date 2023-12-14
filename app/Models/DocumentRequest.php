<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentRequest extends Model
{
    use HasFactory;

    protected $table = 'document_request';

    protected $fillable = [
    'student_id',
    'purpose',
    'document_requests',
    'status',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
