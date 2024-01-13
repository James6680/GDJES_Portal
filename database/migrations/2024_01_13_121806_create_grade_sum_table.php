<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradeSumTable extends Migration
{
    public function up()
    {
        Schema::create('grade_sum', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('school_year_id');
            $table->decimal('grade_q1', 5, 2)->nullable();
            // Add other columns as needed
            $table->decimal('grade_q2', 5, 2)->nullable();
            $table->decimal('grade_q3', 5, 2)->nullable();
            $table->decimal('grade_q4', 5, 2)->nullable();
            $table->decimal('average', 5, 2)->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('class_id')->references('id')->on('classes');
            $table->foreign('school_year_id')->references('id')->on('school_years');
        });

        // Update grade_q1 column based on grading_sheet data
        DB::statement("
            UPDATE grade_sum
            SET grade_q1 = (
                SELECT quarterly_grade
                FROM grading_sheet
                WHERE posted_q1 = 1
                    AND grade_sum.student_id = grading_sheet.student_id
                    AND grade_sum.class_id = grading_sheet.class_id
                    AND grade_sum.school_year_id = grading_sheet.school_year_id
                LIMIT 1
            )
        ");
    }

    public function down()
    {
        Schema::dropIfExists('grade_sum');
    }
}
