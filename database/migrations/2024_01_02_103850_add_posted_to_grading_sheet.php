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
        Schema::table('grading_sheet', function (Blueprint $table) {
            $table->boolean('posted_q1')->default(false);
            $table->boolean('posted_q2')->default(false);
            $table->boolean('posted_q3')->default(false);
            $table->boolean('posted_q4')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('grading_sheet', function (Blueprint $table) {
            $table->dropColumn('posted_q1');
            $table->dropColumn('posted_q2');
            $table->dropColumn('posted_q3');
            $table->dropColumn('posted_q4');
        });
    }
};
