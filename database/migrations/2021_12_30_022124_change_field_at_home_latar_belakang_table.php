<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFieldAtHomeLatarBelakangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('home_latar_belakang', function (Blueprint $table) {
            $table->longText('description')->change();
            $table->renameColumn('title', 'title_1');
            $table->string('title_2');
            $table->string('title_3');
            $table->renameColumn('benefit', 'benefit_1');
            $table->longText('benefit_2');
            $table->longText('benefit_3');
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
            $table->dropColumn('description')->change();
            $table->dropColumn('benefit')->change();
        });
    }
}
