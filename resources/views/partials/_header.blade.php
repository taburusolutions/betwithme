<!-- //////////////////////////////////
//////////////MAIN HEADER/////////////
////////////////////////////////////-->
<header class="main">
    <div class="container">
        <div class="row">
            <div class="span2">
                <a href="{{ route('public.home')}}/">
                    <img src="{{asset('/assets/img/logo-small.png')}}" alt="logo" title="logo" class="logo">
                </a>
            </div>
            @include('partials._main_menu')
            <div class="span2">
                <!-- LOGIN REGISTER LINKS -->
                <ul class="login-register">
                    <li><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top"><i class="icon-signin"></i>Sign in</a>
                    </li>
                    <li><a class="popup-text" href="#register-dialog" data-effect="mfp-move-from-top"><i class="icon-edit"></i>Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- LOGIN REGISTER LINKS CONTENT -->
<div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
    <i class="icon-signin dialog-icon"></i>
    <h3>Member Login</h3>
    <h5>Welcome back, friend. Login to get started</h5>
    <div class="row-fluid">
        <div id="login-alert" class="alert alert-danger" style="display: none;">
            <strong>Whoops!</strong> That is a wrong email or password, try again..<br><br>
        </div>
            {!! Form::open(['url' => route('auth.login-post'), 'class' => 'dialog-form','id' =>'login-form' ] ) !!}
            <label>E-mail</label>
            {!! Form::email('email', null, ['class' => 'span12', 'placeholder' => 'email@domain.com', 'required', 'autofocus', 'id' => 'inputEmail' ]) !!}
            <label>Password</label>
            {!! Form::password('password', ['class' => 'span12', 'placeholder' => 'Password', 'required',  'id' => 'inputPassword' ]) !!}
            <label class="checkbox">
                {!! Form::checkbox('remember', 1) !!}Remember me
            </label>
            <input type="submit" value="Login in" id="login-button" class="btn btn-primary"/><br/>
            <a href="{{ route('social.redirect', ['provider' => 'google']) }}" class="btn btn-primary social-login google" target="_blank">Sign in with Google</a>
            <a href="{{ route('social.redirect', ['provider' => 'facebook']) }}" class="btn btn-primary social-login facebook" target="_blank">Sign in with Facebook</a>
            <a href="{{ route('social.redirect', ['provider' => 'twitter']) }}" class="btn btn-primary social-login twitter" target="_blank">Sign in with Twitter</a>
        {!! Form::close() !!}
    </div>
    <ul class="dialog-alt-links">
        <li><a class="popup-text" href="#register-dialog" data-effect="mfp-zoom-out">Not member yet</a>
        </li>
        <li><a class="popup-text" href="#password-recover-dialog" data-effect="mfp-zoom-out">Forgot password</a>
        </li>
    </ul>
</div>


<div id="register-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
    <i class="icon-edit dialog-icon"></i>
    <h3>Member Register</h3>
    <h5>Ready to get best offers? Let's get started!</h5>
    <div class="row-fluid">
        {!! Form::open(['url' => route('auth.register-post'), 'class' => 'dialog-form' ] ) !!}
        <label>E-mail</label>
        {!! Form::email('email', null, ['class' => 'span12', 'placeholder' => 'email@domain.com', 'required', 'autofocus', 'id' => 'inputEmail' ]) !!}
        <label for="inputFirstName" class="sr-only">First name</label>
        {!! Form::text('first_name', null, ['class' => 'span12', 'placeholder' => 'First name', 'required', 'id' => 'inputFirstName' ]) !!}

        <label for="inputLastName" class="sr-only">Last name</label>
        {!! Form::text('last_name', null, ['class' => 'span12', 'placeholder' => 'Last name', 'required', 'id' => 'inputLastName' ]) !!}

        <label for="inputPassword" class="sr-only">Password</label>
        {!! Form::password('password', ['class' => 'span12', 'placeholder' => 'Password', 'required',  'id' => 'inputPassword' ]) !!}

        <label for="inputPasswordConfirm" class="sr-only">Repeat Password</label>
        {!! Form::password('password_confirmation', ['class' => 'span12', 'placeholder' => 'Password confirmation', 'required',  'id' => 'inputPasswordConfirm' ]) !!}


            <div class="row-fluid">
                <div class="span8">
                    <label>Your Area</label>
                    <input type="password" placeholder="Boston" class="span12">
                </div>
                <div class="span4">
                    <label>Postal/Zip</label>
                    <input type="password" placeholder="12345" class="span12">
                </div>
            </div>
            <label class="checkbox">
                <input type="checkbox">Get hot offers via e-mail
            </label>
            <input type="submit" value="Sign up" class="btn btn-primary"><br/>
            <a href="{{ route('social.redirect', ['provider' => 'google']) }}" class="btn btn-primary social-login google" target="_blank">Sign in with Google</a>
            <a href="{{ route('social.redirect', ['provider' => 'facebook']) }}" class="btn btn-primary social-login facebook" target="_blank">Sign in with Facebook</a>
            <a href="{{ route('social.redirect', ['provider' => 'twitter']) }}" class="btn btn-primary social-login twitter" target="_blank">Sign in with Twitter</a>
        {!! Form::close() !!}
    </div>
    <ul class="dialog-alt-links">
        <li><a class="popup-text" href="#login-dialog" data-effect="mfp-zoom-out">Already member</a>
        </li>
    </ul>
