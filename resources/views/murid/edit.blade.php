@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Murid</div>

                <div class="card-body">
                    <form action="{{route('murid.update',$murid->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{$murid->nama_lengkap}}">
                            @error('nama')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Jenis Kelamin</label>
                            <div>
                                <input type="radio" name="jk" value="Laki-laki" id="Laki-Laki" {{$murid->jenis_kelamin=='Laki-laki'?'checked':''}}>
                                <label >Laki-Laki</label>
                                <input type="radio" name="jk" value="Perempuan" id="Perempuan" {{$murid->jenis_kelamin=='Perempuan'?'checked':''}}>
                                <label >Perempuan</label>
                            </div>
                            </select>
                            @error('jk')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tal" placeholder="Tanggal Lahir" value="{{$murid->tanggal_lahir}}">
                            @error('tal')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tel" placeholder="Tempat Lahir" id="Tempat Lahir" value="{{$murid->tempat_lahir}}">
                            @error('tel')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Agama</label>
                            <select class="form-control" name="agama" id="Agama">
                                <option value="" disabled selected hidden>Pilih Agama</option>
                                <option value="Islam" {{$murid->agama=='Islam'?'selected':''}}>Islam</option>
                                <option value="Kristen" {{$murid->agama=='Kristen'?'selected':''}}>Kristen</option>
                                <option value="Budha" {{$murid->agama=='Budha'?'selected':''}}>Budha</option>
                                <option value="Hindhu" {{$murid->agama=='Hindhu'?'selected':''}}>Hindhu</option>
                            </select>
                            @error('agama')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                            <textarea name="alamat" id="Alamat" rows="1" class="form-control" placeholder="Alamat">{{$murid->alamat}}</textarea>
                            @error('alamat')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" value="{{$murid->email}}">
                            @error('email')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Kelas</label>
                            <select class="form-control" name="id_kelas">
                                @foreach ($kelas as $data)
                                <option value="{{$data->id}}" {{$data->id==$murid->id_kelas ? 'selected' : ''}}>{{$data->nama_kelas}}</option>
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