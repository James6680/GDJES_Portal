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
        Schema::create('learning_info', function (Blueprint $table) {
            $table->id();
            $table->string('distance_learning', 30);
            $table->boolean('may_sariling_tablet_ang_bata');
            $table->boolean('may_computer_sa_bahay');
            $table->boolean('walang_sariling_gadget_ang_bata');
            $table->boolean('may_tv_sa_bahay');
            $table->boolean('may_internet_sa_bahay');
            $table->boolean('mobile_data_lang_ang_gamit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learning_info');
    }
};
