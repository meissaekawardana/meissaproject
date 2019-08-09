<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['buku'] = Buku::with('kategori')->orderBy('id','DESC')->get();
        $data['kategori']=Kategori::all();
        $data['judul']='Tambah Data Kategori Baru';
        return view('welcome',$data);
    }

    public function admin(){ 
        $data['buku'] = Buku::with('kategori')->orderBy('id','DESC')->get();
        $data['kategori']=Kategori::all();
        $data['judul']='Tambah Data Kategori Baru';
        return view('welcome',$data);
        // return view('admin'); 
    }

}
