<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Kategori;

class BukuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        // $data['buku']=Buku::all();
        // $data['kategori']=Kategori::all();
        // $data['buku'] = Buku::with('kategori')->get();

        // $data['judul']='List Data Buku';
        // return view('admin.adminBukuList',$data);
        // // return view('admin.adminBukuList',compact('buku'));
    }
    // }

    public function create(){
        $data['buku']=Buku::all();
        $data['kategori']=Kategori::all();

        $data['judul']='Tambah Data Buku Baru';
        return view('admin.adminBukuAdd',$data);
    }
    // public function create(Request $request){
    //     $buku = new Buku;
    //     $buku->bukuNama = 'Tes Judul Buku 2';
    //     $buku->bukuHarga = 55000;
    //     $buku->bukuPenerbit = 'Nama Penerbit Nih';
    //     $buku->bukuPenulis = 'Nama Penuli Nih';
    //     $buku->bukuDeskripsi = 'ini deskripsi buku';
    //     $buku->bukuStok = 50;

    //     $buku->save();
    //     $kategori = Kategori::find([1,2]);
    //     $buku->kategori()->attach($kategori);

    //     return 'Sukses insert data '.$buku->bukuNama;
    // }
}
