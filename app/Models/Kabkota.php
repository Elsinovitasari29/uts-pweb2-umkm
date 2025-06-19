<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kabkota extends Model
{
    protected $table = 'kabkota'; // pakai nama tabel yang sesuai di database
    protected $fillable = [
        'nama',
        'latitude',
        'longitude',
        'provinsi_id', // pastikan ini sesuai dengan nama kolom di tabel
    ];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_id');
    }
}