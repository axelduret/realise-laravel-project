<?php

namespace Database\Factories;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkillFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Skill::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    $types = array('health', 'attack', 'defence', 'gear', 'state', 'immune');
    return [
      'type' => $this->faker->randomElement($types),
      'effect' => $this->faker->word
    ];
  }
}
