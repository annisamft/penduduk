<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kewarganegaraan extends Model
{
    protected $table = 'Kewarganegaraan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
    ];

    protected $keyType = 'string';

    public $timestamps = false;

}
