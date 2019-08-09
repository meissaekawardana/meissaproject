<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Buku;
class Keranjang extends Model
{
    protected $fillable = [
        'buku_id', 'kategori_id','qty','status','user_id',
    ];
    public function buku()
    {
        return $this->belongsTo('App\Buku', 'user_id', 'id');
    }
}
