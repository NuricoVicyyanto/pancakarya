@extends('backend.layouts.sadmin')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Transaksi</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/sadmin">Home</a></li>
            <li class="breadcrumb-item active">Transaksi</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="content">
      <div class="card card-info card-outline">
      <div class="card-header">
          <h3>Tulis Artikel</h3>
      </div>
  
        <div class="card-body">
            <form action="{{ route('simpantransaksi')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <input name="nama" required type="text" id="nama" class="form-control" placeholder="Nama">
                </div>
                <div class="form-group">
                    <input name="alamat" required type="text" id="alamat" class="form-control" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <input name="email" required id="email" class="form-control" cols="30" placeholder="Email" rows="10">
                    {{-- <input name="konten" type="text" id="konten" class="form-control" placeholder="Content"> --}}
                </div>
                <div class="form-group">
                  <input name="produk" required type="text" id="produk" class="form-control" placeholder="Produk">
              </div>
              <div class="form-group">
                <input name="jumlah" required type="number" id="jumlah" class="form-control" placeholder="Jumlah">
            </div>
                <div class="form-group">
                    <input name="gambar" required type="file" id="gambar">
                </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-success">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
</div>
</div>
  <!-- /.content -->
</div>
@endsection