</div>


<div id="password-recover-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
    <i class="icon-retweet dialog-icon"></i>
    <h3>Password Recovery</h3>
    <h5>Fortgot your password? Don't worry we can deal with it</h5>
    <div class="row-fluid">
        {!! Form::open(['url' => route('auth.password-post'), 'class' => 'dialog-form' ] ) !!}
            <label>E-mail</label>
        {!! Form::email('email', null, ['class' => 'span12', 'placeholder' => 'email@domain.com', 'required', 'autofocus', 'id' => 'inputEmail' ]) !!}
            <input type="submit" value="Request new password" class="btn btn-primary">
        {!! Form::close() !!}
    </div>
</div>
<!-- END LOGIN REGISTER LINKS CONTENT -->

<!-- TOP AREA -->
<div class="top-area">
    @if(Request::path() === '/')
    <!-- START BOOTSTRAP CAROUSEL -->
    <div id="my-carousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="active item">
                <img src="{{asset('/assets/img/slides/hull-city-v-leicester-city-2016.jpg')}}" alt="Hull City v/s Leicester City" title="Hull City v/s Leicester City" />
                <div class="carousel-caption countdown-caption">
                    <h3>Hull City v/s Leicester City</h3>
                    <!-- COUNTDOWN -->
                    <div data-countdown="Aug 13, 2016 12:30" class="countdown"></div><a href="#" class="btn btn-primary btn-large">Bet</a>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('/assets/img/slides/liverpool-v-arsenal-2016.jpg')}}" alt="Arsenal FC v/s Liverpool FC" title="Arsenal FC v/s Liverpool FC" />
                <div class="carousel-caption countdown-caption">
                    <h3>Arsenal FC v/s Liverpool FC</h3>
                    <!-- COUNTDOWN -->
                    <div data-countdown="Aug 14, 2016 16:00:00" class="countdown"></div><a href="#" class="btn btn-primary btn-large">Bet</a>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('/assets/img/slides/chelsea-v-west-ham-united-2016.jpg')}}" alt="Chelsea FC v/s West Ham United" title="Chelsea FC v/s West Ham United" />
                <div class="carousel-caption countdown-caption">
                    <h3>Chelsea FC v/s West Ham United</h3>
                    <!-- COUNTDOWN -->
                    <div data-countdown="Aug 15, 2016 20:00:00" class="countdown"></div><a href="#" class="btn btn-primary btn-large">Bet</a>
                </div>
            </div>
        </div>
        <a class="carousel-control left" href="#my-carousel" data-slide="prev"></a>
        <a class="carousel-control right" href="#my-carousel" data-slide="next"></a>
    </div>
    <!-- END BOOTSTRAP CAROUSEL -->
    @else
        <div class="top-title-area">
            <div class="container">
                <h1 class="title-page">{{$page_title or ''}}</h1>
            </div>
        </div>
    @endif
</div>
<!-- END TOP AREA -->

<!-- SEARCH AREA -->
<div class="search-area">
    <div class="container">
        <div class="row-fluid">
            <div class="span8">
                <label></label>
                <div class="search-area-division search-area-division-input">

                </div>
            </div>
            <div class="span3">
                <label><i class="icon-map-marker"></i></label>
                <div class="search-area-division search-area-division-location">
                    <input class="span12" type="text" placeholder="Soccer" />
                </div>
            </div>
            <div class="span1">
                <button class="btn btn-block btn-white search-btn" type="submit">Search</button>
            </div>
        </div>
    </div>
</div>
<!-- END SEARCH AREA -->
<div class="gap"></div>

<!-- //////////////////////////////////
//////////////END MAIN HEADER//////////
////////////////////////////////////-->