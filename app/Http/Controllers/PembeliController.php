<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembeli = Pembeli::all();

        return view('pembeli.index',compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pembeli =Pembeli::all();
        return view('pembeli.create', compact('pembeli'));
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

        $pembeli=new Pembeli;
        $pembeli->nama_pembeli=$request->nama;
        $pembeli->jenis_kelamin=$request->jk;
        $pembeli->telepon=$request->telepon;
        $pembeli->save();

        session()->flash('success','Data berhasil ditambahkan');

        return redirect()->route('pembeli.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pembeli =Pembeli::findOrFail($id);
        return view('pembeli.show',compact('pembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pembeli =Pembeli::findOrFail($id);
        return view('pembeli.edit',compact('pembeli'));
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

        $pembeli=Pembeli::findOrfail($id);
        $pembeli->nama_pembeli=$request->nama;
        $pembeli->jenis_kelamin=$request->jk;
        $pembeli->telepon=$request->telepon;
        $pembeli->save();

        session()->flash('success','Data berhasil ditambahkan');

        return redirect()->route('pembeli.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembeli =Pembeli::findOrFail($id);

        $pembeli->delete();
        return redirect()->route('pembeli.index')->with('success',"Data Berhasil Di Hapus");
    }
}
