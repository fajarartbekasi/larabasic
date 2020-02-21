@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="py-2">
                                    Informasi Siswa
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text"
                                           name=""
                                           id=""
                                           class="form-control"
                                           placeholder="Nama Siswa.....">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Keahlian</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">***Pilih Keahlian / Jurusan***</option>
                                        <option value="">Rpl</option>
                                        <option value="">Tkl</option>
                                        <option value="">MM</option>
                                        <option value="">AP</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="py-2">
                                    Nilai Non - Teknis
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Kedisiplinan</label>
                                    <input type="number"
                                           name=""
                                           id=""
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Kerjasama</label>
                                    <input type="number"
                                           name=""
                                           id=""
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Inisiative / Kreative</label>
                                    <input type="number"
                                           name=""
                                           id=""
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Kerajinan</label>
                                    <input type="number"
                                           name=""
                                           id=""
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Tanggung Jawab</label>
                                    <input type="number"
                                           name=""
                                           id=""
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Sikap</label>
                                    <input type="number"
                                           name=""
                                           id=""
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Kebersihan / Kerapihan</label>
                                    <input type="number"
                                           name=""
                                           id=""
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="py-2">
                                    Nilai Teknis
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Pemahaman Instruksi Kerja</label>
                                    <input type="number"
                                           name=""
                                           id=""
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Penggunaan Peralatan Kerja</label>
                                    <input type="number"
                                           name=""
                                           id=""
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Proses Kerja</label>
                                    <input type="number"
                                           name=""
                                           id=""
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Hasil Kerja</label>
                                    <input type="number"
                                           name=""
                                           id=""
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="py-2">
                            <button type="submit" class="btn btn-info">
                                Simpan Nilai
                            </button>
                            <a href="{{route('master.nilai')}}" class="btn btn-secondary">
                                Batalkan
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection