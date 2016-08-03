<!DOCTYPE HTML>
<html>

<head>
    <title>{{'Welcome - Betwithme'}}</title>
    <!-- meta info -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="Ronald Windwaai">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600' rel='stylesheet' type='text/css'> -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="apple-touch-icon" href="{{asset('/img/logo.png')}}"/>
    <link rel="apple-touch-icon-precomposed" href="{{asset('/img/logo.png')}}"/>
    <link type="image/x-icon" rel="shortcut icon" href="{{asset('/favicon.ico')}}"/>
    <!-- Bootstrap styles -->
    <link href="{{asset('/assets/css/site.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/switchers.css')}}" rel="stylesheet">
    <!-- IE 8 Fallback -->
    <!--[if lt IE 9]>
    <!--<link rel="stylesheet" type="text/css" href="/betwithme.online/assets/css/ie.css" />-->
    <![endif]-->
</head>
<body>

<!-- //////////////////////////////////
//////////////MAIN HEADER/////////////
////////////////////////////////////-->
<header class="main">
    <div class="container">
        <div class="row">
            <div class="span2">
                <a href="index-2.html">
                    <img src="{{asset('/assets/img/logo-small.png')}}" alt="logo" title="logo" class="logo">
                </a>
            </div>
            <div class="span8">
                <!-- MAIN NAVIGATION -->
                <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                <nav>
                        <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                            <li class="active"><a href="#">Home</a>
                            </li>
                            <li><a href="#">How it works</a>
                                
                            </li>
                            <li><a href="#">Upcoming Matches</a>
                                
                            </li>
                            <li><a href="#">Contact</a>
                            </li>
                        </ul>
                    </nav>
                <!-- END MAIN NAVIGATION -->
            </div>
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
        <form class="dialog-form">
                <label>E-mail</label>
                <input type="text" placeholder="email@domain.com" class="span12">
                <label>Password</label>
                <input type="password" placeholder="My secret password" class="span12">
                <label class="checkbox">
                    <input type="checkbox">Remember me
                </label>
                <input type="submit" value="Login in" class="btn btn-primary"/><br/>
                <input type="submit" value="Sign in with Google" class="btn btn-primary social-login google">
                <input type="submit" value="Sign in with Facebook" class="btn btn-primary social-login facebook">
                <input type="submit" value="Sign in with Twitter" class="btn btn-primary social-login twitter">
            </form>
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
        <form class="dialog-form">
            <label>E-mail</label>
            <input type="text" placeholder="email@domain.com" class="span12">
            <label>Password</label>
            <input type="password" placeholder="My secret password" class="span12">
            <label>Repeat Password</label>
            <input type="password" placeholder="Type your password again" class="span12">
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
                <input type="submit" value="Sign up with Google" class="btn btn-primary social-login google">
                <input type="submit" value="Sign up with Facebook" class="btn btn-primary social-login facebook">
                <input type="submit" value="Sign up with Twitter" class="btn btn-primary social-login twitter">
        </form>
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
        <form class="dialog-form">
            <label>E-mail</label>
            <input type="text" placeholder="email@domain.com" class="span12">
            <input type="submit" value="Request new password" class="btn btn-primary">
        </form>
    </div>
</div>
<!-- END LOGIN REGISTER LINKS CONTENT -->


