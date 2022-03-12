<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{asset('assets/css.css')}}">
    <title>Si PEKA</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="/homepage"><img src="{{asset('assets/img/logo.png')}}" width="130" height="50" class=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger"  href="#">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="#keunggulan">Keunggulan</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="#informasi">Informasi</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="#about">About Me</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link js-scroll-trigger" href="#Dokumentasi">Dokumentasi</a>
                  </li>
                </ul>
                <span class="navbar-text">
                    <a href="/login" class="btn btn-warning shadow">Login</a>
                </span>
            </div>
        </div>
    </nav>
    <br><br><br>
    <br><br>
    <!--content--> 
<div class="container">
    <section class="banner_main">
               <div class="container-fluid">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="text-bg">
                           <h1 id="home"><font color="green">UNDUH APLIKASI</font></h1>
                           <h5><font color="green">dengan menggunakan aplikasi ini kita dapat mempermudah menperoleh informasi seputar pertanian 
                        , membeli berbagai produk kami dimana saja dan kapan saja slurd.</font></h5><br>
                        <div><button type="button" class="btn btn-success shadow">Get App</button></div>
                        </div>
                     </div>
                     <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{asset('assets/img/background.png')}}" class="img-fluid">
                </div>
                     </div>
                  </div>
               </div>
            </section>
        </div>
        </div>
      </header>
      <br><br><br>
        <div class="judul-card bg-light">
            <h1 class="display-4" id="keunggulan">Keunggulan</h1>
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
        <h1 class="display-4" id="informasi">Informasi</h1>
        <hr>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <img src="{{asset('assets/img/sayur 1.jpg')}}" class="img-thumbnail" alt="responsive image">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <h5><b>Manfaat sayur sawi bagi tubuh</b></h5>
                            <p>Kandungan kandungan yang terdapat pada sayur sawi</p>
                            <a href="/login" type="button" class="btn btn-outline-success"><b><i>Baca</i></b></a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <img src="{{asset('assets/img/sayur 2.jpg')}}" class="img-thumbnail" alt="responsive image">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <h5><b>Manfaat wartel bagi kesehatan mata</b></h5>
                            <p>Wortel dapat membantu meningkatkan kesehatan mata</p>
                            <a href="/login" type="button" class="btn btn-outline-success"><b><i>Baca</i></b></a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <img src="{{asset('assets/img/sayur 3.jpg')}}" class="img-thumbnail" alt="responsive image">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <h5><b>Cara menanam terong dalam pot</b></h5>
                            <p>Menanam terong dalam pot membantu untuk mengheman lahan</p>
                            <a href="/login" type="button" class="btn btn-outline-success"><b><i>Baca</i></b></a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <img src="{{asset('assets/img/sayur 4.jpg')}}" class="img-thumbnail" alt="responsive image">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <h5><b>Manfaat sayur bayam</b></h5>
                            <p>Manfaat sayur bayang beserta cara memasaknya</p>
                            <a href="/login" type="button" class="btn btn-outline-success"><b><i>Baca</i></b></a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <img src="{{asset('assets/img/sayur 5.jpg')}}" class="img-thumbnail" alt="responsive image">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <h5><b>Cara mngolah kacang tanah</b></h5>
                            <p>Langkah-langkah menolah kacang tanah menjadi produk makanan</p>
                            <a href="/login" type="button" class="btn btn-outline-success"><b><i>Baca</i></b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
      <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
            <h1 class="display-4" id="about">About Me</h1>
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
            <div class="left-content">
              <p>Aplikasi ini adalah aplikasi informasi pertanian, dan penjualan produk pertanian.
                Yang memiliki keunggulan yaitu memiliki harga yang lebih miring dari pada yang lainnya, sayuran kami dijamin fresh karena bekerja sama langsung dengan SMK Pertanian Pembangunan Negeri 1 Tegalampel Bondowoso, Pelanggan hanya perlu santai dirumah pesanan akan kami antar</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
    <br><br>
        <div class="container">
            <div class="judul-card">
                <h1 class="display-4" id="dokumentasi">Dokumentasi</h1>
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
                            <h5>Pertanian</h5>
                            <p>Menyajikan hal-hal seputar pertanian.</p>
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
        <div class="footer">
          <div class="container">
              <footer class="page-footer font-small blue pt-4">
                  <div class="container-fluid text-center text-md-left">
                      <div class="row">
                          <div class="col-md-6 mt-md-0 mt-3">
                              <!-- Content -->
                              <h5 class="text-uppercase">Si PEKA</h5>
                              <p>Website pemasaran hasil pertanian SMKPP Negeri 1 Tegalampel.</p>
                          </div>
                          <hr class="clearfix w-100 d-md-none pb-3">
                          
                          <div class="col-md-3 mb-md-0 mb-3">
                              <h5 class="text-uppercase">Contact</h5>
                              <ul class="list-unstyled">
                                  <li>
                                      <a class="navbar-brand text-dark" href="https://chat.whatsapp.com/Kb1NTOu8YlNJRbVjuu7fvb" target="_blank">
                                          <img src="{{asset('assets/img/whatsapp.png')}}" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                                          Contact Via WhatsApp
                                      </a>
                                  </li>
                                  <li>
                                      <a class="navbar-brand text-dark" href="https://www.instagram.com/mchfahrony/" target="_blank" >
                                          <img src="{{asset('assets/img/instagram.png')}}" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                                          Contact Via Instagram
                                      </a>
                                  </li>
                                  <li>
                                      <a class="navbar-brand text-dark" href="https://twitter.com/mchfahrony" target="_blank">
                                          <img src="{{asset('assets/img/twitter.png')}}" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                                          Contact Via Twitter
                                      </a>
                                  </li>
                                  <li>
                                      <a class="navbar-brand text-dark" href="mailto:sipekabondowoso@gmail.com?subject=kepada%20developer%20Si%20PEKA%20" target="_blank" >
                                          <img src="{{asset('assets/img/gmail.png')}}" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                                          Contact Via Gmail
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
          </div>
          <hr>
          <div class="container">
              <div class="bawah text-center py-3">© 2021 Copyright
              </div>
          </div>
          </footer>


</body>

</html>