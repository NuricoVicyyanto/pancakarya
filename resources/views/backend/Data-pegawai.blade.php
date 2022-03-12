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
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="container-fluid mt-4">
    <div class="row">
        <div class="col-lg-12">
        </div>
        <div class="col-lg-12">
            <div class="shadow p-3 mb-4 bg-white rounded">
                <div class="pb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahGuru"><i class="fas fa-plus"></i> Tambah Data</button>
                </div>
                <table id="datapengguna" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>NAMA</th>
                            <th>ALAMAT</th>
                            <th>TANGGAL LAHIR</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($dtPegawai as $item)
                      <tr>
                          <td>{{ $item->name}}</td>
                          <td>{{ $item->alamat}}</td>
                          <td>{{ $item->tgllhr}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
  </div>
</div>
<!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->
<!-- Tambah Guru -->
  <!-- /.content -->
</div>
@endsection