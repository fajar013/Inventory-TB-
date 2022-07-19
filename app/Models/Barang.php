<?php

namespace App\Models;

use App\Models\Barang_masuk;
use App\Models\Barang_keluar;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;
    protected $table = "barangs";
    protected $fillable = ['kode', 'nama', 'stok', 'harga', 'category_id'];
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function barang_masuk()
    {
        return $this->hasMany(Barang_masuk::class);
    }
    public function barang_keluar()
    {
        return $this->hasMany(Barang_keluar::class);
    }
}
