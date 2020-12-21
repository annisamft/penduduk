<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jorong extends Model
{
    protected $table = 'jorong';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama','nagari_id',
    ];

    public $timestamps = false;

    public function nagari()
    {
        return $this->belongsTo('App\Nagari','nagari_id','id');
    }

    public function kartu_keluarga(){
        return $this->hasMany('App\KartuKeluarga','id','jorong_id');
    }
}
