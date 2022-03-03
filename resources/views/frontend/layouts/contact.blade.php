@extends('frontend.layouts.layout')
@section('content')
<div class="container">
<div class="card shadow p-3">
<div class="container" style="padding-top:40px; padding-bottom:40px; padding-right:115px; padding-left:100px">
    <h2>Kritik dan Saran</h2>
    <hr>
    <form action="{{ route('simpanpengguna')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <input name="name" required type="text" id="name" class="form-control" readonly  value="{{ auth()->user()->name }}">
        </div>
        <div class="form-group">
            <input name="username" required type="text" id="username" class="form-control" placeholder="Alamat">
        </div>
        <div class="form-group">
            <input name="email" required type="email" id="email" class="form-control" readonly value="{{ auth()->user()->email }}">
        </div>
        <div class="form-group">
            <input name="password" required type="text" id="Password" class="form-control" placeholder="Komentar">
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-success shadow" data-bs-toggle="modal" data-bs-target="#exampleModal">Kirim</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kirim Data</h5>
                  </div>
                  <div class="modal-body">
                    Apakah anda yakin ingin mengirim masukan?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Ya, Kirim</button>
                  </div>
                </div>
              </div>
            </div>
        {{-- <button type="submit" class="btn btn-success">Kirim</button> --}}
        </div>
    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
    </div>

    </div>

    </div>
    </div>
    </div>
    </div>
    <br>
    @stop
