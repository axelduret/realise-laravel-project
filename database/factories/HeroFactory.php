<?php

namespace Database\Factories;

use App\Models\Hero;
use Illuminate\Database\Eloquent\Factories\Factory;

class HeroFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Hero::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'name' => $this->faker->name,
      'health' => $this->faker->randomDigit,
      'attack' => $this->faker->randomDigit,
      'defence' => $this->faker->randomDigit,
      'gear' => $this->faker->randomDigit,
      'state' => $this->faker->word,
      'immune' => $this->faker->word
    ];
  }
}
