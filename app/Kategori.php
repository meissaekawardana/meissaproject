<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Buku;

class Kategori extends Model
{
    protected $fillable = [
        'kategoriNama'
    ];
    public function buku(){
        return $this->belongsToMany(Buku::class);
    }
}
