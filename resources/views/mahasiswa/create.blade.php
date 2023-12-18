@extends ('Layouts.app')
@section('title', $title)
@section('content')
    <h5>{{$title}}</h5>
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
@endif

<form action="{{route ('mahasiswa.store')}}" method="POST" id="form_add" name="form_add">
    @csrf
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" Id="nim" name="nim" value="{{old('nim') }}">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input types="text" class="form-control" id="nama" name="nama" value="{{old('nama') }}">
    </div>
    <div class="mb-3">
        <label for="angkatan" class="form-label">Angkatan</label>
        <input types="number" class="form-control" id="angkatan" name="angkatan" value="{{old('angkatan') }}">
    </div>
    <div class="mb-3">
        <label for="jurusan" class="form-label">Jurusan </label>
        <input types="text" class="form-control" id="jurusan" name="jurusan" values="{{old('jurusan')}}">
    </div>
    <button type="submit" class="bt btn-primary">Submit</button>
    <a href="{{ route('mahasiswa.index') }}" class="bt btn-secondary">Kembali</a>
</form>
@endsection
