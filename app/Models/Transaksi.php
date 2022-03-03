<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'alamat', 'email','produk', 'jumlah', 'gambar'
    ];
}
