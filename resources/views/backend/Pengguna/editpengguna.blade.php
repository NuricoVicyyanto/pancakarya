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
            <li class="breadcrumb-item active"> Edit Data Komentar</li>
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
            <form action="{{ url('updatepengguna',$peng->id)}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <input name="name" required type="text" id="name" class="form-control" placeholder="Name" value="{{ $peng->name}}">
                </div>
                <div class="form-group">
                    <input name="username" required type="text" id="username" class="form-control" placeholder="Username" value="{{ $peng->username}}">
                </div>
                <div class="form-group">
                    <input name="email" required type="email" id="email" class="form-control" placeholder="Email" value="{{ $peng->email}}">
                </div>
                <div class="form-group">
                    <input name="password" required type="password" id="Password" class="form-control" placeholder="Password" value="{{ $peng->password}}">
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
                  {{-- <button type="submit" class="btn btn-success">Edit Data</button> --}}
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