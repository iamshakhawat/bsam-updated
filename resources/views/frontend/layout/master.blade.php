<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/jquery.nice-number.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />

    <title>@yield('title', 'Bsamcart')</title>
</head>

<body>


    <!--------- Offcanvas area start --------->
    <div class="offcanvas-area">
        <div class="menu-close">
            <i class="far fa-times"></i>
        </div>
        <div class="offcanvas-menu">
            <div class="main-menu">
                <ul class="d-block">
                    @php
                        $cats = DB::table('categories')->where('status', 'active')->get();
                    @endphp
                    @foreach ($cats as $cat)
                        <li><a href="{{ route('product-cat', $cat->slug) }}"><img src="{{ $cat->photo }}"
                                    alt="{{ $cat->slug }}">{{ $cat->title }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="offcanvas-overlay"></div>
    <!--------- Offcanvas area end --------->


    <!--------- Mob area start --------->
    <div class="mob__wrap">
        <ul>
            <li><a href="{{ route('home') }}"><span><i class="fas fa-home"></i></span><span>home</span></a></li>
            <li><a href="javascript:void(0)" class="mob__category"><span><i
                            class="fas fa-th-large"></i></span><span>Categories</span></a></li>
            <li><a href="javascript:void(0)" class="mob__cart"><span><i
                            class="fas fa-cart-plus"></i></span><span>cart</span></a></li>
            <li><a href="#"><span><i class="fas fa-user"></i></span><span>user</span></a></li>
        </ul>
    </div>
    <!--------- Mob area end --------->


    <!--------- Header area start --------->
    <section class="header__area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header__main__blk">
                        <div class="header__left__blk">
                            <div class="header__menu menu-open">
                                <span><i class="far fa-bars"></i></span>
                            </div>
                            <div class="header__logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('assets/img/basic/logo.svg') }}"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="header__search">
                            <div class="header__search__form">
                                <button><i class="far fa-search"></i></button>
                                <input type="text" placeholder="Search products and stores">
                            </div>
                        </div>
                        <div class="header__btn">
                            @auth
                                @if (Auth::user()->role == 'admin')
                                    <a href="{{ route('admin') }}">Dashboard</a>
                                @elseif (Auth::user()->role == 'user')
                                    <a href="{{ route('user') }}">Dashboard</a>
                                @else
                                    <a href="{{ route('delivery.dashboard') }}">Dashboard</a>
                                @endif
                                <a href="{{ route('logout') }}">Logout</a>
                            @else
                                <a href="{{ route('login.form') }}">Log in</a>
                                <a href="{{ route('register.form') }}">Sign up</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------- Header area end --------->


    <!--------- Main area start --------->
    @yield('content')
    <!--------- Main area end --------->


    <!--------- Footer area start --------->
    <section class="footer__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__main__blk">
                        <div class="footer__left__blk">
                            <div class="footer__logo">
                                <span><img src="assets/img/basic/fav-ico.svg" alt="">Get deliveries with
                                    Instacart</span>
                            </div>
                            <div class="footer__app">
                                <a href="#"><i class="fab fa-apple"></i>iOS</a>
                                <a href="#"><i class="fab fa-google-play"></i>Android</a>
                            </div>
                        </div>
                        <div class="footer__right__blk">
                            <div class="footer__single__blk">
                                <h4>Top departments</h4>
                                <ul>
                                    <li><a href="#">Fresh Produce</a></li>
                                    <li><a href="#">Dairy Products</a></li>
                                    <li><a href="#">Meat</a></li>
                                    <li><a href="#">Meat Alternatives</a></li>
                                    <li><a href="#">Seafood</a></li>
                                    <li><a href="#">Pantry Food</a></li>
                                    <li><a href="#">Baked Goods</a></li>
                                    <li><a href="#">View all departments</a></li>
                                    <li><a href="#">Gift Delivery Near Me</a></li>
                                    <li><a href="#">Flower Delivery Near Me</a></li>
                                    <li><a href="#">Asian Groceries</a></li>
                                    <li><a href="#">Business Office Food</a></li>
                                    <li><a href="#">Coffee Shop Supplies</a></li>
                                </ul>
                            </div>
                            <div class="footer__single__blk">
                                <h4>More departments</h4>
                                <ul>
                                    <li><a href="#">Alcohol</a></li>
                                    <li><a href="#">Alcohol by location</a></li>
                                    <li><a href="#">Frozen Food</a></li>
                                    <li><a href="#">Beverages</a></li>
                                    <li><a href="#">Organic Grocery</a></li>
                                    <li><a href="#">Household Essentials</a></li>
                                    <li><a href="#">Office Supplies</a></li>
                                    <li><a href="#">Beauty Products</a></li>
                                    <li><a href="#">Late Night Delivery</a></li>
                                    <li><a href="#">Grocery Pickup Near Me</a></li>
                                    <li><a href="#">Latin Groceries</a></li>
                                    <li><a href="#">Business Office snacks</a></li>
                                </ul>
                            </div>
                            <div class="footer__single__blk">
                                <h4>Instacart programs</h4>
                                <ul>
                                    <li><a href="#">Instacart+</a></li>
                                    <li><a href="#">Instacart Business</a></li>
                                    <li><a href="#">EBT SNAP</a></li>
                                    <li><a href="#">Fresh Funds</a></li>
                                    <li><a href="#">Promos & Coupons</a></li>
                                    <li><a href="#">Gift Cards</a></li>
                                    <li><a href="#">Grocery Budget Calculator</a></li>
                                    <li><a href="#">Instacart Ads</a></li>
                                    <li><a href="#">Instacart Connect</a></li>
                                    <li><a href="#">Cookie Delivery Near Me</a></li>
                                    <li><a href="#">Business Office Supplies</a></li>
                                    <li><a href="#">Home Depot Delivery</a></li>
                                </ul>
                            </div>
                            <div class="footer__single__blk">
                                <h4>Get to know us</h4>
                                <ul>
                                    <li><a href="#">Press</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Ideas & Guides</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Shop By Location</a></li>
                                    <li><a href="#">Beauty Supplies Near Me</a></li>
                                    <li><a href="#">Pet Supplies Near Me</a></li>
                                    <li><a href="#">Convenience Store Near Me</a></li>
                                    <li><a href="#">Cake Delivery Near Me</a></li>
                                    <li><a href="#">Caper Cart</a></li>
                                    <li><a href="#">How Does Instacart Work</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__main__blk">
                        <div class="footer__left__blk">
                            <div class="footer__logo">
                                <span><img src="assets/img/basic/shop-ico.svg" alt="">Become a Shopper</span>
                            </div>
                            <div class="footer__app">
                                <a href="#"><i class="fab fa-apple"></i>iOS</a>
                                <a href="#"><i class="fab fa-google-play"></i>Android</a>
                            </div>
                        </div>
                        <div class="footer__right__blk">
                            <div class="footer__single__blk">
                                <h4>Make money with us</h4>
                                <ul>
                                    <li><a href="#">Shopper Opportunities</a></li>
                                    <li><a href="#">Become a Shopper</a></li>
                                    <li><a href="#">In-Store Employee For Instacart</a></li>
                                    <li><a href="#">Earnings</a></li>
                                </ul>
                            </div>
                            <div class="footer__single__blk">
                                <h4>Top cities</h4>
                                <ul>
                                    <li><a href="#">Los Angeles</a></li>
                                    <li><a href="#">New York City</a></li>
                                    <li><a href="#">Chicago</a></li>
                                    <li><a href="#">Washington D.C.</a></li>
                                    <li><a href="#">San Francisco</a></li>
                                </ul>
                            </div>
                            <div class="footer__single__blk">
                                <h4>More cities</h4>
                                <ul>
                                    <li><a href="#">Miami</a></li>
                                    <li><a href="#">Las Vegas</a></li>
                                    <li><a href="#">Atlanta</a></li>
                                    <li><a href="#">Dallas</a></li>
                                    <li><a href="#">View all Job Locations</a></li>
                                </ul>
                            </div>
                            <div class="footer__single__blk">
                                <h4>Shopper help</h4>
                                <ul>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Safety</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__wrapper">
                        <div class="footer__copyright">
                            <h4>Legal</h4>
                        </div>
                        <div class="footer__privacy">
                            <ul>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <div class="footer__social">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__res">
                        <p>Apple and the Apple logo are trademarks of Apple Inc., registered in the U.S. and other
                            countries.
                            App Store is a service mark of Apple Inc. Android, Google Play and the Google Play logo are
                            trademarks of Google LLC.
                            Terms for Free Delivery (First Order): Offer valid on first order made through Instacart
                            with a
                            minimum basket size as set forth in the offer promotion. Offer expires on the date indicated
                            in the
                            user’s account settings or displayed in the offer promotion. <a href="#">View more
                                details
                                here.</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------- Footer area end --------->




    <!--------- Cart area start --------->
    <div class="cart__wrap">
        <div class="cart__box">
            <div class="cart__item__added">
                <span><i class="fal fa-cart-plus"></i></span>
                <p>2 items</p>
            </div>
            <div class="cart__item__price">
                <span>$245</span>
            </div>
        </div>
        <div class="cart__wrapper">
            <div class="cart__topbar">
                <div class="cart__topbar__items">
                    <span>2 Items</span>
                </div>
                <div class="cart__close">
                    <span class="cart__close__main">close</span>
                </div>
            </div>
            <div class="cart__main__blk">
                <div class="cart__single__blk">
                    <div class="cart__product__increase">
                        <input type="number" value="1">
                    </div>
                    <div class="cart__product__details">
                        <div class="cart__product__img">
                            <img src="assets/img/products/f1.jpg" alt="">
                        </div>
                        <div class="cart__product__info">
                            <h4>Organic Banana</h4>
                            <p>$0.89/lb</p>
                        </div>
                        <div class="product__cart__single__total">
                            <span>$245</span>
                        </div>
                    </div>
                    <div class="cart__product__remove">
                        <span><i class="far fa-times"></i></span>
                    </div>
                </div>
                <div class="cart__single__blk">
                    <div class="cart__product__increase">
                        <input type="number" value="1">
                    </div>
                    <div class="cart__product__details">
                        <div class="cart__product__img">
                            <img src="assets/img/products/f1.jpg" alt="">
                        </div>
                        <div class="cart__product__info">
                            <h4>Organic Banana</h4>
                            <p>$0.89/lb</p>
                        </div>
                        <div class="product__cart__single__total">
                            <span>$245</span>
                        </div>
                    </div>
                    <div class="cart__product__remove">
                        <span><i class="far fa-times"></i></span>
                    </div>
                </div>
                <div class="cart__single__blk">
                    <div class="cart__product__increase">
                        <input type="number" value="1">
                    </div>
                    <div class="cart__product__details">
                        <div class="cart__product__img">
                            <img src="assets/img/products/f1.jpg" alt="">
                        </div>
                        <div class="cart__product__info">
                            <h4>Organic Banana</h4>
                            <p>$0.89/lb</p>
                        </div>
                        <div class="product__cart__single__total">
                            <span>$245</span>
                        </div>
                    </div>
                    <div class="cart__product__remove">
                        <span><i class="far fa-times"></i></span>
                    </div>
                </div>
                <div class="cart__single__blk">
                    <div class="cart__product__increase">
                        <input type="number" value="1">
                    </div>
                    <div class="cart__product__details">
                        <div class="cart__product__img">
                            <img src="assets/img/products/f1.jpg" alt="">
                        </div>
                        <div class="cart__product__info">
                            <h4>Organic Banana</h4>
                            <p>$0.89/lb</p>
                        </div>
                        <div class="product__cart__single__total">
                            <span>$245</span>
                        </div>
                    </div>
                    <div class="cart__product__remove">
                        <span><i class="far fa-times"></i></span>
                    </div>
                </div>
                <div class="cart__single__blk">
                    <div class="cart__product__increase">
                        <input type="number" value="1">
                    </div>
                    <div class="cart__product__details">
                        <div class="cart__product__img">
                            <img src="assets/img/products/f1.jpg" alt="">
                        </div>
                        <div class="cart__product__info">
                            <h4>Organic Banana</h4>
                            <p>$0.89/lb</p>
                        </div>
                        <div class="product__cart__single__total">
                            <span>$245</span>
                        </div>
                    </div>
                    <div class="cart__product__remove">
                        <span><i class="far fa-times"></i></span>
                    </div>
                </div>
            </div>
            <div class="cart__total__order">
                <button><span>place order</span><span>$245</span></button>
            </div>
        </div>
    </div>
    <!--------- Cart area end --------->





    <!-- Optional JavaScript; choose one of the two! -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-number.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
   
    @stack('custom_js')
</body>

</html>
