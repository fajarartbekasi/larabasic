<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $table = 'pengajuans';

    protected $guarded = [];

    public function industri()
    {
        return $this->belongsTo('App\Industri');
    }
    public function jurusan()
    {
        return $this->belongsTo('App\Jurusan');
    }
}
