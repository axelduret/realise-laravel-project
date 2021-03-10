<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeroSkillTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('hero_skill', function (Blueprint $table) {
      $table->unsignedBigInteger('hero_id');
      $table->foreign('hero_id')
        ->references('id')
        ->on('heroes')
        ->onDelete('cascade')
        ->onUpdate('cascade');

      $table->unsignedBigInteger('skill_id');
      $table->foreign('skill_id')
        ->references('id')
        ->on('skills')
        ->onDelete('cascade')
        ->onUpdate('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('hero_skill');
  }
}
