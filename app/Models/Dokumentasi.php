<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    protected $table = "dokumentasi";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'judul', 'caption', 'konten', 'gambar'
    ];
}
