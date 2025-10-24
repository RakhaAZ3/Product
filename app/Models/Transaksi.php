<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
        use HasFactory;

    //kolom/field yang boleh di isi
    protected $fillable = ['id','tanggal_transaksi','jumlah','total_harga','id_barang','id_pembeli'];
    public $timestamp =true;

        // relasi
        public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }
        public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'id_pembeli');
    }
}
