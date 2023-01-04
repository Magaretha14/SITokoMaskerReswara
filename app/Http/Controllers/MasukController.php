<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasukController extends Controller
{
    //Membuat controller untuk tabel barang masuk
    //Menampilkan data pada tabel barang masuk
    public function index(Request $request)
    {
        if($request->has('cari')){
            $barang_masuk = \App\Models\Masuk::where('nama_barang_masuk', 'LIKE', '%'.$request->cari.'%')->get();
        }else{
            $barang_masuk = \App\Models\Masuk::all();
        }
        return view('masuk.index', ['barang_masuk' => $barang_masuk]);
        
    }

    //Menambahkan data pada tabel barang masuk
    public function create(Request $requestmasuk)
    {
        \App\Models\Masuk::create($requestmasuk->all());
        return redirect('/masuk')->with('Sukses', 'Data berhasil ditambahkan');
    }

    //Mengedit data pada tabel barang masuk
    public function edit($id)
    {
        $barang_masuk = \App\Models\Masuk::find($id);
        return view('masuk.edit',['masuk' => $barang_masuk]);
    }

    //update data pada tabel barang masuk
    public function update(Request $requestmasuk, $id)
    {
        $barang_masuk = \App\Models\Masuk::find($id);
        $barang_masuk->update($requestmasuk->all());
        return redirect('masuk')->with('Sukses', 'Data berhasil diupdate');
    }

    //delete data pada tabel barang masuk
    public function delete($id)
    {
        $barang_masuk = \App\Models\Masuk::find($id);
        $barang_masuk->delete();
        return redirect('masuk')->with('Sukses','Data berhasil dihapus');
    }
}
