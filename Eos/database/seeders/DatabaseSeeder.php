<?php

namespace Database\Seeders;

use App\Models\Operator;
use App\Models\Order;
use App\Models\Unilav;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(40)->create();

        // User::factory(10)->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Order::factory(50)->create();
        Unilav::factory(100)->create();
        Operator::factory(10)->create();
    }
}
