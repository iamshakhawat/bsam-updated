@extends('delivery.layout.main')
@section('title', 'Register')
@section('content')


    <section class="contain">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 p-5 des-box">
                    <div class="logo mt-4">
                        <img src="images/logo-dark.png" alt="">
                    </div>
                    <h2 class=" text-light mt-4">Driver Partner</h2>
                    <p class=" text-light mt-4">In just a few easy steps, you'll be cruising towards making extra
                        money. It's a flexible opportunity that you can customize to fit your
                        lifestyle.
                    </p>
                </div>
                <div class="col-sm-8 rounded-3">
                    <div class="bg">
                        <div class="container">
                            <div class="signup-form">
                                @if (Session::has('error'))
                                    <div class="alert alert-success" role="alert">
                                        <strong>{{ Session::get('error') }}</strong>
                                    </div>
                                @endif
                                <form action="{{ route('delivery.registerPost') }}" method="post">
                                    @csrf
                                    <h2 class="sign-form-head text-capitalize text-center">Creating Account!</h2>
                                    <div class="form-logo d-flex justify-content-center  mt-4"><img src="images/logo.png"
                                            alt=""></div>
                                    <p class="sign-form-head text-capitalize text-center mt-4">Join us and Let's get started
                                    </p>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name"
                                            placeholder="First Name" required="required">
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                            required="required">
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" 
                                        name="phone" id="phone" placeholder="Phone Number"
                                            required="required" />
                                            @error('phone')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address"
                                            placeholder="Full address" required="required">
                                            @error('address')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password"
                                            required="required">
                                            @error('password')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="confirm_password"
                                            placeholder="Confirm Password" required="required">
                                            @error('confirm_password')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-check-label text-uppercase "><input checked type="checkbox"
                                                class="ck" id="checkbox" required="required"> I have read an agreed to
                                            the terms and conditions.</label>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn text-capitalize regi-btn">Signup</button>
                                        <span
                                            class="regi-lbl">Already have an account? <a class="text-decoration-none"
                                                href="{{ route('delivery.login') }}">Sign in</a>
                                        </span>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- bootom -->
    <section class="bottom">
        <img class=" img-fluid mt-5" src="images/botompic.png" width="100%" alt="">

    </section>
    @push('css')
        <link rel="stylesheet" href="css/create_new_account.css">
    @endpush
@endsection
