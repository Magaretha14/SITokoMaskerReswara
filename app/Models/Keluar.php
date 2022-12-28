<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluar extends Model
{
    //use HasFactory;
    protected $table = 'keluar';
    protected $fillable = ['nama_barang_keluar','jumlah_barang_keluar','harga_barang_keluar','total_harga_barang_keluar','tanggal_barang_keluar'];
}
