<?php

namespace App\Http\Controllers;

use App\Models\Telepon;
use App\Models\pengguna;
use Illuminate\Http\Request;

class TeleponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datatelepon = Telepon::all();

        return view('telepon.index',compact('datatelepon'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datapengguna =pengguna::all();
        return view('telepon.create', compact('datapengguna'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                $request->validate(
            [
                'nomor' =>'required|string|max:255',
            ],
            [
                'nomor.required'=>'Nomor tidak boleh kosong!',
            ]);

        $telepon=new Telepon;
        $telepon->nomor=$request->nomor;
        $telepon->id_pengguna=$request->id_pengguna;

        $telepon->save();

        session()->flash('success','Data berhasil ditambahkan');

        return redirect()->route('telepon.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $telepon =Telepon::findOrFail($id);
        return view('telepon.show',compact('telepon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $telepon =Telepon::findOrFail($id);
        $pengguna =pengguna::all();
        return view('telepon.edit',compact('pengguna','telepon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
                $request->validate(
            [
                'nomor' =>'required|string|max:255',
            ],
            [
                'nomor.required'=>'Nomor tidak boleh kosong!',
            ]);

        $datatelepon =Telepon::findOrFail($id);
        $datatelepon->nomor=$request->nomor;
        $datatelepon->id_pengguna=$request->id_pengguna;

        $datatelepon->save();

        session()->flash('success','Data berhasil Diupdate');

        return redirect()->route('telepon.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $telepon =Telepon::findOrFail($id);

        $telepon->delete();
        return redirect()->route('telepon.index')->with('success',"Data Berhasil Di Hapus");
    }
}
