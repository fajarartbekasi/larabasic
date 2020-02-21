<?php

namespace App\Http\Controllers\Master;

use App\Jurusan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JurusankelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getData = Jurusan::paginate(5);

        return view('content.master.index', compact('getData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.master.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_kelas'    => 'required',
            'nama_jurusan'  => 'required',
            'fasilitas'     => 'required',
        ]);

        $jurusan = Jurusan::create([
            'nama_kelas'    => $request->nama_kelas,
            'nama_jurusan'  => $request->nama_jurusan,
            'fasilitas'     => $request->fasilitas,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $temukanJurusan = Jurusan::find($id);

        return view('content.edit', compact('temukanJurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $temukanJurusan = Jurusan::find($id);

        $temukanJurusan->update($request->all());

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $temukanJurusan = Jurusan::find($id);

        $temukanJurusan->delete($temukanJurusan->all());

        return redirect()->back();
    }
}
