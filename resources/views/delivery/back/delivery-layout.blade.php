<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ Auth::user()->name }} </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/delivery/admin/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('/delivery/admin/vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/delivery/admin/vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('/delivery/admin/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/delivery/admin/css/style.css') }}" rel="stylesheet">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ route('delivery.dashboard') }}" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('/delivery/admin/images/logo.png') }}" alt="">
                <img class="logo-compact" src="{{ asset('/delivery/admin/images/logo-text.png') }}" alt="">
                <img class="brand-title" src="{{ asset('/delivery/admin/images/logo-text.png') }}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search"
                                            aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>

                                    @if (count(Auth::user()->unreadNotifications) > 0)
                                        <div class="pulse-css"></div>
                                    @endif

                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">

                                        @foreach (Auth::user()->unreadNotifications as $notification)
                                            <li class="media dropdown-item">
                                                <span class="success"><i class="ti-shopping-cart"></i></span>
                                                <div class="media-body">
                                                    <a href="{{ $notification->data['actionURL'] }}">
                                                        <p>{{ $notification->data['title'] }}
                                                        </p>
                                                    </a>
                                                </div>
                                                <span
                                                    class="notify-time">{{ $notification->created_at->format('F d, h:i A') }}</span>
                                            </li>
                                            @if ($loop->index + 1 == 5)
                                                @php
                                                    break;
                                                @endphp
                                            @endif
                                        @endforeach


                                    </ul>
                                    <a class="all-notification" href="{{ route('delivery.notifications') }}">See all
                                        notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ route('delivery.profile') }}" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="{{ route('delivery.changepassword') }}" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Change Password </span>
                                    </a>
                                    <a href="{{ route('delivery.logout') }}" class="dropdown-item">
                                        <i class=" icon-close"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li>
                    <li> <a href="{{ route('delivery.dashboard') }}"><i class="icon icon-app-store"></i>
                            Dashboard</a></li>
                    </li>
                    <li> <a href="{{ route('delivery.request') }}"><i class="icon icon-cart-simple"></i>
                            Delivery Request</a></li>
                    </li>

                    <li class="nav-label">{{ Auth::user()->name }}</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-copy-06"></i><span class="nav-text">User Profile</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('delivery.profile') }}">Profile</a></li>
                            <li><a href="{{ route('delivery.changepassword') }}">Change Password</a></li>
                            <li><a href="{{ route('delivery.logout') }}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">

                @yield('content')

            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © 2024</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('/delivery/admin/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('/delivery/admin/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('/delivery/admin/js/custom.min.js') }}"></script>


    <!-- Vectormap -->
    <script src="{{ asset('/delivery/admin/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('/delivery/admin/vendor/morris/morris.min.js') }}"></script>


    <script src="{{ asset('/delivery/admin/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('/delivery/admin/vendor/chart.js/Chart.bundle.min.js') }}"></script>

    <script src="{{ asset('/delivery/admin/vendor/gaugeJS/dist/gauge.min.js') }}"></script>

    <!--  flot-chart js -->
    <script src="{{ asset('/delivery/admin/vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('/delivery/admin/vendor/flot/jquery.flot.resize.js') }}"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('/delivery/admin/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

    <!-- Counter Up -->
    <script src="{{ asset('/delivery/admin/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('/delivery/admin/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('/delivery/admin/vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>


    <script src="{{ asset('/delivery/admin/js/dashboard/dashboard-1.js') }}"></script>

</body>

</html>
