@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Kelas</div>

                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label>Nama Kelas</label>
                            <input type="text" class="form-control" name="title" value="{{$kelas->nama_kelas}}" disabled>
                        </div>
                        <a href="{{route('kelas.index')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection