<!doctype html>
<html>
 <head>
     <meta charset="UTF-8">
     <meta name="google-signin-client_id" content="302338741956-mtuj02vi83sni92feqi3ra50h50l8620.apps.googleusercontent.com">
     <title>@yield('title')</title>

     <link rel="stylesheet" href="{{ URL::to('src/css/app.css')  }}">
     <link rel="stylesheet"  href="{{ URL::to('src/css/theme.min.css') }}" >
     <link rel="stylesheet"  href="{{ URL::to('src/css/bootstrap.min.css') }}" >
     <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">

     <link rel="stylesheet"  href="{{ URL::to('src/css/socicon.min.css') }}" >
     <link rel="stylesheet"  href="{{ URL::to('src/css/material-icons.min.css') }}" >
     @yield('styles')
 </head>
<body class="page-preloading">
    <!-- Page Pre-Loader -->
    <div class="page-preloader">
        <div class="preloader">
            <img src={{asset("images/preloader.gif")}} alt="Preloader">
        </div>
    </div><!-- .page-preloader -->


@include('partials.headers')
@include('partials.modal')

@yield('content')

@include('partials.footer')
<script src="https://use.fontawesome.com/318f0f74c9.js"></script>
{{--<script--}}
        {{--src="http://code.jquery.com/jquery-1.12.4.min.js"--}}
        {{--integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="--}}
        {{--crossorigin="anonymous"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>--}}

<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/gmap3.min.js') }}"></script>
<script src="{{ asset('js/icheck.min.js') }}"></script>
<script src="{{ asset('js/smoothscroll.js') }}"></script>
<script src="{{ asset('js/velocity.min.js') }}"></script>
<script src="{{ asset('js/waves.min.js') }}"></script>
<script src="{{ asset('js/jquery.downCount.js') }}"></script>
<script src="{{ asset('js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/nouislider.min.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/modernizr.custom.js') }}"></script>
<script src=" asset('mailer/mailer.js') }}"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="{{ asset('js/page-preloading.js') }}"></script>
    <script src="https://js.stripe.com/v2/"></script>
    {{--<script type="text/javascript" src="{{  URL::to('src/js/checkout.js') }}"></script>--}}

<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '354800038283258',
            xfbml      : true,
            version    : 'v2.10'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

@yield('scripts')
</body>
</html>