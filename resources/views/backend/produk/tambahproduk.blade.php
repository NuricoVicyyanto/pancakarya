@extends('backend.layouts.admin')
@section('content')

<div class="container-fluid">


  <h1 class="h3 mb-2 text-gray-800">Tables</h1>
  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
  <div class="content">
    <div class="card card-info card-outline">
      <div class="card-header">
        <h3>Tambah Data</h3>
      </div>

      <div class="card-body">
        <form action="{{ route('simpanproduk')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <input name="namaproduk" type="text" id="namaproduk" class="form-control" placeholder="Nama Produk">
          </div>
          <div class="form-group">
            <label for="foto">Foto Produk</label>
            <div class="custom-file">
              <input type="file" required class="custom-file-input" id="customFile" name="gambar" required>
              <label class="custom-file-label" for="customFile">Choose file</label>
              <span class="badge badge-info">Ekstensi JPG | JPEG | PNG</span>
            </div>
          </div>
          <div class="form-group">
            <input name="deskripsi" required type="text" id="deskripsi" class="form-control" placeholder="Deskripsi Produk">
          </div>
          <div class="form-group">
            <input name="berat" type="number" required id="berat" class="form-control" placeholder="Luas">
          </div>
          <div class="form-group">
            <input name="stok" type="number" required id="stok" class="form-control" placeholder="Jumlah">
          </div>
          <div class="form-group">
            <input name="harga" type="text" id="harga" required class="form-control" placeholder="Harga Produk">
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