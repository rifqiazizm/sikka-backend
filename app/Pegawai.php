<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pegawai extends Model
{
    protected $table = 'dbsri_sikka.spg_data_current_ti';

    protected $fillable = [
        'NIP',
        'NM_PEG',
        'JNS_KELAMIN_PEG',
        'NM_JNS_KELAMIN_PEG',
        'KD_AGAMA',
        'NM_AGAMA',
        'STS_PERKAWINAN',
        'NO_KARTU_PEG',
        'NPWP',
        'KD_UNIT_ORG',
        'NM_UNIT_ES1',
        'NM_UNIT_ES2',
        'NM_UNIT_ES3',
        'NM_UNIT_ES4',
        'TMT_PENEMPATAN'

    ];

    protected $appends = ['tanggal_peg'];

    // public function getLamaJabAttribute($val) {
    //     return floor($val);
    // }

    public function riwayat() {
        return $this->hasMany(Riwayat::class, 'NIP','NIP');
    }

    public function getTanggalPegAttribute() {
        return Carbon::parse($this->TMT_PENEMPATAN);
    }
}
