@extends('delivery.delivery-layout')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
                <h5 class="card-header">Edit Profile</h5>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="inputTitle" class="col-form-label">Name</label>
                            <input id="inputTitle" type="text" name="name" placeholder="Enter name"
                                value="{{ Auth::user()->name }}" readonly class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputEmail" class="col-form-label">Email</label>
                            <input id="inputEmail" type="email" name="email" placeholder="Enter email"
                                value="{{ Auth::user()->email }}" readonly class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="role" class="col-form-label">Role</label>
                            <input type="text" readonly class="form-control" value="{{ Auth::user()->role }}">
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-form-label">Status</label>
                            <input type="text" readonly class="form-control" value="{{ Auth::user()->status }}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
