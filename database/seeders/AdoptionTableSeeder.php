<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Adoption;

class AdoptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Adoption::factory()->count(10)->create();
    }
}
