@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Post</div>

                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{$biodata->nama_lengkap}}" disabled >
                        </div>
                        <div class="mb-3">
                            <label>Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jk" value="{{$biodata->jenis_kelamin}}" disabled >
                        </div>
                        <div class="mb-3">
                            <label>Tanggal Lahir</label>
                            <input type="text" class="form-control" name="tal" value="{{$biodata->tanggal_lahir}}" disabled >
                        </div>
                        <div class="mb-3">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tel" value="{{$biodata->tempat_lahir}}" disabled >
                        </div>
                        <div class="mb-3">
                            <label>Agama</label>
                            <input type="text" class="form-control" name="agama" value="{{$biodata->agama}}" disabled >
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{$biodata->alamat}}" disabled >
                        </div>
                        <div class="mb-3">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="telepon" value="{{$biodata->telepon}}" disabled >
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="{{$biodata->email}}" disabled >
                        </div>
                        <div class="mb-3">
                            <div><label>Foto</label></div>
                            <div><img src="{{asset('/images/biodata/' . $biodata->cover)}}" width="100"></div>
                        </div>
                        <a href="{{route('biodata.index')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection