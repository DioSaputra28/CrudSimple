<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataBarang extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'namaBarang',
        'hargaBarang',
        'stokBarang',
        'kategoriBarang'
    ];
}
