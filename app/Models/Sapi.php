<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sapi extends Model
{
    protected $table = 'sapi';
    protected $fillable = [
        'kode_sapi',
        'nomor_kandang',
        'berat_sapi_awal',
        'berat_sapi_pertama',
        'berat_sapi_kedua',
        'berat_sapi_ketiga',
    ];

    public function scopeFilter($query, array $filter){
        $query->when($filter['search'] ?? false, function($query, $search){
            return $query->where('kode_sapi','like','%'.$search.'%');
        });
    }
}
