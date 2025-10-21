@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
                <div class="card-header">Data Biodata</div>

                @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                        </div>
                    @endif
                <div class="card-body">
                    <a href="{{ route('biodata.create') }}" class="btn btn-primary">Add</a>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jk</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Email</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;   
                        @endphp
                        @foreach ($biodata as $data)
                        <tr>
                        <td>{{$no++ }}</td>
                        <td>{{$data->nama_lengkap}}</td>
                        <td>{{$data->jenis_kelamin}}</td>
                        <td>{{$data->tanggal_lahir}}</td>
                        <td>{{$data->tempat_lahir}}</td>
                        <td>{{$data->agama}}</td>
                        <td>{{$data->alamat}}</td>
                        <td>{{$data->telepon}}</td>
                        <td>{{$data->email}}</td>
                        <td><img src="{{asset('/images/biodata/' . $data->cover)}}" width="100"></td>
                        
                        <td class="d-flex">
                            <a href="{{route('biodata.edit',$data->id)}}" class="btn btn-success m-1">Edit</a>
                            <a href="{{route('biodata.show',$data->id)}}" class="btn btn-warning m-1">Show</a>
                            <form action="{{route('biodata.destroy',$data->id)}}" method="POST" class="d-inl">
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