@extends('layouts.master')
@section('title')
   Laravel shopping cart
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <div id="charge-message" class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>
    </div>
    @foreach($products->chunk(3) as $product)
        <div class="row">
            @foreach($products as $prod)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{$prod->imagePath}}" alt="...">
                        <div class="caption">
                            <h3>{{$prod->title}}</h3>
                            <p>{{$prod->description}}</p>
                            <div class="clearfix">
                                <div class="pull-left">${{$prod->price}}</div>
                                <a href="{{route('product.addToCart', ['id'=> $prod->id])}}" class="btn btn-primary pull-right" role="button">Add to cart</a></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection