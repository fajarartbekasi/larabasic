<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industri extends Model
{
    protected $table = 'industris';

    protected $guarded = [];

    public function pengajuans()
    {
        return $this->hasMany('App\Pengajuan');
    }
}
