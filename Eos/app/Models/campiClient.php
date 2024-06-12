<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class campiClient extends Model
{
    use HasFactory;

    protected $fillable = [
        '01_Allegato_8',
        '02_Allegato_9',
        '03_Attestati_di_formazione',
        '04_Allegato_10',
        '05_Mezzi_Macchinari',
        '06_Attrezzature',
        '07_Nomine_Figure_Responsabilità',
        '08_POS_Allegati',
        '09_DVR',            
        '10_Visura_CCIAA',
        '11_Dichiarazione_CCNL',
        '12_Iscrizione_Gestori_Ambientali',
        '13_Dichiarazione_Cave_Discariche',
        '14_SOA',            
        '15_White_List',
        '16_Dichiarazione_art_14',
        '17_Procedura_Luoghi_Confinati',
        '18_Piano_Amianto',
    ];
}
