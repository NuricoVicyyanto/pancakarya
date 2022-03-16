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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--navbar-->
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="/homepage"><img src="{{asset('assetss/img/logo.png')}}" width="130" height="50" class=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link js-scroll-trigger" href="/homepage">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link js-scroll-trigger" href="/informasi">Informasi</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link js-scroll-trigger" href="/dokumentasis">Dokumentasi</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link js-scroll-trigger" href="/produk">Produk</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link js-scroll-trigger" href="/contact">Contact</a>
                </li>
                <li class="nav-item active dropdown">
                    <a class="nav-link" style="color:rgb(252, 252, 252);padding-top:10px;" href="#" data-toggle="dropdown">{{ auth()->user()->name }}<i class="fa fa-user fa-lg"></i></a>
                        <ul class="dropdown-menu settings-menu dropdown-menu-right">
                            <a class="dropdown-item" href="../auth/profile.php"><i class="fa fa-cog fa-lg"></i> Settings</a>
                            <li><a class="dropdown-item" href="../auth/profile.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="../auth/logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                        </ul>
                </li>
            </ul>
            <span class="navbar-text">
                <a href="/" class="btn btn-warning shadow">Log Out</a>
            </span>
          </div>
        </div>
    </div>
      </nav>
    <br><br><br>
<br><br>
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
