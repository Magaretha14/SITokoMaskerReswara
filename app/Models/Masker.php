<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masker extends Model
{
    //use HasFactory;
    protected $table = 'masker';
    protected $fillable = ['nama_masker','harga_masker','jenis_masker','Stok'];
}
