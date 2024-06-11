<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            [
                'nome' => 'Terna',
            ],
            [
                'nome' => 'Areti',
            ],
            [
                'nome' => 'E-Distribuzione',
            ],
            [
                'nome' => 'Hera',
            ],
        ];

        foreach($clients as $client){
            Client::create($client);
        }
    }
}
