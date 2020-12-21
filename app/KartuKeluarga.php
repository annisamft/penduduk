<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model
{
    protected $table = 'kartu_keluarga';
    protected $primaryKey = 'id';
    protected $fillable = [
        'no','jorong_id', 'tanggal_pencatatan',
    ];

    public $timestamps = false;

    public function jorong()
    {
        return $this->belongsTo('App\Jorong','jorong_id','id');
    }
}
