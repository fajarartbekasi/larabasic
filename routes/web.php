<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'master'], function(){
    // route untuk jurusan dan kelas
    route::get('jurusan-kelas','Master\JurusankelasController@index')->name('master.jurusan-kelas');
    route::get('tampilkan/form-baru','Master\JurusankelasController@create')->name('master.tampilkan.form-baru');
    route::post('kirim/data/baru','Master\JurusankelasController@store')->name('master.kirim.data.baru');

    route::get('edit-jurusan/{jurusan}', 'Master\JurusankelasController@edit')->name('master.edit-jurusan');
    route::put('update/jurusan/{jurusan}', 'Master\JurusankelasController@update')->name('master.update.jurusan');
    route::delete('hapus/data/{jurusan}', 'Master\JurusankelasController@destroy')->name('master.hapus.data');

    // route master industri
    route::get('industri', 'Master\IndustriController@index')->name('master.industri');
    route::get('tampilkan/form-baru/industri', 'Master\IndustriController@create')->name('master.tampilkan.form-baru.industri');
    route::post('kirim/data-baru/industri', 'Master\IndustriController@store')->name('master.kirim.data-baru.industri');
    route::get('ambil/form-edit/{industri}', 'Master\IndustriController@edit')->name('master.ambil.form-edit');
    route::put('kirim/update/{industri}', 'Master\IndustriController@update')->name('master.kirim.update');
    route::delete('hapus/data-industri/{industri}', 'Master\IndustriController@destroy')->name('master.hapus.data-industri');


    // master pkl
    route::get('pkl','Master\PklController@index')->name('master.pkl');
    route::get('tampilkan/detail/permohonan/pkl-psg/{pengajuan}', 'Master\PklController@show')->name('master.tampilkan.detail.permohonan.pkl-psg');

    // master nilai
    route::get('nilai','Master\NilaiController@index')->name('master.nilai');

    route::get('tampilkan/form/nilai','Master\NilaiController@create')->name('master.tampilkan.form.nilai');

    // master monitoring
    route::get('monitoring', 'Master\MonitoringController@index')->name('master.monitoring');
});

Route::group(['prefix' => 'siswa'], function(){
    route::get('ambil/form-register/psg', 'Siswa\PengajuanController@create')->name('siswa.ambil.form-register.psg');
    route::post('kirim/pengajuan/psg', 'Siswa\PengajuanController@store')->name('siswa.kirim.pengajuan.psg');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
