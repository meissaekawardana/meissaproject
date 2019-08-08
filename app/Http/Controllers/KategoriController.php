<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $data['kategori']=Kategori::all();
        $data['judul']='Tambah Data Kategori Baru';
        return view('admin.adminKategori',$data);
    }

    public function store(Request $request){
        $rule =[
            'kategoriNama' => 'required|min: 3',
                ];
        $this->validate($request,$rule);
        
        $input = $request->all();

        $kategori=new Kategori;
        $kategori->kategoriNama=$input['kategoriNama'];
        $status=$kategori->save();
        
                if($status){
                    return redirect('admin/kategori')->with('success','Data berhasil ditambahkan ');
                } else {
                    return redirect('admin/kategori')->with('error','Data Gagal ditambahkan');
                }
    }

    public function edit(Request $request, $id)
    {
        $data['judul']='Edit Data Kategori';
        $data['kategori']=Kategori::find($id);
        return view('admin.adminKategoriEdit',$data);
    }

    public function update(Request $request, $id)
    {
        $rule=[
            'kategoriNama'     =>'required|min: 3',
        ];
        $this->validate($request,$rule);
        $input=$request->all();
        unset($input['_token']);
        unset($input['_method']);
        $kategori= Kategori::find($id);
        $status=$kategori->update($input);
        // untuk status apakah sudah sukses diedit data apa belum
        if($status){
            return redirect('admin/kategori')->with('success','Data Berhasil Diubah ');
        } else {
            return redirect('admin/kategori')->with('error','Data Gagal Diubah');
        }
    }

    public function destroy(Request $request, $id)
    {
        $kategori= \App\Kategori::find($id);
        $status=$kategori->delete();
        // untuk status apakah sudah sukses dihapus data apa belum
        if($status){
            return redirect('admin/kategori')->with('success','Data Berhasil Dihapus ');
        } else {
            return redirect('admin/kategori')->with('error','Data Gagal Dihapus');
        }
    }
}
