@extends('layouts.app')


@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="pt-3 mb-3">
                            <h5 class="text-muted font-weight-bold">
                                Form Edit Industri
                            </h5>
                        </div>
                        <form action="{{route('master.kirim.update', $industri->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama_industri">
                                    Nama Industri
                                </label>
                                <input type="text"
                                       name="nama_industri"
                                       value="{{$industri->nama_industri}}"
                                       placeholder="nama Industri"
                                       class="form-control"
                                       id="">
                            </div>
                            <div class="form-group">
                                <label for="nama_pimpinan">
                                    Nama Pimipinan
                                </label>
                                <input type="text"
                                       name="nama_pimpinan"
                                       value="{{$industri->nama_pimpinan}}"
                                       placeholder="nama pimpinan"
                                       class="form-control"
                                       id="">
                            </div>
                            <div class="form-group">
                                <label for="alamat">
                                    Fasilitas
                                </label>
                                <input type="text" name="alamat" class="form-control" value="{{$industri->alamat}}" id="alamat" >
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    Email
                                </label>
                                <input type="email" name="email" class="form-control" value="{{$industri->email}}" id="email" >
                            </div>
                            <div class="pt-3 mb-3">
                                <button type="submit"
                                        class="btn btn-outline-info">
                                    Save
                                </button>
                                <a href="{{route('master.industri')}}" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection