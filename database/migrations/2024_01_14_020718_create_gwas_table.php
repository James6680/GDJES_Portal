<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGwasTable extends Migration
{
    public function up()
    {
        Schema::create('gwas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('grade_level_id');
            $table->unsignedBigInteger('section_id');
            $table->unsignedBigInteger('school_year_id');
            $table->decimal('gwa', 5, 2)->nullable();
            $table->string('remarks')->nullable();
            $table->string('descriptors')->nullable();
            $table->longText('status')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('grade_level_id')->references('id')->on('grade_levels');
            $table->foreign('section_id')->references('id')->on('sections');
            $table->foreign('school_year_id')->references('id')->on('school_years');
        });
    }

    public function down()
    {
        Schema::dropIfExists('gwas');
    }
}
