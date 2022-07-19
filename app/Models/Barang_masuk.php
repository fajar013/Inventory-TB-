<?php

namespace App\Models;

use App\Models\Supplaier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang_masuk extends Model
{
    use HasFactory;
    protected $table = "barang_masuks";
    protected $fillable = ['tgl_masuk', 'category_id', 'barang_id', 'supplaier_id'];
    protected $guarded = ['id'];

    public function supplaier()
    {
        return $this->belongsTo(Supplaier::class);
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
