@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="py-2">
                        <a href="{{route('master.tampilkan.form.nilai')}}" class="btn btn-info">
                            Input Nilai Siswa
                        </a>
                    </div>
                    <h5>Data Nilai Siswa (Aspek Non-teknis)</h5>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Kedisiplinan</th>
                                <th>Kerjasama</th>
                                <th>Inisiative / Kreative</th>
                                <th>Kerajinan</th>
                                <th>Tanggung Jawab</th>
                                <th>Sikap</th>
                                <th>Kebersihan / Kerapihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                    <h5>Data Nilai Siswa (Aspek teknis)</h5>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Pemahaman Instruksi Kerja</th>
                                <th>Penggunaan Peralatan Kerja</th>
                                <th>Proses Kerja</th>
                                <th>Hasil Kerja</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection