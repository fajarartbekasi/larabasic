<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusans';

    protected $guarded = [];

    public function pengajuans()
    {
        return $this->hasMany('App\Pengajuan');
    }

}
