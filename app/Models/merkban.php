<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merkban extends Model
{
    use HasFactory;
    protected $fillable = ['nama'];
    protected $table = 'merkban';
}
