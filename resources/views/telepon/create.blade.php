@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Telepon</div>

                <div class="card-body">
                    <form action="{{route('telepon.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Nomor</label>
                            <input type="text" class="form-control" name="nomor" placeholder="Nomor">
                            @error('nomor')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label>Nama Pengguna</label>
                            <select class="form-control" name="id_pengguna">
                                @foreach ($datapengguna as $data)
                                <option value="{{$data->id}}">{{$data->nama}}</option>
                                @endforeach
                            </select>
                            @error('id_pengguna')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection