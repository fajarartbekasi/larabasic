<?php

namespace App\Http\Controllers\Master;

use App\Industri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndustriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industris = Industri::paginate(5);
        return view('content.master.industri.index', compact('industris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.master.industri.create');
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
            'nama_industri'    => 'required',
            'nama_pimpinan'  => 'required',
            'alamat'     => 'required',
            'email'     => 'required',
        ]);

        $industri = Industri::create([
            'nama_industri'  => $request->nama_industri,
            'nama_pimpinan'  => $request->nama_pimpinan,
            'alamat'         => $request->alamat,
            'email'          => $request->email,
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
        $industri = Industri::find($id);

        return view('content.master.industri.edit', compact('industri'));
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
        $industri = Industri::find($id);

        $industri->update($request->all());

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
       $industri = Industri::find($id);

        $industri->delete($industri->all());

        return redirect()->back();
    }
}
