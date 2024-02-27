@extends('delivery.back.delivery-layout')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
                <h5 class="card-header">All Delivery Request</h5>
                <div class="card-body">
                    <table class="table table-striped text-dark table-bordered">
                        <thead>
                            <tr>
                                <th>Order Details</th>
                                <th>User Details</th>
                                <th>Address</th>
                                <th>Action</th>
                              </tr>
                        </thead>
                        <tbody>
                            @foreach ($deliveries as $delivery)
                                @php
                                    $orders = \App\Models\Order::where('id', $delivery->order_id)
                                        ->orderBy('id', 'DESC')
                                        ->get();

                                @endphp
                                @foreach ($orders as $order)
                                    <tr>
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
                                            <form action="{{ route('delivery.changestate') }}" method="POST">
                                                @csrf
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <a href="{{ route('delivery.details', $order->id) }}"
                                                        class="btn btn-sm btn-primary mr-1"><i class="fa fa-eye"></i></a>
                                                        <input type="hidden" name="id" value="{{ $delivery->id }}">
                                                    <select name="state" class="form-control mr-1">

                                                        @if($delivery->delivery_status == "")
                                                            <option value="">Choose Option</option>
                                                            <option value="Confirm">Confirm</option>
                                                            <option value="Rejected">Rejected</option>

                                                        @elseif($delivery->delivery_status == "Confirm")
                                                            <option @if($delivery->delivery_status == "Confirm") selected @endif value="Confirm">Confirm</option>
                                                            <option @if($delivery->delivery_status == "Picked-Up") selected @endif value="Picked-Up">Picked-Up</option>
                                                            <option @if($delivery->delivery_status == "Out of Delivery") selected @endif value="Out of Delivery">Out of Delivery</option>
                                                            <option @if($delivery->delivery_status == "Delivered") selected @endif value="Delivered">Delivered</option>

                                                        @elseif($delivery->delivery_status == "Rejected")
                                                            <option @if($delivery->delivery_status == "Rejected") selected @endif value="Rejected">Rejected</option>

                                                        @elseif($delivery->delivery_status == "Delivered")
                                                            <option @if($delivery->delivery_status == "Delivered") selected @endif value="Delivered">Delivered</option>

                                                        @else
                                                            <option @if($delivery->delivery_status == "Picked-Up") selected @endif value="Picked-Up">Picked-Up</option>
                                                            <option @if($delivery->delivery_status == "Out of Delivery") selected @endif value="Out of Delivery">Out of Delivery</option>
                                                            <option @if($delivery->delivery_status == "Delivered") selected @endif value="Delivered">Delivered</option>
                                                        @endif

                                                    </select>
                                                    <button type="submit" class="btn btn-sm btn-success">Update</button>
                                                </div>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>
@endsection
