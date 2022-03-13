@extends('backend.layouts.admin')
@section('content')
<div class="container-fluid">


<h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>
  <div class="content">
      <div class="card card-info card-outline">
      <div class="card-header">
          <h3>Tulis Dokumentasi</h3>
      </div>
  
        <div class="card-body">
            <form action="{{ route('simpandokumentasi')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <input name="judul" required type="text" id="judul" class="form-control" placeholder="Judul">
                </div>
                <div class="form-group">
                    <input name="caption" required type="text" id="caption" class="form-control" placeholder="Caption">
                </div>
                <div class="form-group">
                  <textarea name="konten" required id="konten" class="form-control" cols="30" placeholder="Content" rows="10"></textarea>
                    {{-- <input name="konten" type="text" id="konten" class="form-control" placeholder="Content"> --}}
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