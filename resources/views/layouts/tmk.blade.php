<!DOCTYPE html>
<html>
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>Tamil Makkal Kootani (TMK)</title>
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Stylesheets -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/fontello.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/flexslider.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/responsive-calendar.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/chosen.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('jackbox/css/jackbox.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/cloud-zoom.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<link href="css/jackbox-ie8.css" rel="stylesheet" type="text/css" />
			<link rel="stylesheet" href="css/ie.css">
        <![endif]-->
    <!--[if gt IE 8]>
			<link href="css/jackbox-ie9.css" rel="stylesheet" type="text/css" />
		<![endif]-->
    <!--[if IE 7]>
			<link rel="stylesheet" href="css/fontello-ie7.css">
		<![endif]-->
    <style type="text/css">
        .no-fouc {
            display: none;
        }
    </style>
    <!-- jQuery -->
    <script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui-1.10.4.min.js')}}"></script>
    <!-- Preloader -->
    <script src="{{asset('js/jquery.queryloader2.min.js')}}"></script>
    <script type="text/javascript">
        $('html').addClass('no-fouc');
        $(document).ready(function () {
            $('html').show();
            var window_w = $(window).width();
            var window_h = $(window).height();
            var window_s = $(window).scrollTop();
            $("body").queryLoader2({
                backgroundColor: '#f2f4f9',
                barColor: '#63b2f5',
                barHeight: 4,
                percentage: false,
                deepSearch: true,
                minimumTime: 1000,
                onComplete: function () {
                    $('.animate-onscroll').filter(function (index) {
                        return this.offsetTop < (window_s + window_h);
                    }).each(function (index, value) {
                        var el = $(this);
                        var el_y = $(this).offset().top;
                        if ((window_s) > el_y) {
                            $(el).addClass('animated fadeInDown').removeClass(
                                'animate-onscroll');
                            setTimeout(function () {
                                $(el).css('opacity', '1').removeClass(
                                    'animated fadeInDown');
                            }, 2000);
                        }
                    });
                }
            });
        });
    </script>
</head>
<body class="sticky-header-on tablet-sticky-header">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
    <!-- Container -->
    <div class="container">
        <!-- Header -->
        <header id="header" class="animate-onscroll">
            <!-- Main Header -->
            <div id="main-header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div id="logo" class="col-lg-3 col-md-3 col-sm-3">
                            <a href="main-v1"><img src="{{asset('img/Logo.png')}}" alt="Logo"></a>
                        </div>
                        <!-- /Logo -->
                        <!-- Main Quote -->
                        <div class="col-lg-5 col-md-4 col-sm-4">
                            <blockquote>நிலையான சமாதானம் ஏற்படுத்தப்பட்டு ,<br>எமது இனத்தின் இருப்பு உறுதி செய்யப்படும்
                            </blockquote>
                        </div>
                        <!-- /Main Quote -->
                        <!-- Newsletter -->
                        <div class="col-lg-4 col-md-5 col-sm-5">
                            <form id="newsletter" action="php/newsletter-form.php" method="POST">
                                <h5><strong>தொடர்பில் இருக்க</strong> மின்னஞ்சல் பதிவு செய்யுங்கள் </h5>
                                <div class="newsletter-form">
                                    <div class="newsletter-email">
                                        <input type="text" name="newsletter-email" placeholder="மின்னஞ்சல் முகவரி">
                                    </div>
                                    <div class="newsletter-zip">
                                        <input type="text" name="newsletter-zip" placeholder="பெருநகரம்">
                                    </div>
                                    <div class="newsletter-submit">
                                        <input type="submit" value="">
                                        <i class="icons icon-right-thin"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /Newsletter -->
                    </div>
                </div>
            </div>
            <!-- /Main Header -->
            <!-- Lower Header -->
            <div id="lower-header">
                <div class="container">
                    <div id="menu-button">
                        <div>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <span>Menu</span>
                    </div>
                    <ul id="navigation">
                        <!-- Home -->
                        <li class="home-button current-menu-item">
                            <a href="index"><i class="icons icon-home"></i></a>
                        </li>
                        <!-- /Home -->
                        <!-- Pages -->
                        <li>
                            <span>{{ __('messages.about_us') }}</span>
                            <ul>
                                <li><a href="#">அறிக்கை</a></li>
                                <li><a href="#">அமைப்பு</a></li>
                                <li><a href="#">{{ __('messages.history') }}</a></li>
                            </ul>
                        </li>
                        <!-- /Pages -->
                        <!-- Events -->
                        <li><a href="events">{{ __('messages.events') }}</a></li>
                        <!-- /Events -->
                        <!-- Media -->
                        <li>
                            <span>{{ __('messages.media') }}</span>
                            <ul>
                                <li><a href="news-extra">{{ __('messages.news') }} </a></li>
                                <li><a href="press">{{ __('messages.press_release') }}</a></li>
                            </ul>
                        </li>
                        <!-- /Media -->
                        <!-- Get Involved -->
                        <li>
                            <a href="get-involved">{{ __('messages.get_involved') }} </a>
                        </li>
                        <!-- /Get Involved -->
                        <!-- Get Involved -->
                        <li>
                            <a href="contact">{{ __('messages.contact_us') }}</a>
                        </li>
                        <!-- /Get Involved -->
                        <!-- Donate -->
                        <li class="donate-button ">
                            <a href="#">{{ __('messages.donate') }}</a>
                        </li>
                        <!-- /Donate -->
                    </ul>
                </div>
            </div>
            <!-- /Lower Header -->
        </header>
        <!-- /Header -->
        <section id="content">
            @yield('content')
            </section>
            <!-- /Section -->
        </section>
        <!-- Footer -->
        <footer id="footer">
            <!-- Main Footer -->
            <div id="main-footer">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 animate-onscroll">
                        <h4>தமகூ </h4>
                        <p>இப்பிரகடனத்தில் தரப்பட்டுள்ள எல்லா உரிமைகளுக்கும் சுதந்திரங்களுக்கும் எல்லோரும்
                            உரித்துடையவராவர். மேலும், எவரும் <br><br>
                            இப்பிரகடனத்தில் தரப்பட்டுள்ள எல்லா உரிமைகளுக்கும் சுதந்திரங்களுக்கும் எல்லோரும்
                            உரித்துடையவராவர். மேலும், எவரும் </p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 animate-onscroll">
                        <h4>பயனுள்ள இணைப்புகள்</h4>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 menu-container">
                            <ul class="menu">
                                <li><a href="#">இணைப்பு 1</a></li>
                                <li><a href="#">இணைப்பு 2</a></li>
                                <li><a href="#">இணைப்பு 3</a></li>
                                <li><a href="#">இணைப்பு 4</a></li>
                                <li><a href="#">இணைப்பு 5</a></li>
                                <li><a href="#">இணைப்பு 6</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 menu-container">
                            <ul class="menu">
                                <li><a href="#">இணைப்பு 1</a></li>
                                <li><a href="#">இணைப்பு 2</a></li>
                                <li><a href="#">இணைப்பு 3</a></li>
                                <li><a href="#">இணைப்பு 4</a></li>
                                <li><a href="#">இணைப்பு 5</a></li>
                                <li><a href="#">இணைப்பு 6</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 twitter-widget-area animate-onscroll">
                        <h4>சமீபத்திய செய்தி</h4>
                        <div class="twitter-widget">
                        </div>
                        <a href="#" class="button twitter-button">Follow us on twitter</a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 animate-onscroll">
                        <h4>எங்கள் முகநூலில் இணையுங்கள் </h4>
                        <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;width=270&amp;height=240&amp;colorscheme=dark&amp;header=false&amp;show_faces=true&amp;stream=false&amp;show_border=false"
                            style="border:none; overflow:hidden; width:100%; height:240px;"></iframe>
                    </div>
                </div>
            </div>
            <!-- /Main Footer -->
            <!-- Lower Footer -->
            <div id="lower-footer">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 animate-onscroll">
                        <p class="copyright">© 2018 தமிழ் மக்கள் கூட்டணி </p>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 animate-onscroll">
                        <div class="social-media">
                            <ul class="social-icons">
                                <li class="facebook"><a href="#" class="tooltip-ontop" title="Facebook"><i class="icons icon-facebook"></i></a></li>
                                <li class="twitter"><a href="#" class="tooltip-ontop" title="Twitter"><i class="icons icon-twitter"></i></a></li>
                                <li class="youtube"><a href="#" class="tooltip-ontop" title="Youtube"><i class="icons icon-youtube-1"></i></a></li>
                                <li class="email"><a href="#" class="tooltip-ontop" title="Email"><i class="icons icon-mail"></i></a></li>
                            </ul>
                            <ul class="social-buttons">
                                <li>
                                    <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35"
                                        style="border:none; overflow:hidden; height:21px; padding-top:1px;  width:50px;"></iframe>
                                </li>
                                <li>
                                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/"
                                        data-type="button_count"></div>
                                </li>
                                <li>
                                    <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Lower Footer -->
        </footer>
        <!-- /Footer -->
        <!-- Back To Top -->
        <a href="#" id="button-to-top"><i class="icons icon-up-dir"></i></a>
    </div>
    <!-- /Container -->
    <!-- JavaScript -->
    <!-- Bootstrap -->
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Modernizr -->
    <script type="text/javascript" src="{{asset('js/modernizr.js')}}"></script>
    <!-- Sliders/Carousels -->
    <script type="text/javascript" src="{{asset('js/jquery.flexslider-min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- Revolution Slider  -->
    <script type="text/javascript" src="{{asset('js/revolution-slider/js/jquery.themepunch.plugins.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- Calendar -->
    <script type="text/javascript" src="{{asset('js/responsive-calendar.min.js')}}"></script>
    <!-- Raty -->
    <script type="text/javascript" src="{{asset('js/jquery.raty.min.js')}}"></script>
    <!-- Chosen -->
    <script type="text/javascript" src="{{asset('js/chosen.jquery.min.js')}}"></script>
    <!-- jFlickrFeed -->
    <script type="text/javascript" src="{{asset('js/jflickrfeed.min.js')}}"></script>
    <!-- InstaFeed -->
    <script type="text/javascript" src="{{asset('js/instafeed.min.js')}}"></script>
    <!-- Twitter -->
    <script type="text/javascript" src="{{asset('php/twitter/jquery.tweet.js')}}"></script>
    <!-- MixItUp -->
    <script type="text/javascript" src="{{asset('js/jquery.mixitup.js')}}"></script>
    <!-- JackBox -->
    <script type="text/javascript" src="{{asset('jackbox/js/jackbox-packed.min.js')}}"></script>
    <!-- CloudZoom -->
    <script type="text/javascript" src="{{asset('js/zoomsl-3.0.min.js')}}"></script>
    <!-- Main Script -->
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
    <!--[if lt IE 9]>
			<script type="text/javascript" src="js/jquery.placeholder.js"></script>
			<script type="text/javascript" src="js/script_ie.js"></script>
		<![endif]-->
</body>
</html>