<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::all();

        return view('kelas.index',compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas =Kelas::all();
        return view('kelas.create', compact('kelas'));
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
                'nama.required'=>'Nama Kelas tidak boleh kosong!',
            ]);

        $kelas=new Kelas;
        $kelas->nama_kelas=$request->nama;
        $kelas->save();

        session()->flash('success','Data berhasil ditambahkan');

        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelas =Kelas::findOrFail($id);
        return view('kelas.show',compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kelas =Kelas::findOrFail($id);
        return view('kelas.edit',compact('kelas'));
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
                'nama.required'=>'Title tidak boleh kosong!',
            ]);

        $kelas =Kelas::findOrFail($id);
        $kelas->nama_kelas=$request->nama;
        $kelas->save();

        session()->flash('success','Data berhasil diganti');

        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kelas =Kelas::findOrFail($id);

        $kelas->delete();
        return redirect()->route('kelas.index')->with('success',"Data Berhasil Di Hapus");
    }
}
