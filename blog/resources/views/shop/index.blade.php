{{--@extends('layouts.master')--}}
{{--@section('title')--}}
   {{--Laravel shopping cart--}}
{{--@endsection--}}
{{--@section('content')--}}
    {{--<div class="row">--}}
        {{--<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">--}}
            {{--<div id="charge-message" class="alert alert-success">--}}
                {{--{{ Session::get('success') }}--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--@foreach($products->chunk(3) as $product)--}}
        {{--<div class="row">--}}
            {{--@foreach($products as $prod)--}}
                {{--<div class="col-sm-6 col-md-4">--}}
                    {{--<div class="thumbnail">--}}
                        {{--<img src="{{$prod->imagePath}}" alt="...">--}}
                        {{--<div class="caption">--}}
                            {{--<h3>{{$prod->title}}</h3>--}}
                            {{--<p>{{$prod->description}}</p>--}}
                            {{--<div class="clearfix">--}}
                                {{--<div class="pull-left">${{$prod->price}}</div>--}}
                                {{--<a href="{{route('product.addToCart', ['id'=> $prod->id])}}" class="btn btn-primary pull-right" role="button">Add to cart</a></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--@endforeach--}}
        {{--</div>--}}
    {{--@endforeach--}}
{{--@endsection--}}

@extends('layouts.master')

@section('title')
    Laravel shopping cart
@endsection
@section('content')
        <section class="hero-slider" data-loop="true" data-autoplay="true" data-interval="7000">
            <div class="inner">
                <div class="slide" style="background-image: url({{asset('images/hero-slider/01.jpg')}});">
                    <div class="container">
                        <div class="absolute from-top" style="top: 13%;">
                            <span class="h1 hidden-xs">New SPA<br>Cosmetics</span>
                        </div>
                        <div class="absolute text-right from-bottom" style="bottom: 13%; right: 15px;">
                        <span class="h2"><span class="text-thin">Only</span><br><strong>$127.99</strong></span><br>
                        <a href="#" class="btn btn-primary btn-with-icon-right waves-effect waves-light space-top-none">
                        View Offer
                            <i class="material-icons arrow_forward"></i>
                        </a>
                        </div>
                    </div>
                </div><!-- .slide -->
                <div class="slide" style="background-image: url({{asset('images/hero-slider/02.jpg')}});">
                    <div class="container text-center padding-top-3x">
                        <span class="h1 from-bottom">Stylish Chair</span><br>
                        <span class="h2 from-bottom"><span class="text-thin">Special offer: </span> <strong>-25%</strong></span><br>
                        <a href="#" class="btn btn-primary btn-with-icon-right waves-effect waves-light scale-up">
                        View Offer
                            <i class="material-icons arrow_forward"></i>
                        </a>
                    </div>
                </div><!-- .slide -->
                <div class="slide" style="background-image: url({{asset('images/hero-slider/03.jpg')}});">
                    <div class="container padding-top-3x">
                    <span class="h1 space-top from-left">Dior Sunglasses</span><br>
                    <span class="h2 from-right"><span class="text-thin">Only <span class="hidden-xs">today</span></span> <strong>-30%</strong></span><br>
                    <a href="#" class="btn btn-primary btn-with-icon-right waves-effect waves-light scale-up">
                    View Offer
                        <i class="material-icons arrow_forward"></i>
                    </a>
                    </div>
                </div><!-- .slide -->
            </div><!-- .inner -->
        </section><!-- .hero-slider -->

<div class="container single-page">
    <!-- Filters Bar -->
    <section class="container padding-top-3x">
        <div class="filters-bar space-top-half">
            <div class="column">
                <!-- Nav Filters -->
                <ul class="nav-filters">
                    <li class="active product-category"><a href="#all">All</a> <sup>{{$countAll}}</sup></li>
                    <li class="product-category"><a href="#furniture">Furniture</a> <sup>{{$countFurniture}}</sup></li>
                    <li class="product-category"><a href="#accessories">Accessories</a> <sup>{{$countAccessories}}</sup></li>
                    <li class="product-category"><a href="#lightning">Lightning</a> <sup>{{$countLightning}}</sup></li>
                    <li class="product-category"><a href="#clocks">Clocks</a> <sup>{{$countClocks}}</sup></li>
                </ul><!-- .nav-filters -->
            </div><!-- .column -->
            <div class="column">
                <a href="#filters" class="filters-toggle" data-toggle="filters">
                    <i class="material-icons filter_list"></i>
                    Filters
                </a>
                <a href="#search-box" class="search-btn" data-toggle="filters">
                    <i class="material-icons search"></i>
                </a>
            </div>
        </div><!-- .filters-bar -->
        <div class="row filters">
            <div class="col-xs-12 filters-pane" id="filters">
                <div class="row">
                    <div class="col-md-2">

                        <div class="widget widget-color">
                            <h3 class="widget-title">Color Filter</h3>
                            <ul>
                                <li class="choose-color"><a href="#blue">
                                        <span class="color" style="background-color: #93c4ef;"></span>
                                        Blue
                                    </a></li>
                                <li class="choose-color"><a href="#green">
                                        <span class="color" style="background-color: #a7c04d;"></span>
                                        Green
                                    </a></li>
                                <li class="choose-color"><a href="#red">
                                        <span class="color" style="background-color: #ef0568;"></span>
                                        Red
                                    </a></li>
                                <li class="choose-color"><a href="#yellow">
                                        <span class="color" style="background-color: #ffce2b;"></span>
                                        Yellow
                                    </a></li>
                            </ul>
                        </div><!-- .widget.widget-color -->
                    </div>
                    <div class="col-md-3">

                        <!-- Price Range Widget -->
                        <!-- Please note: Only one Range Slider allowed on the page! -->
                        <div class="widget widget-catesgories">
                            <h3 class="widget-title">Price Range</h3>
                            <div class="price-range-slider" data-start-min="0" data-start-max="1000" data-min="0" data-max="1000" data-step="1">
                                <div class="ui-range-slider"></div>
                                <footer class="ui-range-slider-footer">
                                    <div class="column">
                                        <button type="submit" class="btn btn-ghost btn-sm btn-default">Filter</button>
                                    </div>
                                    <div class="column">
                                        <div class="ui-range-values">
                                            <div class="ui-range-value-min">
                                                $<span></span>
                                                <input type="hidden">
                                            </div> -
                                            <div class="ui-range-value-max">
                                                $<span></span>
                                                <input type="hidden">
                                            </div>
                                        </div>
                                    </div>
                                </footer>
                            </div><!-- .price-range-slider -->
                        </div><!-- .widget.widget-categories -->
                    </div>
                </div><!-- .row -->
            </div><!-- .col-xs-12.filters-pane#filters -->
            <form class="col-xs-12 filters-pane" id="search-box">
                <input type="text" class="form-control" placeholder="Type and hit enter">
            </form><!-- .col-xs-12.filters-pane#search-box -->
        </div><!-- .row.filters -->
    </section><!-- .container -->
    <div class="cart-block">
        @include('shop.product-list');
    </div>
</div>
@endsection