<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//untuk operasi query database
use Illuminate\support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        //menampilkan daftar mahasiswa
        $daftar_mahasiswa= DB::table('mahasiswa')
        ->select('nim','nama','angkatan','jurusan')
        ->get();
        //data yang akan dikirimkan ke view
        $data_view['daftar_mahasiswa']=$daftar_mahasiswa;

        //mahasiswa.index adalah nama viewnya,
        //file ada di views/mahasiswa/index.blade.php
        return view('mahasiswa.index',$data_view);
    }
    public function create()
    {
        //menampilkan form tambah data
        $data_view['title']='Tambah Data Mahasiswa';

        //mahasiswa.create adalah nama file view nya,
        //file ada di views/mahasiswa/create/blade.php
        return view('mahasiswa.create',$data_view);
    }

    public function store(Request $request)
    {
        //memproses  form tambah data
        //validasi inputan
        $validasi_data=$request->validate([
            'nim'=>'required',
            'nama'=>'required',
            'angkatan'=>'required',
            'jurusan'=>'required'
        ]);

        $insert_mahasiswa= DB::table('mahasiswa')
        ->insert([
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'angkatan'=>$request->angkatan,
            'jurusan'=>$request->jurusan,
        ]);

        //redirect ke daftar mahasiswa jika query berhasil
        return redirect()->route('mahasiswa.index')
        ->with('success','Data Mahasiswa sukses dibuat.');
    }

    public function edit($nim)
    {
        //menampilkan form edit data
    }

    public function update(Request $request)
    {
        //memproses  form edit data
    }

    public function delete($nim)
    {
        //memproses  hapus data
    }
}
