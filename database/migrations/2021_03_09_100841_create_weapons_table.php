<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeaponsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('weapons', function (Blueprint $table) {
      $table->id();
      $table->string('name', 50);
      $table->string('type', 20);
      $table->unsignedTinyInteger('damage');
      $table->timestamps();
      $table->unsignedBigInteger('hero_id');
      $table->foreign('hero_id')
        ->references('id')
        ->on('heroes')
        ->onDelete('restrict')
        ->onUpdate('restrict');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('weapons');
  }
}
