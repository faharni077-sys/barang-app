<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/barang',
[BarangController::class, 'store']);

Route::get('/barang', [BarangController::class, 'index']);

Route::post('/update/{id}', [BarangController::class, 'update']);

Route::get('/delete/{id}', [BarangController::class, 'delete']);


Route::get('/form', function () {
    return view('barang.form');
});


Route::get('/edit/{id}', function($id){
    $data = \App\Models\Barang::find($id);
    return view('barang.edit', compact('data'));
});

