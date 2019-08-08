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
                  <li class="breadcrumb-item active">List Buku</li> /
                  <li class="breadcrumb-item"><a href="buku/create">Tambah Data</a></li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
                            <div class="card">
                                <div class="card-header">
                                  <h3 class="card-title">List Data Buku</h3>
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
                                    </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($buku as $b)
                                      <tr>
                                          <td>{{$b->bukuNama}}</td>
                                          <td>{{($b->bukuHarga)}}</td>
                                          <td>{{$b->bukuFoto}}</td>
                                          <td>
                                            {{$b->kategori->kategoriNama}}
                                            @foreach($b->kategori as $k)
                                              {{ $k->kategoriName }}
                                            @endforeach
                                          </td>
                                          <td>{{$buku->bukuKategori}}</td>
                                          <td>{{$b->bukuPenulis}}</td>
                                          <td>{{$b->bukuPenerbit}}</td>
                                          <td>{{$b->bukuDeskripsi}}</td>
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


@endsection