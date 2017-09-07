@extends('layouts.master')
@section('content')
    {{--<div class="row">--}}
        {{--<div class="col-md-4 col-md-offset-4">--}}
            {{--<h1>User profile</h1>--}}
            {{--<h2>My Orders</h2>--}}
            {{--@foreach($orders as $order)--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-body">--}}
                        {{--<ul class="list-group">--}}
                            {{--@foreach($order->cart->items as $item)--}}
                                {{--<li class="list-group-item">--}}
                                    {{--<span class="badge">${{ $item['price'] }}</span>--}}
                                    {{--{{$item['item']['item']}} | {{ $item['qty'] }}--}}
                                {{--</li>--}}
                            {{--@endforeach--}}
                        {{--</ul>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--@endforeach--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="row">
        <div class="container">
            <h3 class="user-orders">My Orders</h3>
            <div class="table-responsive">
                <table>
                    <thead>
                    <tr>
                        <th>Images</th>
                        <th>Price</th>
                        <th>Number</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        @foreach($order->cart->items as $item)
                            <tr>
                                <td><img class="user-profile" src="{{asset($item['item']['imagePath'])}}"></td>
                                <td>${{ $item['price'] }}</td>
                                <td>{{ $item['qty'] }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection