@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Post</div>

                <div class="card-body">
                    <form action="{{route('biodata.update',$biodata->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{$biodata->nama_lengkap}}">
                            @error('nama')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Jenis Kelamin</label>
                            <div>
                                <input type="radio" name="jk" value="L" id="Laki-Laki"{{$biodata->jenis_kelamin=='L'?'checked':''}}>
                                <label >Laki-Laki</label>
                                <input type="radio" name="jk" value="P" id="Perempuan"{{$biodata->jenis_kelamin=='P'?'checked':''}}>
                                <label >Perempuan</label>
                            </div>
                            @error('jk')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tal" value="{{$biodata->tanggal_lahir}}">
                            @error('tal')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tel" value="{{$biodata->tempat_lahir}}">
                            @error('tel')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Agama</label>
                            <select class="form-control" name="agama" id="Agama">
                                <option value="" disabled selected hidden>Pilih Agama</option>
                                <option value="Islam" {{$biodata->agama=='Islam'?'selected':''}}>Islam</option>
                                <option value="Kristen" {{$biodata->agama=='Kristen'?'selected':''}}>Kristen</option>
                                <option value="Budha" {{$biodata->agama=='Budha'?'selected':''}}>Budha</option>
                                <option value="Konghucu" {{$biodata->agama=='Konghucu'?'selected':''}}>Konghucu</option>
                                <option value="Hindhu" {{$biodata->agama=='Hindhu'?'selected':''}}>Hindhu</option>
                            </select>
                            @error('agama')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                            <textarea name="alamat" id="Alamat" rows="1" class="form-control">{{$biodata->alamat}}</textarea>
                            @error('alamat')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="telepon" value="{{$biodata->telepon}}">
                            @error('telepon')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{$biodata->email}}">
                            @error('email')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Foto</label>
                            <div><img src="{{asset('/images/biodata/' . $biodata->cover)}}" width="100"></div>
                            <input type="file" class="form-control" name="cover" placeholder="Content">
                            @error('cover')
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