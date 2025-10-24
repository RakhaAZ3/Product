@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Transaksi</div>

                <div class="card-body">
                    <form action="{{route('transaksi.update',$transaksi->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>Tanggal Transaksi</label>
                            <input type="date" class="form-control" name="tgl" value="{{$transaksi->tanggal_transaksi}}">
                            @error('tgl')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" placeholder="Jumlah" value="{{$transaksi->jumlah}}">
                            @error('jml')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Total</label>
                            <input type="number" class="form-control" name="total" placeholder="Total" value="{{$transaksi->total_harga}}">
                            @error('total')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Nama Pembeli</label>
                            <select class="form-control" name="id_pembeli">
                                <option value="" selected hidden>Pilih Pembeli</option>
                                @foreach ($pembeli as $data)
                                <option value="{{$data->id}}" {{$data->id==$transaksi->id_pembeli ? 'selected' : ''}}>{{$data->nama_pembeli}}</option>
                                @endforeach
                            </select>
                            @error('id_kelas')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Nama Barang</label>
                            <select class="form-control" name="id_barang">
                                <option value="" selected hidden>Pilih Barang</option>
                                @foreach ($barang as $data)
                                <option value="{{$data->id}}" {{$data->id==$transaksi->id_barang ? 'selected' : ''}}>{{$data->nama_barang}}</option>
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