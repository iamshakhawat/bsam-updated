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
                @if (count($deliveries) > 0)
                    <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                              <th>S.N.</th>
                              <th>Order Details</th>
                              <th>User Details</th>
                              <th>Address</th>
                              <th>Delivery Man</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($deliveries as $delivery)
                                @php
                                      $order = DB::table('orders')->where('id',$delivery->order_id)->first();
                                @endphp

                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>
                                        <div>Order ID: {{$order->order_number}}</div>
                                        <div>Quantity: {{$order->quantity}}</div>
                                        <div>Amount: ${{$order->total_amount}}</div>
                                    </td>
                                    <td>
                                        <div>Name: {{$order->first_name}} {{$order->last_name}}</div>
                                        <div>Email: {{$order->email}}</div>
                                        <div>Phone: {{$order->phone}}</div>
                                    </td>
                                    <td>
                                        <div>Address 1 : {{ $order->address1 }}</div>
                                        <div>Address 2 : {{ $order->address2 }}</div>
                                    </td>
                                    <td>
                                        <img src="{{ DB::table('users')->where('id',$delivery->deliveryman_id)->first()->photo; }}" style="height:50px;width:50px;border-radius:50%" alt="">
                                        {{ DB::table('users')->where('id',$delivery->deliveryman_id)->first()->name; }}
                                    </td>
                                    <td>
                                        <span class="badge badge-primary">{{ $delivery->delivery_status }}</span>
                                    </td>
                                </tr>


                            @endforeach
                          </tbody>
                    </table>
                @else
                    <h6 class="text-center">No Delivery in Process</h6>
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
