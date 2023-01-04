<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeluarController extends Controller
{
    //Controller untuk tabel barang keluar
    //Menampilkan data pada tabel barang keluar.
    public function index(Request $request)
    {
        if($request->has('cari')){
            $barang_keluar = \App\Models\Keluar::where('nama_barang_keluar', 'LIKE', '%'.$request->cari.'%')->get();
        }else{
            $barang_keluar = \App\Models\Keluar::all();
        }
        return view('keluar.index', ['barang_keluar' => $barang_keluar]);
        
    }

    //Menambahkan data pada tabel barang keluar.
    public function create(Request $requestkeluar)
    {
        \App\Models\Keluar::create($requestkeluar->all());
        return redirect('/keluar')->with('Sukses', 'Data berhasil ditambahkan');
    }

    //Mengedit data pada tabel barang keluar.
    public function edit($id)
    {
        $barang_keluar = \App\Models\Keluar::find($id);
        return view('keluar.edit',['keluar' => $barang_keluar]);
    }

    //Update data pada tabel barang keluar.
    public function update(Request $requestkeluar, $id)
    {
        $barang_keluar = \App\Models\Keluar::find($id);
        $barang_keluar->update($requestkeluar->all());
        return redirect('keluar')->with('Sukses', 'Data berhasil diupdate');
    }

    //Delete data pada tabel barang keluar.
    public function delete($id)
    {
        $barang_keluar = \App\Models\Keluar::find($id);
        $barang_keluar->delete();
        return redirect('keluar')->with('Sukses','Data berhasil dihapus');
    }
}
