<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (config('app.env') == 'production') {
            $this->call([
                ShieldSeeder::class,
                UserSeeder::class,
            ]);
        } else {
            $this->call([
                ShieldSeeder::class,
                UserSeeder::class,
                CategorySeeder::class,
                BrandSeeder::class,
                ProductSeeder::class,
                CustomerSeeder::class,
                OrderSeeder::class,
                BlogCategorySeeder::class,
                BlogSeeder::class,
                FaqSeeder::class,
                PageSeeder::class,
                LaneSeeder::class,
                SportSeeder::class,
                SlotSeeder::class,
                LaneBookingSeeder::class,
            ]);
            // Run SQL from backup file
            $backupFilePath = database_path('media.sql');
            if (file_exists($backupFilePath)) {
                DB::unprepared(file_get_contents($backupFilePath));
            }
        }
    }
}
