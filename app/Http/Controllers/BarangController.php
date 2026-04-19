<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        Barang::create($request->all());
        return redirect()->route('barang.index')->with('success', 'Data berhasil disimpan!');
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        Barang::findOrFail($id)->update($request->all());
        return redirect()->route('barang.index')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy($id)
    {
        Barang::destroy($id);
        return redirect()->route('barang.index')->with('success', 'Data berhasil dihapus!');
    }
}
