@extends('frontend.layouts.layout')
@section('content')


<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.css') }}">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500&display=swap" rel="stylesheet">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.css')}}">
<!--magnific-popup Css-->
<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
<!--animate Css-->
<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
<!--slick Css-->
<link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>

<div class="container">
  <section class="banner_main">
    <div class="container-fluid">
      <div class="row d_flex">
        <div class="col-md-5">
          <div class="text-bg">
            <h1 id="home">
              <font color="green">Daftar Perumahan</font>
            </h1>
            <p>Selamat Datang di Halaman Daftar Perumahan. Dimana nantinya pada halaman ini berisikan
              tentang informasi perumahan yang kami jual dengan info harga serta lokasi perumahan. </p>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src={{"../assets/img/blog/rumah.jpeg"}} class="img-fluid">
        </div>
      </div>
    </div>
</div>
</section>
</div>
</div>

<br><br><br><br>
<div class="judul-card bg-light">
  <center>
    <h1 class="display-4">KATALOG</h1>
  </center>
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
  <div class="row">
    <div class="col-md-4">
      <div class="card" style="width: 20rem; margin: 40px;">
        <img src="../assets/img/blog/2.jpeg" alt="">
        <div class="card-body">
          <h4 class="atf-post-title">
            <a href="#">Best Laptop Discount 30%..</a>
          </h4>
          <div class="row">
            <div class="col">
              <span>
                <i class="fa fa-chart-area"></i>  60m<sup>2</sup>
              </span>
            </div>
            <div class="col">
              <span>
                <i class="fa fa-bed"></i>  2
              </span>
            </div>
            <div class="col">
              <span>
                <i class="fa fa-shower"></i>  1
              </span>
            </div>
          </div>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <div class="atf-main-btn atf-blog-btn mt-2">
            <a href="#" class="atf-themes-btn">INFO DETAIL<i class="fa fa-angle-right atf-blogs-btn"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
        <div class="card" style="width: 20rem; margin: 40px;">
          <img src="../assets/img/blog/2.jpeg" alt="">
          <div class="card-body">
            <h4 class="atf-post-title">
              <a href="#">Best Laptop Discount 30%..</a>
            </h4>
            <div class="row">
              <div class="col">
                <span>
                  <i class="fa fa-chart-area"></i>  60m<sup>2</sup>
                </span>
              </div>
              <div class="col">
                <span>
                  <i class="fa fa-bed"></i>  2
                </span>
              </div>
              <div class="col">
                <span>
                  <i class="fa fa-shower"></i>  1
                </span>
              </div>
            </div>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="atf-main-btn atf-blog-btn mt-2">
              <a href="#" class="atf-themes-btn">INFO DETAIL<i class="fa fa-angle-right atf-blogs-btn"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 20rem; margin: 40px;">
          <img src="../assets/img/blog/2.jpeg" alt="">
          <div class="card-body">
            <h4 class="atf-post-title">
              <a href="#">Best Laptop Discount 30%..</a>
            </h4>
            <div class="row">
              <div class="col">
                <span>
                  <i class="fa fa-chart-area"></i>  60m<sup>2</sup>
                </span>
              </div>
              <div class="col">
                <span>
                  <i class="fa fa-bed"></i>  2
                </span>
              </div>
              <div class="col">
                <span>
                  <i class="fa fa-shower"></i>  1
                </span>
              </div>
            </div>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="atf-main-btn atf-blog-btn mt-2">
              <a href="#" class="atf-themes-btn">INFO DETAIL<i class="fa fa-angle-right atf-blogs-btn"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 20rem; margin: 40px;">
          <img src="../assets/img/blog/2.jpeg" alt="">
          <div class="card-body">
            <h4 class="atf-post-title">
              <a href="#">Best Laptop Discount 30%..</a>
            </h4>
            <div class="row">
              <div class="col">
                <span>
                  <i class="fa fa-chart-area"></i>  60m<sup>2</sup>
                </span>
              </div>
              <div class="col">
                <span>
                  <i class="fa fa-bed"></i>  2
                </span>
              </div>
              <div class="col">
                <span>
                  <i class="fa fa-shower"></i>  1
                </span>
              </div>
            </div>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="atf-main-btn atf-blog-btn mt-2">
              <a href="#" class="atf-themes-btn">INFO DETAIL<i class="fa fa-angle-right atf-blogs-btn"></i></a>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>


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
