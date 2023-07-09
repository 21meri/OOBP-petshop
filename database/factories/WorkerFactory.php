<?php

namespace Database\Factories;
use App\Models\Worker;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Worker>
 */
class WorkerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Worker::class;
    public function definition()
    {
        return [
 
            'name'=>$this->faker->name(),
            'lastname'=>$this->faker->lastName(),
            'level'=>$this->faker->numberBetween(1,6),
            'description' => $this->faker->sentence(10),
        ];
    }
}
