<?php

namespace Database\Seeders;

use App\Models\CebatContact;
use App\Models\User;
use App\Models\Order;
use App\Models\Client;
use App\Models\Unilav;
use App\Models\Operator;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\mansionelavorator;
use App\Models\reminder;
use App\Models\StatusOrder;

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

        $this->call([
            ClientSeeder::class,
            CampiClientSeeder::class,
        ]);

        CebatContact::factory(3)->create();
        StatusOrder::factory(3)->create();
        reminder::factory(3)->create();
        Order::factory(50)->create();
        Unilav::factory(100)->create();
        mansionelavorator::factory((50))->create();
        Operator::factory(10)->create();
    }
}
