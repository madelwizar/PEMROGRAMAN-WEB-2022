<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kandang extends Model
{
    use HasFactory;
    protected $table = 'kandang';
    protected $fillable = [
        'nomor_kandang',
        
    ];
}
