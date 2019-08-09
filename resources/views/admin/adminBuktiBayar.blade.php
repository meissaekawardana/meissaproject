@extends('layouts.app2')
@section('content');
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Data Pembayaran</h1>
              </div>
              <div class="col-sm-6">
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
            @if (session('success'))
            <div class="alert alert-success">
              <strong>{{session('success')}}</strong>  
            </div>
          @endif
          @if (count($errors)>0)
            <div class="alert alert-danger">
            <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <strong><li>{{$error}}</li></strong> 
                @endforeach
            </ul>
          </div>
          @endif
                            <div class="card">
                                <div class="card-header">
                                  <div class="row">
                                    <div class="col-md-6"><h3 class="card-title">List Data Pembayaran</h3></div>
                                  </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                  <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>idPembayaran</th>
                                        <th>Nama Penerima</th>
                                        <th>Alamat Tujuan</th>
                                        <th>No HP</th>
                                        <th>Total Tagihan</th>
                                        <th>Foto Bukti Pembayaran</th>
                                        <th>Status</th>
                                        <th>Action Edit</th>
                                        <th>Action Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($buktibayar as $bb)
                                      <tr>
                                          <td>{{$bb->id}}</td>
                                          <td>{{($bb->namaPenerima)}}</td>
                                          <td>{{($bb->alamatTujuan)}}</td>
                                          <td>{{($bb->noHp)}}</td>
                                          <td>{{($bb->totalTagihan)}}</td>
                                          <td><img src="{{asset('images/'.$bb->fotoBukti)}}" style="width: 40%"></td>
                                          <td>{{$bb->status}}</td>
                                          <td>
                                              <a href="{{ url('/admin/buktibayar/' . $bb->id . '/edit') }}"><button type="button" class="btn btn-success" style="text-align:center"><i class="fa fa-edit"></i></button></a>
                                          </td>
                                          <td><form action="{{ url('/admin/buktibayar', $bb->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger" style="text-align:center"><i class="fa fa-trash"></i></button>
                                        </form></td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                    </tr>
                                    </tfoot>
                                  </table>
                                </div>
                                <!-- /.card-body -->
                              </div>
                              

@endsection