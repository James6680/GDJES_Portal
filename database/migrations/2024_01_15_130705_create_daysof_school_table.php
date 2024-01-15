<?php

// database/migrations/YYYY_MM_DD_create_daysof_school_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaysofSchoolTable extends Migration
{
    public function up()
    {
        Schema::create('daysof_school', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->integer('aug');
            $table->integer('sep');
            $table->integer('oct');
            $table->integer('nov');
            $table->integer('dec');
            $table->integer('jan');
            $table->integer('feb');
            $table->integer('mar');
            $table->integer('apr');
            $table->integer('may');
            $table->integer('jun');
            $table->integer('july');
            $table->integer('total');
            $table->timestamps();

            // Foreign key relationship with students table
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('daysof_school');
    }
}
