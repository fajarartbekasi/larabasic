@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="pt-3 mb-3">
                            <a href="{{route('master.tampilkan.form-baru')}}" class="btn btn-outline-info">
                                Create New Jurusan & Kelas
                            </a>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Kelas</th>
                                    <th>Nama Jurusan</th>
                                    <th>Fasilitas</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($getData as $get)
                                    <tr>
                                        <td>{{$get->nama_kelas}}</td>
                                        <td>{{$get->nama_jurusan}}</td>
                                        <td>{{$get->fasilitas}}</td>
                                        <td>
                                            <form action="{{route('master.hapus.data', $get->id)}}"
                                                  method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('master.edit-jurusan', $get->id)}}"
                                                   class="btn btn-outline-info btn-sm">
                                                   Edit Data
                                                </a>
                                                <button type="submit"
                                                        class="btn btn-outline-danger btn-sm">
                                                    Hapus Data
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">
                                            data yang anda minta belum tersedia.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{$getData->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection