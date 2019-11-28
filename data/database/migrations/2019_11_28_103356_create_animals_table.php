<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->string('sex');
            $table->string('age');
            $table->string('weight');
            $table->string('height');
            $table->unsignedBigInteger('race_id');
            $table->timestamps();
        });

        Schema::table('animals', function (Blueprint $table) {
          $table->foreign('race_id')->references('id')->on('races');
        });
  }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
