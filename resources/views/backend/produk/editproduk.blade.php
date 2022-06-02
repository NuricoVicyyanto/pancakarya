@extends('backend.layouts.admin')
@section('content')

<div class="container-fluid">


  <h1 class="h3 mb-2 text-gray-800">Tables</h1>
  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
  <div class="content">
    <div class="card card-info card-outline">
      <div class="card-header">
        <h3>buat data</h3>
      </div>

      <div class="card-body">
        <form action="{{ route('updateproduk',$prod->id)}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <input name="namaproduk" type="text" id="namaproduk" class="form-control" value="{{ $prod->namaproduk}}">
          </div>
          <div class="form-group">
            <input name="sampul" type="file" id="sampul" required>
          </div>
          <div class="form-group">
            <img src="{{ asset($prod->sampul)}}" height="10%" width="50%" alt="">
          </div>
      </div>
      <div class="form-group">
        <input name="deskripsi" required type="text" id="deskripsi" class="form-control" value="{{ $prod->deskripsi}}">
      </div>
      <div class="form-group">
        <input name="berat" required type="number" id="berat" class="form-control" value="{{ $prod->berat}}">
      </div>
      <div class="form-group">
        <input name="stok" required type="number" id="stok" class="form-control" value="{{ $prod->stok}}">
      </div>
      <div class="form-group">
        <input name="harga" required type="text" id="harga" class="form-control" value="{{ $prod->harga}}">
      </div>
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
        <button type="submit" class="btn btn-success">Update Data</button>
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