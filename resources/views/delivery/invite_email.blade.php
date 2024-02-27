@extends('delivery.layout.main')
@section('title', 'Invite Friends')
@section('content')

    <section class="contain my-5">
        <div class="container pb-5">
            <h1 class=" text-light text-uppercase text-center">Invite friends</h1>
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-8 mt-3">
                    <div class="bg">
                        <div class="container">
                            <div id="app p-5 ">
                                <div class="container">
                                    <div class="position-relative">
                                        <div class="card p-5">
                                            <div
                                                class=" mb-3  text-center mt-4 d-flex justify-content-center align-items-center">
                                                <h2>Forgot Password</h2>
                                            </div>

                                            <form class="myform mt-5 form-horizontal">
                                                <label class="mb-5 text-uppercase">We will send you a verification code to
                                                    your email</label>
                                                <div class="form-group">
                                                    <input class="form-control" type="text" id="phone"
                                                        placeholder="Phone Number" />
                                                </div>

                                                <a type="submit" class="btn form-control mt-5 inv-frnd-send-btn">Send</a>

                                            </form>
                                        </div>
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
    </section>

@endsection
