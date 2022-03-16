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
                    </div><!--- END COL -->
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


        <div class="atf-main-header">
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
                                <li><a href="/produk" class="atf-smooth-move">Perumahan</a>

                                </li>
                                <li><a href="#" class="atf-smooth-move">Konsultasi</a>

                                </li>
								<li><a href="/contact" class="atf-smooth-move">Kontak</a>

                                </li>
                            </ul><!--- END NAV -->
                        </div>
                    </div><!--- END MAIN HEADER RIGHT -->
                </div>
            </div><!--- END CONTAINER -->
        </div><!--- END MAIN HEADER -->
    </header>
    <!-- End Header Section -->
    
    <div class="atf-content clearfix">
        <div class="atf-page-heading atf-size-md atf-dynamic-bg" data-stellar-background-ratio="0.3" style="background-image: url(../assets/img/blog/3.jpg); background-size:cover; background-position: center center;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-md-6 col-12">
                        <div class="atf-page-heading-in text-center">
                            <h1 class="atf-page-heading-title">Blog Grid Ful Width</h1>
                            <div class="atf-post-label">
                                <span><a href="index1.html">Home</a></span>
                                {{-- <span>Blog</span> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><!-- .atf-page-heading -->

    @yield('content')


			<!-- FOOTER SECTION START-->
			<footer class="atf-footer-area atf-pattern-area">
				<div class="container">
					<div class="atf-footer-top mt-4">
						<div class="row">
							<div class="col-lg-4 col-md-6 col-12" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
								<div class="atf-footer-box">
									<h5><a href=""><img class="atf-footer-logo" src="assets/img/logowhite.png" alt="" /></a></h5><br>
									<ul class="pr-lg-5">
										<li>Jl. Melon II Blok C - 2</li>
										<li>+62 812-3124-2823</li>
										<li>pancakaryapro@gmail.com</li>
									</ul>
								</div>
							</div><!--- END COL -->
							
							<div class="col-lg-2 col-md-6 col-12 atf-footer-link wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
								<a href="#"><i class=""></i><h5>Dashboard</h5></a>
							</div><!--- END COL -->
							
							<div class="col-lg-2 col-md-6 col-12 atf-footer-link wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
								<a href="#"><i class=""></i><h5>Perumahan</h5></a>
							</div><!--- END COL -->
							
							<div class="col-lg-4 col-md-6 col-12 atf-footer-link text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
								<a href="#"><i class=""></i><h5>Kontak</h5></a>
								<div class="atf-footer-con">
									<p>Hubungi di beberapa Platform Sosial Media kami</p>
								</div>
								<h4 class="text-white mt-2">Ikuti Kami</h4>
								<div class="atf-footer-social-icon mt-3 text-left">
									<a href="mailto:pancakaryapro@gmail.com" target="_blank" class="icon"> <i class="fas fa-envelope"></i>
									<a href="https://www.facebook.com/panca.k.property" target="_blank" class="icon"> <i class="fab fa-facebook"></i> </a>
									<a href="https://www.instagram.com/thepancakarya/?utm_medium=copy_link" target="_blank" class="icon"> <i class="fab fa-instagram"></i> </a>
								</div>
							</div><!--- END COL -->
						</div><!--- END ROW -->
					</div><!--- END SINGLE FOOTER -->
				</div><!--- END CONTAINER -->
					
				<div class="atf-footer-boottom mt-4">
					<div class="container">
						<div class="row">
							<div class="my-auto text-lg-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
								<p>&copy;2020 Panca Karya  - All Right Reserved.Designed <i class="fa fa-heart ml-1 mr-1"></i> by <a href="#">Theme Family</a> </p>
							</div><!--- END COL -->
						</div><!--- END ROW -->
					</div>
				</div>
				<!-- FOOTER SECTION END-->	
			</footer><!--- END FOOTER -->
		</div>
		<!-- PAGE WRAPPER END-->





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
