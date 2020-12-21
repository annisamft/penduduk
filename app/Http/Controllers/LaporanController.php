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
        //$penduduk = Penduduk::with('kartu_keluarga')->where('jorong_id','=',1)->get();
        //dd($penduduk);
        return view('pendudukNA', compact('penduduk'));
    }

    public function listNagari(){
        $na=Nagari::all();

        return json_encode($na);
    }

    public function pendudukLV(){
        return view('pendudukLV');
    }
}
