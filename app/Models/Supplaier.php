<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplaier extends Model
{
    use HasFactory;
    protected $table = "suppaiers";
    protected $fillable = ['name', 'no_hp', 'alamat'];
    protected $guarded = ['id'];

    public function barang_masuk()
    {
        return $this->hasMany(Barang_masuk::class);
    }
}
