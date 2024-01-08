<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = \App\Models\Customer::factory(rand(20, 50))->create();
        $customer = $customers->first();
        $customer->update([
            'email' => 'customer@nacl.com',
            'email_verified_at' => now(),
        ]);
    }
}
