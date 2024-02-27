@extends('delivery.layout.main')
@section('title','Homepage')
@section('content')

    <!-- Banner Section with icon box-->
    <section class="banner bg-warning">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8 text-end ">
                    <h2 class="banner-head ">Become Our Delivery Partner</h2>
                    <p class="banner-text">Join as a Delivery partner and be Be Your Own Boss</p>
                </div>
            </div>
        </div>

    </section>

    <!-- setup information -->
    <section class="second-sec d-flex" style="background:#FE6B01;">
        <!-- Delivery Service -->
        <div class="container p-md-5 py-sm-1 px-sm-5">
            <div class="row homesercard">
                <div class=" pu-form ">
                    <div class="partner-us">
                        <h2 class="pu-title">Partner with us</h2>
                        <form class="row gx-3 gy-2 align-items-center px-3">
                            <div class="col-sm-3 ">
                                <select class="form-select pu-select" id="specificSizeSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select class="form-select pu-select" id="specificSizeSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select class="form-select pu-select" id="specificSizeSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn form-control pu-jon pu-select">join</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- card section Benefits to work with Us -->
    <section class="b-wrkwu pt-5">
        <div class="container">
            <h2 class="benefite-head">Benefits to <br> work with Us</h2>
            <div class=" row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 row-cols-xl-4 mt-5">
                <div class="col">
                    <div class="s1 justify-content-center text-center ">
                        <div class="benefite-img"> <img src="Images/icon1.png" alt=""></div>
                        <h4 class="benefite-title mt-3">No Service Fee</h4>
                        <p class="benefite-text text-uppercase  mt-2">You can know the destination before
                            the accepting the trip and you can
                            work in your time.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="s1 justify-content-center text-center ">
                        <div class="benefite-img"> <img src="Images/icon1.png" alt=""></div>
                        <h4 class="benefite-title mt-3 ">No Service Fee</h4>
                        <p class="benefite-text text-uppercase mt-2">You can know the destination before
                            the accepting the trip and you can
                            work in your time.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="s1 justify-content-center text-center ">
                        <div class="benefite-img"> <img src="Images/icon1.png" alt=""></div>
                        <h4 class="benefite-title mt-3">No Service Fee</h4>
                        <p class="benefite-text text-uppercase mt-2">You can know the destination before
                            the accepting the trip and you can
                            work in your time.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="s1 justify-content-center text-center">
                        <div class="benefite-img"> <img src="Images/icon1.png" alt=""></div>
                        <h4 class="benefite-title mt-3">No Service Fee</h4>
                        <p class="benefite-text text-uppercase mt-2">You can know the destination before
                            the accepting the trip and you can
                            work in your time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- any Query? -->
    <section class="any-query">
        <div class="container mt-5">
            <div class="row  py-5">
                <div class="col-md-6 text-light">
                    <h2 class="mt-4 any-query-head ">Have you any Query?</h2>
                    <h2 class="mt-3 any-query-title">FAQ</h2>
                    <a class="btn btn-light rounded-pill px-3 mt-3 any-query-btn" href="">GET STARTED <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
                <div class="col-md-6">
                    <div class="container img-slider">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                              <li  data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
                              <li  data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></li>
                              <li  data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></li>
                            </ol>
                            <!-- Carousel indicators -->

                            <div class="carousel-inner">
                              <div class="carousel-item active" data-bs-interval="10000">
                                <img src="Images/IMG1SHORT.png" class="img-fluid" alt="...">
                              </div>
                              <div class="carousel-item" data-bs-interval="2000">
                                <img src="Images/IMG1SHORT.png" class=" img-fluid " alt="...">
                    
                              </div>
                              <div class="carousel-item">
                                <img src="Images/IMG1SHORT.png" class="img-fluid " alt="...">
                              
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Google map -->
    <section class="map mb-5">
        <div class="container text-center mt-5">
            <h2 class="map-head">Operating in 5 Countries Around the World</h2>
            <img class=" img-fluid mt-5" src="images/map.png" alt="">
        </div>
        
    </section>

@endsection