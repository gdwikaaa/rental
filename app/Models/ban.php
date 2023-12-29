<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ban extends Model
{
    use HasFactory;
    protected $fillable = ['kdban','nama','harga', 'jenisban_id', 'merkban_id', 'gambar'];
    protected $table = 'ban';

    public function jenisban(): BelongsTo
    {
        return $this->belongsTo(jenisban::class, 'jenisban_id', 'id');
    }
    public function merkban(): BelongsTo
    {
        return $this->belongsTo(merkban::class, 'merkban_id', 'id');
    }
}
