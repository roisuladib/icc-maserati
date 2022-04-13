<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropSliderAndYoutubeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('home_slider_galleries');
        Schema::drop('home_slider_youtube');
        Schema::drop('home_slider_youtubes');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_slider_galleries');
        Schema::dropIfExists('home_slider_youtube');
        Schema::dropIfExists('home_slider_youtubes');
    }
}
