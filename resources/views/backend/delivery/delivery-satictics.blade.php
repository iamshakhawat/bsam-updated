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
            <h6 class="m-0 font-weight-bold text-primary float-left">Delivery Statistics </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if (count($users) > 0)
                    <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Deliveryman Details</th>
                                <th>Recently Complete Orders</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        @if ($user->photo)
                                            <img src="{{ $user->photo }}" class="img-fluid rounded-circle"
                                                style="max-width:50px" alt="{{ $user->photo }}">
                                        @else
                                            <img src="{{ asset('backend/img/avatar.png') }}"
                                                class="img-fluid rounded-circle" style="max-width:50px" alt="avatar.png">
                                        @endif
                                        <div>Name: {{ $user->name }}</div>
                                        <div>Email: {{ $user->email }}</div>
                                        <div>Name: {{ $user->name }}</div>
                                        <div>Status: @if ($user->status == 'active')
                                            <span class="badge badge-success">{{ Str::ucfirst($user->status) }}</span>
                                        @else
                                            <span class="badge badge-warning">{{ Str::ucfirst($user->status) }}</span>
                                        @endif</div>
                                        <div>Join At: {{ date('M,d,Y',strtotime($user->created_at)) }}</div>
                                        <div>Total Complete Delivery: <span class="badge badge-pill badge-primary">
                                            {{ DB::table('delivery_processes')->where('deliveryman_id',$user->id)->where('delivery_status','Delivered')->count(); }}
                                        </span></div>
                                    </td>
                                    <td>
                                        @php
                                            $deliverymans = \App\Models\DeliveryProcess::where('deliveryman_id',$user->id)->orderBy('id','DESC')->limit(8)->get();
                                        @endphp
                                        @foreach ($deliverymans as $deliveryman)
                                        
                                            @php
                                                $order = \App\Models\Order::where('id',$deliveryman->order_id)->first();
                                            @endphp
                                            
                                            <div><a href="{{ route('order.show',$order->id) }}">{{ $order->order_number }}</a></div>


                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <h6 class="text-center">No Delivery Man Found</h6>
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
