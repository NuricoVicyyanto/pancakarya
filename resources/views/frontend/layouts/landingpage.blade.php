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
                                <li><a href="#home" class="atf-smooth-move">Dashboard</a>

                                </li>
                                <li><a href="#keunggulan" class="atf-smooth-move">Belanja</a>

                                </li>
                                <li><a href="#keunggulan" class="atf-smooth-move">Konsultasi</a>

                                </li>
								<li><a href="#keunggulan " class="atf-smooth-move">Kontak</a>

                                </li>
                                {{-- <li class="menu-item-has-children"><a href="#" class="atf-smooth-move">Page<i class="fa fa-chevron-down ml-2"></i></a>
                                    <ul>
                                        <li><a href="contact.html">Contact us</a></li>
                                        <li><a href="error.html">404</a></li>
                                        <li><a href="blog.html">Blog Grid</a></li>
                                    </ul>
                                </li> --}}
                                {{-- <li><a href="https://www.templatemonster.com/website-templates/al-majid-website-template-152091.html?_gl=1*1ley0u6*_ga*NDMyOTM1NTcxLjE2MTAxOTczNjQ.*_ga_FTPYEGT5LY*MTYxMDI4NzgyNS4zLjAuMTYxMDI4NzgzMS41NA..&_ga=2.145900727.2005536284.1610210101-432935571.1610197364">Pro Version</a></li> --}}
                            </ul><!--- END NAV -->
                        </div>
                    </div><!--- END MAIN HEADER RIGHT -->
                </div>
            </div><!--- END CONTAINER -->
        </div><!--- END MAIN HEADER -->
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
													<h2 class="mb-0 d-block d-lg-block">WEBSITE PENJUALAN PROPERTI</h2>
													<h2 class="mb-0 d-block d-lg-block">KABUPATEN JEMBER</h2>
													<p class="pr-lg-2">Mudah, Cepat dan Amanah</p>
													<!-- Main-btn -->
													<div class="atf-main-btn mt-3"> 
														<a href="/login" class="page-scroll atf-themes-btn">Cari Sekarang<i class="fa fa-angle-right"></i></a>
													</div>
												</div><!--- END COL -->
											</div><!--- END ROW -->
										</div><!--- END CONTAINER -->
									</div><!--- END Overlay -->			
								</div><!--- END slide -->			
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
												</div><!--- END COL -->
											</div><!--- END ROW -->
										</div><!--- END CONTAINER -->
									</div><!--- END Overlay -->			
								</div><!--- END slide -->			
							</div><!-- .slick-slide-in -->
							
							<div class="slick-slide-in">						
								<div class="atf-single-home atf-hero-area" style="background-image: url(assets/img/banner/2.jpg);  background-size:cover; background-position: center center;">
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
												</div><!--- END COL -->
											</div><!--- END ROW -->
										</div><!--- END CONTAINER -->
									</div><!--- END Overlay -->			
								</div><!--- END slide -->			
							</div><!-- .slick-slide-in -->
						</div>
					</div><!-- .slick-container -->
					
					<div class="pagination atf-style1 container"></div> <!-- If dont need Pagination then add class .atf-hidden -->
					<div class="swipe-arrow atf-style1 atf-hidden"> <!-- If dont need navigation then add class .atf-hidden -->
						<div class="slick-arrow-left"><i class="fa fa-angle-left"></i></div>
						<div class="slick-arrow-right"><i class="fa fa-angle-right"></i></div>
					</div>
				</div><!-- .atf-slider -->
			</section>
			<!-- END  HOME DESIGN -->
			
			
			
			<!-- Special Offer Area -->
			<div class="atf-special-offer atf-section-padding pb-0">
				<div class="container">
					<div class="row">
						<div class="col-xl-7 col-lg-6 col-12 text-left"> 
							<div class="atf-special-content atf-section-title  mx-auto my-auto">	
								<h4 class="mb-2">Get 30%  Discount </h4>
								<h2>Best Promo Offer For Your</h2>
								<p class="pr-lg-5">Lorem elementum Sed congue nisl dolorSed congue nisl dolor Lorem elementum Sed congue nisl dolorSed eget augue Pellentesque sollicitudin efficitur, mattis dui vitae, sollicitudin nisl. </p>	
								
								<h4 class="mt-5">Expire On</h4>															
								<div id="countdown" class="text-center"></div>	
								<div class="clearfix"></div>
							</div>
							<div class="atf-main-btn mt-5 pb-5 d-lg-block"> 
								<a href="https://www.templatemonster.com/website-templates/al-majid-website-template-152091.html?_gl=1*1ley0u6*_ga*NDMyOTM1NTcxLjE2MTAxOTczNjQ.*_ga_FTPYEGT5LY*MTYxMDI4NzgyNS4zLjAuMTYxMDI4NzgzMS41NA..&_ga=2.145900727.2005536284.1610210101-432935571.1610197364" class="page-scroll atf-themes-btn">Pro Version <i class="fa fa-angle-right"></i></a>
							</div>	
						</div><!--- END COL -->
						
						<div class="col-xl-5 col-lg-6 col-12">
							<div class="atf-special-img text-center  mx-auto my-auto">						
								<div class="atf-single-special-img">
									<img src="assets/img/special.png" width="370" alt="Offer Image" class="img-fluid">
								</div>
							</div>
						</div>	<!--- END COL -->
					</div><!--- END ROW -->
				</div><!--- END CONTAINER -->
			</div> <!-- End Special Offer Area -->
			
			
			
			<!-- START SERVICE SECTION  -->
			<section id="service" class="atf-service-area atf-section-padding">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-6">
							<div class="atf-single-service-wrap text-center">
								<div class="atf-single-service-wrap">
									<div class="atf-services-icon text-center mb-4">
										<i class="fas fa-shipping-fast"></i>
									</div>
									<div class="atf-service-content">
										<h3>Free Shipping</h3>
										<p>Lorem elementum Sed congue nisl dolorSed congue nisl dolor Lorem Sed congue nisl dolorSed.</p>
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
										<h3>24/7 support</h3>
										<p>Lorem elementum Sed congue nisl dolorSed congue nisl dolor Lorem Sed congue nisl dolorSed.</p>
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
										<h3>Secure Payment</h3>
										<p>Lorem elementum Sed congue nisl dolorSed congue nisl dolor Lorem Sed congue nisl dolorSed.</p>
									</div>
								</div>
							</div>   
						</div>
					</div>
				</div>
			</section>
			<!-- Service-Area End-->
			
			
			
			<!-- START COMPANY BRAND LOGO  -->
			<div id="atf-brand-area" class="atf-brand-area atf-section-padding">
				<div class="atf-brand-overlay">
					<div class="container">
						<div class="atf-slider atf-style2">
							<div class="slick-container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"  data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="3" data-md-slides="3" data-lg-slides="5" data-add-slides="3">
								<div class="slick-wrapper">
									<div class="slick-slide-in">
										<div class="atf-brand-active">
											<a href="#"><img src="assets/img/partner/1.png" alt="image"></a>
										</div>
									</div><!-- .slick-slide-in -->
									
									<div class="slick-slide-in">
										<div class="atf-brand-active">
											<a href="#"><img src="assets/img/partner/2.png" alt="image"></a>
										</div>
									</div><!-- .slick-slide-in -->
									
									<div class="slick-slide-in">
										<div class="atf-brand-active">
											<a href="#"><img src="assets/img/partner/3.png" alt="image"></a>
										</div>
									</div><!-- .slick-slide-in -->
									<div class="slick-slide-in">
										<div class="atf-brand-active">
											<a href="#"><img src="assets/img/partner/4.png" alt="image"></a>
										</div>
									</div><!-- .slick-slide-in -->
									<div class="slick-slide-in">
										<div class="atf-brand-active">
											<a href="#"><img src="assets/img/partner/5.png" alt="image"></a>
										</div>
									</div><!-- .slick-slide-in -->
									
									<div class="slick-slide-in">
										<div class="atf-brand-active">
											<a href="#"><img src="assets/img/partner/1.png" alt="image"></a>
										</div>
									</div><!-- .slick-slide-in -->
									
									<div class="slick-slide-in">
										<div class="atf-brand-active">
											<a href="#"><img src="assets/img/partner/2.png" alt="image"></a>
										</div>
									</div><!-- .slick-slide-in -->
									
								</div><!-- .slick-slide-Wrapper -->
							</div><!-- .slick-container -->
							
							<div class="pagination atf-style1 atf-flex atf-hidden"></div> <!-- If dont need Pagination then add class .atf-hidden -->
							<div class="swipe-arrow atf-style1"> <!-- If dont need navigation then add class .atf-hidden -->
								<div class="slick-arrow-left"><i class="fa fa-chevron-left"></i></div>
								<div class="slick-arrow-right"><i class="fa fa-chevron-right"></i></div>
							</div>
						</div><!-- .atf-slider -->
					</div><!-- .container -->	
				</div><!-- END OVERLAY -->
			</div>
			<!-- END COMPANY BRAND LOGO -->
			
			
			
			
		   
		   
		   <!-- START NEWSLETTER -->
			{{-- <section  class="atf-newsletter atf-section-padding">
				<div class="container">
					<div class="row clearfix justify-content-center">
						<div class="col-xl-6 col-lg-6 col-12 text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
							<div class="atf-mailchamp-headding">
								<h2>Subcribe Today of Newletter</h2>
							</div>
						</div><!-- END COL -->
						
						<div class="col-xl-6 col-lg-6 col-12 text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">	
							<div class="atf-mailchamp-subscribe">
								<form class="form-group" id="mc-form">
									<input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required="required">
									<button type="submit" id="subscribe-button" class="btn"><i class="fas fa-envelope"></i></button>
										<!-- SUBSCRIPTION SUCCESSFUL OR ERROR MESSAGES -->
										<br>
										<label class="atf-subscription-label" for="email"></label>
								</form>
							</div>
						</div><!-- END COL -->
					</div><!-- END ROW -->
				</div><!-- END CONTAINER -->
			</section> --}}
			<!-- END NEWSLETTER -->
			
			
			
			<!-- FOOTER SECTION START-->
			<footer class="atf-footer-area atf-pattern-area">
				<div class="container">
					<div class="atf-footer-top mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-6 col-12 atf-footer-link wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
								<div class="atf-footer-box">
									<h5><a href=""><img class="atf-footer-logo" src="assets/img/logo.png" alt="" /></a></h5>
									<ul class="pr-lg-5">
										<li>1 Grafton Street, Dublin, Ireland</li>
										<li>(+222) 245 88 <br> (+258) 878 369</li>
										<li>example@gmail.com</li>
									</ul>
								</div>
							</div><!--- END COL -->
							
							<div class="col-lg-2 col-md-6 col-12 atf-footer-link wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
								<h5>Quick Links</h5>
								<ul class="atf-list-menu">
									<li> <a href="#"><i class="fas fa-angle-right mr-2"></i>Get Stared</a></li>
									<li> <a href="#"><i class="fas fa-angle-right mr-2"></i>Our Team</a></li>
									<li> <a href="#"><i class="fas fa-angle-right mr-2"></i>About Us</a></li>
									<li> <a href="#"><i class="fas fa-angle-right mr-2"></i>Need Helps</a></li>
									<li> <a href="#"><i class="fas fa-angle-right mr-2"></i>Contact Us</a></li>
								</ul>
							</div><!--- END COL -->
							
							<div class="col-lg-2 col-md-6 col-12 atf-footer-link wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
								<h5>Support Links</h5>
								<ul class="atf-list-menu">
									<li><a href="#"><i class="fas fa-angle-right mr-2"></i>Our Terms</a></li>
									<li><a href="#"><i class="fas fa-angle-right mr-2"></i>Our Service</a></li>
									<li><a href="#"><i class="fas fa-angle-right mr-2"></i>Privacy Policy</a></li>
									<li><a href="#"><i class="fas fa-angle-right mr-2"></i>Licenses</a></li>
									<li><a href="#"><i class="fas fa-angle-right mr-2"></i>Our News</a></li>
								</ul>
							</div><!--- END COL -->
							
							<div class="col-lg-4 col-md-6 col-12 atf-footer-link text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
								<h5>Contact Us</h5>
								<div class="atf-footer-con">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Maecenas gravida nulla.</p>
								</div>
								<h4 class="text-white mt-2">Follow Us</h4>
								<div class="atf-footer-social-icon mt-3 text-left">
									<a href="#" class="icon"> <i class="fab fa-facebook"></i> </a>
									<a href="#" class="icon"> <i class="fab fa-dribbble"></i> </a>
									<a href="#" class="icon"> <i class="fab fa-behance"></i> </a>
									<a href="#" class="icon"> <i class="fab fa-linkedin"></i> </a>
									<a href="#" class="icon"> <i class="fab fa-twitter"></i> </a>
								</div>
							</div><!--- END COL -->
						</div><!--- END ROW -->
					</div><!--- END SINGLE FOOTER -->
				</div><!--- END CONTAINER -->
					
				<div class="atf-footer-boottom mt-4">
					<div class="container">
						<div class="row">
							<div class="col-lg-5 col-xl-5 col-12 my-auto text-lg-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
								<p>&copy;Copyright - All Right Reserved.Designed <i class="fa fa-heart ml-1 mr-1"></i> by <a href="#">Theme Family</a> </p>
							</div><!--- END COL -->
							
							 <div class="col-lg-7 col-xl-7 col-12">
								{{-- <div class="atf-payment-area text-lg-right my-auto mx-auto">
									<ul>
										<li><a href="#"><img src="assets/img/payment/1.png" alt="img"></a></li>
										<li><a href="#"><img src="assets/img/payment/2.png" alt="img"></a></li>
										<li><a href="#"><img src="assets/img/payment/3.png" alt="img"></a></li>
										<li><a href="#"><img src="assets/img/payment/1.png" alt="img"></a></li>
										<li><a href="#"><img src="assets/img/payment/2.png" alt="img"></a></li>
										<li><a href="#"><img src="assets/img/payment/3.png" alt="img"></a></li>
									</ul>
								</div> --}}
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