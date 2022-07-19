<?php

namespace App\Models;

use App\Models\Barang_keluar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = "pelanggans";
    protected $fillable = ['name', 'no_hp', 'alamat'];
    protected $guarded = ['id'];

    public function barang_keluar()
    {
        return $this->hasMany(Barang_keluar::class);
    }
}
