@extends('frontend.layout.master')
@section('title','Login')
@section('content')
<main class="main overflow-hidden">

    <!--------- Login area start --------->
    <section class="login__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="login__wrap">
                        <div class="login__title">
                            <h2>Log in</h2>
                        </div>
                        <div class="login__auto">
                            <a href="#"><img src="{{ asset('assets/img/basic/google.svg') }}" alt="">Continue with Google</a>
                            <a href="#"><img src="{{ asset('assets/img/basic/facebook.svg') }}" alt="">Continue with Facebook</a>
                            <a href="#"><img src="{{ asset('assets/img/basic/phone.svg') }}" alt="">Continue with Phone</a>
                        </div>
                        <div class="login__others">
                            <span></span>
                            <p>or</p>
                            <span></span>
                        </div>
                        @if(Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                               <small> {{ Session::get('error') }}</small>
                            </div>
                        @endif
                        <div class="login__form__wrap">
                            <form action="{{ route('login.submit') }}" method="POST">
                                @csrf
                                <div class="login__form__main">
                                    <input type="email" name="email" placeholder="Email">
                                    <input type="password" placeholder="Password" name="password">
                                    <p>Forgot password? <a href="">Reset it</a></p>
                                    <button type="submit">Log in</button>
                                </div>
                            </form>
                        </div>
                        <div class="login__account__create">
                            <h4>Don’t have an account?</h4>
                            <a href="{{ route('register.form') }}">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------- Login area end --------->

</main>
@endsection