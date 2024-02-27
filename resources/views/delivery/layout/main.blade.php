<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('delivery/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('delivery/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('delivery/css/icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('delivery/css/font.css') }}">
    <!-- Animated css aos on scrol -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- image Slider -->
    <!--  CSS -->
    <link rel="stylesheet" href="{{ asset('delivery/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('delivery/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('delivery/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('delivery/css/login.css') }}">
    @stack('css')

    <title>@yield('title')</title>


</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('delivery.home') }}"><img src="{{asset('delivery/images/logo.png')}}" height="38" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('delivery.home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('delivery.faq') }}">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('delivery.invite') }}">Invite Friends</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('delivery.aboutus') }}">About Us</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" type="button" href="{{ route('delivery.dashboard') }}"><i
                                    class="fa-regular fa-circle-user"></i> Dashboard</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('delivery.register') }}">Apply Now</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" type="button" href="{{ route('delivery.login') }}"><i
                                    class="fa-regular fa-circle-user"></i> Login</a>
                        </li>
                        @endauth
                    </ul>

                </div>
            </div>
        </nav>
    </header>


    @yield('content')

    <!-- footer -->
    <footer class="footer w-100 py-2 mt-2">
        <div class="container-fluid  ">
            <div>
                <img class=" img-fluid f-logo " src="{{asset('delivery/Images/logo.png')}}" alt="">
            </div>
            <div class="row row-cols-lg-4 row-cols-md-4 row-cols-sm-4 row-cols-xl-4 row-cols-2  d-flex justify-content-between ">
                <div class="col mt-2">
                    <ul>
                        <li> <a href="{{ route('delivery.aboutus') }}">About us</a></li>
                        <li> <a href="#">Blogs</a></li>
                        <li> <a href="#">Privacy policy</a></li>
                        <li> <a href="#">Terms</a></li>
                    </ul>
                </div>
                <div class="col mt-2 ">
                    <ul>
                        <li> <a href="#">View all stories</a></li>
                        <li> <a href="#">View all countries</a></li>
                        <li> <a href="#">View all cities</a></li>
                        <li> <a href="#">Restaurant near me</a></li>
                    </ul>
                </div>
                <div class="col d-flex justify-content-between mt-2 ">
                    <ul>
                        <li> <a href="#">Join as merchant</a></li>
                        <li> <a href="#">Join as deliveryman</a></li>
                        <li> <a href="#">Get Help</a></li>
                        <li> <a href="#">Buy a gift card</a></li>
                    </ul>
                </div>
                <div class="col d-flex justify-content-end mt-2">
                    <ul>
                        <li> <a href="#">Follow Us</a> </li>
                        <li class="f-icon"><a href=""> <i class="fab fa-instagram"></i></a> <a href=""><i
                                    class="fab fa-facebook"></i></a><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li> <a href="#">Download the app</a></li>
                        <li class="f-img"> <a class=" img-fluid " href="#"><img src="Images/plystore.png" alt=""></a><a
                                class=" img-fluid " href="#"><img src="Images/apple.png" alt=""></a><a
                                class=" img-fluid " href="#"><img src="Images/shopstore.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('delivery/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('delivery/js/jquery-3.6.0.js') }}"></script>
    <!-- Images slider -->


</body>

</html>