<!-- TOP AREA -->
<div class="top-area">
    <!-- START BOOTSTRAP CAROUSEL -->
    <div id="my-carousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="active item">
                <img src="{{asset('/assets/img/old_no7_1200x480.jpg')}}" alt="Image Alternative text" title="Old No7" />
                <div class="carousel-caption countdown-caption">
                    <h3>Jack Daniels Huge Pack</h3>
                    <!-- COUNTDOWN -->
                    <div data-countdown="Aug 25, 2013 5:30:00" class="countdown"></div><a href="#" class="btn btn-primary btn-large">Save 70%</a>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('/assets/img/iphone_5_ipad_mini_ipad_3_1200x480.jpg')}}" alt="Image Alternative text" title="iPhone 5 iPad mini iPad 3" />
                <div class="carousel-caption countdown-caption">
                    <h3>Apple Big Deal</h3>
                    <!-- COUNTDOWN -->
                    <div data-countdown="Aug 30, 2013 10:45:00" class="countdown"></div><a href="#" class="btn btn-primary btn-large">Save 50%</a>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('/assets/img/the_best_mode_of_transport_here_in_maldives_1200x480.jpg')}}" alt="Image Alternative text" title="the best mode of transport here in maldives" />
                <div class="carousel-caption countdown-caption">
                    <h3>Finshing in Maldives</h3>
                    <!-- COUNTDOWN -->
                    <div data-countdown="Sep 2, 2013 22:00:00" class="countdown"></div><a href="#" class="btn btn-primary btn-large">Save 30%</a>
                </div>
            </div>
        </div>
        <a class="carousel-control left" href="#my-carousel" data-slide="prev"></a>
        <a class="carousel-control right" href="#my-carousel" data-slide="next"></a>
    </div>
    <!-- END BOOTSTRAP CAROUSEL -->
</div>
<!-- END TOP AREA -->

<!-- SEARCH AREA -->
<div class="search-area">
    <div class="container">
        <div class="row-fluid">
            <div class="span8">
                <label>
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


<!-- //////////////////////////////////
//////////////PAGE CONTENT/////////////
////////////////////////////////////-->


