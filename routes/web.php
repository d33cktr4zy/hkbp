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

Route::get('/', function () {
    return view('welcome');
});

Route::get('semuaUmat', 'umatController@semuaumat');

Route::get('cariUmat', 'umatController@cariUmat');

//========================================================
//= STRUKTUR MENU ========================================
//========================================================

//========================================================
//= Login Menu ===========================================
//========================================================
Route::get('login', 'sessionController@login');
Route::post('login', 'sessionController@checkLogin');


//========================================================
//=  Public Domain  ======================================
//========================================================

//= Informasi Umat
//== Lihat Seluruh Umat
//== -------------------
//== Menampilkan Seluruh Umat berdasarkan Abjad/Wilayah
//== Paginated 20 per page
Route::get('dataUmat', 'umatController@allUmat');

//=======================================
//== Umat Berdasarkan Keluarga
//== -------------------------
//== Terbagi atas 3 Stage,
//== 1. Tampilkan search box. Accept Nama kepala keluarga.
//== 2. Tampilkan hasil dari pencarian nama kepala keluarga yang mirip.
//==    Field yang ditampilkan kode kk, Nama Lengkap KK, Wilayah.
//==    User akan mengklik tombol "Lihat Data" yang ada di kanan setiap entri
//== 3. Setelah di klik, Akan ditampilkan seluruh anggota keluarga dengan detail sbb:
//==    Kode Keluarga (di atas table), Kepala keluarga, Istri saat ini, Istri sebelumnya (jika ada)
//==    Nama Anak dalam keluarga, Tanggungan lainnya.
//==    Fields :
//==    - Nomer registrasi umat, Nama Lengkap, Umur, Alamat, Sidi, Baptis.
Route::get('dataKeluarga','umatController@dataKeluarga');


//==========================================
//== Data Umat Yang Pindah
//== ----------------------
//== Akan menampilkan data umat yang pindah 30 umat terakhir.
//== Memiliki pilihang range tanggal yang ingin dicari.
//== Memungkinkan melihat data umat yang pindah pada range tanggal tertentu.
Route::get('dataUmatPindah', 'umatController@dataPindah');

//===========================================
//== Data Umat Meninggal Dunia
//== -------------------------
//== Menampilkan data umat yang telah meninggal dunia. (30 Umat terakhir)
//== Memungkinkan melihat data umat yang meninggal pada range tanggal tertentu.
//===========================================
Route::get('dataUmatMeninggal', 'umatController@dataMeninggal');


//===========================================
//== Admin Panel ============================
//===========================================
Route::prefix('admin')->group(function(){
//== Info Gereja
//== (DE, MG, ADM)
//==--------------
//==  Edit Informasi
//===========================================
    Route::get('frmInfoGrj', 'infoController@edit');


//===========================================
//== Data Umat
//== (DE, MG, ADM)
//==----------------
//== Edit Umat
    Route::get('editUmat/{id}','umatController@editSatu');

//==-----------------
//== Tambah Umat
//============================================
    Route::get('addUmat','umatController@add');


//============================================
//== Data Keluarga
//== (DE, MG, ADM)
//==------------------
//== Buat Keluarga Baru
    Route::get('setFam','keluargaController@add');

//==-------------------
//== Ubah data Keluarga
//==----- Ubah data Istri
    Route::get('setWife', 'istriController@edit');

//==----- Ubah data Anak
    Route::prefix('anak')->group(function(){

        Route::get('add','anakController@add');
        Route::get('setAnak', 'anakController@edit');

    });
//==----- Ubah data Tanggungan
    Route::get('setTanggungan','umatController@setTanggungan');
//===========================================

//===========================================
//== Aktivitas Umat
//==-----------------------------------
//== Baptis
//==---- Tambah data Baptis
    Route::prefix('baptis')->group(function(){
    Route::get('addBaptis','umatController@addBaptis');

//==---- Ubah data Baptis
    //Route::get('')
    });


//== Sidi
    Route::prefix('sidi')->group(function(){

//==---- Tambah data Sidi
//==---- Ubah data Sidi
    });


//== Perkawinan
    Route::prefix('perkawinan')->group(function(){

//==---- Tambah data perkawinan
//==---- Ubah data perkawinan
    });


//== Meninggal Dunia
    Route::prefix('meninggal')->group(function(){

//==---- Tambah data Meninggal Dunia
//==---- Ubah data Meninggal Dunia

    });
//============================================

//============================================
//== Manajemen User
//==----------------------------------------
    Route::prefix('user')->group(function(){

//== Add User
//== Ubah User

    });
//=============================================


//===========================================
//== Cetak Laporan
//==-----------------------------------------
//== Laporan Jemaat Aktif
//== Laporan Jemaat Aktif Per Wilayah
//== Laporan Jemaat Pindah
//== Laporan Jemaat meninggal Dunia
//== Laporan Jemaat Masuk
//== Laporan Anak Kawin
//== Laporan Jemaat yang berulang tahun
//== Statistik Gereja
//===========================================
});
//===========================================
//== Logout
//===========================================
