<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategoriumkm extends Model
{
    protected $table = 'kategori_umkm'; // pastikan sesuai nama tabel di database

    protected $fillable = [
        'nama',
    ];
}