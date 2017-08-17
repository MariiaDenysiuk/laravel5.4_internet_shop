@extends('layouts.master')
@section('title')
    Laravel shopping cart
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h1>Checkout</h1>
            <h4>Your Total ${{ $total }}</h4>
            <div id="charge-error" class="alert alert-danger {{ !Session::has('error')?'hidden':'' }}">
                {{ Session::get('error') }}
            </div>
            <form action="{{ route('checkout') }}" method="post" id="checkout-form">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Adress</label>
                            <input type="text" id="adress" class="form-control" name="address" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Cart Holder Name</label>
                            <input type="text" id="cart-name" class="form-control"  required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Credit Cart Number</label>
                            <input type="text" id="cart-number" class="form-control"  required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="name">Expiration Month</label>
                                <input type="text" id="cart-expiry-month" class="form-control"  required>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="name">Expiration Year</label>
                                <input type="text" id="cart-expiry-year" class="form-control"  required>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="cart-cvc">CVC</label>
                            <input type="text" id="cart-cvc" class="form-control"  required>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-success">Buy now</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{  URL::to('src/js/checkout.js') }}"></script>
@endsection