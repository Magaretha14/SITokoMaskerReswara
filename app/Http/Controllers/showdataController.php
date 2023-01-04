<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showdataController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $tabel_masker = \App\Models\Masker::where('nama_masker', 'LIKE', '%'.$request->cari.'%')->get();
        }else{
            $tabel_masker = \App\Models\Masker::all();
        }
        return view('showdata.index', ['tabel_masker' => $tabel_masker]);
    }
}
