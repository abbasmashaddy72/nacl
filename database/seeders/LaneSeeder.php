<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Lane::factory(10)->create();
    }
}
