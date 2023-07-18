<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Keluar extends Model
{
    use HasFactory;
    
    protected $table = "tb_buku_keluar";
    protected $primaryKey = "keluar_id";
    protected $guarded = [];

    public function masuk(): HasMany
    {
        return $this->hasMany(Masuk::class, 'keluar_id_masuk', 'masuk_id');
}
    public function kembali(): BelongsTo
    {
        return $this->belongsTo(kembali::class, 'kembali_id_keluar', 'keluar_id');
    }

}
