@extends('frontend.layouts.layout')
@section('content')
    
<div class="container">
    <section class="banner_main">
               <div class="container-fluid">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="text-bg">
                           <h1 id="home"><font color="green">PRODUK</font></h1>
                           <p>Selamat Datang di Halaman Pruduk. Dimana nantinya pada halaman ini berisikan
                           tentang produk-produk yang dijual oleh kami sesuai hasil panen yang kami lakukan 
                           saat itu juga. </p>
                        </div>
                     </div>
                     <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{asset('assets/img/sayuran 2.png')}}" class="img-fluid" >
                </div>
                     </div>
                  </div>
               </div>
            </section>
        </div>
         </div>

    <br><br><br><br>
    <div class="judul-card bg-light">
        <h1 class="display-4">Daftar Produk Pertanian</h1>
        <hr>
    

        {{-- @foreach ($dtTransaksi as $item)
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="{{ asset($item->gambar)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <h5><b>{{ $item->judul }}</b></h5>
                            <p>{{ $item->caption}}</p>
                            <a href="{{ url('detaildokumentasi', $item->id) }}" type="button" class="btn btn-outline-success"><i>Baca</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    
    
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
            @foreach ($dtProduk as $item)
            <div class="col mb-4">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <img src="{{ asset($item->sampul)}}" class="img-thumbnail" alt="responsive image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->namaproduk }}</h5>
                        <p><b>{{ $item->deskripsi }}</b></p>
                        <span class="badge badge-success">discount 50%</span>
                        <p class="card-text text-justify">
                            <b>Rp.{{ $item->harga }}</b>
                        </p>
                        <a href="{{ url('detailproduk', $item->id) }}" type="button" class="btn btn-outline-success shadow"><b><i>Lihat produk ...</i></b></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@stop