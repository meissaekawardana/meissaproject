<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Kategori;

class AwalController extends Controller
{
    public function index()
    {
        $data['buku'] = Buku::with('kategori')->orderBy('id','DESC')->get();
        $data['kategori']=Kategori::all();
        return view('welcome',$data);
    }
}
