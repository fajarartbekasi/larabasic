@extends('layouts.app')

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-10">
        <div class="container">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="px-3 py-3 text-center">
                        <div class="d-flex justify-content-center align-item-center">
                            <img src="{{asset('logo/ab.jpg')}}" width="10%" height="10%" alt="">
                            <div>
                                <h2 class="font-weight-bolder">
                                    SURAT PENGAJUAN PKL / PSG
                                </h2 class="font-weight-bolder">
                                <h3>SMK AL-BAHRI KAMPUS C</h3>
                                <p class="font-weight-bold">PROGRAM KEAHLIAN</p>
                                <p class="font-weight-bold">REKAYASA PERANGKAT LUNAK</p>
                                <p class="text-muted">
                                    Jalan Yon Armed 7 No. 143 Kelurahan Cikiwul
                                    Kecamatan Bantargebang Kota Bekasi Telp: (021) 82610140
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr class="border border-dark">
                    <div>
                        <table>
                            <h5>Nomor :</h5>
                            <h5>Lampiran :</h5>
                            <h5 class>
                                Perihal :
                                <span class="font-weight-bold">
                                    Permohonan Praktik Kerja Industri (Prakerin) /
                                    PSG Tahun Pelajaran 2020/2021
                                </span>
                            </h5>
                        </table>
                        <div class="py-3">
                            <h5>Kepada Yth. :</h5>
                            <h5>Bapa/Ibu Pimpinan</h5>
                            <h5 class="pt-3">Bekasi</h5>
                            <h5 class="pt-3">Dengan Hormat,</h5>
                            <h5 class="text-muted">
                                Pertama-tama kami mengucapkan terimakasih atas kerjasama,
                                perhatian dan dukungan yang bapak/Ibu berikan dalam bidang
                                pendidikan khususnya terhadap Sekolah Menengah Kejuruan (SMK).
                                Perhatian dandukungan yang diberikan telah memberikan andil
                                yang sangat besar dalam penyiapan Sumber DayaManusia (SDM)
                                yang berkualitas dan profesional untuk kemajuan bangsa dan negara
                            </h5>
                            <h5 class="text-muted">
                                Sesuai dengan Program Kurikulum SMK AL-BAHRI Tahun Pelajaran 2020/2021,
                                peserta didik KelasXI (Tingkat II) akan mengikuti Program
                                Praktik Kerja Industri (Prakerin) selama 3 (tiga) bulan.
                                Dengan kegiatan ini, diharapkan peserta didik akan dapat
                                memiliki pengalaman belajar dan bekerja di industri sekaligus
                                untuk meningkatkan skill dan profesionalisme kerja.
                            </h5>
                            <h5 class="text-muted">
                                Sehubungan dengan hal tersebut, mohon kiranya Bapak/Ibu berkenan menerima
                                peserta didik kami di bawah ini untuk melaksanakan kegiatan Praktik Kerja
                                Industri (Prakerin) yang akan dilaksanakan mulai
                                1Januari – 1 Maret 2020,dengan data peserta sebagai berikut:
                            </h5>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>L/P</th>
                                        <th>Tkt/Kelas</th>
                                        <th>Jurusan / Keahlian</th>
                                        <th>Alamat Rumah</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>{{$pengajuan->nama}}</td>
                                        <td>{{$pengajuan->jenis_kelamin}}</td>
                                        <td>{{$pengajuan->jurusan->nama_kelas}}</td>
                                        <td>{{$pengajuan->jurusan->nama_jurusan}}</td>
                                        <td>{{$pengajuan->alamat}}</td>
                                    </tr>

                                </tbody>
                            </table>
                            <h5 class="text-muted">
                                Demikian permohonan ini kami sampaikan.
                                Atas perhatian dan kesediaan Bapak/Ibu menerima pesertaPraktik
                                Kerja Industri (Prakerin), kami mengucapkan terimakasih.
                            </h5>
                        </div>

                        <div class="py-4">
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <h5>Kepala Sekolah</h5>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <h5>Miftachurochman, S.T</h5>
                                </div>

                                <div class="">
                                    <h5>Hormat kami</h5>
                                    <h5>Kepala Program Keahlian</h5>
                                    <h5>RPL</h5>
                                    <br>
                                    <br>
                                    <br>
                                    <h5>Ahfid Bachtiar, S.Kom</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection