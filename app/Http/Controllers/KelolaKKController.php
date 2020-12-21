<?php

namespace App\Http\Controllers;

use App\Jorong;
use App\KartuKeluarga;
use App\Penduduk;
use Illuminate\Http\Request;

class KelolaKKController extends Controller
{
    public function index(){
        $kk= KartuKeluarga::with('jorong')->get();
        return view('kelolaKK', compact('kk'));
    }
    public function listJorong(){
        $jorong = Jorong::all();
        return json_encode($jorong);
    }

    public function create(Request $request){
         $KK = new KartuKeluarga();
         $KK->no = $request->no;
         $KK->jorong_id = $request->jorong;
         $KK->tanggal_pencatatan = $request->tanggal_pencatatan;
    
         $KK->save();

         return redirect('/')->with(['success' => 'KK berhasil di simpan']);
    }

    public function detail($id){
        $kk= KartuKeluarga::with('jorong')->find($id);
        $anggotakk= Penduduk::with('kartu_keluarga')->where('keluarga_id',$id)->get();
        //dd($anggotakk);
   		return view('KKdetail', compact('kk','anggotakk'));
    }

    public function edit($id){
        $kk= KartuKeluarga::with('jorong')->find($id);
        //dd($kk);
   		return view('KKedit', compact('kk'));
    }

    public function delete($id){
        KartuKeluarga::where('id',$id)->delete();

        return redirect('/')->with(['success' => 'KK berhasil di hapus']);
    }

    public function addAnggota($id){
        $kk= KartuKeluarga::find($id);
        return view('addPenduduk', compact('kk'));
    }

    public function update(Request $request){
        $ka = KartuKeluarga::where('id',$request->id)->first();
        $ka->no = $request->no;
         $ka->jorong_id = $request->jorong;
         $ka->tanggal_pencatatan = $request->tanggal_pencatatan;

        $ka->update();

        return redirect('/')->with(['success' => 'KK berhasil di ubah']);
    }
}
