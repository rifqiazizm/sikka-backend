<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use Carbon\Carbon;
use DB;


class PegawaiController extends Controller
{
    public function jenis_kelamin() {
        $pria = Pegawai::where('NM_JNS_KELAMIN_PEG','Pria')->count();
        $wanita = Pegawai::where('NM_JNS_KELAMIN_PEG','Wanita')->count();

    
        return response()->json([
            'status' => 'oke',
            'data' => [
                'Pria' => $pria,
                'Wanita' => $wanita
            ]
        ],200);
    }

    public function getLamaKantor() {
        $peg = Pegawai::select('NIP','NM_PEG','NM_UNIT_ES2','NM_UNIT_ES3','NM_UNIT_ES4','TMT_PENEMPATAN','MASA_THN_PENEMPATAN','MASA_BLN_JABATAN')->limit(100)->get();

        return response()->json([
            'data' => $peg 
        ],200);
    }




}
