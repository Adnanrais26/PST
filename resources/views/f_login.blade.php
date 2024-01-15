<!-- Menghubungkan dengan view template master -->
{{-- @extends('master') --}}

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
{{-- @section('judul_halaman', 'Halaman Home') --}}

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
<!doctype html>
<html lang="en">

<head>
    <title>
        {{-- <img src="images/logo.png" alt=""> --}}
        PT. Panca Solusi Teknologi
    </title>
    <link rel="icon" href="{{ asset('/images/favicon.png') }}" type="image/png">

    {{-- <img src="images/logo.png" alt=""> --}}
    <meta charset="UTF-8">
    <meta name="description" content="Berlin Portfolio Template">
    <meta name="keywords" content="personal, portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}" />

    <!-- Google Web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">


    <!-- Font icons -->
    <link rel="stylesheet" href="icon-fonts/font-awesome-4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="icon-fonts/essential-regular-fonts/essential-icons.css" />

    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="diag">

    <!-- LOADER -->
    {{-- <div class="loader-wrapper">
        <div class="loader"></div>
    </div> --}}

    {{-- @section('konten') --}}
    <!--ABOUT-->
    <section class="about dgray-bg" id="about">
        <div class="about type-1 padbot_120">
            <div class="container">
                <!-- about image -->
                {{-- <div class="col-md-4 col-sm-12 top_30 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="row">
                        <img src="images/login.png" alt="">
                    </div>
                </div> --}}

                <a href="#" class="col-md-6 col-sm-12 wow fadeInUp"
                        data-wow-delay="0.6s">
                        <figure>
                            <img src="images/login.png" alt="" width="100%">
                        </figure>
                    </a>

                <!-- about text -->
                <div class="col-md-6 col-sm-12 wow fadeInUp top_90" data-wow-delay="0.6s">
                    <div class="section-title dleft bottom_30">
                        <br>
                        <h1 style="text-align: center">Login</h1>
                    </div>
                    <form action="{{ asset('/dashboard') }}">
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email"
                                aria-describedby="emailHelp" placeholder="email">
                        </div>
                        <div class="mb-3 top_30">
                            <input type="password" class="form-control" name="password" placeholder="password">
                        </div>
                        <div class="col-md-12 text-center top_30">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                    </form>



                </div>
                <svg class="diagonal-gray" width="100%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
                    <path d="M0 0 L70 100 L100 0 Z"></path>
                </svg>
            </div>
    </section>

    {{-- @endsection --}}
    {{-- @section('konten')
<a>adnan</a>
@endsection --}}


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