<div class="container">
    <div class="row">
        <div class="span3">
            <ul class="nav nav-tabs nav-stacked nav-coupon-category">
                <li class="active"><a href="#"><i class="icon-ticket"></i>All</a>
                </li>
                <li><a href="#"><i class="icon-food"></i>Football / Soccer</a>
                </li>
                <li><a href="#"><i class="icon-calendar"></i>Rugby</a>
                </li>
                <li><a href="#"><i class="icon-female"></i>Tennis</a>
                </li>
                <li><a href="#"><i class="icon-bolt"></i>Politics</a>
                </li>
                <li><a href="#"><i class="icon-headphones"></i>Electronics</a>
                </li>
                <li><a href="#"><i class="icon-picture"></i>Furniture</a>
                </li>
                <li><a href="#"><i class="icon-umbrella"></i>Fashion</a>
                </li>
                <li><a href="#"><i class="icon-shopping-cart"></i>Shopping</a>
                </li>
                <li><a href="#"><i class="icon-home"></i>Home & Garden</a>
                </li>
                <li><a href="#"><i class="icon-plane"></i>Travel</a>
                </li>
            </ul>
        </div>
        <div class="span9">
            <div class="row row-wrap">
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="{{asset('/assets/img/player/player.png')}}" alt="Player" title="Player" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">HILLARY WILL WIN</h5>
                            <p class="coupon-desciption">Custom Bet - 01 Jan 2017 12:00 CAT <br/>I bet that Hillary Clinton will win the 2016 USA Presential Race.</p>

                            <div class="coupon-meta"><span class="coupon-time">5 days 46 h remaining</span>
                                <div class="coupon-price"><span class="coupon-old-price"></span><span class="coupon-new-price">BET</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="{{asset('/assets/img/player/player2.png')}}" alt="Image Alternative text" title="Gamer Chick" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Violin Lessons</h5>
                            <p class="coupon-desciption">Nec varius ante aptent augue dictumst lacinia at</p>
                            <div class="coupon-meta"><span class="coupon-time">10 days 35 h remaining</span><span class="coupon-save">Save 40%</span>
                                <div class="coupon-price"><span class="coupon-old-price">272$</span><span class="coupon-new-price">163$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="{{asset('/assets/img/player/player3.png')}}" alt="Image Alternative text" title="Gamer Chick" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">LIVERPOOL FC WILL WIN THE LEAGUE</h5>
                            <p class="coupon-desciption">Habitasse feugiat commodo posuere nascetur lorem adipiscing cursus</p>
                            <div class="coupon-meta"><span class="coupon-time">7 days 25 h remaining</span><span class="coupon-save">Save 75%</span>
                                <div class="coupon-price"><span class="coupon-old-price">263$</span><span class="coupon-new-price">66$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="{{asset('/assets/img/aspen_lounge_chair_800x600.jpg')}}" alt="Image Alternative text" title="Aspen Lounge Chair" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Aspen Lounge Chair</h5>
                            <p class="coupon-desciption">A ante ipsum curabitur diam nascetur gravida penatibus</p>
                            <div class="coupon-meta"><span class="coupon-time">10 days 10 h remaining</span><span class="coupon-save">Save 40%</span>
                                <div class="coupon-price"><span class="coupon-old-price">815$</span><span class="coupon-new-price">489$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="{{asset('/assets/img/waipio_valley_800x600.jpg')}}" alt="Image Alternative text" title="waipio valley" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Awesome Vacation</h5>
                            <p class="coupon-desciption">Facilisis pulvinar orci in eget lacinia pulvinar habitasse</p>
                            <div class="coupon-meta"><span class="coupon-time"> 5 h remaining</span><span class="coupon-save">Save 45%</span>
                                <div class="coupon-price"><span class="coupon-old-price">427$</span><span class="coupon-new-price">235$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="{{asset('/assets/img/ana_29_800x600.jpg')}}" alt="Image Alternative text" title="Ana 29" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Hot Summer Collection</h5>
                            <p class="coupon-desciption">Nostra odio ridiculus lacinia erat semper mattis auctor</p>
                            <div class="coupon-meta"><span class="coupon-time">10 days 55 h remaining</span><span class="coupon-save">Save 60%</span>
                                <div class="coupon-price"><span class="coupon-old-price">531$</span><span class="coupon-new-price">212$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="{{asset('/assets/img/old_no7_800x600.jpg')}}" alt="Image Alternative text" title="Old No7" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Jack Daniels Huge Pack</h5>
                            <p class="coupon-desciption">Habitasse aenean quam pulvinar lacus tempus ultricies nunc</p>
                            <div class="coupon-meta"><span class="coupon-time"> 41 h remaining</span><span class="coupon-save">Save 75%</span>
                                <div class="coupon-price"><span class="coupon-old-price">349$</span><span class="coupon-new-price">87$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="{{asset('/assets/img/a_turn_800x600.jpg')}}" alt="Image Alternative text" title="a turn" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Diving with Sharks</h5>
                            <p class="coupon-desciption">Mus integer commodo quam class tristique natoque sociosqu</p>
                            <div class="coupon-meta"><span class="coupon-time">2 days 18 h remaining</span><span class="coupon-save">Save 25%</span>
                                <div class="coupon-price"><span class="coupon-old-price">680$</span><span class="coupon-new-price">510$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="{{asset('/assets/img/amaze_800x600.jpg')}}" alt="Image Alternative text" title="AMaze" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">New Glass Collection</h5>
                            <p class="coupon-desciption">Curae convallis orci dui gravida turpis facilisis tortor</p>
                            <div class="coupon-meta"><span class="coupon-time">4 days 31 h remaining</span><span class="coupon-save">Save 40%</span>
                                <div class="coupon-price"><span class="coupon-old-price">149$</span><span class="coupon-new-price">89$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="{{asset('/assets/img/the_hidden_power_of_the_heart_800x600.jpg')}}" alt="Image Alternative text" title="The Hidden Power of the Heart" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Beach Holidays</h5>
                            <p class="coupon-desciption">Praesent mus eros sit ipsum potenti enim faucibus</p>
                            <div class="coupon-meta"><span class="coupon-time"> 59 h remaining</span><span class="coupon-save">Save 45%</span>
                                <div class="coupon-price"><span class="coupon-old-price">328$</span><span class="coupon-new-price">180$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="{{asset('/assets/img/the_best_mode_of_transport_here_in_maldives_800x600.jpg')}}" alt="Image Alternative text" title="the best mode of transport here in maldives" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Finshing in Maldives</h5>
                            <p class="coupon-desciption">Senectus hac nibh conubia sociosqu nostra interdum arcu</p>
                            <div class="coupon-meta"><span class="coupon-time">6 days 5 h remaining</span><span class="coupon-save">Save 75%</span>
                                <div class="coupon-price"><span class="coupon-old-price">655$</span><span class="coupon-new-price">164$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="{{asset('/assets/img/our_coffee_miss_u_800x600.jpg')}}" alt="Image Alternative text" title="Our Coffee miss u" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Coffe Shop Discount</h5>
                            <p class="coupon-desciption">Dictumst amet tempor magnis nostra enim vivamus tortor</p>
                            <div class="coupon-meta"><span class="coupon-time">1 day 20 h remaining</span><span class="coupon-save">Save 75%</span>
                                <div class="coupon-price"><span class="coupon-old-price">595$</span><span class="coupon-new-price">149$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="{{asset('/assets/img/hot_mixer_800x600.jpg')}}" alt="Image Alternative text" title="Hot mixer" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Modern DJ Set</h5>
                            <p class="coupon-desciption">Amet magnis fames imperdiet lobortis amet eu sapien</p>
                            <div class="coupon-meta"><span class="coupon-time">2 days 24 h remaining</span><span class="coupon-save">Save 20%</span>
                                <div class="coupon-price"><span class="coupon-old-price">281$</span><span class="coupon-new-price">225$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="{{asset('/assets/img/green_furniture_800x600.jpg')}}" alt="Image Alternative text" title="Green Furniture" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Green Furniture Pack</h5>
                            <p class="coupon-desciption">Magna at ridiculus mi turpis himenaeos molestie porta</p>
                            <div class="coupon-meta"><span class="coupon-time"> 41 h remaining</span><span class="coupon-save">Save 25%</span>
                                <div class="coupon-price"><span class="coupon-old-price">607$</span><span class="coupon-new-price">455$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="{{asset('/assets/img/cascada_800x600.jpg')}}" alt="Image Alternative text" title="cascada" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Adventure in Woods</h5>
                            <p class="coupon-desciption">Pellentesque habitasse nisi aliquet bibendum commodo etiam suscipit</p>
                            <div class="coupon-meta"><span class="coupon-time">1 day 36 h remaining</span><span class="coupon-save">Save 25%</span>
                                <div class="coupon-price"><span class="coupon-old-price">879$</span><span class="coupon-new-price">659$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="{{asset('/assets/img/my_ice_cream_and_your_ice_cream_spoons_800x600.jpg')}}" alt="Image Alternative text" title="My Ice Cream and Your Ice Cream Spoons" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Lovely Ice Cream Spoons</h5>
                            <p class="coupon-desciption">Eleifend per velit nibh faucibus feugiat lacus auctor</p>
                            <div class="coupon-meta"><span class="coupon-time">9 days 43 h remaining</span><span class="coupon-save">Save 40%</span>
                                <div class="coupon-price"><span class="coupon-old-price">607$</span><span class="coupon-new-price">364$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="{{asset('/assets/img/iphone_5_ipad_mini_ipad_3_800x600.jpg')}}" alt="Image Alternative text" title="iPhone 5 iPad mini iPad 3" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Apple Big Deal</h5>
                            <p class="coupon-desciption">Dapibus vulputate hendrerit et penatibus aenean molestie urna</p>
                            <div class="coupon-meta"><span class="coupon-time"> 46 h remaining</span><span class="coupon-save">Save 35%</span>
                                <div class="coupon-price"><span class="coupon-old-price">231$</span><span class="coupon-new-price">150$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="{{asset('/assets/img/urbex_esch_lux_with_laney_and_laaaaag_800x600.jpg')}}" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Canon Camera</h5>
                            <p class="coupon-desciption">Quisque montes pretium taciti mattis laoreet purus vel</p>
                            <div class="coupon-meta"><span class="coupon-time">8 days 9 h remaining</span><span class="coupon-save">Save 65%</span>
                                <div class="coupon-price"><span class="coupon-old-price">373$</span><span class="coupon-new-price">131$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="pagination">
                <ul>
                    <li class="prev disabled">
                        <a href="#"></a>
                    </li>
                    <li class="active"><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li><a href="#">4</a>
                    </li>
                    <li><a href="#">5</a>
                    </li>
                    <li class="next">
                        <a href="#"></a>
                    </li>
                </ul>
            </div>
            <div class="gap"></div>
        </div>
    </div>
</div>


<!-- //////////////////////////////////
//////////////END PAGE CONTENT/////////
////////////////////////////////////-->



<!-- //////////////////////////////////
//////////////MAIN FOOTER//////////////
////////////////////////////////////-->

<footer class="main">
    <div class="container">
        <div class="row row-wrap">
            <div class="span3">
                <h5>About Betwithme</h5>
                <p>Quam habitasse odio habitasse ultrices dis varius ultrices imperdiet aliquam aliquam etiam malesuada gravida ac ornare condimentum bibendum libero quam montes primis lobortis sem pellentesque enim ornare molestie scelerisque congue</p>
            </div>
            <div class="span2">
                <h5>Company</h5>
                <ul class="list">
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">Blog</a>
                    </li>
                    <li><a href="#">Press</a>
                    </li>
                    <li><a href="#">Jobs</a>
                    </li>
                    <li><a href="#">Investors</a>
                    </li>
                </ul>
            </div>
            <div class="span2">
                <h5>For Business</h5>
                <ul class="list">
                    <li><a href="#">Advertising</a>
                    </li>
                    <li><a href="#">Runnig a Deal</a>
                    </li>
                    <li><a href="#">Accept Payments</a>
                    </li>
                    <li><a href="#">Referral Program</a>
                    </li>
                    <li><a href="#">Developers/API</a>
                    </li>
                    <li><a href="#">Merchant Terms</a>
                    </li>
                </ul>
            </div>
            <div class="span2">
                <h5>Get Help</h5>
                <ul class="list">
                    <li><a href="#">FAQ</a>
                    </li>
                    <li><a href="#">Customer Support</a>
                    </li>
                    <li><a href="#">Return Policy</a>
                    </li>
                    <li><a href="#">Terms Of Use</a>
                    </li>
                    <li><a href="#">Privacy Statement</a>
                    </li>
                </ul>
            </div>
            <div class="span3">
                <h5>Keep in touch</h5>
                <p>Bibendum cum scelerisque eu hendrerit himenaeos ad eleifend nibh justo</p>
                <ul class="list list-social">
                    <li>
                        <a href="#" class="icon-facebook box-icon" data-toggle="tooltip" title="Facebook"></a>
                    </li>
                    <li>
                        <a href="#" class="icon-twitter box-icon" data-toggle="tooltip" title="Twitter"></a>
                    </li>
                    <li>
                        <a href="#" class="icon-flickr box-icon" data-toggle="tooltip" title="Flickr"></a>
                    </li>
                    <li>
                        <a href="#" class="icon-linkedin box-icon" data-toggle="tooltip" title="Linkedin"></a>
                    </li>
                    <li>
                        <a href="#" class="icon-tumblr box-icon" data-toggle="tooltip" title="Tumblr"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- //////////////////////////////////
