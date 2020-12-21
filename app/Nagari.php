<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nagari extends Model
{
    protected $table = 'nagari';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
    ];

    public $timestamps = false;

    public function jorong()
    {
        return $this->hasMany('App\Jorong','id','nagari_id');
    }
}
