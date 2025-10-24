@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Murid</div>

                <div class="card-body">
                    <form action="{{route('murid.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama">
                            @error('nama')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Jenis Kelamin</label>
                            <div>
                                <input type="radio" name="jk" value="Laki-laki" id="Laki-Laki">
                                <label >Laki-Laki</label>
                                <input type="radio" name="jk" value="Perempuan" id="Perempuan">
                                <label >Perempuan</label>
                            </div>
                            </select>
                            @error('jk')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tal" placeholder="Tanggal Lahir">
                            @error('tal')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tel" placeholder="Tempat Lahir" id="Tempat Lahir">
                            @error('tel')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Agama</label>
                            <select class="form-control" name="agama" id="Agama">
                                <option value="" disabled selected hidden>Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindhu">Hindhu</option>
                            </select>
                            @error('agama')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                            <textarea name="alamat" id="Alamat" rows="1" class="form-control" placeholder="Alamat"></textarea>
                            @error('alamat')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            @error('email')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Kelas</label>
                            <select class="form-control" name="id_kelas">
                                <option value="" selected hidden>Pilih Kelas</option>
                                @foreach ($kelas as $data)
                                <option value="{{$data->id}}">{{$data->nama_kelas}}</option>
                                @endforeach
                            </select>
                            @error('id_kelas')
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