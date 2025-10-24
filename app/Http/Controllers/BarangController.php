<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();

        return view('barang.index',compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang =Barang::all();
        return view('barang.create', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' =>'required|string|max:255',
            ],
            [
                'nama.required'=>'Nama Barang tidak boleh kosong!',
            ]);

        $barang=new Barang;
        $barang->nama_barang=$request->nama;
        $barang->merek=$request->merek;
        $barang->harga=$request->harga;
        $barang->stok=$request->stok;
        $barang->save();

        session()->flash('success','Data berhasil ditambahkan');

        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang =Barang::findOrFail($id);
        return view('barang.show',compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang =Barang::findOrFail($id);
        return view('barang.edit',compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $request->validate(
            [
                'nama' =>'required|string|max:255',
            ],
            [
                'nama.required'=>'Nama Barang tidak boleh kosong!',
            ]);

        $barang=Barang::findOrfail($id);
        $barang->nama_barang=$request->nama;
        $barang->merek=$request->merek;
        $barang->harga=$request->harga;
        $barang->stok=$request->stok;
        $barang->save();

        session()->flash('success','Data berhasil ditambahkan');

        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang =Barang::findOrFail($id);

        $barang->delete();
        return redirect()->route('barang.index')->with('success',"Data Berhasil Di Hapus");
    }
}
