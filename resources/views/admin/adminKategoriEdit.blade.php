@extends('layouts.app2')
@section('content');
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Data Kategori</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item active">List Kategori</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->

        </section>

        

        <!-- Main content -->
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
                    <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">{{$judul}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{url('admin/kategoriq', @$kategori->id)}}" method="POST">
                                @csrf

                                @if(!empty($kategori))
                                    @method('PATCH')
                                @endif
                          <div class="card-body">
                            {{-- JUDUL --}}
                            <div class="form-group">
                              <label for="">Nama Kategori</label>
                              <input type="text" class="form-control" id="kategoriNama" name="kategoriNama" value="{{ old('kategoriNama', @$kategori->kategoriNama) }}">
                            </div>
                          <!-- /.card-body -->
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" value="Reset" class="btn btn-default float-right">Cancel</button>
                          </div>
                        </form>
                      </div>
        @endsection