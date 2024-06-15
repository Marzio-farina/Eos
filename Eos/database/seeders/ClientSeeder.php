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
                'campiCommittenza_id'=>'1',
            ],
            [
                'nome' => 'Hera',
                'campiCommittenza_id'=>'2',
            ],
        ];

        foreach($clients as $client){
            Client::create($client);
        }
    }
}
