<?php

use App\Http\Controllers\RelasiController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BiodatasController;
use App\Http\Controllers\PenggunaController;
use App\Models\Hobi;
use App\Models\Mahasiswa;
use App\Models\Wali;
use App\Models\Post;
use App\Models\Biodata;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('review/{nama_lengkap}',function($nama_lengkap){
    return "Nama Lengkap: $nama_lengkap";
});

Route::get('halaman1', function () {
    $siswa=["rudy","ipat","rakha"];
    return view('tampil1',compact('siswa')) ;
});
Route::get('halaman2', function () {
    $makanan=["mie ayam","nasgor","bakso","seblak","ayam","mie goreng","mie rebus","daging sapi","ramen","spageti"];
    return view('tampil2',compact('makanan'));
});
Route::get('halaman3', function () {
    $minuman=["pepsi","coca cola","jus","fanta","kopi","floridina","teh pucuk","larutan","mizone","teh kotak"];
    return view('tampil3',compact('minuman'));
});





// Route::get('post',function () {

    // menampilkan data tertentu
    // return $post = Post::where('id','like','%2%')->get();

    //merubah data
    // $post = Post::find(2);
    // $post->content="belajar dengan giat lagi";
    // $post->save();
    // return $post;

    //menampilkan semua data
    //return $post = Post::all();

    //menghapus
    // $post = post::find(1);
    // $post->delete();
    // return $post;

    //menambahkan data
    // $post = new post;
    // $post->title="menjadi musuh yang baik";
    // $post->content="menjadi musuh yang baik adalah hal yang positif";
    // $post->save();
    // return $post;
// });

Route::get('siswa',function(){

    //return $siswa = Siswa::all();
    $siswa = Siswa::all();
    return view('siswa',compact('siswa'));
});

// Route::get('biodata',function(){

    // $biodata = biodata::find(14);
    // $biodata->delete();

    // $biodata = biodata::find(5);
    // $biodata->nama_lengkap="Jauf";

    // $biodata = new biodata;
    // $biodata->nama_lengkap="ilman";
    // $biodata->jenis_kelamin="L";
    // $biodata->tanggal_lahir="2009-3-23";
    // $biodata->tempat_lahir="Bandung";
    // $biodata->agama="Islam";
    // $biodata->alamat="Bandung";
    // $biodata->telepon=89690589;
    // $biodata->email="ilman@gmail.com";
    // $biodata->save();

    //return $siswa = Siswa::all();

    // $biodata = Biodata::all();
    // return view('biodata',compact('biodata'));

    // return $biodata = biodata::where('jenis_kelamin','like','%L%')->get();
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/products',[ProductController::class,'index'])->name('product');
Route::get('/products/add',[ProductController::class,'store']);
Route::get('/products/update',[ProductController::class,'update']);
Route::get('/products/delete',[ProductController::class,'destroy']);
//Route::get('post',[PostsController::class,'tampil']);
//Route::get('biodata',[BiodatasController::class,'tampil']);
route::resource('post', PostsController::class);
route::resource('biodata', BiodatasController::class);
route::resource('pengguna', PenggunaController::class);

Route::get('/one-to-one', [RelasiController::class, 'oneToOne']);
Route::get('/wali-ke-mahasiswa', function () {
    $wali = Wali::with('mahasiswa')->first();
    return "{$wali->nama} adalah wali dari {$wali->mahasiswa->nama}";
});

Route::get('/one-to-many', [RelasiController::class, 'oneToMany']);
Route::get('/mahasiswa-ke-dosen', function () {
    $mhs = Mahasiswa::where('nim', '123456')->first();
    return "{$mhs->nama} dibimbing oleh {$mhs->dosen->nama}";
});

Route::get('/many-to-many', [RelasiController::class, 'manyToMany']);
Route::get('/hobi/bola', function () {
    $hobi = Hobi::where('nama_hobi', 'Bermain Bola')->first();
    foreach ($hobi->mahasiswas as $mhs) {
        echo $mhs->nama . '<br>';
    }
});


Route::get('eloquent', [RelasiController::class, 'eloquent']);