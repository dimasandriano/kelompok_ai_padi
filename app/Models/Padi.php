<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Padi extends Model
{
    // use HasFactory;
    protected $table = 'padi';
    protected $fillable = [
        'varietas',
        'img',
        'bentuk_gabah',
        'bentuk_tanaman',
        'berat',
        'daun_bendera',
        'tekstur_nasi',
        'umur',
        'hama',
        'pencegahan',
        'hasil_sebelum',
        'hasil_terkena'
    ];
}
