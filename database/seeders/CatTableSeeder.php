<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Cat;

class CatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cat::factory()->count(10)->create();
    }
}
