@extends('delivery.layout.main')
@section('title','Invite Friends')
@section('content')
    <!-- invite section -->
    <section class="invite mb-5 pb-5">
        <div class="container my-5 py-5">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h2 class=" text-uppercase inv-head mt-5">Invite via</h2>
                    <div
                        class="row  row-cols-5 row-cols-sm-5 row-cols-md-5 row-cols-lg-5 row-cols-xl-5 mx-auto  text-center text-uppercase">
                        <div class="col">
                            <i class="fas fa-comment-dots"></i>
                            <h2 class="mt-2 text-light">SMS</h2>
                        </div>
                        <div class="col">
                            <a href="{{ route('delivery.invite-email') }}">
                                <i class="fas fa-envelope"></i>
                                <h2 class="mt-2 text-light">Email</h2>
                            </a>
                        </div>
                        <div class="col">
                            <i class="fab fa-facebook-messenger"></i>
                            <h2 class="mt-2 text-light">Facebook</h2>
                        </div>
                        <div class="col">
                            <i class="fab fa-twitter"></i>
                            <h2 class="mt-2 text-light">Twitter</h2>
                        </div>
                        <div class="col">
                            <i class="far fa-clone"></i>
                            <h2 class="mt-2 text-light">Copy link</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>

        </div>
    </section>

    @push('css')
        
    <link rel="stylesheet" href="{{ asset('delivery/css/invite_friends.css') }}">
    @endpush
@endsection