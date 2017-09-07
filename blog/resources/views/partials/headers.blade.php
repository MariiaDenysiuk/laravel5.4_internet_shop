{{--<nav class="navbar navbar-default">--}}
    {{--<div class="container-fluid">--}}
        {{--<!-- Brand and toggle get grouped for better mobile display -->--}}
        {{--<div class="navbar-header">--}}
            {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">--}}
                {{--<span class="sr-only">Toggle navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
            {{--<a class="navbar-brand" href="{{ route('product.index')  }}">Shop</a>--}}
        {{--</div>--}}

        {{--<!-- Collect the nav links, forms, and other content for toggling -->--}}
        {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}
            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--<li><a href="{{  route('product.shoppingCart') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart--}}
                    {{--<span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">--}}
                        {{--<i class="fa fa-user" aria-hidden="true"></i> User Account<span class="caret"></span>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--@if(Auth::check())--}}
                            {{--<li><a href="{{route('user.profile')}}">User Profile</a></li>--}}
                            {{--<li role="separator" class="divider"></li>--}}
                            {{--<li><a href="{{route('user.logout')}}">Logout</a></li>--}}
                        {{--@else--}}
                            {{--<li><a href="{{route('user.signup')}}">Signup</a></li>--}}
                            {{--<li><a  href="{{route('user.signin')}}">Signin</a></li>--}}
                        {{--@endif--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div><!-- /.navbar-collapse -->--}}
    {{--</div><!-- /.container-fluid -->--}}
{{--</nav>--}}

<header class="navbar navbar-sticky">
    <!-- Site Logo -->
    <a href="{{asset('/')}}" class="site-logo visible-desktop">
        <span>[</span> M
        <span class="text-gray">/</span>
        STORE <span>]</span>
    </a><!-- site-logo.visible-desktop -->
    <a href="{{asset('/')}}" class="site-logo visible-mobile">
        <span>[</span> M <span>]</span>
    </a><!-- site-logo.visible-mobile -->

    <!-- Language Switcher -->
    <div class="lang-switcher">
        <div class="lang-toggle">
            <img src="{{ asset('images/flags/GB.png')}}" alt="English">
            <i class="material-icons arrow_drop_down"></i>
            <ul class="lang-dropdown">
                <li><a href="#"><img src="{{ asset('images/flags/FR.png')}}" alt="French">FR</a></li>
                <li><a href="#"><img src="{{ asset('images/flags/DE.png')}}" alt="German">DE</a></li>
                <li><a href="#"><img src="{{ asset('images/flags/IT.png')}}" alt="Italian">IT</a></li>
            </ul>
        </div>
    </div><!-- .lang-switcher -->

    <!-- Toolbar -->
    <div class="toolbar">
        <div class="inner">
            <a href="#menu" class="toolbar-toggle"><i class="material-icons menu"></i></a>
            <a href="#account" class="toolbar-toggle"><i class="material-icons person"></i></a>
            <a href="#cart" class="toolbar-toggle">
                <i>
                    <span class="material-icons shopping_basket"></span>
                    <span class="count">{{ Session::has('cart') ? Session::get('cart')->totalQty : '0' }}</span>
                </i>
            </a>
        </div>
    </div><!-- .toolbar -->

    <!-- Toolbar Dropdown -->
    <div class="toolbar-dropdown">

        <!-- Menu -->
        <div class="toolbar-section" id="menu">
            <div class="inner">
                <ul class="main-navigation space-bottom">
                    <li><a href="{{asset('/')}}">Shop</a></li>
                    <li><a href="{{ route('blog.blog') }}">Blog</a></li>
                    <li><a href="{{ route('gallery.gallery') }}">Gallery</a></li>
                    <li><a href="{{ route('about.about') }}">About</a></li>
                    <li><a href="{{ route('contacts.contacts') }}">Contacts</a></li>
                    <li><a href="{{ route('faq.faq') }}">FAQ</a></li>
                </ul><!-- .main-navigation -->
                <ul class="list-icon text-sm">
                    <li>
                        <i class="material-icons location_on"></i>
                        45 Park Avenue, Apt. 303<br>New York, NY 10016, USA
                    </li>
                    <li>
                        <i class="material-icons phone"></i>
                        001 (917) 555-4836
                    </li>
                    <li>
                        <i class="material-icons email"></i>
                        <a href="mailto:info@m-store.com">info@m-store.com</a>
                    </li>
                    <li>
                        <i class="socicon-skype"></i>
                        <a href="#">skype_id</a>
                    </li>
                </ul><!-- .list-icon -->
                <span class="text-sm display-inline" style="margin-bottom: 6px;">Social accounts: &nbsp;&nbsp;</span>
                <div class="social-bar display-inline">
                    <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                        <i class="socicon-facebook"></i>
                    </a>
                    <a href="#" class="sb-google-plus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google+">
                        <i class="socicon-googleplus"></i>
                    </a>
                    <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                        <i class="socicon-twitter"></i>
                    </a>
                    <a href="#" class="sb-instagram" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
                        <i class="socicon-instagram"></i>
                    </a>
                </div>
            </div><!-- .inner -->
        </div><!-- .toolbar-section#menu -->

        {{--<!-- Account (Login) -->--}}
        {{--<div class="toolbar-section" id="account">--}}
            {{--<h3 class="toolbar-title space-bottom">You are not logged in.</h3>--}}
            {{--<div class="inner">--}}
                {{--<form method="post" class="login-form">--}}
                    {{--<input type="text" class="form-control" placeholder="Username" required>--}}
                    {{--<input type="password" class="form-control" placeholder="Password" required>--}}
                    {{--<div class="form-footer">--}}
                        {{--<div class="rememberme">--}}
                            {{--<label class="checkbox">--}}
                                {{--<input type="checkbox" checked> Remember me--}}
                            {{--</label>--}}
                        {{--</div>--}}
                        {{--<div class="form-submit">--}}
                            {{--<button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Login</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form><!-- .login-form -->--}}
                {{--<p class="text-sm space-top">Don’t have an account? <a href="#signup" class="toggle-section">Signup here</a> or with social account:</p>--}}
                {{--<a href="#" class="social-signup-btn ssb-facebook">--}}
                    {{--<i class="socicon-facebook"></i>--}}
                    {{--<span>Signup with Facebook</span>--}}
                {{--</a>--}}
                {{--<a href="#" class="social-signup-btn ssb-google">--}}
                    {{--<i class="socicon-googleplus"></i>--}}
                    {{--<span>Signup with Google+</span>--}}
                {{--</a>--}}
                {{--<a href="#" class="social-signup-btn ssb-twitter">--}}
                    {{--<i class="socicon-twitter"></i>--}}
                    {{--<span>Signup with Twitter</span>--}}
                {{--</a>--}}
            {{--</div><!-- .inner -->--}}
        {{--</div><!-- .toolbar-section#account -->--}}

        {{--<!-- Account (Sign Up) -->--}}
        {{--<div class="toolbar-section" id="signup">--}}
            {{--<h3 class="toolbar-title space-bottom">Sign up, it's free</h3>--}}
            {{--<div class="inner">--}}
                {{--<form method="post" class="login-form">--}}
                    {{--<input type="email" class="form-control" placeholder="E-mail" required>--}}
                    {{--<input type="password" class="form-control" placeholder="Password" required>--}}
                    {{--<input type="password" class="form-control" placeholder="Repeat password" required>--}}
                    {{--<div class="form-footer">--}}
                        {{--<div class="rememberme"></div>--}}
                        {{--<div class="form-submit">--}}
                            {{--<button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Sign up</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form><!-- .login-form -->--}}
                {{--<p class="text-sm space-top">Already have an account? Than <a href="#account" class="toggle-section">Login here</a></p>--}}
            {{--</div><!-- .inner -->--}}
        {{--</div><!-- .toolbar-section#account -->--}}

        @if(Auth::check())
            <div class="toolbar-section" id="account">
                <ul class="main-navigation space-bottom">
                    <li><a href="{{route('user.profile')}}">User Profile</a></li>
                    <li><a href="{{route('user.logout')}}">Logout</a></li>
                </ul>
            </div>
        @else
            @include('partials.signin')
            @include('partials.signup')
        @endif
        <div class="toolbar-section toolbar-section-cart" id="cart">
            @include('partials.cart')
        </div>
        <!-- Checkout -->
        <div class="toolbar-section checkout" id="checkout">
            <div id="charge-error" class="alert alert-danger {{ !Session::has('error')?'hidden':'' }}">
                {{ Session::get('error') }}
            </div>
            <form action="#" id="checkout-form" class="checkout-form container">
                <div>
                    <div class="cart-subtotal space-bottom">
                        <div class="column">
                            <h3 class="toolbar-title">Checkout</h3>
                        </div>
                        <div class="column">
                            <h3><small class="hidden-xs count">{{ Session::has('cart') ? Session::get('cart')->totalQty : '0' }} </small><small>items</small> $<span class="amount">{{ Session::has('cart') ? Session::get('cart')->totalPrice : '0' }}</span></h3>
                        </div>
                    </div><!-- .subtotal -->
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" id="name" class="form-control" name="name" placeholder="Full name" required>
                            <input type="text" id="address" class="form-control" name="address"  placeholder="Adress" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" id="cart-name" class="form-control" placeholder="Cart Holder Name" required>
                            <input type="text" id="cart-number" class="form-control" placeholder="Credit Cart Number" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" id="cart-expiry-month" class="form-control" placeholder="Expiration Month" required>
                            <input type="text" id="cart-expiry-year" class="form-control" placeholder="Expiration Year" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" id="cart-cvc" class="form-control"  placeholder="Cart Cvc" required>
                        </div>
                    </div><!-- .row -->
                        {{ csrf_field() }}

                </div>
            </form><!-- .checkout-form.container -->
            <div class="text-right">
                <a href="#cart" class="btn btn-default btn-ghost icon-left toggle-section">
                    <i class="material-icons arrow_back"></i>
                    Back To Cart
                </a>
                @if(Auth::check())
                    <a class="btn btn-primary waves-effect waves-light checkout_butn">Checkout</a>
                @else
                    <a class="btn btn-primary waves-effect waves-light modal-button" data-toggle="modal" data-target=".bs-example-modal-sm">Checkout</a>
                @endif
            </div>

        </div><!-- .toolbar-section#checkout -->

    </div><!-- .toolbar-dropdown -->

</header><!-- .navbar.navbar-sticky -->

<script>
    var token_chekout = '{{Session::token()}}';
    var url = '{{route('checkout')}}';
</script>
