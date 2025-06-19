<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'provinsi'; // pastikan sesuai nama tabel di database

    protected $fillable = [
        'nama',
        'ibukota',
        'lotitude',
        'longtitude',
    ];
}