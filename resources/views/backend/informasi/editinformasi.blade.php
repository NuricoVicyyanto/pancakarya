@extends('backend.layouts.admin')
@section('content')


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
        <button type="submit" class="btn btn-success">Update Data</button>
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