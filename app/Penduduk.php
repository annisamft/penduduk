<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduk';
    protected $primaryKey = 'id';
    protected $fillable = [
        'keluarga_id','nama','nik', 'tempat_lahir', 'tanggal_lahir','agama','jenis_kelamin','level_pendidikan_id','pekerjaan_id','status_pernikahan','status_keluarga','kewarganegaraan_id','ayah','ibu',
    ];

    public $timestamps = false;

    public function kartu_keluarga()
    {
        return $this->belongsTo('App\KartuKeluarga','keluarga_id','id');
    }

    public function level_pendidikan()
    {
        return $this->belongsTo('App\LevelPendidikan','level_pendidikan_id','id');
    }

    public function pekerjaan()
    {
        return $this->belongsTo('App\Pekerjaan','pekerjaan_id','id');
    }

    public function kewarganegaraan()
    {
        return $this->belongsTo('App\Kewarganegaraan','kewarganegaraan_id','id');
    }
}
