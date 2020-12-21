<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    protected $table = 'pekerjaan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
    ];

    public $timestamps = false;

}
