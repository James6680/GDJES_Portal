<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeSummaryTable extends Migration
{
    public function up()
    {
        Schema::create('grade_summary', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained(); // Foreign key to students table
            $table->foreignId('class_id')->constrained(); // Foreign key to classes table
            $table->foreignId('sy_id')->constrained('school_years'); // Foreign key to school_years table
            $table->decimal('grade_q1', 5, 2);
            $table->decimal('grade_q2', 5, 2);
            $table->decimal('grade_q3', 5, 2);
            $table->decimal('grade_q4', 5, 2);
            $table->decimal('average', 5, 2);
            $table->enum('remarks', ['PASSED', 'FAILED']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grade_summary');
    }
}

