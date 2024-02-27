@extends('delivery.layout.main')
@section('title', 'Login')
@section('content')

    <!-- new account section -->

    <section class="login mb-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-8">
                    <div class="bg">
                        <div class="container">
                            <div id="app p-5 ">
                                <div class="container ">
                                    <div class="position-relative">
                                        <div class="card px-5 py-2 text-center">
                                            <div class=" mt-2 d-flex justify-content-center align-items-center">
                                                <img class="top-head-logo " src="images/logo.png" alt="">
                                            </div>
                                            <div
                                                class="row  row-cols-5 row-cols-sm-5 row-cols-md-5 row-cols-lg-5 row-cols-xl-5 mx-auto mt-3 ">
                                                <div class="col"> <i class="fab fa-twitter"></i> </div>
                                                <div class="col"> <i class="fab fa-facebook"></i> </div>
                                                <div class="col"> <i class="fab fa-google"></i> </div>
                                                <div class="col"> <i class="fab fa-linkedin"></i> </div>
                                                <div class="col"> <i class="fab fa-apple"></i> </div>
                                            </div>
                                            <form class="myform mt-4 form-horizontal" method="POST"
                                                action="{{ route('delivery.loginPost') }}">
                                                @csrf
                                                @if (Session::has('error'))
                                                    <div class="alert alert-danger text-black-50" role="alert">
                                                        {{ Session::get('error') }}
                                                        <p class="mb-0"></p>
                                                    </div>
                                                @endif
                                                <div class="form-group">
                                                    <span class="input-icon"><i class="fa fa-envelope"></i></span>
                                                    <input class="form-control @error('email') is-invalid @enderror"
                                                        type="email" name="email" placeholder="Email / Phone">
                                                    @error('email')
                                                        <p class="invalid-feedback">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <span class="input-icon"><i class="fa fa-lock"></i></span>
                                                    <input class="form-control @error('password') is-invalid @enderror"
                                                        name="password" type="password" placeholder="Password">
                                                    @error('password')
                                                        <p class="invalid-feedback">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <a class=" text-decoration-none text-dark float-end" href="#"
                                                    style="color: #FE6B01 !important ;">Forgot Password?</a>
                                                <button type="submit"
                                                    class="btn btn-block btn-primary btn-lg mt-2">Login</button>

                                            </form>

                                            <p class=" text-black text-uppercase mt-3">Not Registered yet<a
                                                    class="text-dark float-center" href="{{ route('delivery.register') }}"
                                                    style="color:#FE6B01 !important;"> Create an Account</a></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">

                </div>
            </div>
        </div>
    </section>


@endsection
