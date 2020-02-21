@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="pt-3 mb-3">
                            <h3>Master Permohonan PKL/PSG</h3>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Siswa</th>
                                    <th>Program / Keahlian</th>
                                    <th>Nama PT</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($pengajuanpsg as $pengajuan)
                                    <tr>
                                        <td>{{$pengajuan->nama}}</td>
                                        <td>{{$pengajuan->jurusan->nama_kelas}} - {{$pengajuan->jurusan->nama_jurusan}}</td>
                                        <td>{{$pengajuan->industri->nama_industri}}</td>
                                        <td>
                                            <form action=""
                                                  method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('master.tampilkan.detail.permohonan.pkl-psg', $pengajuan->id)}}"
                                                   class="btn btn-outline-info btn-sm">
                                                   Detail Pengajuan
                                                </a>

                                            </form>
                                        </td>
                                    </tr>
                                @empty


                                @endforelse

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection