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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('last_name', 50);
            $table->string('first_name', 50);
            $table->string('middle_name', 50);
            $table->string('extension_name', 5);
            $table->string('email')->unique();
            $table->string('profile_picture');
            $table->date('birth_date');
            $table->float('age');
            $table->string('gender', 10);
            $table->string('phone_number', 15);
            $table->string('house_number', 10); // QUESTION: DAPAT AT STRING TALAGA ITO, SINCE MAY MGA 204-B  or 103C na house numbers
            $table->string('street', 50);
            $table->string('barangay', 10);
            $table->string('municipality', 50);
            $table->string('province', 50);
            $table->string('region', 50);
            $table->string('facebook_link');

            //added columns for admin
            $table->string('username', 50)->unique();
            $table->string('password');
            $table->tinyInteger('status')->default(1);
            //end of added columns for admin
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
