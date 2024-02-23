@extends('delivery.delivery-layout')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
                <h5 class="card-header">Change Password</h5>

                <div class="card-body">
                    @if (Session::has('success'))
                    <div class="alert alert-info text-dark" role="alert">
                        <strong>{{ Session::get('success') }}</strong>
                    </div>
                @endif
                    <form method="post" action="{{ route('delivery.changepasswordPost') }}">
                        @csrf
                        <div class="form-group">
                            <label for="inputTitle" class="col-form-label">New Password</label>
                            <input type="password" name="password" placeholder="New Password" class="form-control">
                            @error('password')
                                <p style="color: red">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="inputTitle" class="col-form-label">Confirm Password</label>
                            <input type="password" name="confirm_password" placeholder="Confirm Password"
                                class="form-control">
                            @error('confirm_password')
                                <p style="color: red">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success" type="submit">Change Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
