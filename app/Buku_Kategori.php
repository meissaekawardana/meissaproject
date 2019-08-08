<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku_Kategori extends Model
{
    public $table='buku_kategori';
    protected $fillable = [
        'buku_id', 'kategori_id'
    ];
}
