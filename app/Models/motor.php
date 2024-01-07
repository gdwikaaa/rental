<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class motor extends Model
{
    use HasFactory;
    protected $fillable = ['nopol','nama','harga', 'jenismotor_id', 'merkmotor_id', 'gambar'];
    protected $table = 'motor';

    public function jenismotor(): BelongsTo
    {
        return $this->belongsTo(jenismotor::class, 'jenismotor_id', 'id');
    }
    public function merkmotor(): BelongsTo
    {
        return $this->belongsTo(merkmotor::class, 'merkmotor_id', 'id');
    }
}
