<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keranjang;
use App\Buku;

use Auth;
class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['keranjang'] = Keranjang::with('buku')->where('user_id',Auth::user()->id)->get();
        $data['buku'] = Buku::all();
        $data['kategori'] = Keranjang::all();
        // dd($data);
        return view('user.keranjang',$data);
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
        // dd($request);
        $rule =[
            'qty' => 'required|numeric',
                ];
        $this->validate($request,$rule);
        
        $input = $request->all();

        $keranjang=new Keranjang;
        $keranjang->qty=$input['qty'];
        $keranjang->buku_id=$input['id'];
        $keranjang->user_id=\Auth::user()->id;
        $keranjang->status=1;
        $buku= Buku::find($keranjang->buku_id);

        $status=$buku->keranjang()->save($keranjang);

                if($status){
                    return redirect('keranjang')->with('success','Data berhasil ditambahkan ke keranjang ');
                } else {
                    return redirect('keranjang')->with('error','Data Gagal ditambahkan ke keranjang');
                }
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
