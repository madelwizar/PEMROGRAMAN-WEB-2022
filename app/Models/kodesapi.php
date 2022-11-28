<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kodesapi extends Model
{
    use HasFactory;
    protected $table = 'kodesapi';
    protected $fillable = [
        'kode_sapi',
       
    ];
}
