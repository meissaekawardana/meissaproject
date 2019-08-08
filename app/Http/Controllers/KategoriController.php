<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $data['judul']='Tambah Data Kategori Baru';
        return view('admin.adminKategori',$data);
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
