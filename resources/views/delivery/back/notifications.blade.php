@extends('delivery.back.delivery-layout')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="d-flex justify-content-between align-items-center">

                    <h5 class="card-header">All Notification</h5>
                    <a href="{{ route('delivery.dashboard') }}" class="btn btn-sm btn-primary mr-3">Back</a>
                </div>
                <div class="card-body">
                    @if(count(Auth::user()->Notifications)>0)
                    <table class="table text-dark table-hover admin-table" id="notification-dataTable">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Time</th>
                          <th scope="col">Title</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ( Auth::user()->Notifications as $notification)

                        <tr class="@if($notification->unread()) bg-light border-left-light @else border-left-success @endif">
                          <td scope="row">{{$loop->index +1}}</td>
                          <td>{{$notification->created_at->format('F d, Y h:i A')}}</td>
                          <td>{{$notification->data['title']}}</td>
                          <td>
                            <a href="{{route('delivery.notificationview', $notification->id) }}" class="btn btn-primary btn-sm float-left mr-1" data-toggle="tooltip" title="view" data-placement="bottom"><i class="fa fa-eye"></i></a>
                            <a href="{{route('delivery.notificationdelete', $notification->id) }}" class="btn btn-danger btn-sm float-left mr-1" data-toggle="tooltip" title="view" data-placement="bottom"><i class="fa fa-trash"></i></a>

                          </td>
                        </tr>

                        @endforeach
                      </tbody>
                    </table>
                    @else
                      <h2>Notifications Empty!</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
