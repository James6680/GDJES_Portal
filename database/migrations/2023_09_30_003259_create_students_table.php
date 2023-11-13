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
            $table->string('email');
            $table->year('school_year');  //QUESTION ABOUT THIS: DI BA DAPAT ITO SY LIKE 2014 - 2016
            $table->string('psa_birthcert_no', 50);
            $table->bigInteger('lrn');   //QUESTION: POSSIBLE BA NA ANG LRN AY MAGSIMULA SA 0? KASI MAG EERROR SIYA PAG PWEDE SINCE NUMBER YUNG DATATYPE
            $table->string('last_name', 50);
            $table->string('first_name', 50);
            $table->string('middle_name', 50);
            $table->string('extension_name', 5);
            $table->date('birth_date');
            $table->float('age');
            $table->string('gender', 10);
            $table->string('indigenous_group', 50);
            $table->string('mother_tongue', 50);
            $table->string('religion', 50);
            $table->string('special_assistance_needs');
            $table->string('house_number', 10); // QUESTION: DAPAT AT STRING TALAGA ITO, SINCE MAY MGA 204-B  or 103C na house numbers
            $table->string('street', 50);
            $table->string('barangay', 10);
            $table->string('municipality', 50);
            $table->string('province', 50);
            $table->string('region', 50);
            $table->unsignedBigInteger('relatives_id');
            $table->foreign('relatives_id')->references('id')->on('relatives');
            $table->unsignedBigInteger('household_id');
            $table->foreign('household_id')->references('id')->on('households');
            $table->string('status', 15);
            $table->timestamps();
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