//////////////END MAIN  FOOTER/////////
////////////////////////////////////-->

<!-- Scripts queries -->

<!-- Scripts queries -->
<script src="{{ asset('/assets/js/jquery-1.12.4.js')}}"></script>
<script src="{{ asset('/assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('/assets/js/nivo_slider.min.js')}}"></script>
<script src="{{ asset('/assets/js/countdown.min.js')}}"></script>
<script src="{{ asset('/assets/js/flexnav.min.js')}}"></script>
<script src="{{ asset('/assets/js/magnific.min.js')}}"></script>
<script src="{{ asset('/assets/js/tweet.min.js')}}"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBm4IUP1_mOfuX4U068agQ0IW43VJ-Pdk4"></script>
<script src="{{ asset('/assets/js/gmap3.min.js')}}"></script>
<script src="{{ asset('/assets/js/wilto_slider.min.js')}}"></script>
<script src="{{ asset('/assets/js/mediaelement.min.js')}}"></script>
<script src="{{ asset('/assets/js/fitvids.min.js')}}"></script>
<script src="{{ asset('/assets/js/mail.min.js')}}"></script>

<!-- Custom scripts -->
<script src="{{ asset('/assets/js/custom.js')}}"></script>
<script src="{{ asset('/assets/js/switcher.js')}}"></script>

</body>

</html>
