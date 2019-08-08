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
                  <li class="admin/buku"><a href="buku">List Buku</a></li> / 
                  <li class="breadcrumb-item active">Tambah Data</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                  <h3 class="card-title">{{$judul}}</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="post" action="/admin/buku/create">
                                  <div class="card-body">
                                    {{-- JUDUL --}}
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Judul Buku</label>
                                      <input type="text" class="form-control" id="bukuNama" placeholder="Judul Buku Baru" name="bukuNama">
                                    </div>
                                    {{-- PENULIS DAN PENERBIT --}}
                                    <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="">Penulis Buku</label>
                                              <input type="text" class="form-control" id="bukuPenulis" placeholder="Penulis Buku" name="bukuPenulis">
                                            </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="">Penerbit Buku</label>
                                              <input type="text" class="form-control" id="bukuPenerbit" placeholder="Penerbit Buku" name="bukuPenerbit">
                                            </div>
                                      </div>
                                    </div>
                                    {{-- UPLOAD FOTO DAN HARGA --}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Upload Foto Buku</label>
                                                <div class="input-group">
                                                    <input type="file" class="custom-file-input" id="bukuFoto" name="bukuFoto">
                                                    <label class="custom-file-label" >Choose file</label>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Harga Buku</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text">Rp.</span>
                                                    </div>
                                                    <input type="numeric" class="form-control" id="bukuHarga" name="bukuHarga">
                                                    <div class="input-group-append">
                                                      <span class="input-group-text">.00</span>
                                                    </div>
                                                  </div>
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Stok Buku</label>
                                                <div class="input-group">
                                                    <input type="numeric" class="form-control" id="bukuStok" name="bukuStok">
                                                    <div class="input-group-append">
                                                      <span class="input-group-text">pcs</span>
                                                    </div>
                                                  </div>
                                              </div>
                                        </div>
                                      </div>
                                      {{-- deskripsi --}}
                                      <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Sinopsis Buku</label>
                                                <textarea class="form-control" rows="4" placeholder="Masukan Sinopsis/Deskripsi Buku" id="bukuDeskripsi" name="bukuDeskripsi"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select multiple class="form-control" id="kategori_id">
                                                  @foreach ($kategori as $k)
                                                    <option value="{{$k->id}}">{{$k->kategoriNama}}</option>
                                                  @endforeach
                                                </select>
                                              </div>
                                        </div>

                                      </div>
                                  </div>
                                  <!-- /.card-body -->
                  
                                  <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                                  </div>
                                </form>
                              </div>
                              <!-- /.card -->

@endsection