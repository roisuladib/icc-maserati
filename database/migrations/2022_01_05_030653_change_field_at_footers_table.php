<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFieldAtFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('footers', function (Blueprint $table) {
            $table->dropColumn('contact');
            $table->dropColumn('icon');
            $table->dropColumn('link');
            $table->longText('email')->after('description')->nullable();
            $table->longText('facebook')->after('description')->nullable();
            $table->longText('instagram')->after('description')->nullable();
            $table->longText('tweeter')->after('description')->nullable();
            $table->longText('whatsapp')->after('description')->nullable();
            $table->longText('youtube')->after('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('footers', function (Blueprint $table) {
            //
        });
    }
}
