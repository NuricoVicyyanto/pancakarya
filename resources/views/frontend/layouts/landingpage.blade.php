<!doctype html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- SITE TITLE -->
	<title>Panca Karya - Website</title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('assets/img/logo.ico')}}" type="image/x-icon">


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

<body>
	<!-- Page Wrapper -->
	<div class="page-wrapper">

		<!-- START PRELOADER -->
		<div class="atf-preloader">
			<div class="atf-status">
				<div class="atf-status-mes"></div>
			</div>
		</div>
		<!-- END PRELOADER -->

		<!-- START back-to-top -->
		<button class="atf-scroll-top atf-back-to-top" data-targets="html">
			<i class="fa fa-angle-up atf-scrollup-icon"></i>
		</button>
		<!-- END back-to-top-->

		<!-- Start Header Section -->
		<header class="atf-site-header atf-style1 atf-sticky-header">
			<div class="atf-top-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<div class="atf-top-header-in wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
								<ul class="atf-top-header-list">
									<li><i class="fas fa-envelope"></i>Email: <a href="mailto:pancakaryapro@gmail.com">pancakaryapro@gmail.com</a></li>
									<li><i class="fas fa-phone-volume"></i>Contact: <a href="tel:+6281231242823">+62 812-3124-2823</a></li>
								</ul>
							</div>
						</div>
						<!--- END COL -->
						<div class="col-lg-4 col-md-4">
							<div class="nav-right-part nav-right-part-desktop">
								<ul>
									{{-- <li><a class="search header-search" href="#"><i class="fa fa-search"></i></a></li> --}}
									<li class=""><a class="login-btn" href="/login"">Login</a></li>
                                {{-- <li><a class="shopping-cart-btn" href="#"><i class="fa fa-shopping-cart"></i><span>2</span></a></li> --}}
                            </ul>
                        </div>
                    </div><!--- END COL -->
                </div><!--- END ROW -->
            </div><!--- END CONTAINER -->
        </div><!--- END TOP HEADER -->


        <div class=" atf-main-header">
											<div class="container">
												<div class="atf-main-header-in">
													<div class="atf-main-header-left">
														<a class="atf-site-branding atf-white-logo" href="/"><img src="assets/img/logo.png" alt="Logo"></a>
													</div>

													<div class="nav-right-part nav-right-part-mobile">
														<ul>
															{{-- <li><a class="search header-search" href="#"><i class="fa fa-search"></i></a></li> --}}
															<li class=""><a class="login-btn" href="/login">Login</a></li>
															{{-- <li><a class="shopping-cart-btn" href="#"><i class="fa fa-shopping-cart"></i><span>2</span></a></li> --}}
														</ul>
													</div>

													<div class="atf-main-header-right">
														<div class="atf-nav">
															<ul class="atf-nav-list atf-onepage-nav">
																<li><a href="/" class="atf-smooth-move">Dashboard</a>

																</li>

																<li><a href="/login" class="atf-smooth-move">Perumahan</a>

																</li>
																<li><a href="/login" class="atf-smooth-move">Kontak</a>

																</li>
															</ul>
															<!--- END NAV -->
														</div>
													</div>
													<!--- END MAIN HEADER RIGHT -->
												</div>
											</div>
											<!--- END CONTAINER -->
							</div>
							<!--- END MAIN HEADER -->
		</header>
		<!-- End Header Section -->

		<!-- START HOME -->
		<section id="home">
			<div class="atf-slider atf-style1 atf-hero-slider1 atf-hero-slider2">
				<div class="slick-container" data-autoplay="0" data-loop="1" data-speed="800" data-autoplay-timeout="1000" data-center="0" data-slides-per-view="1" data-fade-slide="1">
					<div class="slick-wrapper">
						<div class="slick-slide-in">
							<div class="atf-single-home atf-hero-area" style="background-image: url('{{asset('assets/img/banner/1.jpg')}}');  background-size:cover; background-position: center center;">
								<div class="atf-home-overlay">
									<div class="container">
										<div class="row atf-single-slide-sm2 atf-align-items-details align-items-center atf-single-text justify-content-center">
											<!--LEFT COL-->
											<div class="col-xl-6 col-lg-6 col-12 text-center atf-single-details ">
												<h5 class="mb-0 d-block d-lg-block text-white">Panca Karya</h5>
												<h2 class="mb-0 d-block d-lg-block">INFORMASI PROPERTI</h2>
												<h2 class="mb-0 d-block d-lg-block">KABUPATEN JEMBER</h2>
												<p class="pr-lg-2">Mudah, Cepat dan Amanah</p>
												<!-- Main-btn -->
												<div class="atf-main-btn mt-3">
													<a href="/login" class="page-scroll atf-themes-btn">Cari Sekarang<i class="fa fa-angle-right"></i></a>
												</div>
											</div>
											<!--- END COL -->
										</div>
										<!--- END ROW -->
									</div>
									<!--- END CONTAINER -->
								</div>
								<!--- END Overlay -->
							</div>
							<!--- END slide -->
						</div><!-- .slick-slide-in -->

						<div class="slick-slide-in">
							<div class="atf-single-home atf-hero-area" style="background-image: url(assets/img/banner/3.jpg);  background-size:cover; background-position: center center;">
								<div class="atf-home-overlay">
									<div class="container">
										<div class="row atf-single-slide-sm2 atf-align-items-details align-items-center atf-single-text justify-content-center">
											<!--LEFT COL-->
											<div class="col-xl-6 col-lg-6 col-12 text-center atf-single-details ">
												<h5 class="mb-0 d-block d-lg-block text-white">Panca Karya</h5>
												<h2 class="mb-0 d-block d-lg-block">WEBSITE PENJUALAN PROPERTI</h2>
												<h2 class="mb-0 d-block d-lg-block">KABUPATEN JEMBER</h2>
												<p class="pr-lg-2">Mudah, Cepat dan Amanah</p>
												<!-- Main-btn -->
												<div class="atf-main-btn mt-3">
													<a href="/login" class="page-scroll atf-themes-btn">Cari Sekarang<i class="fa fa-angle-right"></i></a>
												</div>
											</div>
											<!--- END COL -->
										</div>
										<!--- END ROW -->
									</div>
									<!--- END CONTAINER -->
								</div>
								<!--- END Overlay -->
							</div>
							<!--- END slide -->
						</div><!-- .slick-slide-in -->

						<div class="slick-slide-in">
							<div class="atf-single-home atf-hero-area" style="background-image: url(assets/img/banner/2.jpg);  background-size:cover; background-position: center center;">
								<div class="atf-home-overlay">
									<div class="container">
										<div class="row atf-single-slide-sm2 atf-align-items-details align-items-center atf-single-text justify-content-center">
											<!--LEFT COL-->
											<div class="col-xl-6 col-lg-6 col-12 text-center atf-single-details ">
												<h5 class="mb-0 d-block d-lg-block text-white">Panca Karya</h5>
												<h2 class="mb-0 d-block d-lg-block">INFORMASI PROPERTI</h2>
												<h2 class="mb-0 d-block d-lg-block">KABUPATEN JEMBER</h2>
												<p class="pr-lg-2">Mudah, Cepat dan Amanah</p>
												<!-- Main-btn -->
												<div class="atf-main-btn mt-3">
													<a href="/login" class="page-scroll atf-themes-btn">Cari Sekarang<i class="fa fa-angle-right"></i></a>
												</div>
											</div>
											<!--- END COL -->
										</div>
										<!--- END ROW -->
									</div>
									<!--- END CONTAINER -->
								</div>
								<!--- END Overlay -->
							</div>
							<!--- END slide -->
						</div><!-- .slick-slide-in -->
					</div>
				</div><!-- .slick-container -->

				<div class="pagination atf-style1 container"></div> <!-- If dont need Pagination then add class .atf-hidden -->
				<div class="swipe-arrow atf-style1 atf-hidden">
					<!-- If dont need navigation then add class .atf-hidden -->
					<div class="slick-arrow-left"><i class="fa fa-angle-left"></i></div>
					<div class="slick-arrow-right"><i class="fa fa-angle-right"></i></div>
				</div>
			</div><!-- .atf-slider -->
		</section>
		<!-- END  HOME DESIGN -->



		<!-- START SERVICE SECTION  -->

		<section id="service" class="atf-service-area mt-5">
			<h3>
				<center> Keunggulan Kami </center>
			</h3><br>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6">
						<div class="atf-single-service-wrap text-center">
							<div class="atf-single-service-wrap">
								<div class="atf-services-icon text-center mb-4">
									<i class="fas fa-shipping-fast"></i>
								</div>
								<div class="atf-service-content">
									<h3>Pelayanan 24 Jam</h3>
									<p>Bersedia memberi solusi tentang kebutuhan pelanggan baik melalui chat atau telpn</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="atf-single-service-wrap text-center">
							<div class="atf-single-service-wrap">
								<div class="atf-services-icon text-center mb-4">
									<i class="fas fa-envelope-open-text"></i>
								</div>
								<div class="atf-service-content">
									<h3>Siap Survey Kapan Saja</h3>
									<p>Kami menyesuaikan waktu pelanggan dalam pemilihan rumahnya</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="atf-single-service-wrap text-center">
							<div class="atf-single-service-wrap">
								<div class="atf-services-icon text-center mb-4">
									<i class="fas fa-money-bill-alt"></i>
								</div>
								<div class="atf-service-content">
									<h3>Mudah Saat Transaksi</h3>
									<p>Data dan berkas pelanggan lengkap dan sesuai persyaratan proses akan cepat</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Service-Area End-->



		<!-- Special Offer Area -->
		<div class="atf-special-offer atf-section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xl-7 col-lg-6 col-12 text-left">
						<div class="atf-special-content atf-section-title  mx-auto my-auto">
							{{-- <h4 class="mb-2">Get 30% Discount </h4> --}}
							<p class="pr-lg-5 text-justify">Panca Karya Property menjalankan usahanya di bidang pemasaran property di daerah Jember baik secara primary maupun secondary dan telah bekerjasama dengan developer atau disebut pengembang properti maupun dengan pemilik-pemilik properti yang ingin menjual propertinya yang nantinya akan di bantu oleh Panca Karya Property untuk dipasarkan.</p>

							<h2 class="mt-4 " >Visi</h2>
							<p class="pr-lg-5 text-justify">Memberikan Kemudahan berinvetasi properti serta menjadi agen properti amanah dan terpercaya
							</p>

							<h2 class="mt-3">Misi</h2>
							<p class="pr-lg-5 text-justify">1. Menjadikan PANCA KARYA sebagai wadah terdepan dan sentral transaksi properti. <br>
								2. Menjunjung tinggi nilai investasi dan kualitas produk, serta terwujudnya kemakmuran bagi nasabah. <br>
								3. Memberikan pelayanan prima dan solusi terbaik untuk nasabah. <br>
								4. Mewujudkan kepuasan nasabah dalam pelayanan kebutuhan properti. <br>
								5. Mewujudkan kesejahteraan bagi tim dan mitra Panca Karya
								</p>
{{--
							<h4 class="mt-5">Expire On</h4>
							<div id="countdown" class="text-center"></div>
							<div class="clearfix"></div> --}}
						</div>
						{{-- <div class="atf-main-btn mt-5 pb-5 d-lg-block">
							<a href="https://www.templatemonster.com/website-templates/al-majid-website-template-152091.html?_gl=1*1ley0u6*_ga*NDMyOTM1NTcxLjE2MTAxOTczNjQ.*_ga_FTPYEGT5LY*MTYxMDI4NzgyNS4zLjAuMTYxMDI4NzgzMS41NA..&_ga=2.145900727.2005536284.1610210101-432935571.1610197364" class="page-scroll atf-themes-btn">Pro Version <i class="fa fa-angle-right"></i></a>
						</div> --}}
					</div>
					<!--- END COL -->

					<div class="col-xl-5 col-lg-6 col-12">
						<div class="atf-special-img text-center  mx-auto my-auto">
							<div class="atf-single-special-img">
								<img src="assets/img/special.png" width="370" alt="Offer Image" class="img-fluid">
							</div>
						</div>
					</div>
					<!--- END COL -->
				</div>
				<!--- END ROW -->
			</div>
			<!--- END CONTAINER -->
		</div> <!-- End Special Offer Area -->


        <!-- Service-Area End-->
        <h3><center> INFORMASI </center></h3>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="atf-single-service-wrap text-center">
                        <div class="atf-single-service-wrap">
                            <img src="../assets/img/blog/prs1.jpg" alt="">
                            <div class="atf-service-content">
                                <h4>Persyaratan Karyawan</h4>
                                <p class="atf-post-description">
                                    Persyaratan diatas berlaku untuk perumahan subsidi dan komersil
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="atf-single-service-wrap text-center">
                        <div class="atf-single-service-wrap">
                            <img src="../assets/img/blog/prs2.jpg" alt="">
                            <div class="atf-service-content">
                                <h4>Persyaratan Wiraswasta</h4>
                                <p class="atf-post-description">
                                    Persyaratan diatas berlaku untuk perumahan subsidi dan komersil
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service-Area End-->


		<div class="atf-section-padding atf-blog-area atf-blog-grid-area">
			<div class="container">
				<h3><center> PRODUK </center></h3>
				<div class="atf-slider atf-style2">
					<div class="slick-container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-lg-slides="3" data-add-slides="3">
						<div class="slick-wrapper">
							<div class="slick-slide-in">
								<div class="atf-post-slide">
									<div class="atf-post-pic">
										<img src="../assets/img/blog/2.jpeg" alt="">
										<ul class="atf-post-category">
											<li><a href="#">29 Dec,</a></li>
											<li><a href="#">2020</a></li>
										</ul>
									</div>
									<div class="atf-post-header">
										<ul class="atf-post-bar">
											<li><i class="fa fa-user"></i><a href="#">Admin</a></li>
											<li><i class="fa fa-comments"></i><a href="">7.5k</a></li>
											<li><i class="fab fa-gratipay"></i><a href="">2.3k</a></li>
										</ul>
										<h4 class="atf-post-title">
											<a href="#">Best Laptop Discount 30%..</a>
										</h4>
									</div>
									<p class="atf-post-description">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur.
									</p>
									<div class="atf-main-btn atf-blog-btn mt-2 pb-4 ml-3">
										<a href="#" class="atf-themes-btn">Read More <i class="fa fa-angle-right atf-blogs-btn"></i></a>
									</div>
								</div>
							</div><!-- .slick-slide-in -->

							<div class="slick-slide-in">
								<div class="atf-post-slide">
									<div class="atf-post-pic">
										<img src="../assets/img/blog/2.jpeg" alt="">
										<ul class="atf-post-category">
											<li><a href="#">29 Dec,</a></li>
											<li><a href="#">2020</a></li>
										</ul>
									</div>
									<div class="atf-post-header">
										<ul class="atf-post-bar">
											<li><i class="fa fa-user"></i><a href="#">Admin</a></li>
											<li><i class="fa fa-comments"></i><a href="">7.5k</a></li>
											<li><i class="fab fa-gratipay"></i><a href="">2.3k</a></li>
										</ul>
										<h4 class="atf-post-title">
											<a href="#">Booking mulai 5 jutaan dikawal sampai terima kunci!</a>
										</h4>
									</div>
									<p class="atf-post-description">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur.
									</p>
									<div class="atf-main-btn atf-blog-btn mt-2 pb-4 ml-3">
										<a href="#" class="atf-themes-btn">Read More <i class="fa fa-angle-right atf-blogs-btn"></i></a>
									</div>
								</div>
							</div><!-- .slick-slide-in -->

							<div class="slick-slide-in">
								<div class="atf-post-slide">
									<div class="atf-post-pic">
										<img src="../assets/img/blog/2.jpeg" alt="">
										<ul class="atf-post-category">
											<li><a href="#">29 Dec,</a></li>
											<li><a href="#">2020</a></li>
										</ul>
									</div>
									<div class="atf-post-header">
										<ul class="atf-post-bar">
											<li><i class="fa fa-user"></i><a href="#">Admin</a></li>
											<li><i class="fa fa-comments"></i><a href="">7.5k</a></li>
											<li><i class="fab fa-gratipay"></i><a href="">2.3k</a></li>
										</ul>
										<h4 class="atf-post-title">
											<a href="#">Booking mulai 5 jutaan dikawal sampai terima kunci!</a>
										</h4>
									</div>
									<p class="atf-post-description">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur.
									</p>
									<div class="atf-main-btn atf-blog-btn mt-2 pb-4 ml-3">
										<a href="#" class="atf-themes-btn">Read More <i class="fa fa-angle-right atf-blogs-btn"></i></a>
									</div>
								</div>
							</div><!-- .slick-slide-in -->

							<div class="slick-slide-in">
								<div class="atf-post-slide">
									<div class="atf-post-pic">
										<img src="../assets/img/blog/2.jpeg" alt="">
										<ul class="atf-post-category">
											<li><a href="#">29 Dec,</a></li>
											<li><a href="#">2020</a></li>
										</ul>
									</div>
									<div class="atf-post-header">
										<ul class="atf-post-bar">
											<li><i class="fa fa-user"></i><a href="#">Admin</a></li>
											<li><i class="fa fa-comments"></i><a href="">7.5k</a></li>
											<li><i class="fab fa-gratipay"></i><a href="">2.3k</a></li>
										</ul>
										<h4 class="atf-post-title">
											<a href="#">Booking mulai 5 jutaan dikawal sampai terima kunci!</a>
										</h4>
									</div>
									<p class="atf-post-description">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur.
									</p>
									<div class="atf-main-btn atf-blog-btn mt-2 pb-4 ml-3">
										<a href="#" class="atf-themes-btn">Read More <i class="fa fa-angle-right atf-blogs-btn"></i></a>
									</div>
								</div>
							</div><!-- .slick-slide-in -->

							<div class="slick-slide-in">
								<div class="atf-post-slide">
									<div class="atf-post-pic">
										<img src="../assets/img/blog/2.jpeg" alt="">
										<ul class="atf-post-category">
											<li><a href="#">29 Dec,</a></li>
											<li><a href="#">2020</a></li>
										</ul>
									</div>
									<div class="atf-post-header">
										<ul class="atf-post-bar">
											<li><i class="fa fa-user"></i><a href="#">Admin</a></li>
											<li><i class="fa fa-comments"></i><a href="">7.5k</a></li>
											<li><i class="fab fa-gratipay"></i><a href="">2.3k</a></li>
										</ul>
										<h4 class="atf-post-title">
											<a href="#">Booking mulai 5 jutaan dikawal sampai terima kunci!</a>
										</h4>
									</div>
									<p class="atf-post-description">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur.
									</p>
									<div class="atf-main-btn atf-blog-btn mt-2 pb-4 ml-3">
										<a href="#" class="atf-themes-btn">Read More <i class="fa fa-angle-right atf-blogs-btn"></i></a>
									</div>
								</div>
							</div><!-- .slick-slide-in -->

							<div class="slick-slide-in">
								<div class="atf-post-slide">
									<div class="atf-post-pic">
										<img src="../assets/img/blog/2.jpeg" alt="">
										<ul class="atf-post-category">
											<li><a href="#">29 Dec,</a></li>
											<li><a href="#">2020</a></li>
										</ul>
									</div>
									<div class="atf-post-header">
										<ul class="atf-post-bar">
											<li><i class="fa fa-user"></i><a href="#">Admin</a></li>
											<li><i class="fa fa-comments"></i><a href="">7.5k</a></li>
											<li><i class="fab fa-gratipay"></i><a href="">2.3k</a></li>
										</ul>
										<h4 class="atf-post-title">
											<a href="#">Booking mulai 5 jutaan dikawal sampai terima kunci!</a>
										</h4>
									</div>
									<p class="atf-post-description">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur.
									</p>
									<div class="atf-main-btn atf-blog-btn mt-2 pb-4 ml-3">
										<a href="#" class="atf-themes-btn">Read More <i class="fa fa-angle-right atf-blogs-btn"></i></a>
									</div>
								</div>
							</div><!-- .slick-slide-in -->

							<div class="slick-slide-in">
								<div class="atf-post-slide">
									<div class="atf-post-pic">
										<img src="../assets/img/blog/2.jpeg" alt="">
										<ul class="atf-post-category">
											<li><a href="#">29 Jan,</a></li>
											<li><a href="#">2020</a></li>
										</ul>
									</div>
									<div class="atf-post-header">
										<ul class="atf-post-bar">
											<li><i class="fa fa-user"></i><a href="#">Admin</a></li>
											<li><i class="fa fa-comments"></i><a href="">7.5k</a></li>
											<li><i class="fab fa-gratipay"></i><a href="">2.3k</a></li>
										</ul>
										<h4 class="atf-post-title">
											<a href="#">Booking mulai 5 jutaan dikawal sampai terima kunci!</a>
										</h4>
									</div>
									<p class="atf-post-description">
									Dibuka dengan harga 300 jutaan rupiah.KPR DP 15 jutaan bisa dicicil 5x
									</p>
									<div class="atf-main-btn atf-blog-btn mt-2 pb-4 ml-3">
										<a href="#" class="atf-themes-btn">Read More <i class="fa fa-angle-right atf-blogs-btn"></i></a>
									</div>
								</div>
							</div><!-- .slick-slide-in -->
						</div><!-- .slick-slide-Wrapper -->
					</div><!-- .slick-container -->

					<div class="pagination atf-style1 atf-flex atf-hidden"></div> <!-- If dont need Pagination then add class .atf-hidden -->
					<div class="swipe-arrow atf-style1">
						<!-- If dont need navigation then add class .atf-hidden -->
						<div class="slick-arrow-left"><i class="fa fa-chevron-left"></i></div>
						<div class="slick-arrow-right"><i class="fa fa-chevron-right"></i></div>
					</div>
				</div><br><!-- .atf-slider -->

				{{-- Teruskan Ke Produk --}}
				<div class="row">
					<div class="atf-main-btn atf-blog-btn col-lg 12 d-flex justify-content-end">
							<a href="/login" class="btn atf-themes-btn">Selengkapnya <i class="fa fa-angle-right atf-blogs-btn"></i></a>

					</div>
				</div>
			</div><br><br><!-- .container -->


			<!-- FOOTER SECTION START-->
			<footer class="atf-footer-area atf-pattern-area">
				<div class="container">
					<div class="atf-footer-top mt-4">
						<div class="row">
							<div class="col-lg-4 col-md-6 col-12" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
								<div class="atf-footer-box">
									<h5><a href=""><img class="atf-footer-logo" src="assets/img/logowhite.png" alt="" /></a></h5><br>
									<ul class="pr-lg-5">
										<li>Jl. Sawo 2 No 5 Patrang, Jember </li>
										<li>+62 812-3124-2823</li>
										<li>pancakaryapro@gmail.com</li>
									</ul>
								</div>
							</div>
							<!--- END COL -->

							<div class="col-lg-2 col-md-6 col-12 atf-footer-link wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
								<a href="/"><i class=""></i>
									<h5>Dashboard</h5>
								</a>
							</div>
							<!--- END COL -->

							<div class="col-lg-2 col-md-6 col-12 atf-footer-link wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
								<a href="/login"><i class=""></i>
									<h5>Perumahan</h5>
								</a>
							</div>
							<!--- END COL -->

							<div class="col-lg-4 col-md-6 col-12 atf-footer-link text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
								<a href="/logint"><i class=""></i>
									<h5>Kontak</h5>
								</a>
								<div class="atf-footer-con">
									<p>Hubungi di beberapa Platform Sosial Media kami</p>
								</div>
								<h4 class="text-white mt-2">Ikuti Kami</h4>
								<div class="atf-footer-social-icon mt-3 text-left">
									<a href="mailto:pancakaryapro@gmail.com" target="_blank" class="icon"> <i class="fas fa-envelope"></i>
										<a href="https://www.facebook.com/panca.k.property" target="_blank" class="icon"> <i class="fab fa-facebook"></i> </a>
										<a href="https://www.instagram.com/thepancakarya/?utm_medium=copy_link" target="_blank" class="icon"> <i class="fab fa-instagram"></i> </a>
								</div>
							</div>
							<!--- END COL -->
						</div>
						<!--- END ROW -->
					</div>
					<!--- END SINGLE FOOTER -->
				</div>
				<!--- END CONTAINER -->

				<div class="atf-footer-boottom mt-4">
					<div class="container">
						<div class="row">
							<div class="my-auto text-lg-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
								<p>&copy;2020 Panca Karya - All Right Reserved.Designed <i class="fa fa-heart ml-1 mr-1"></i> by <a href="#">Theme Family</a> </p>
							</div>
							<!--- END COL -->
						</div>
						<!--- END ROW -->
					</div>
				</div>
				<!-- FOOTER SECTION END-->
			</footer>
			<!--- END FOOTER -->
		</div>
		<!-- Latest jQuery -->
		<script src=" {{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
		<!-- Latest compiled and minified Bootstrap -->
		<script src=" {{ asset('assets/bootstrap/js/bootstrap.js') }}"></script>
		<!-- modernizer JS -->
		<script src=" {{ asset('assets/js/modernizr.custom.js') }}"></script>
		<!-- magnific-popup js -->
		<script src=" {{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
		<!-- stellar js -->
		<script src=" {{ asset('assets/js/jquery.stellar.min.js') }}"></script>
		<!-- slick js -->
		<script src=" {{ asset('assets/js/slick.js') }}"></script>
		<!-- countdown js -->
		<script src=" {{ asset('assets/js/jquery.countdown.js') }}"></script>
		<!-- wow js -->
		<script src=" {{ asset('assets/js/wow.min.js') }}"></script>
		<!-- ajaxchimp js -->
		<script src=" {{ asset('assets/js/ajaxchimp.min.js') }}"></script>
		<!-- form-contact js -->
		<script src=" {{ asset('assets/js/form-contact.js') }}"></script>
		<!-- main js -->
		<script src=" {{ asset('assets/js/main.js') }}"></script>
</body>

</html>
