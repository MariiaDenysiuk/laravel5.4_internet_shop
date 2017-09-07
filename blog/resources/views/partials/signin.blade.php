<!-- Account (Login) -->
<div class="toolbar-section" id="account">
    <h3 class="toolbar-title space-bottom">You are not logged in.</h3>
    <div class="inner">
        @if(count($errors) >0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error  }}</p>
                @endforeach
            </div>
        @endif
        <form class="login-form" action="{{ route('partials.signin') }}" method="post">
            <input type="text" class="form-control" name="email" id="email" placeholder="Username" required>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            <div class="form-footer">
                <div class="rememberme">
                    <label class="checkbox">
                        <input type="checkbox" checked> Remember me
                    </label>
                </div>
                <div class="form-submit">
                    <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Login</button>
                </div>
            </div>
            {{ csrf_field() }}
        </form><!-- .login-form -->
        <p class="text-sm space-top">Don’t have an account? <a href="#signup" class="toggle-section">Signup here</a> or with social account:</p>
        <a href="#" class="social-signup-btn ssb-facebook">
            <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
            </fb:login-button>
            <i class="socicon-facebook"></i>
            <span>Signup with Facebook</span>
        </a>
        <a href="#" class="social-signup-btn ssb-google">
            <div  id="my-signin2"></div>
            <i class="socicon-googleplus"></i>
            <span>Signup with Google+</span>
        </a>

        <a href="#" class="social-signup-btn ssb-twitter">
            <i class="socicon-twitter"></i>
            <span>Signup with Twitter</span>
        </a>
            <script>
                function onSuccess(googleUser) {
                    console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
                    console.log('Email: ' + googleUser.getBasicProfile().getEmail());
                }
                function onFailure(error) {
                    console.log(error);
                }
                function renderButton() {
                    gapi.signin2.render('my-signin2', {
                        'scope': 'profile email',
                        'width': 240,
                        'height': 50,
                        'longtitle': true,
                        'theme': 'dark',
                        'onsuccess': onSuccess,
                        'onfailure': onFailure
                    });
                }
            </script>

            <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>



            <script>
                // This is called with the results from from FB.getLoginStatus().
                function statusChangeCallback(response) {
                    console.log('statusChangeCallback');
                    console.log(response);
                    // The response object is returned with a status field that lets the
                    // app know the current login status of the person.
                    // Full docs on the response object can be found in the documentation
                    // for FB.getLoginStatus().
                    if (response.status === 'connected') {
                        // Logged into your app and Facebook.
                        testAPI();
                    } else {
                        // The person is not logged into your app or we are unable to tell.
                        document.getElementById('status').innerHTML = 'Please log ' +
                            'into this app.';
                    }
                }

                // This function is called when someone finishes with the Login
                // Button.  See the onlogin handler attached to it in the sample
                // code below.
                function checkLoginState() {
                    FB.getLoginStatus(function(response) {
                        statusChangeCallback(response);
                    });
                }

                window.fbAsyncInit = function() {
                    FB.init({
                        appId      : '354800038283258',
                        cookie     : true,  // enable cookies to allow the server to access
                                            // the session
                        xfbml      : true,  // parse social plugins on this page
                        version    : 'v2.8' // use graph api version 2.8
                    });

                    // Now that we've initialized the JavaScript SDK, we call
                    // FB.getLoginStatus().  This function gets the state of the
                    // person visiting this page and can return one of three states to
                    // the callback you provide.  They can be:
                    //
                    // 1. Logged into your app ('connected')
                    // 2. Logged into Facebook, but not your app ('not_authorized')
                    // 3. Not logged into Facebook and can't tell if they are logged into
                    //    your app or not.
                    //
                    // These three cases are handled in the callback function.

                    FB.getLoginStatus(function(response) {
                        statusChangeCallback(response);
                    });

                };

                // Load the SDK asynchronously
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/en_US/sdk.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));

                // Here we run a very simple test of the Graph API after login is
                // successful.  See statusChangeCallback() for when this call is made.
                function testAPI() {
                    console.log('Welcome!  Fetching your information.... ');
                    FB.api('/me', function(response) {
                        console.log('Successful login for: ' + response.name);
                        document.getElementById('status').innerHTML =
                            'Thanks for logging in, ' + response.name + '!';
                    });
                }
            </script>

            <!--
              Below we include the Login Button social plugin. This button uses
              the JavaScript SDK to present a graphical Login button that triggers
              the FB.login() function when clicked.
            -->

            <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
            </fb:login-button>

            <div id="status">
            </div>



    </div><!-- .inner -->
</div><!-- .toolbar-section#account -->