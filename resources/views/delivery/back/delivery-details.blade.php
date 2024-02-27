@extends('delivery.back.delivery-layout')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="d-flex justify-content-between align-items-center">

                <h5 class="card-header">Delivery Details</h5>
                <a href="{{ route('delivery.request') }}" class="btn btn-sm btn-primary mr-3">Back</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover table-dark orderTable">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Order No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Quantity</th>
                                <th>Total Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td>{{$order->id}}</td>
                                    <td>{{$order->order_number}}</td>
                                    <td>{{$order->first_name}} {{$order->last_name}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->quantity}}</td>
                                    <td>${{$order->total_amount}}</td>

                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        @php
                            $orderproducts = \App\Models\OrderedProduct::where('user_id', $order->user_id)
                                ->where('order_id', $order->id)
                                ->get();
                        @endphp
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                        @foreach ($orderproducts as $orderproduct)
                            @php
                                $product = \App\Models\Product::find($orderproduct->product_id);
                            @endphp
                            <tr>
                                <td><img src="{{ $product->photo }}" style="height: 100px" alt="{{ $product->id }}"></td>
                                <td>
                                    <div>{{ $product->title }}</div>
                                    <div>Available : <span class="badge badge-primary">{{ $product->stock }}</span></div>
                                </td>
                                <td>{{ $orderproduct->quantity }}</td>
                                <td>${{ $product->price }}</td>
                                <td>${{ $orderproduct->quantity * $product->price }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="6" class="text-right">
                                <div><strong>Cupon:</strong> - ${{ $order->coupon }}</div>
                                <div><strong>Grand Total:</strong> ${{ $order->total_amount }}</div>
                            </td>
                        </tr>
                    </table>

                    <section class="confirmation_part section_padding ">
                        <div class="order_boxes">
                            <div class="row mt-4">
                                <div class="col-lg-6 col-lx-4">
                                    <div class="order-info">
                                        <h4 class="text-center pb-4">ORDER INFORMATION</h4>
                                        <table class="table table-bordered">
                                            <tr class="">
                                                <td>Order Number</td>
                                                <td> : {{ $order->order_number }}</td>
                                            </tr>
                                            <tr>
                                                <td>Order Date</td>
                                                <td> : {{ $order->created_at->format('D d M, Y') }} at
                                                    {{ $order->created_at->format('g : i a') }} </td>
                                            </tr>
                                            <tr>
                                                <td>Quantity</td>
                                                <td> : {{ $order->quantity }}</td>
                                            </tr>
                                            <tr>
                                                <td>Order Status</td>
                                                <td> : {{ $order->status }}</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping Charge</td>
                                                <td> : $ {{ $order->total_amount }}</td>
                                            </tr>
                                            <tr>
                                                <td>Coupon</td>
                                                <td> : $ {{ number_format($order->coupon, 2) }}</td>
                                            </tr>
                                            <tr>
                                                <td>Total Amount</td>
                                                <td> : $ {{ number_format($order->total_amount, 2) }}</td>
                                            </tr>
                                            <tr>
                                                <td>Payment Method</td>
                                                <td> : @if ($order->payment_method == 'cod')
                                                        Cash on Delivery
                                                    @else
                                                        Paypal
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Payment Status</td>
                                                <td> : {{ $order->payment_status }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-lx-4">
                                    <div class="shipping-info">
                                        <h4 class="text-center pb-4">SHIPPING INFORMATION</h4>
                                        <table class="table table-bordered">
                                            <tr class="">
                                                <td>Full Name</td>
                                                <td> : {{ $order->first_name }} {{ $order->last_name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td> : {{ $order->email }}</td>
                                            </tr>
                                            <tr>
                                                <td>Phone No.</td>
                                                <td> : {{ $order->phone }}</td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td> : {{ $order->address1 }}, {{ $order->address2 }}</td>
                                            </tr>
                                            <tr>
                                                <td>Country</td>
                                                <td> : {{ $order->country }}</td>
                                            </tr>
                                            <tr>
                                                <td>Post Code</td>
                                                <td> : {{ $order->post_code }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <style>
        td{
            color: black;
        }
        .orderTable td{
            color: white;
        }
    </style>
@endsection
