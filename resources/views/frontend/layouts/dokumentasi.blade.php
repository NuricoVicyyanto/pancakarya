@extends('frontend.layouts.layout')
@section('content')

<div class="container">
    <section class="banner_main">
               <div class="container-fluid">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="text-bg">
                           <h1 id="home"><font color="green">DOKUMENTASI</font></h1>
                           <p>Selamat Datang di Halaman Dokumentasi. Dimana nantinya pada halaman ini pembeli bisa melihat 
                           kegiatan proses panen hingga proses penjualan ke pelanggan.</p>
                        </div>
                     </div>
                     <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{asset('assets/img/sayuran 1.png')}}" class="img-fluid" >
                </div>
                     </div>
                  </div>
               </div>
            </section>
        </div>
         </div>
         <br><br><br><br><br><br>
    <div class="judul-card bg-light">
        <h1 class="display-4">Dokumentasi</h1>
        <hr>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3">
                @foreach ($dtDokumentasi as $item)
                <div class="col mb-4">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <img src="{{ asset($item->gambar)}}" class="img-thumbnail" alt="responsive image">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <h5><b>{{ $item->judul }}</b></h5>
                            <p>{{ $item->caption}}</p>
                            <a href="{{ url('detaildokumentasi', $item->id) }}" type="button" class="btn btn-outline-success"><b><i>Baca</i></b></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    
    @endsection
