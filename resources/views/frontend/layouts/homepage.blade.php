@extends('frontend.layouts.layout')
@section('content')
<br><br>
    <!--content--> 
<div class="container">
    <section class="banner_main">
               <div class="container-fluid">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="text-bg">
                           <h1><font color="green">UNDUH APLIKASI</font></h1>
                           <p>dengan menggunakan aplikasi ini kita dapat mempermudah menperoleh informasi seputar pertanian 
                        , membeli berbagai produk kami dimana saja dan kapan saja.</p>
                        <div><button type="button" class="btn btn-success shadow">Get App</button></div>
                        </div>
                     </div>
                     <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{asset('assets/img/background.png')}}" class="img-fluid" >
                </div>
                     </div>
                  </div>
               </div>
            </section>
        </div>
         </div>
      </header>
      <br><br><br><br><br>

        <div class="judul-card bg-light">
            <h1 class="display-4">Keunggulan</h1>
            <hr>
            <div id="service" class="three_box">
         <div class="container">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Soft-box">
                     <i><img src="{{asset('assets/img/belanja.png')}}"  /></i>
                     <h3>Belanja</h3>
                     <p>Kami mempermudah proses belanja kebutuhan anda, terumama dalam mencari bahan sayuran segar dan organik</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Soft-box">
                     <i><img src="{{asset('assets/img/transaksi.png')}}" /></i>
                     <h3>Pembayaran</h3>
                     <p>Kami menyediakan opsi pembayaran ditempat dan juga opsi pembayaran dengan cara mengirim bukti transaksi</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Soft-box">
                     <i><img src="{{asset('assets/img/pengiriman.png')}}" /></i>
                     <h3>Pengiriman</h3>
                     <p>Kami menyediakan opsi pengiriman barang sampai di tempat(<i>dengan pengecualian</i>) dan juga langsung datang ke gerai kami</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
    <br><br><br>
    <div class="judul-card bg-light">
        <h1 class="display-4">Informasi</h1>
        <hr>
    
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
            @foreach ($dtInformasi as $item)
            <div class="col mb-4">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <img src="{{ asset($item->gambar)}}" class="img-thumbnail" alt="responsive image">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <h5><b>{{ $item->judul }}</b></h5>
                        <p>{{ $item->caption}}</p>
                        <a href="{{ url('detailinformasi', $item->id) }}" type="button" class="btn btn-outline-success"><b><i>Baca</i></b></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


      <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
            <h1 class="display-4">About Me</h1>
            <hr>
            </div>
            <br>

          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="{{asset('assets/img/sayur 2.jpg')}}" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div>
              <p style="text-align:center"> Aplikasi ini adalah aplikasi informasi pertanian, dan penjualan produk pertanian.<br>
              <br>Yang memiliki keunggulan yaitu memiliki harga yang lebih miring dari pada yang lainnya,
              sayuran kami dijamin fresh karena bekerja sama langsung dengan SMK Pertanian Pembangunan 
              Negeri 1 Tegalampel Bondowoso, Pelanggan hanya perlu santai dirumah pesanan akan kami antar</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
    <br><br>

        <div class="container">
            <div class="judul-card">
                <h1 class="display-4">Dokumentasi</h1>
                <hr>
            </div>

            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('assets/img/cover.jpeg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Pertanian</h5>
                            <p>Menyajikan hal-hal seputar pertanian.</p>
                        </div>
                    </div>
                    {{-- <div class="carousel-item">
                        <img src="im{{asset('assets/img/cov.jpeg')}}g/sawi.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/img/cov1.jpeg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div> --}}
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="konten">
                <h4><b>VISI</b></h4>
                <p class="text-xl-left text-justify">Menjadi aplikasi pertanian yang dapat menjual produk hasil
                    pertanian
                    SMK PP N 1 Tegalampel Bondowoso,
                    dan diharapkan dapat membantu perekonomian para petani lokal disekitar dalam memasarkan produk ke
                    jangkauan pasar yang sangat luas</p>
                <h4><b>MISI</b></h4>
                <p class="text-xl-left text-justify">Dalam rangka mewujudkan visi yang kami terapkan, semoga dapat
                    memasarkan produk ke jangkauan yang lebih luas,
                    mendorong perekonomian dan membangun kerjasama terhadap pertanian lokal </p>
            </div>
        </div>
@stop
