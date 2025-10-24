@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Pembeli</div>

                <div class="card-body">
                    <form action="{{route('pembeli.update',$pembeli->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>Nama Pembeli</label>
                            <input type="text" class="form-control" name="nama" value="{{$pembeli->nama_pembeli}}">
                            @error('nama')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Jenis Kelamin</label>
                            <div>
                                <input type="radio" name="jk" value="Laki-laki" id="Laki-Laki" {{$pembeli->jenis_kelamin=='Laki-laki'?'checked':''}}>
                                <label >Laki-Laki</label>
                                <input type="radio" name="jk" value="Perempuan" id="Perempuan" {{$pembeli->jenis_kelamin=='Perempuan'?'checked':''}}>
                                <label >Perempuan</label>
                            </div>
                            </select>
                            @error('jk')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="telepon" value="{{$pembeli->telepon}}">
                            @error('nama')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection