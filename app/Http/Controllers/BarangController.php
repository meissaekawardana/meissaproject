<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Kategori;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::with('kategori')->orderBy('id','DESC')->get();
        $data['kategori']=Kategori::all();
        $data['judul']='Tambah Data Kategori Baru';
        // dd($data);
        return view('user/list',compact('buku'),$data);
    }

    public function cari(Request $request)
	{
        $buku = Buku::when($request->cari, function ($query) use ($request) {
            $query->where('bukuNama', 'LIKE', "%{$request->cari}%")
            ->orWhere('bukuPenulis', 'LIKE', "%{$request->cari}%");
        })->get();
        $data['kategori']=Kategori::all();
                // ->orWhere('', 'like', "%{$request->cari}%");
        return view('user/list', compact('buku'),$data);

    }
    
    public function detail(Request $request, $id)
	{
        // $buku = Buku::with('kategori')->orderBy('id','DESC')->get();
        // // return view('user/bukuDetail',compact('buku'),$data);

        // dd($buku);
        $data['kategori']=Kategori::all();
        $buku = Buku::with('kategori')->where('id',$id)->first();
        // dd($buku->bukuFoto);
        $idKategoriArr = [];
        foreach($buku->kategori as $i => $k){
            $idKategoriArr[$i] = $k->id;
        }
        $data['idKategori'] = $idKategoriArr;
        // dd($buku->kategori);
        // $buku = Buku::with('kategori')->find($id)->get();
        // return view('admin.adminBukuEdit',$daorta);
        return view('user/bukuDetail',compact('buku'),$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
