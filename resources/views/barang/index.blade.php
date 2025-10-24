@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Barang</div>

                @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                        </div>
                    @endif
                <div class="card-body">
                    <a href="{{ route('barang.create') }}" class="btn btn-primary">Add</a>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Merek</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;   
                        @endphp
                        @foreach ($barang as $data)
                        <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$data->nama_barang}}</td>
                        <td>{{$data->merek}}</td>
                        <td>{{$data->harga}}</td>
                        <td>{{$data->stok}}</td>
                        <td class="d-flex">
                            <a href="{{route('barang.edit',$data->id)}}" class="btn btn-success m-1">Edit</a>
                            <a href="{{route('barang.show',$data->id)}}" class="btn btn-warning m-1">Show</a>
                            <form action="{{route('barang.destroy',$data->id)}}" method="POST">
                                @csrf
                                @method('Delete')
                                <button type="submit" class="btn btn-danger m-1" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection