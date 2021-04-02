<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barang extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga_modal',
        'harga_jual'
    ];
}
