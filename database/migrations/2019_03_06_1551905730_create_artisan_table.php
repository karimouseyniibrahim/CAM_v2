<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtisanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artisan', function (Blueprint $table) {
            $table->increments('id');
            $table->string("numero_artisan")->unique();
			$table->string("name");
			$table->string("email")->nullable();
			$table->string("telephone");
			$table->string("address")->nullable();
			
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
        Schema::dropIfExists('artisan');
    }
}
