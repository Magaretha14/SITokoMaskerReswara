<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminlogin extends Controller
{
    public function index()
    {
        return view ('loginadmin');
    }
    
}
