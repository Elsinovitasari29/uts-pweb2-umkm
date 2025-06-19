<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    protected $table = 'umkm'; // pastikan sesuai nama tabel di database

    protected $fillable = [
        'nama',
        'modal',
        'pemilik',
        'alamat',
        'website',
        'email',
        'kabkota_id',
        'rating',
        'kategori_umkm_id',
        'pembina_id',
        'foto',
    ];

    public function kabkota()
    {
        return $this->belongsTo(Kabkota::class, 'kabkota_id');
    }

    public function kategoriUmkm()
    {
        return $this->belongsTo(Kategoriumkm::class, 'kategori_umkm_id');
    }

    public function pembina()
    {
        return $this->belongsTo(Pembina::class, 'pembina_id');
    }
}