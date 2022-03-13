@extends('backend.layouts.admin')
@section('content')

<div class="container-fluid">


  <h1 class="h3 mb-2 text-gray-800">Tables</h1>
  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
  <div class="content">
    <div class="card card-info card-outline">
      <div class="card-header">
        <h3>Edit Dokumentasi</h3>
      </div>

      <div class="card-body">
        <form action="{{ url('updatetransaksi',$dtTransaksi->id)}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <input name="nama" required type="text" id="nama" class="form-control" placeholder="Judul" value="{{ $dtTransaksi->nama}}">
          </div>
          <div class="form-group">
            <input name="alamat" required type="text" id="alamat" class="form-control" placeholder="Caption" value="{{ $dtTransaksi->alamat}}">
          </div>
          <div class="form-group">
            <textarea name="email" required type="email" id="email" class="form-control" cols="30" placeholder="Email" rows="10" value="{{ $dtTransaksi->email}}"></textarea>
            {{-- <input name="konten" type="text" id="konten" class="form-control" placeholder="Content"> --}}
          </div>
          <div class="form-group">
            <input name="produk" required type="text" id="produk" class="form-control" placeholder="Produk" value="{{ $dtTransaksi->produk}}">
          </div>
          <div class="form-group">
            <input name="jumlah" required type="number" id="jumlah" class="form-control" placeholder="Jumlah" value="{{ $dtTransaksi->jumlah}}">
          </div>
          <div class="form-group">
            <input name="gambar" required type="file" id="gambar">
          </div>
          <div class="form-group">
            <img src="{{ asset($dtTransaksi->gambar)}}" height="10%" width="50%" alt="">
          </div>

          <div class="form-group">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Kirim</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah data</h5>
                  </div>
                  <div class="modal-body">
                    Apakah anda yakin ingin mengubah data?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Update Data</button>
                  </div>
                </div>
              </div>
            </div>
            {{-- <button type="submit" class="btn btn-success">Update Data</button> --}}
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