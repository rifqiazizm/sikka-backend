<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class Riwayat extends Model
{
    protected $table = 'dbsri_sikka.riwayat_jabatan';

    protected $fillable = [
        
    ];

   

    public function pegawai() {
        return $this->belongsTo(Pegawai::class , 'NIP','NIP' );
    }

   

}
