<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Sport::factory(6)->create();
    }
}
