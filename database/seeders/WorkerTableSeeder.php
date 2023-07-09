<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Worker;

class WorkerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Worker::factory()->count(10)->create();
    }
}
