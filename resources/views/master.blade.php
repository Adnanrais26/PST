<!doctype html>
<html lang="en">
<head>
<title>
    PT. Panca Solusi Teknologi
</title>
<link rel="icon" href="{{ asset('/images/favicon.png') }}" type="image/png">
<meta charset="UTF-8">
<meta name="description" content="Berlin Portfolio Template">
<meta name="keywords" content="personal, portfolio">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Stylesheets -->
<link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}"/>
<link rel="stylesheet" href="{{ asset('/css/reset.css') }}"/>
<link rel="stylesheet" href="{{ asset('/css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/animate.css') }}"/>
<link rel="stylesheet" href="{{ asset('/css/owl.carousel.css') }}"/> 
<link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}"/> 
    
<!-- Google Web fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">


<!-- Font icons -->
<link rel="stylesheet" href="icon-fonts/font-awesome-4.5.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="icon-fonts/essential-regular-fonts/essential-icons.css"/>

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="diag">
    
    <!-- LOADER -->
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
        
        <nav>
            <div class="row">
                <div class="container">
                    <div class="col-md-6">
                        <div class="logo">
                            <img src="images/logo.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="responsive"><i data-icon="m" class="icon"></i></div>
                        <ul class="nav-menu">
                            <li><a href="#home" class="smoothScroll">Home</a></li>
                            <li><a href="#about" class="smoothScroll">About</a></li>
                            <li><a href="#our_services" class="smoothScroll">Our Services</a></li>
                            <li><a href="#mitra" class="smoothScroll">Partner</a></li>
                            {{-- <li><a href="#portfolio" class="smoothScroll">Portfolio</a></li> --}}
                            {{-- <li><a href="#blog" class="smoothScroll">Blog</a></li> --}}
                            {{-- <li><a href="#visimisi" class="smoothScroll">Vision & Mission</a></li> --}}
                            <li><a href="#contact" class="smoothScroll">Contact Us</a></li>
                            <li><a href="{{ asset('/login') }}" class="smoothScroll">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

<!-- bagian judul halaman blog -->
<h3> @yield('judul_halaman') </h3>
 
 
<!-- bagian konten blog -->
@yield('konten')

<br>
<br>
<br>

<footer>
    <div class="container">
        <div class="social">
            <a href="#">facebook </a>
            <a href="#">twitter </a>
            <a href="#">instagram </a>
            <a href="#">google plus </a>
            <a href="#">behance </a>
            <a href="#">dribbble  </a>
        </div>
        <p>Copyright © 2018 Berlin, All rights Reserved. <br/>
Created by tavonline</p>
    </div>
</footer>

<!-- Javascripts -->
<script src="{{ asset('/js/jquery-2.1.4.min.js') }}"></script><!-- jQuery library -->
<script src="{{ asset('/js/smoothscroll.js') }}"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('/js/wow.min.js') }}"></script>
<script src="{{ asset('/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('/js/typed.js') }}"></script>
<script src="{{ asset('/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/js/main.js') }}"></script>

</body>
</html>
