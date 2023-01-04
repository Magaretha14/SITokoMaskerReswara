<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesAdmin;

use Illuminate\Http\Request;

class adminlogin extends Controller
{
    use AuthenticatesAdmin;
    public function index()
    {
        
        $tabel_masker = \App\Models\Masker::all();
        return view('masker.index', ['tabel_masker' => $tabel_masker]);
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
}
