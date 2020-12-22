<?php

namespace App\Http\Controllers;

use App\Nagari;
use App\Penduduk;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function pendudukUP(){
        $from = Carbon::now()->subYears(64);
        $to = Carbon::now()->subYears(15);
        $penduduk = Penduduk::whereBetween('tanggal_lahir',[$from,$to])->get();
        //dd($penduduk);
        
        return view('pendudukUP',compact('penduduk'));
    }

    public function pendudukNA(){
        $penduduk = Penduduk::leftJoin('kartu_keluarga','keluarga_id','kartu_keluarga.id')
        ->leftJoin('jorong','jorong_id','jorong.id')
        ->leftJoin('nagari','nagari_id','nagari.id')
        ->get();
        //dd($penduduk);
        return view('pendudukNA', compact('penduduk'));
    }

    public function listNagari(){
        $na=Nagari::all();

        return json_encode($na);
    }

    public function pilihNagari(Request $request){
        $pilih = $request->nagari;

        $penduduk = Penduduk::leftJoin('kartu_keluarga','keluarga_id','kartu_keluarga.id')
        ->leftJoin('jorong','jorong_id','jorong.id')
        ->leftJoin('nagari','nagari_id','nagari.id')
        ->where('nagari.id','like',"%".$pilih."%")
        ->get();

        return view('pendudukNA', compact('penduduk'));
    }

    public function pilihNagariLV(Request $request){
        $pilih = $request->nagari;

        $penduduk = Penduduk::leftJoin('kartu_keluarga','keluarga_id','kartu_keluarga.id')
        ->leftJoin('jorong','jorong_id','jorong.id')
        ->leftJoin('nagari','nagari_id','nagari.id')
        ->where('level_pendidikan_id','<=', 'LV-03')
        ->where('nagari.id','like',"%".$pilih."%")
        ->get();

        return view('pendudukLV', compact('penduduk'));
    }

    public function pendudukLV(){
        $penduduk = Penduduk::leftJoin('kartu_keluarga','keluarga_id','kartu_keluarga.id')
        ->leftJoin('jorong','jorong_id','jorong.id')
        ->leftJoin('nagari','nagari_id','nagari.id')
        ->where('level_pendidikan_id','<=', 'LV-03')
        ->get();
        //dd($penduduk);
        return view('pendudukLV', compact('penduduk'));
    }
}
