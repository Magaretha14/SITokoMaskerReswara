<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masuk extends Model
{
    //use HasFactory;
    protected $table = 'masuk';
    protected $fillable = ['nama_barang_masuk','jumlah_barang_masuk','harga_barang','total_harga_barang','tanggal_barang_masuk'];
}
