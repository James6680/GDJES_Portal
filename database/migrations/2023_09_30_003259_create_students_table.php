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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            //$table->year('school_year');  //QUESTION ABOUT THIS: DI BA DAPAT ITO SY LIKE 2014 - 2016
            $table->unsignedBigInteger('school_year_id'); // Foreign key field

            $table->string('psa_birthcert_no', 50);
            $table->bigInteger('lrn')->nullable();   //QUESTION: POSSIBLE BA NA ANG LRN AY MAGSIMULA SA 0? KASI MAG EERROR SIYA PAG PWEDE SINCE NUMBER YUNG DATATYPE
            $table->string('last_name', 50);
            $table->string('first_name', 50);
            $table->string('middle_name', 50);
            $table->string('extension_name', 5)->nullable();
            $table->date('birth_date');
            $table->float('age');
            $table->string('gender', 10);
            $table->string('indigenous_group', 50)->nullable();
            $table->string('mother_tongue', 50);
            $table->string('religion', 50);
            $table->string('special_assistance_needs')->nullable();
            $table->string('house_number', 10); // QUESTION: DAPAT AT STRING TALAGA ITO, SINCE MAY MGA 204-B  or 103C na house numbers
            $table->string('street', 50);
            $table->string('barangay', 10);
            $table->string('municipality', 50);
            $table->string('province', 50);
            $table->string('region', 50);
            $table->unsignedBigInteger('relatives_id');
            $table->foreign('relatives_id')->references('id')->on('relatives');
            $table->string('household_4ps_id', 30)->nullable();
            $table->string('status', 15);
            $table->timestamps();



            $table->foreign('school_year_id') // Specify the foreign key
            ->references('id') // The field in the 'school_years' table it relates to
            ->on('school_years') // The table it relates to
            ->onDelete('cascade'); // What to do if the related record is deleted
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
