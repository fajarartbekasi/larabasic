@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card border-0 shadow">
        <div class="px-3 py-3">
            <h4 class="text-muted">Form Pengajuan Psg</h4>
        </div>
        <div class="card-body">
            <form action="{{route('siswa.kirim.pengajuan.psg')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Nama Industri</label>
                            <select name="industri_id" id="" class="form-control">
                                <option value="">Pilih Industri</option>

                                @forelse($industris as $industri)
                                    <option value="{{$industri->id}}">{{$industri->nama_industri}}</option>
                                @empty
                                    <option value="">Maaf Belum ada data industri</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{old('nama')}}" placeholder="Nama Siswa" id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Kelas</label>
                            <select name="jurusan_id" id="" class="form-control">
                                <option value="">Pilih Kelas</option>
                                @forelse($jurusans as $jurusan)
                                    <option value="{{$jurusan->id}}">{{$jurusan->nama_kelas}} - {{$jurusan->nama_jurusan}}</option>
                                @empty
                                    <option value="">Maaf Belum ada jurusan yang tersedia.</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="{{old('alamat')}}" placeholder="alamat" id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="ttl" class="form-control" value="{{old('ttl')}}" id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="text" name="phone" class="form-control" value="{{old('phone')}}" placeholder="+62" id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="example@mail.com" id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Status</label>
                            <input type="text" name="status" class="form-control" value="pengajuan psg" id="" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Agama</label>
                            <select name="agama" id="" class="form-control">
                                <option value="">Pilih agama</option>
                                <option value="islam">islam</option>
                                <option value="hindu">hindu</option>
                                <option value="budha">budha</option>
                                <option value="kristen">kristen</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="" class="form-control">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="laki - laki">Laki - Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="pt-3 mb-3">
                    <button type="submit" class="btn btn-info">
                        Kirim pengajuan saya
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection