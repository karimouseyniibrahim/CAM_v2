<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscription', function (Blueprint $table) {
            $table->increments('id');
            $table->string("numero_artisan")->nullable();
			$table->string("name");
			$table->string("email")->nullable();
			$table->string("adresse")->nullable();
			$table->string("telephone");
			$table->string("status")->nullable();
			$table->integer("formation_id")->unsigned();
			$table->foreign('formation_id')->references('id')->on('formation')->onDelete('cascade');
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
        Schema::dropIfExists('inscription');
    }
}
