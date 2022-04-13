<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeBenefit1FieldAtHomeLatarBelakangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('home_latar_belakang', function (Blueprint $table) {
            $table->longText('benefit_1')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('home_latar_belakang', function (Blueprint $table) {
            $table->string('benefit_1')->change();
        });
    }
}
