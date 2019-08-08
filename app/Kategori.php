<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Buku;

class Kategori extends Model
{
    public function buku(){
        return $this->belongsToMany(Buku::class);
    }
}
