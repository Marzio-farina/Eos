<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\mansionelavorator;
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

        User::factory(1)->create([
            'name' => 'Marzio',
            'email' => 'marzio@live.it',
            'password' => 'password',
        ]);

        Order::factory(50)->create();
        Unilav::factory(100)->create();
        mansionelavorator::factory((50))->create();
        Operator::factory(10)->create();

        $this->call([
            ClientSeeder::class,
            CampiClientSeeder::class,
        ]);
    }
}
