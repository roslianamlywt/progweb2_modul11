@extends('layouts.app')
@section('title', 'Daftar Mahasiswa')
@section('content')
    <a href="{{route('mahasiswa.create')}}">Tambah Data</a>
    @if ($message=Session::get('succes'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Angkatan</th>
                <th>Jurusan</th>
            </tr>
        </thead>

        <body>
            @foreach($daftar_mahasiswa as $mahasiswa)
            <tr>
                <td>
                    <a href="{{route('mahasiswa.edit',$mahasiswa->nim)}}">Edit</a>
                    <a href="{{route('mahasiswa.delete',$mahasiswa->nim)}}">Delete</a>
                </td>
                <td>{{$mahasiswa->nim}}</td>
                <td>{{$mahasiswa->nama}}</td>
                <td>{{$mahasiswa->angkatan}}</td>
                <td>{{$mahasiswa->jurusan}}</td>
            </tr>
        @endforeach
    </body>
    </table>
@endsection
