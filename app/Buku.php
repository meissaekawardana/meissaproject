<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    public function kategori(){
        return $this->belongsToMany(Kategori::class);
    }
}
