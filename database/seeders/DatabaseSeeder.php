<?php

namespace Database\Seeders;


use App\Models\{Hero, Skill, Weapon, User};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {

    $skills = Skill::factory()
      ->count(20)
      ->create();

    $heroes = Hero::factory()
      ->count(20)
      ->create()
      ->each(function ($hero) use ($skills) {
        $hero->skills()->attach([$skills->random()->id]);
      });

    Weapon::factory()
      ->count(40)
      ->make()
      ->each(function ($weapon) use ($heroes) {
        $weapon->hero_id = $heroes->random()->id;
        $weapon->save();
      });

    // User::factory(10)->create();
  }
}
