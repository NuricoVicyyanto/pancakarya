@extends('backend.layouts.admin')
@section('content')

<div class="container-fluid">


  <h1 class="h3 mb-2 text-gray-800">Tables</h1>
  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
  <!-- /.content-header -->

  <!-- /.content-header -->

  <!-- Main content -->
  <div class="container-fluid mt-4">
    <div class="row">
      <div class="col-lg-12">
      </div>
      <div class="col-lg-12">
        <div class="shadow p-3 mb-4 bg-white rounded">
          <!-- <div class="pb-3">
            <a href="/tambahpengguna" class="btn btn-primary">Tambah data</a>
          </div> -->
          <table id="datapengguna" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>NAME</th>
                <th>ALAMAT</th>
                <th>NO TELP</th>
                <th>KOMENTAR</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dtPengguna as $item)
              <tr>
                <td>{{ $item->name}}</td>
                <td>{{ $item->username}}</td>
                <td>{{ $item->email}}</td>
                <td>{{ $item->password}}</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <!-- <a href="{{ url('editpengguna', $item->id) }}" type="button" class="btn btn-warning" data-toggle="edit-bawah" data-placement="bottom" title="Edit data"><i class="fas fa-edit"></i></a> -->
                    <a href="{{ url('hapuspengguna', $item->id) }}" type="button" class="btn btn-danger" data-toggle="edit-atas" data-placement="right" title="Hapus data"><i class="fas fa-trash-alt"></i></a>
                  </div>
                </td>
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