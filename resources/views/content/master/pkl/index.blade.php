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
                                    <th>NIS</th>
                                    <th>Nama Siswa</th>
                                    <th>Program / Keahlian</th>
                                    <th>Nama PT</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                    <tr>
                                        <td>3213213132</td>
                                        <td>Siska Aulia</td>
                                        <td>Perhotelan</td>
                                        <td>PT.Sahabat Menghilang</td>
                                        <td>
                                            <form action=""
                                                  method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('master.tampilkan.detail.permohonan.pkl-psg')}}"
                                                   class="btn btn-outline-info btn-sm">
                                                   Detail Pengajuan
                                                </a>

                                            </form>
                                        </td>
                                    </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection