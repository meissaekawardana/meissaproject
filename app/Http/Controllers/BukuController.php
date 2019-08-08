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
        $buku = Buku::with('kategori')->get();
        // $data['judul']='List Data Buku';
        // return view('admin.adminBukuList',$data);
        return view('admin.adminBukuList',compact('buku'));
    }

    public function create(){
        $data['buku']=Buku::all();
        $data['kategori']=Kategori::all();

        $data['judul']='Tambah Data Buku Baru';
        return view('admin.adminBukuAdd',$data);
    }

    public function store(Request $request){
        // dd($request);
        $rule =[
            'bukuNama' => 'required|min: 3',
            'bukuHarga' => 'required|numeric|min: 3',
            'bukuPenerbit' => 'string|min: 3',
            'bukuPenulis' => 'string|min: 3',
            'bukuDeskripsi' => 'string|min: 3',
            'bukuStok' => 'required|numeric|min: 3',
            'bukuFoto' => 'required|image|max:2048',
                ];
        $this->validate($request,$rule);
        
        $image = $request->file('bukuFoto');
        $newName = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'),$newName);
        $formData = array(
            'bukuNama'      => $request->bukuNama,
            'bukuHarga'     => $request->bukuHarga,
            'bukuPenerbit'  => $request->bukuPenerbit,
            'bukuPenulis'   => $request->bukuPenulis,
            'bukuDeskripsi' => $request->bukuDeskripsi,
            'bukuStok'      => $request->bukuStok,
            'bukuFoto'      => $newName,
            'kategori_id'   => $request->kategori_id,
        );

        $input = $formData;
        $buku=new Buku;
        $buku->bukuNama=$input['bukuNama'];
        $buku->bukuHarga=$input['bukuHarga'];
        $buku->bukuPenerbit=$input['bukuPenerbit'];
        $buku->bukuPenulis=$input['bukuPenulis'];
        $buku->bukuDeskripsi=$input['bukuDeskripsi'];
        $buku->bukuStok=$input['bukuStok'];
        $buku->bukuFoto=$input['bukuFoto'];
        $buku->save();
        $kategori = Kategori::find([$input['kategori_id']]);
        $status=$buku->kategori()->attach($kategori);

                if($status){
                    return redirect('admin/buku')->with('success','Data berhasil ditambahkan ');
                } else {
                    return redirect('admin/buku')->with('error','Data Gagal ditambahkan');
                }
    }

    public function edit(Request $request, $id)
    {
        $data['judul']='Edit Data Buku';
        // $data['buku']=Buku::find($id);
        $buku = Buku::find($id)->with('kategori')->get();
        // return view('admin.adminBukuEdit',$data);
        return view('admin.adminBukuList',compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $rule=[
            'bukuNama' => 'required|min: 3',
            'bukuHarga' => 'required|numeric|min: 3',
            'bukuPenerbit' => 'string|min: 3',
            'bukuPenulis' => 'string|min: 3',
            'bukuDeskripsi' => 'string|min: 3',
            'bukuStok' => 'required|numeric|min: 3',
            'bukuFoto' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ];
        $this->validate($request,$rule);
        $input=$request->all();
        unset($input['_token']);
        unset($input['_method']);
        $buku= Buku::find($id);
        $buku->update($input);


        $kategori = Kategori::find([1,2]);
        $status=$buku->kategori()->attach($kategori);
        // untuk status apakah sudah sukses diedit data apa belum
        if($status){
            return redirect('admin/kategori')->with('success','Data Berhasil Diubah ');
        } else {
            return redirect('admin/kategori')->with('error','Data Gagal Diubah');
        }
    }

    public function destroy(Request $request, $id)
    {
        $kategori= \App\Buku::find($id);
        $status=$buku->delete();
        // untuk status apakah sudah sukses dihapus data apa belum
        if($status){
            return redirect('admin/buku')->with('success','Data Berhasil Dihapus ');
        } else {
            return redirect('admin/buku')->with('error','Data Gagal Dihapus');
        }
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
