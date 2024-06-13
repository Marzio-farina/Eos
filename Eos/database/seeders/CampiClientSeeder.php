<?php

namespace Database\Seeders;

use App\Models\campiClient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampiClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $campiClient = [
            'nomeCommittente' => 'Terna',
            '01_Allegato_8' => false,
            '02_Allegato_9' => false,
            '03_Attestati_di_formazione' => false,
            '04_Allegato_10' => false,
            '05_Mezzi_Macchinari' => false,
            '06_Attrezzature' => false,
            '07_Nomine_Figure_Responsabilità' => false,
            '08_POS_Allegati' => false,
            '09_DVR' => false,
            '10_Visura_CCIAA' => false,
            '11_Dichiarazione_CCNL' => false,
            '12_Iscrizione_Gestori_Ambientali' => false,
            '13_Dichiarazione_Cave_Discariche' => false,
            '14_SOA' => false,
            '15_White_List' => false,
            '16_Dichiarazione_art_14' => false,
            '17_Procedura_Luoghi_Confinati' => false,
            '18_Piano_Amianto' => false,
        ];

        // foreach($campiClients as $campiClient){
            campiClient::create($campiClient);
        // }
    }
}
