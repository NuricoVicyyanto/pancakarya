@extends('backend.layouts.admin')
@section('content')

<div class="container-fluid">


  <h1 class="h3 mb-2 text-gray-800">Tables</h1>
  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
  <!-- /.content-header -->

  <div class="content">
    <div class="card card-info card-outline">
      <div class="card-header">
        <h3>buat data</h3>
      </div>

      <div class="card-body">
        <form action="{{ route('simpanpengguna')}}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <input name="name" required type="text" id="name" class="form-control" placeholder="Nama">
          </div>
          <div class="form-group">
            <input name="username" required type="text" id="username" class="form-control" placeholder="Alamat">
          </div>
          <div class="form-group">
            <input name="email" type="number" required id="email" class="form-control" placeholder="No hp">
          </div>
          <div class="form-group">
            <input name="password" type="text" id="Password" required class="form-control" placeholder="Komentar">
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