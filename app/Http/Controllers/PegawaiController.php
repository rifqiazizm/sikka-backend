<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use DB;

class PegawaiController extends Controller
{
    public function jenis_kelamin() {
        $pria = Pegawai::where('Jns_kelamin','Pria')->count();
        $wanita = Pegawai::where('Jns_kelamin','Wanita')->count();

        return response()->json([
            'status' => 'oke',
            'data' => [
                'pria' => $pria,
                'wanita' => $wanita
            ]
        ],200);
    }

    public function lamaJab() {
        // $peg = Pegawai::orderBy('Lama_Jab')->limit(100)->get();
        $peg = Pegawai::orderBy('Lama_Jab','DESC')->limit(20)->get();
        $grouping = Pegawai::select(DB::raw('Lama_Jab, Count(*) as jumlah'))->groupBy('Lama_Jab')->get();
        return response()->json([
            'individual' => $peg,
            'group' => $grouping
        ],200);
    }

    public function pulau() {
        $peg = Pegawai::select(DB::raw('Pulau , Count(*) as Jumlah'))->groupBy('Pulau')->get();
        return response()->json([
            'data' => $peg
        ],200);
    }

    public function lamaKantor() {

    }


    public function pendidikan() {
        $peg = Pegawai::select(DB::raw('
            CASE WHEN Tk_Pendidikan IN ("D-I","D-III","S1/D-IV","S2","SMA")
                    THEN Tk_Pendidikan
                    ELSE "LAINNYA"
                    END as PENDIDIKAN
                , Count(*) as jml_pegawai
        '))->groupBy('PENDIDIKAN')->orderBy('jml_pegawai','DESC')->get();

        return response()->json([
            'data' => $peg
        ],200);
    }

    public function usia() {
        $peg = Pegawai::select(DB::raw('Usia,Count(*) as jml'))->groupBy('Usia')->get();
        return response()->json([
            'data' => $peg
        ],200);
    }






    



}