<?php

namespace App\Models;

use App\Models\Barang;
use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang_keluar extends Model
{
    use HasFactory;
    protected $table = "barang_keluars";
    protected $fillable = ['tgl_keluar', 'barang_id', 'pelanggan_id'];
    protected $guarded = ['id'];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
