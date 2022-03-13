@extends('backend.layouts.admin')
@section('content')
<div class="container-fluid">


<h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="container-fluid mt-4">
    <div class="row">
        <div class="col-lg-12">
        </div>
        <div class="col-lg-12">
            <div class="shadow p-3 mb-4 bg-white rounded">
                <div class="pb-3">
                    <a href="/tambahproduk" class="btn btn-primary"><i class="fas fa-plus"></i>Tambah data</a>
                </div>
                <table id="datapengguna" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Sampul</th>
                            <th>Deskripsi</th>
                            <th>Berat</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($dtProduk as $item)
                        <tr>
                            <td>{{ $item->namaproduk}}</td>
                            <td><a href="{{ asset($item->sampul)}}" target="blank" rel="noopener noreferrer">Lihat Gambar</a></td>
                            <td>{{ $item->deskripsi}}</td>
                            <td>{{ $item->berat}}</td>
                            <td>{{ $item->stok}}</td>
                            <td>{{ $item->harga}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                  <a href="{{ url('editproduk', $item->id) }}" type="button" class="btn btn-warning"  data-toggle="edit-bawah" data-placement="bottom" title="Edit data" ><i class="fas fa-edit"></i></a>
                                  {{-- <a href="{{ url('hapusproduk', $item->id) }}" type="button" class="btn btn-danger" data-toggle="edit-atas" data-placement="right" title="Hapus data"><i class="fas fa-trash-alt"></i></a> --}}
                                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash-alt"></i></button>
                              <!-- Modal -->
                                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Hapus data</h5>
                                        </div>
                                        <div class="modal-body">
                                          Apakah anda yakin ingin menghapus data?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                          <a href="{{ url('hapusproduk', $item->id) }}" type="button" class="btn btn-danger" data-toggle="edit-atas" data-placement="right" title="Hapus data">Ya, hapus</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
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
