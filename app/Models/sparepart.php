<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class sparepart extends Model
{
    use HasFactory;
    protected $fillable = ['kdbarang', 'nama','harga','merk_id'];

    protected $table = 'sparepart';

    public function merk(): BelongsTo
    {
        return $this->belongsTo(merk::class, 'merk_id', 'id');
    }
    
}