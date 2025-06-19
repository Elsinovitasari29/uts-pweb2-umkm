<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembina extends Model
{
    protected $table = 'pembina'; // pastikan sesuai nama tabel di database

    protected $fillable = [
        'nama',
        'gender',
        'tgl_lahir',
        'tmp_lahir',
        'keahlian',
    ];
}