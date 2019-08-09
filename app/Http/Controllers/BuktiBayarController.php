<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BuktiBayar;

class BuktiBayarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buktibayar = BuktiBayar::all();
        return view('admin.adminBuktiBayar',compact('buktibayar'));
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
        $rule =[
            'namaPenerima' => 'required|min: 3',
            'alamatTujuan' => 'required|min: 3',
            'noHp' => 'numeric',
            'totalTagihan' => 'required',
            'fotoBukti' => 'required|max:2048',
                ];
        $this->validate($request,$rule);
        
        
        $image = $request->file('fotoBukti');
        $newName = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'),$newName);
        $formData = array(
            'namaPenerima'  => $request->namaPenerima,
            'alamatTujuan'  => $request->alamatTujuan,
            'noHp'          => $request->noHp,
            'totalTagihan'  => $request->totalTagihan,
            'fotoBukti'     => $newName,
            'status'        => 1,
        );

        $input = $formData;
        $buktibayar=new BuktiBayar;
        $buktibayar->namaPenerima=$input['namaPenerima'];
        $buktibayar->alamatTujuan=$input['alamatTujuan'];
        $buktibayar->noHp=$input['noHp'];
        $buktibayar->totalTagihan=$input['totalTagihan'];
        $buktibayar->fotoBukti=$input['fotoBukti'];
        $buktibayar->status=$input['status'];
        $status=$buktibayar->save();
        // dd($buktibayar);

                if($status){
                    return back()->with('success','Data pembayaran berhasil ditambahkan, Silakan Tunggu Konfirmasi Admin ');
                } else {
                    return redirect('buktibayar')->with('error','Data pembayaran Gagal. Silakan upload ulang foto bukti pembayaran anda');
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
    public function edit(Request $request, $id){
        $buktibayar = BuktiBayar::where('id',$id);
        return view('admin.adminBuktiBayar',$data);
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
        $rule =[
            'namaPenerima' => 'required|min: 3',
            'alamatTujuan' => 'required|min: 3',
            'noHp' => 'numeric',
            'totalTagihan' => 'required',
            'fotoBukti' => 'required|max:2048',
                ];
        
                $image = $request->file('fotoBukti');
                $newName = rand().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images'),$newName);
                $formData = array(
                    'namaPenerima'  => $request->namaPenerima,
                    'alamatTujuan'  => $request->alamatTujuan,
                    'noHp'          => $request->noHp,
                    'totalTagihan'  => $request->totalTagihan,
                    'fotoBukti'     => $newName,
                    'status'        => 0,
                );
        
                $input = $formData;
                $buktibayar=new BuktiBayar;
                $buktibayar->namaPenerima=$input['namaPenerima'];
                $buktibayar->alamatTujuan=$input['alamatTujuan'];
                $buktibayar->noHp=$input['noHp'];
                $buktibayar->totalTagihan=$input['totalTagihan'];
                $buktibayar->fotoBukti=$input['fotoBukti'];
                $buktibayar->status=$input['status'];
                $status=$buktibayar->update();
                // dd($buktibayar);
        
                        if($status){
                            return back()->with('success','Data pembayaran berhasil ditambahkan, Silakan Tunggu Konfirmasi Admin ');
                        } else {
                            return redirect('buktibayar')->with('error','Data pembayaran Gagal. Silakan upload ulang foto bukti pembayaran anda');
                        }
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
