<?php

namespace App\Http\Controllers\Siswa;

use App\Pengajuan;
use App\Industri;
use App\Jurusan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengajuanController extends Controller
{
    public function create()
    {
        $data = [
            'industris' => Industri::all(),
            'jurusans' => Jurusan::all()
        ];
        return view('content.siswa.pengajuan.create', $data);

    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'industri_id'     => 'required',
            'jurusan_id'      => 'required',
            'nama'            => 'required',
            'alamat'          => 'required',
            'ttl'             => 'required',
            'phone'           => 'required',
            'email'           => 'required',
            'status'          => 'required',
            'agama'           => 'required',
            'jenis_kelamin'   => 'required',
        ]);

       $pengajuan = Pengajuan::create([
            'industri_id'     => $request->industri_id,
            'jurusan_id'      => $request->jurusan_id,
            'nama'            => $request->nama,
            'alamat'          => $request->alamat,
            'ttl'             => $request->ttl,
            'phone'           => $request->phone,
            'email'           => $request->email,
            'status'          => $request->status,
            'agama'           => $request->agama,
            'jenis_kelamin'   => $request->jenis_kelamin,
        ]);

        $pengajuan->save();
        return redirect()->back();
    }
}