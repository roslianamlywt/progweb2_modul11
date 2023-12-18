<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa',[MahasiswaController::class,'index'])->name('mahasiswa.index');

Route::get('/mahasiswa/create',[MahasiswaController::class,'create'])->name('mahasiswa.create');
Route::post('/mahasiswa/store',[MahasiswaController::class,'store'])->name('mahasiswa.store');

Route::get('/mahasiswa/edit/{$nim}',[MahasiswaController::class,'edit'])->name('mahasiswa.edit');
Route::get('/mahasiswa/update',[MahasiswaController::class,'update'])->name('mahasiswa.update');

Route::get('/mahasiswa/delete/{$nim}',[MahasiswaController::class,'delete'])->name('mahasiswa.delete');
