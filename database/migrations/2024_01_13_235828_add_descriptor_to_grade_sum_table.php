<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDescriptorToGradeSumTable extends Migration
{
    public function up()
    {
        Schema::table('grade_sum', function (Blueprint $table) {
            $table->string('descriptor')->nullable()->after('remarks');
        });
    }

    public function down()
    {
        Schema::table('grade_sum', function (Blueprint $table) {
            $table->dropColumn('descriptor');
        });
    }
}
