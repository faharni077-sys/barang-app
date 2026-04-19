<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function store(Request $request)
    { 
    \App\Models\Barang::create([
        'nama_barang' => $request->nama_barang,
        'harga' => $request->harga,
        'stok' => $request->stok,
    ]);

    return redirect('/barang')->with('success', 'Data berhasil disimpan!');
    }
    
    public function index()
    {
        $data = \App\Models\Barang::all();
        return view('barang.index', compact('data'));

        foreach($data as $d){
             echo $d->id . " - " . $d->nama_barang . " _ " . $d->harga. " - " . $d->stok . "<br>";
        }

        if($data->isEmpty()){
            echo "Data masih kosong!";
        }
    }

    public function update(Request $request, $id)
    {
        $data = \App\Models\Barang::find($id);

        if(!$data){
            return "Data tidak ditemukan!";
        }

        $data->update([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);
        return redirect('/barang')->with('success', 'Data berhasil diupdate!');
    }

    public function delete($id)
    {
        $data = \App\Models\Barang::find($id);

        if(!$data){
        return "Data tidak ditemukan!";
        }

        $data->delete();

        return redirect('/barang')->with('success', 'Data berhasil dihapus!');
    }

}

