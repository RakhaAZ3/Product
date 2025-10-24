@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Telepon</div>

                @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                        </div>
                    @endif
                <div class="card-body">
                    <a href="{{ route('telepon.create') }}" class="btn btn-primary">Add</a>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nomor</th>
                        <th scope="col">Nama Pengguna</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;   
                        @endphp
                        @foreach ($datatelepon as $data)
                        <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$data->nomor}}</td>
                        <td>{{$data->pengguna->nama}}</td>
                        <td class="d-flex">
                            <a href="{{route('telepon.edit',$data->id)}}" class="btn btn-success m-1">Edit</a>
                            <a href="{{route('telepon.show',$data->id)}}" class="btn btn-warning m-1">Show</a>
                            <form action="{{route('telepon.destroy',$data->id)}}" method="POST">
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