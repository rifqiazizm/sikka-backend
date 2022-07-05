<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'sikka_master';

    protected $fllable = [
        'NM_PEG',
        'GELAR_SUFFIX',
        'TMT_Jabatan',
        'TMT_Kantor',
        'TMT_Kota',
        'TMT_Kanwil',
        'agama',
        'Lama_Jab',
        'Jabatan',
        'Es4',
        'Unit_Kerja',
        'Es2',
        'Pulau',
        'Jns_kelamin'

    ];


    // public function getLamaJabAttribute($val) {
    //     return floor($val);
    // }


}
