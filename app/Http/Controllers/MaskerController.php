<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaskerController extends Controller
{
    //Controller untuk tabel masker
    //Menampilkan tabel masker
    public function index()
    {
        $tabel_masker = \App\Models\Masker::all();
        return view('masker.index', ['tabel_masker' => $tabel_masker]);
    }

    //Menambahkan data pada tabel Masker
    public function create(Request $requestmasker)
    {
        \App\Models\Masker::create($requestmasker->all());
        return redirect('/masker')->with('Sukses', 'Data berhasil ditambahkan');
    }

    //Mengedit data pada tabel Masker
    public function edit($id)
    {
        $tabel_masker = \App\Models\Masker::find($id);
        return view('masker.edit',['masker' => $tabel_masker]);
    }

    //Update data pada tabel Masker
    public function update(Request $requestmasker, $id)
    {
        $tabel_masker = \App\Models\Masker::find($id);
        $tabel_masker->update($requestmasker->all());
        return redirect('masker')->with('Sukses', 'Data berhasil diupdate');
    }

    //Delete data pada tabel Masker
    public function delete($id)
    {
        $tabel_masker = \App\Models\Masker::find($id);
        $tabel_masker->delete();
        return redirect('masker')->with('Sukses','Data berhasil dihapus');
    }
}
