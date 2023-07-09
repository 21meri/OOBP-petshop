<?php

namespace Database\Factories;
use App\Models\Adoption;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adoption>
 */
class AdoptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code'=>$this->faker->unique()->numberBetween(1,1000),
            'date'=>Carbon::now(),
            'name'=>$this->faker->name(),
            'description'=>'Obicni opis',
            
            'worker'=>$this->faker->numberBetween(1,30),
            
            'cat'=>$this->faker->numberBetween(1,10),
        ];
    }
}
