<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Masuk extends Model
{
    use HasFactory;
    protected $table = "tb_buku_masuk";
    protected $primaryKey = "masuk_id";
    protected $guarded = [];

    public function keluar(): BelongsTo
    {
        return $this->belongsTo(Keluar::class, 'keluar_id_masuk', 'masuk_id');
    }
}
