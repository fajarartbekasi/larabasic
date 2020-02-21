<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengajuanController extends Controller
{
    public function create()
    {
        // ambil data industri dari table industri
        //kemudian data industri akan masuk kedalam form pengajuan
        return view('content.siswa.pengajuan.create');

    }
}