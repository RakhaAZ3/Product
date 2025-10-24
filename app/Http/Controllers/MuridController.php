<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Models\Kelas;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $murid = Murid::all();

        return view('murid.index',compact('murid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas =Kelas::all();
        return view('murid.create', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' =>'required|string|max:255',
                'jk' =>'required|string|max:255',
                'tal' =>'required|string|max:255',
                'tel' =>'required|string|max:255',
                'agama' =>'required|string|max:255',
                'alamat' =>'required|string|max:255',
                'email' =>'required|email|max:255',
                'id_kelas' =>'required|string|max:255',
            ],
            [
                'nama.required'=>'Nama tidak boleh kosong!',
                'jk.required'=>'Jenis Kelamin tidak boleh kosong!',
                'tal.required'=>'Tanggal Lahir tidak boleh kosong!',
                'tel.required'=>'Tempat Lahir tidak boleh kosong!',
                'agama.required'=>'Agama Lahir tidak boleh kosong!',
                'alamat.required'=>'Alamat tidak boleh kosong!',
                'email.required'=>'Email tidak boleh kosong!',
                'id_kelas.required'=>'Pilih Kelas!',
            ]);

        $murid=new Murid;
        $murid->nama_lengkap=$request->nama;
        $murid->jenis_kelamin=$request->jk;
        $murid->tanggal_lahir=$request->tal;
        $murid->tempat_lahir=$request->tel;
        $murid->agama=$request->agama;
        $murid->alamat=$request->alamat;
        $murid->email=$request->email;
        $murid->id_kelas=$request->id_kelas;

        $murid->save();

        session()->flash('success','Data berhasil ditambahkan');

        return redirect()->route('murid.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $murid =Murid::findOrFail($id);
        return view('murid.show',compact('murid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $murid =Murid::findOrFail($id);
        $kelas =Kelas::all();
        return view('murid.edit',compact('murid','kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
                $request->validate(
            [
                'nama' =>'required|string|max:255',
                'jk' =>'required|string|max:255',
                'tal' =>'required|string|max:255',
                'tel' =>'required|string|max:255',
                'agama' =>'required|string|max:255',
                'alamat' =>'required|string|max:255',
                'email' =>'required|email|max:255',
            ],
            [
                'nama.required'=>'Nama tidak boleh kosong!',
                'jk.required'=>'Jenis Kelamin tidak boleh kosong!',
                'tal.required'=>'Tanggal Lahir tidak boleh kosong!',
                'tel.required'=>'Tempat Lahir tidak boleh kosong!',
                'agama.required'=>'Agama Lahir tidak boleh kosong!',
                'alamat.required'=>'Alamat tidak boleh kosong!',
                'email.required'=>'Email tidak boleh kosong!',
            ]);

        $murid=Murid::findOrFail($id);
        $murid->nama_lengkap=$request->nama;
        $murid->jenis_kelamin=$request->jk;
        $murid->tanggal_lahir=$request->tal;
        $murid->tempat_lahir=$request->tel;
        $murid->agama=$request->agama;
        $murid->alamat=$request->alamat;
        $murid->email=$request->email;
        $murid->id_kelas=$request->id_kelas;

        $murid->save();

        session()->flash('success','Data berhasil ditambahkan');

        return redirect()->route('murid.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $murid =Murid::findOrFail($id);

        $murid->delete();
        return redirect()->route('murid.index')->with('success',"Data Berhasil Di Hapus");
    }
}
