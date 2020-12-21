<?php

namespace App\Http\Controllers;

use App\Kewarganegaraan;
use App\LevelPendidikan;
use App\Pekerjaan;
use App\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index(){
        $penduduk= Penduduk::all();
        return view('kelolaPenduduk', compact('penduduk'));
    }

    public function listPendidikan(){
        $lp = LevelPendidikan::all();
        return json_encode($lp);
    }

    public function listPekerjaan(){
        $pk = Pekerjaan::all();
        return json_encode($pk);
    }

    public function listNegara(){
        $ng = Kewarganegaraan::all();
        return json_encode($ng);
    }

    public function create(Request $request){
        $pd = new Penduduk();
        $pd->keluarga_id = $request->keluarga_id;
        $pd->nama = $request->nama;
        $pd->nik = $request->nik;
        $pd->tempat_lahir = $request->tempat_lahir;
        $pd->tanggal_lahir = $request->tanggal_lahir;
        $pd->agama = $request->agama;
        $pd->jenis_kelamin = $request->jenis_kelamin;
        $pd->level_pendidikan_id = $request->level_pendidikan_id;
        $pd->pekerjaan_id = $request->pekerjaan_id;
        $pd->status_pernikahan = $request->status_pernikahan;
        $pd->status_keluarga = $request->status_keluarga;
        $pd->kewarganegaraan_id = $request->kewarganegaraan_id;
        $pd->ayah = $request->ayah;
        $pd->ibu = $request->ibu;
   
        $pd->save();

        return redirect('/penduduk')->with(['success' => 'Data Penduduk berhasil di simpan']);
   }

   public function detail($id){
    $pd= Penduduk::with('kartu_keluarga','level_pendidikan','pekerjaan','kewarganegaraan')->find($id);
    //dd($pd);
       return view('pendudukDetail', compact('pd'));
    }

    public function edit($id){
        $pd= Penduduk::with('kartu_keluarga','level_pendidikan','pekerjaan','kewarganegaraan')->find($id);
        //dd($kk);
   		return view('pendudukEdit', compact('pd'));
    }
    public function update(Request $request){
        $ka = Penduduk::where('id',$request->id)->first();
        $ka->nama = $request->nama;
        $ka->nik = $request->nik;
        $ka->tempat_lahir = $request->tempat_lahir;
        $ka->tanggal_lahir = $request->tanggal_lahir;
        $ka->ayah = $request->ayah;
        $ka->ibu = $request->ibu;

        $ka->update();

        return redirect('/penduduk')->with(['success' => 'Data berhasil di ubah']);
    }

    public function delete($id){
        Penduduk::where('id',$id)->delete();

        return redirect('/penduduk')->with(['success' => 'Data berhasil di hapus']);
    }
}
