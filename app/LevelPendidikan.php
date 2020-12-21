<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LevelPendidikan extends Model
{
    protected $table = 'level_pendidikan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
    ];

    protected $keyType = 'string';

    public $timestamps = false;

}
