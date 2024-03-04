@extends('frontend.layout.master')
@section('title', 'SignUp')
@section('content')
    <main class="main overflow-hidden">

        <!--------- Login area start --------->
        <section class="login__area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="login__wrap">
                            <div class="login__title">
                                <h2>Sign up</h2>
                            </div>

                            <div id="result">
                                <div class="alert d-none" role="alert">
                                  <ul class="m-0">

                                  </ul>
                                </div>
                            </div>
                            <div class="login__form__wrap">
                                <form id="signupform">
                                    @csrf
                                    <div class="login__form__main">
                                        <input  name="name" type="text" placeholder="Name">
                                        <input  name="email" type="email" placeholder="Email">
                                        <input  name="password" type="password" placeholder="Password">
                                        <button type="submit">Sign up</button>
                                    </div>
                                </form>
                            </div>
                            <div class="login__others">
                                <span></span>
                                <p>or</p>
                                <span></span>
                            </div>
                            <div class="login__auto">
                                <a href="#"><img src="{{ asset('assets/img/basic/google.svg') }}"
                                        alt="">Continue with
                                    Google</a>
                                <a href="#"><img src="{{ asset('assets/img/basic/facebook.svg') }}"
                                        alt="">Continue with
                                    Facebook</a>
                                <a href="#"><img src="{{ asset('assets/img/basic/phone.svg') }}"
                                        alt="">Continue with
                                    Phone</a>
                            </div>
                            <div class="login__account__create">
                                <h4>Already have an account?</h4>
                                <a href="{{ route('login.form') }}">Log in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--------- Login area end --------->

    </main>
@endsection
@push('custom_js')
    <script>
        $("#signupform").submit(function(e) {
            e.preventDefault();
            $("#signupform button").html("<i class='fa fa-spin fa-spinner'></i>").prop('disabled', true).css(
                'cursor', 'not-allowed');
            $("#result .alert").removeClass('alert-danger').addClass('d-none');
            $( "#result ul" ).html('');
            $.ajax({
                type: "POST",
                url: "{{ route('register.submit') }}",
                data: $("#signupform").serializeArray(),
                success: function(response) {
                    $("#signupform button").html("Sign up").prop('disabled', false).css('cursor',
                        'pointer');
                    if (response.status == false) {
                        $("#result .alert").addClass('alert-danger').removeClass('d-none');
                        jQuery.each( response.message, function( i, val ) {
                            $( "#result ul" ).append( "<li><small>"+val+"</small></li>");
                        });
                    } else {
                        console.log(response.message);
                        $("#signupform")[0].reset();
                        $("#result .alert").addClass('alert-success').removeClass('d-none');
                        jQuery.each( response.message, function( i, val ) {
                            $( "#result ul" ).append( "<li><small>"+val+"</small></li>");
                        });
                    }
                }
            });
        });
        
    </script>
@endpush
