<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/boorap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css.css')}}">
    <title>Si PEKA</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--navbar-->
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://chat.whatsapp.com/Kb1NTOu8YlNJRbVjuu7fvb" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>

        <div class="footer">
            <div class="container">
                <footer class="page-footer font-small blue pt-4">
                    <div class="container-fluid text-center text-md-left">
                        <div class="row">
                            <div class="col-md-6 mt-md-0 mt-3">
                                <!-- Content -->
                                <h5 class="text-uppercase">Si PEKA</h5>
                                <p>Si-PEKA adalah Sebuah website pertanian yang menyediakan informasi seputar
                                    pertanian dan menyediakan produk pertanian.</p>
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
        </div>



</body>

</html>
