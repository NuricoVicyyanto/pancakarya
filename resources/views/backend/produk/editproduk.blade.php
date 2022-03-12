@extends('backend.layouts.sadmin')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data User</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data User</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
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
                    <label for="foto">Foto Sampul</label>
                      <div class="custom-file">
                        <input type="file" required class="custom-file-input" id="customFile" name="gambar">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      <span class="badge badge-info">Ekstensi JPG | JPEG | PNG</span>
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
