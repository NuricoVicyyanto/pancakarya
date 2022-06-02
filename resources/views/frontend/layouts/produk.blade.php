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
              <font color="">Daftar Perumahan</font>
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

{{-- <div class="container">
  <div class="row">
  @foreach ($dtProduk as $item)
    <div class="col-md-4">
      <div class="card" style="width: 20rem; margin: 40px;">
        <img src="{{ asset($item->sampul)}}" class="img-thumbnail" alt="image" alt="">
<div class="card-body">
  <h4 class="atf-post-title">
    <a href="#">{{ $item->namaproduk}}</a>
  </h4>
  <div class="row">
    <div class="col">
      <span>
        <i class="fa fa-chart-area"></i> {{ $item->berat}}<sup>2</sup>
      </span>
    </div>
    <div class="col">
      <span>
        <i class="fa fa-bed"></i> 2
      </span>
    </div>
    <div class="col">
      <span>
        <i class="fa fa-shower"></i> 1
      </span>
    </div>
  </div>
  <p class="card-text">{{ $item->deskripsi}}</p>
  <div class="atf-main-btn atf-blog-btn mt-2">
    <a href="{{ url('detailproduk', $item->id) }}" class="atf-themes-btn">INFO DETAIL<i class="fa fa-angle-right atf-blogs-btn"></i></a>
  </div>
</div>
</div>
</div>
@endforeach
</div>
</div> --}}

<div class="container">
  <div class="row clearfix">
    <div class="col-xl-12 col-lg-12 col-12">
      <div class="row">
        @foreach ($dtProduk as $item)
        <div class="col-lg-6 col-md-6 col-12 p-2">
          <div class="atf-post-slide">
            <div class="atf-post-pic">
              <img src="{{ asset($item->sampul)}}" alt="">
              <ul class="atf-post-category">
                <li><a href="#">29 Dec,</a></li>
                <li><a href="#">2020</a></li>
              </ul>
            </div>
            <div class="atf-post-header">
              <ul class="atf-post-bar">
                <li><i class="fa fa-chart-area"></i><a href="">{{ $item->berat}}<sup>2</sup></a></li>
                <li><i class="fa fa-bed"></i><a href="">{{ $item->berat}}</a></li>
                <li><i class="fa fa-shower"></i><a href="">{{ $item->berat}}</a></li>
              </ul>
              <h4 class="atf-post-title">
                <a href="#">{{ $item->namaproduk}}</a>
              </h4>
            </div>
            <p class="atf-post-description">
              {{ $item->deskripsi}}
            </p>
            <div class="atf-main-btn atf-blog-btn mt-2 pb-4 ml-3">
              <a href="{{ url('detailproduk', $item->id) }}" class="atf-themes-btn">Read More <i class="fa fa-angle-right atf-blogs-btn"></i></a>
            </div>
          </div>
        </div>
        <!--- END COL -->
        @endforeach



        <div class="col-lg-12 col-md-12 col-12">
          <!-- Pagination Starts -->
          <nav class="atf-blog-pagination mt-5" aria-label="Page navigation example">
            <ul class="pagination justify-content-center mb-0">
              <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-double-left"></i></a></li>
              <li class="page-item"><a class="page-link" href="#">01</a></li>
              <li class="page-item active"><a class="page-link" href="#">02</a></li>
              <li class="page-item"><a class="page-link" href="#">03</a></li>
              <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </nav>
          <!-- Pagination Ends -->
        </div>
        <!--- END COL -->
      </div>
      <!--- END ROW -->
    </div>
    <!--- END COL -->
  </div>
  <!--- END ROW -->
</div>
<!--- END CONTAINER -->
</div>
<!--- END Section -->
</div>
<!--- END CONTENT -->





</div>
<!--- END CONTAINER -->
<br><br>

@stop