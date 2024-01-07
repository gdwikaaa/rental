<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class rental extends Model
{
    use HasFactory;
    protected $fillable = ['noktp', 'nama','motor_id', 'tanggalpinjam', 'tanggalselesai', 'gambarktp'];

    protected $table = 'rental';

    public function motor(): BelongsTo
    {
        return $this->belongsTo(motor::class, 'motor_id', 'id');
    }

    
    
}