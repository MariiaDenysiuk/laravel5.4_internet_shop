<!-- Account (Sign Up) -->
<div class="toolbar-section" id="signup">
    <h3 class="toolbar-title space-bottom">Sign up, it's free</h3>
    <div class="inner">
        @if(count($errors) >0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error  }}</p>
                @endforeach
            </div>
        @endif
        <form action="{{ route('partials.signup') }}" method="post" class="login-form">
            <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            <input type="password" name="password" class="form-control" placeholder="Repeat password" required>
            <div class="form-footer">
                <div class="rememberme"></div>
                <div class="form-submit">
                    <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Sign up</button>
                </div>
            </div>
            {{ csrf_field() }}
        </form><!-- .login-form -->
        <p class="text-sm space-top">Already have an account? Than <a href="#account" class="toggle-section">Login here</a></p>
    </div><!-- .inner -->
</div><!-- .toolbar-section#account -->