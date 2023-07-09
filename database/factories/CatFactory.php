<?php

namespace Database\Factories;
use App\Models\Cat;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cat>
 */
class CatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Cat::class;
    public function definition()
    {
        return [
 
            'name'=>$this->faker->name(),
            'year'=>now(),
            'code'=>$this->faker->unique()->numberBetween(1,1000),
            'weight'=>$this->faker->numberBetween(0,10),
            'gender'=>$this->faker->randomElement(['m', 'z']),
            'brand'=>$this->faker->numberBetween(1,6),
        ];
    }
}
