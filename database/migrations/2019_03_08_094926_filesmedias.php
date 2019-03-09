<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Filesmedias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('filesmedias', function (Blueprint $table) {
            $table->increments('id');
            $table->text("url");
			$table->integer("media_id")->unsigned();
			$table->foreign('media_id')->references('id')->on('medias')->onDelete('cascade');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('filesmedias');
    }
}
