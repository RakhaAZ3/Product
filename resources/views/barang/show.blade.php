@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Barang</div>

                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="title" value="{{$barang->nama_barang}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Merek</label>
                            <input type="text" class="form-control" name="title" value="{{$barang->merek}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="title" value="{{$barang->harga}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Stok</label>
                            <input type="text" class="form-control" name="title" value="{{$barang->stok}}" disabled>
                        </div>
                        <a href="{{route('barang.index')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection