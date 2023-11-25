<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('grading_sheet', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id')->references('id')->on('classes');
            $table->unsignedBigInteger('highest_possible_score_id');
            $table->foreign('highest_possible_score_id')->references('id')->on('highest_possible_scores');
            $table->float('ww1')->nullable();
            $table->float('ww2')->nullable();
            $table->float('ww3')->nullable();
            $table->float('ww4')->nullable();
            $table->float('ww5')->nullable();
            $table->float('ww6')->nullable();
            $table->float('ww7')->nullable();
            $table->float('ww8')->nullable();
            $table->float('ww9')->nullable();
            $table->float('ww10')->nullable();
            $table->float('ww_total')->nullable();//added
            $table->float('ww_ps')->nullable();//added
            $table->float('ww_weighted_score')->nullable();            
            $table->float('pt1')->nullable();
            $table->float('pt2')->nullable();
            $table->float('pt3')->nullable();
            $table->float('pt4')->nullable();
            $table->float('pt5')->nullable();
            $table->float('pt6')->nullable();
            $table->float('pt7')->nullable();
            $table->float('pt8')->nullable();
            $table->float('pt9')->nullable();
            $table->float('pt10')->nullable();
            $table->float('pt_total')->nullable();//added
            $table->float('pt_ps')->nullable();//added
            $table->float('pp_weighted_score')->nullable();     
            $table->float('qa10')->nullable();
            $table->float('qa_ps')->nullable();//added
            $table->float('qa_weighted_score')->nullable();     
            $table->float('initial_grade')->nullable();
            $table->integer('quarterly_grade')->nullable();
            $table->string('quarter')->nullable(); // added
            $table->unsignedBigInteger('school_year_id'); // added
            $table->foreign('school_year_id')->references('id')->on('school_years'); // added

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grading_sheet');
    }
};
