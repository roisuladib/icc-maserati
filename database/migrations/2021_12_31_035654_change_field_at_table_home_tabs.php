<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFieldAtTableHomeTabs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('home_tabs', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->renameColumn('description', 'tab_1');
            $table->longText('tab_2');
            $table->longText('tab_3');
            $table->longText('tab_4');
            $table->longText('tab_5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('home_tabs', function (Blueprint $table) {
            //
        });
    }
}
