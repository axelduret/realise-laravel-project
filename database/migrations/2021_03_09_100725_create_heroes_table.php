<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeroesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('heroes', function (Blueprint $table) {
      $table->id();
      $table->string('name', 50);
      $table->unsignedTinyInteger('health');
      $table->unsignedTinyInteger('attack');
      $table->unsignedTinyInteger('defence');
      $table->unsignedTinyInteger('gear');
      $table->string('state', 100);
      $table->string('immune', 20);
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
    Schema::dropIfExists('heroes');
  }
}
