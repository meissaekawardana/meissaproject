<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Buku;

class Keranjang extends Model
{
    protected $fillable = [
        'buku_id', 'kategori_id','qty','status',
    ];
    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
}
