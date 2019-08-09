@extends('layouts.app2')
@section('content');
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Data Buku</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item active">List Buku</li>
                  <li class="breadcrumb-item"><a href="{{ route('admin.buku.create') }}">Tambah Data</a></li>
                </ol>
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
                                    <div class="col-md-6"><h3 class="card-title">List Data Buku</h3></div>
                                    <div class="col-md-6"><a href="{{route('admin.buku.create')}}"><button class="btn btn-primary float-right">Tambah Data</button></a></div>
                                  </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                  <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Judul Buku</th>
                                        <th>Harga Buku</th>
                                        <th>Foto Buku</th>
                                        <th>Kategori</th>
                                        <th>Penulis</th>
                                        <th>Penerbit</th>
                                        <th>Sinopsis</th>
                                        <th>Action Edit</th>
                                        <th>Action Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($buku as $b)
                                      <tr>
                                          <td>{{$b->bukuNama}}</td>
                                          <td>{{($b->bukuHarga)}}</td>
                                          <td><img src="{{asset('images/'.$b->bukuFoto)}}" style="width: 100%"></td>
                                          {{-- {{asset('images/'.$b->bukuFoto)}} --}}
                                          {{-- <td>{{$b->bukuFoto}}</td> --}}
                                          <td>
                                            @foreach($b->kategori as $k)
                                              {{ $k->kategoriNama }} <br>
                                            @endforeach
                                          </td>
                                          <td>{{$b->bukuPenulis}}</td>
                                          <td>{{$b->bukuPenerbit}}</td>
                                          <td>{{$b->bukuDeskripsi}}</td>
                                          <td>
                                              <a href="{{ url('/admin/buku/' . $b->id . '/edit') }}"><button type="button" class="btn btn-success" style="text-align:center"><i class="fa fa-edit"></i></button></a>
                                          </td>
                                          {{-- <td>
                                            <form action="">
                                                @csrf
                                              <input type="hidden" name="id" value="{{$b->id}}">
                                            
                                            <button type="submit" class="btn btn-danger btn-md float-center" data-toggle="modal" data-target="#myModal" style=""><i class="fa fa-trash"></i></button></form></td> --}}

                                          <td><form action="{{ url('/admin/buku', $b->id)}}" method="POST">
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
                              <!-- /.card -->
                              <!-- jQuery -->
                              {{-- <button type="submit" class="btn btn-danger" style="text-align:center"><i class="fa fa-trash"></i></button> --}}
                              {{-- class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" --}}

                              {{-- <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                  <!-- konten modal-->
                                  <div class="modal-content">
                                    <!-- heading modal -->
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Hapus Data</h4>
                                    </div>
                                    <!-- body modal -->
                                    <div class="modal-body">
                                        {{$aidi}}={{$id}};
                                        <form action="{{ url('/admin/buku', $aidi)}}" method="POST">
                                          @method('DELETE')
                                          @csrf
                                          <p>Yakin Ingin menghapus data ini?</p>
                                          <button type="submit" class="btn btn-danger" style="text-align:center"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                    <!-- footer modal -->
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
                                    </div>
                                  </div>
                                </div>
                              </div> --}}

@endsection