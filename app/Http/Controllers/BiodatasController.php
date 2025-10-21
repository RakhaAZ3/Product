<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BiodatasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $biodata = Biodata::all();

        return view('biodata.index',compact('biodata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biodata.create');
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
                'telepon' =>'required|string|max:255',
                'email' =>'required|email|max:255',
                'cover' =>'required',
            ],
            [
                'nama.required'=>'Nama tidak boleh kosong!',
                'jk.required'=>'Jenis Kelamin tidak boleh kosong!',
                'tal.required'=>'Tanggal Lahir tidak boleh kosong!',
                'tel.required'=>'Tempat Lahir tidak boleh kosong!',
                'agama.required'=>'Agama Lahir tidak boleh kosong!',
                'alamat.required'=>'Alamat tidak boleh kosong!',
                'telepon.required'=>'Telepon tidak boleh kosong!',
                'email.required'=>'Email tidak boleh kosong!',
                'cover'=>'Cover tidak boleh kosong!',
            ]);

        $biodata=new Biodata;
        $biodata->nama_lengkap=$request->nama;
        $biodata->jenis_kelamin=$request->jk;
        $biodata->tanggal_lahir=$request->tal;
        $biodata->tempat_lahir=$request->tel;
        $biodata->agama=$request->agama;
        $biodata->alamat=$request->alamat;
        $biodata->telepon=$request->telepon;
        $biodata->email=$request->email;

        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name=rand(1000,9999) . $img->getClientOriginalName();
            $img->move('images/biodata', $name);
            $biodata->cover=$name;
        }

        $biodata->save();

        session()->flash('success','Data berhasil ditambahkan');

        return redirect()->route('biodata.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $biodata =Biodata::findOrFail($id);
        return view('biodata.show',compact('biodata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $biodata =Biodata::findOrFail($id);
        return view('biodata.edit',compact('biodata'));
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
                'alamat' =>'required|string|max:255',
                'telepon' =>'required|string|max:255',
                'email' =>'required|email|max:255',
            ],
            [
                'nama.required'=>'Nama tidak boleh kosong!',
                'jk.required'=>'Agama tidak boleh kosong!',
                'tal.required'=>'Agama tidak boleh kosong!',
                'tel.required'=>'Agama tidak boleh kosong!',
                'alamat.required'=>'Agama tidak boleh kosong!',
                'telepon.required'=>'Agama tidak boleh kosong!',
                'email.required'=>'Agama tidak boleh kosong!',
            ]);

        $biodata =Biodata::findOrFail($id);
        $biodata->nama_lengkap=$request->nama;
        $biodata->jenis_kelamin=$request->jk;
        $biodata->tanggal_lahir=$request->tal;
        $biodata->tempat_lahir=$request->tel;
        $biodata->agama=$request->agama;
        $biodata->alamat=$request->alamat;
        $biodata->telepon=$request->telepon;
        $biodata->email=$request->email;

        if ($request->hasFile('cover')) {
            // $filepath = public_Path('images/biodata/' . $biodata->cover);
            // if (File::exists($filepath)) {
            //     File::delete($filepath);
            // }
            $img = $request->file('cover');
            $name=rand(1000,9999) . $img->getClientOriginalName();
            $img->move('images/biodata', $name);
            $biodata->cover=$name;
        }

        $biodata->save();

        session()->flash('success','Data berhasil Diupdate');

        return redirect()->route('biodata.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $biodata =Biodata::findOrFail($id);

        if ($biodata->cover) {
            $filepath = public_Path('images/biodata/' . $biodata->cover);
            if (File::exists($filepath)) {
                File::delete($filepath);
            }
        }
        $biodata->delete();
        return redirect()->route('biodata.index')->with('success',"Data Berhasil Di Hapus");
    }
}
