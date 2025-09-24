<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BiodatasController;
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

Route::get('post',[PostsController::class,'tampil']);

Route::get('biodata',[BiodatasController::class,'tampil']);

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


Route::get('/product',[ProductController::class,'index'])->name('product');