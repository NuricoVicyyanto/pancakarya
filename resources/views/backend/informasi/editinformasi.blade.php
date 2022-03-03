@extends('backend.layouts.sadmin')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"> Edit Informasi</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/sadmin">Home</a></li>
            <li class="breadcrumb-item active">Informasi</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="content">
      <div class="card card-info card-outline">
      <div class="card-header">
          <h3>Edit Informasi</h3>
      </div>
  
        <div class="card-body">
            <form action="{{ url('updateinformasi',$inf->id)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <input name="judul" required type="text" id="judul" class="form-control" placeholder="Judul" value="{{ $inf->judul}}">
                </div>
                <div class="form-group">
                    <input name="caption" required type="text" id="caption" class="form-control" placeholder="Caption" value="{{ $inf->caption}}">
                </div>
                <div class="form-group">
                  <textarea name="konten" required id="konten" class="form-control" cols="30" placeholder="Content" rows="10" value="{{ $inf->konten}}"></textarea>
                    {{-- <input name="konten" type="text" id="konten" class="form-control" placeholder="Content"> --}}
                </div>
                <div class="form-group">
                    <input name="gambar" type="file" id="gambar" required>
                </div>
                <div class="form-group">
                  {{-- <img src="{{ asset('img/'. $inf->gambar)}}" height="10%" width="50%" alt=""> --}}
                  <img src="{{ asset($inf->gambar)}}" height="10%" width="50%" alt="">
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