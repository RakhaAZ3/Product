<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengguna = pengguna::all();

        return view('pengguna.index',compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengguna.create');
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
                'nama.required'=>'Nama tidak boleh kosong!',
            ]);

        $pengguna=new pengguna;
        $pengguna->nama=$request->nama;

        $pengguna->save();

        session()->flash('success','Data berhasil ditambahkan');

        return redirect()->route('pengguna.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pengguna =pengguna::findOrFail($id);
        return view('pengguna.show',compact('pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengguna =pengguna::findOrFail($id);
        return view('pengguna.edit',compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $request->validate(
            [
                'nama' =>'required|string|max:255',
            ],
            [
                'nama.required'=>'Nama tidak boleh kosong!',
            ]);

        $pengguna =pengguna::findOrFail($id);
        $pengguna->nama=$request->nama;

        $pengguna->save();

        session()->flash('success','Data berhasil Diupdate');

        return redirect()->route('pengguna.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengguna =pengguna::findOrFail($id);

        $pengguna->delete();
        return redirect()->route('pengguna.index')->with('success',"Data Berhasil Di Hapus");
    }
}
