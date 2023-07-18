<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Kembali extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = "tb_buku_kembali";
    protected $primaryKey = "kembali_id";
    protected $guarded = [];

    public function keluar(): HasMany
    {
        return $this->hasMany(Keluar::class, 'kembali_id_keluar', 'keluar_id');
}
}
