@extends('backend.layouts.master')

@section('main-content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="row">
            <div class="col-md-12">
                @include('backend.layouts.notification')
            </div>
        </div>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary float-left">Select a Delivery Man for Delivery</h6>
            {{-- <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip"
                data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add Delivery Man</a> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if (count($users) > 0)
                    <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                              <th>S.N.</th>
                              <th>Order No.</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Quantity</th>
                              <th>Total Amount</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tfoot>
                            <tr>
                              <th>S.N.</th>
                              <th>Order No.</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Quantity</th>
                              <th>Total Amount</th>
                              <th>Action</th>
                              </tr>
                          </tfoot>
                          <tbody>
                            @foreach($orders as $order)
                                @php
                                      $delivery = DB::table('delivery_processes')->where('order_id',$order->id)->get();
                                @endphp

                                @if (count($delivery) == 0)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->order_number}}</td>
                                    <td>{{$order->first_name}} {{$order->last_name}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->quantity}}</td>
                                    <td>${{number_format($order->total_amount,2)}}</td>
                                    <td>
                                        <form action="{{ route('deliveryman.adddeliveryman') }}" method="POST">
                                            @csrf
                                            <div class="d-flex justify-content-center align-items-center">
                                                <input type="hidden" name="order_id" value="{{ $order->id }}">
                                                <select name="deliveryman_id" class="form-control mr-1">
                                                    <option value="">Choose Delivery Man</option>
                                                    @foreach ($users as $user)
                                                        <option  value="{{ $user->id }}">{{ $user->name }}</option>
                                                    @endforeach
                                                </select>
                                                <button type="submit" class="btn btn-sm btn-success">Update</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                @endif


                            @endforeach
                          </tbody>
                    </table>
                @else
                    <h6 class="text-center">No Active Delivery Man Found</h6>
                @endif
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link href="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <style>
        div.dataTables_wrapper div.dataTables_paginate {
            display: none;
        }

        .zoom {
            transition: transform .2s;
            /* Animation */
        }

        .zoom:hover {
            transform: scale(3.2);
        }
    </style>
@endpush

@push('scripts')
    <!-- Page level plugins -->
    <script src="{{ asset('backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('backend/js/demo/datatables-demo.js') }}"></script>
    <script>
        $('#banner-dataTable').DataTable({
            "columnDefs": [{
                "orderable": false,
                "targets": [4, 5]
            }]
        });

        // Sweet alert

        function deleteData(id) {

        }
    </script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.dltBtn').click(function(e) {
                var form = $(this).closest('form');
                var dataID = $(this).data('id');
                // alert(dataID);
                e.preventDefault();
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this data!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        } else {
                            swal("Your data is safe!");
                        }
                    });
            })
        })
    </script>
@endpush
