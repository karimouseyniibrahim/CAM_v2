<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request', function (Blueprint $table) {
            $table->increments('id');
            $table->string("artisan_id");
			$table->integer("section_id")->unsigned();
			$table->integer("local_id")->unsigned();
			$table->string("status")->nullable();
			$table->foreign('artisan_id')->references('numero_artisan')->on('artisan')->onDelete('cascade');
            $table->foreign('local_id')->references('id')->on('local')->onDelete('cascade');
            $table->foreign('section_id')->references('id')->on('section')->onDelete('cascade');
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
        Schema::dropIfExists('request');
    }
}
