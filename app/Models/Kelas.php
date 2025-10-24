<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
        use HasFactory;

    //kolom/field yang boleh di isi
    protected $fillable = ['id','nama_kelas'];
    public $timestamp =true;

        // relasi ke tabel telepon
        public function murid()
    {
        return $this->hasMany(Murid::class);
    }
}
