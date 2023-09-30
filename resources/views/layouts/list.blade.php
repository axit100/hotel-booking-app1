<!DOCTYPE html>

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Listeo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('web/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/main-color.css')}}" id="colors">
    @stack('css_lib')
</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header Container
    ================================================== -->
    <header id="header-container" class="fixed fullwidth">

        <!-- Header -->
        <div id="header" class="not-sticky">
            <div class="container">

                <!-- Left Side Content -->
                <div class="left-side">

                    <!-- Logo -->
                    <div id="logo">
                        <a href="{{url('/')}}"><img src="{{asset('img/app-icon.png')}}" alt=""></a>
                    </div>

                    <!-- Mobile Navigation -->
                    <div class="mmenu-trigger">
                        <button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
                        </button>
                    </div>

                    <!-- Main Navigation -->
                    <nav id="navigation" class="style-1">
                        <ul id="responsive">

                            <li><a href="#">Home</a>
                                <ul>
                                    <li><a href="index.html">Home 1 (Modern)</a></li>
                                    <li><a href="index-2.html">Home 2 (Default)</a></li>
                                    <li><a href="index-3.html">Home 3 (Airbnb)</a></li>
                                    <li><a href="index-4.html">Home 4 (Creative)</a></li>
                                    <li><a href="index-5.html">Home 5 (Slider)</a></li>
                                    <li><a href="index-6.html">Home 6 (Map)</a></li>
                                    <li><a href="index-7.html">Home 7 (Video)</a></li>
                                    <li><a href="index-8.html">Home 8 (Classic)</a></li>
                                </ul>
                            </li>

                            <li><a class="current" href="#">Listings</a>
                                <ul>
                                    <li><a href="#">List Layout</a>
                                        <ul>
                                            <li><a href="listings-list-with-sidebar.html">With Sidebar</a></li>
                                            <li><a href="listings-list-full-width.html">Full Width</a></li>
                                            <li><a href="listings-list-full-width-with-map.html">Full Width + Map</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Grid Layout</a>
                                        <ul>
                                            <li><a href="listings-grid-with-sidebar-1.html">With Sidebar 1</a></li>
                                            <li><a href="listings-grid-with-sidebar-2.html">With Sidebar 2</a></li>
                                            <li><a href="listings-grid-full-width.html">Full Width</a></li>
                                            <li><a href="listings-grid-full-width-with-map.html">Full Width + Map</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Half Screen Map</a>
                                        <ul>
                                            <li><a href="listings-half-screen-map-list.html">List Layout</a></li>
                                            <li><a href="listings-half-screen-map-grid-1.html">Grid Layout 1</a></li>
                                            <li><a href="listings-half-screen-map-grid-2.html">Grid Layout 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Single Listings</a>
                                        <ul>
                                            <li><a href="listings-single-page.html">Single Listing 1</a></li>
                                            <li><a href="listings-single-page-2.html">Single Listing 2</a></li>
                                            <li><a href="listings-single-page-3.html">Single Listing 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Open Street Map</a>
                                        <ul>
                                            <li><a href="listings-half-screen-map-list-OpenStreetMap.html">Half Screen Map List Layout</a></li>
                                            <li><a href="listings-half-screen-map-grid-1-OpenStreetMap.html">Half Screen Map Grid Layout 1</a></li>
                                            <li><a href="listings-half-screen-map-grid-2-OpenStreetMap.html">Half Screen Map Grid Layout 2</a></li>
                                            <li><a href="listings-list-full-width-with-map-OpenStreetMap.html">Full Width List</a></li>
                                            <li><a href="listings-grid-full-width-with-map-OpenStreetMap.html">Full Width Grid</a></li>
                                            <li><a href="listings-single-page-OpenStreetMap.html">Single Listing</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="#">User Panel</a>
                                <ul>
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="dashboard-messages.html">Messages</a></li>
                                    <li><a href="dashboard-bookings.html">Bookings</a></li>
                                    <li><a href="dashboard-wallet.html">Wallet</a></li>
                                    <li><a href="dashboard-my-listings.html">My Listings</a></li>
                                    <li><a href="dashboard-reviews.html">Reviews</a></li>
                                    <li><a href="dashboard-bookmarks.html">Bookmarks</a></li>
                                    <li><a href="dashboard-add-listing.html">Add Listing</a></li>
                                    <li><a href="dashboard-my-profile.html">My Profile</a></li>
                                    <li><a href="dashboard-invoice.html">Invoice</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Pages</a>
                                <div class="mega-menu mobile-styles three-columns">

                                    <div class="mega-menu-section">
                                        <ul>
                                            <li class="mega-menu-headline">Pages #1</li>
                                            <li><a href="pages-user-profile.html"><i class="sl sl-icon-user"></i> User Profile</a></li>
                                            <li><a href="pages-booking.html"><i class="sl sl-icon-check"></i> Booking Page</a></li>
                                            <li><a href="pages-add-listing.html"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
                                            <li><a href="pages-blog.html"><i class="sl sl-icon-docs"></i> Blog</a></li>
                                        </ul>
                                    </div>

                                    <div class="mega-menu-section">
                                        <ul>
                                            <li class="mega-menu-headline">Pages #2</li>
                                            <li><a href="pages-contact.html"><i class="sl sl-icon-envelope-open"></i> Contact</a></li>
                                            <li><a href="pages-coming-soon.html"><i class="sl sl-icon-hourglass"></i> Coming Soon</a></li>
                                            <li><a href="pages-404.html"><i class="sl sl-icon-close"></i> 404 Page</a></li>
                                            <li><a href="pages-masonry-filtering.html"><i class="sl sl-icon-equalizer"></i> Masonry Filtering</a></li>
                                        </ul>
                                    </div>

                                    <div class="mega-menu-section">
                                        <ul>
                                            <li class="mega-menu-headline">Other</li>
                                            <li><a href="pages-elements.html"><i class="sl sl-icon-settings"></i> Elements</a></li>
                                            <li><a href="pages-pricing-tables.html"><i class="sl sl-icon-tag"></i> Pricing Tables</a></li>
                                            <li><a href="pages-typography.html"><i class="sl sl-icon-pencil"></i> Typography</a></li>
                                            <li><a href="pages-icons.html"><i class="sl sl-icon-diamond"></i> Icons</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </li>

                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                    <!-- Main Navigation / End -->

                </div>
                <!-- Left Side Content / End -->

                <!-- Right Side Content / End -->
                <div class="right-side">
                    <div class="header-widget">
                        <a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> Sign In</a>
                        <a href="dashboard-add-listing.html" class="button border with-icon">Add Listing <i class="sl sl-icon-plus"></i></a>
                    </div>
                </div>
                <!-- Right Side Content / End -->

                <!-- Sign In Popup -->
                <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

                    <div class="small-dialog-header">
                        <h3>Sign In</h3>
                    </div>

                    <!--Tabs -->
                    <div class="sign-in-form style-1">

                        <ul class="tabs-nav">
                            <li class=""><a href="#tab1">Log In</a></li>
                            <li><a href="#tab2">Register</a></li>
                        </ul>

                        <div class="tabs-container alt">

                            <!-- Login -->
                            <div class="tab-content" id="tab1" style="display: none;">
                                <form method="post" class="login">

                                    <p class="form-row form-row-wide">
                                        <label for="username">Username:
                                            <i class="im im-icon-Male"></i>
                                            <input type="text" class="input-text" name="username" id="username" value="" />
                                        </label>
                                    </p>

                                    <p class="form-row form-row-wide">
                                        <label for="password">Password:
                                            <i class="im im-icon-Lock-2"></i>
                                            <input class="input-text" type="password" name="password" id="password"/>
                                        </label>
                                        <span class="lost_password">
										<a href="#" >Lost Your Password?</a>
									</span>
                                    </p>

                                    <div class="form-row">
                                        <input type="submit" class="button border margin-top-5" name="login" value="Login" />
                                        <div class="checkboxes margin-top-10">
                                            <input id="remember-me" type="checkbox" name="check">
                                            <label for="remember-me">Remember Me</label>
                                        </div>
                                    </div>

                                </form>
                            </div>

                            <!-- Register -->
                            <div class="tab-content" id="tab2" style="display: none;">

                                <form method="post" class="register">

                                    <p class="form-row form-row-wide">
                                        <label for="username2">Username:
                                            <i class="im im-icon-Male"></i>
                                            <input type="text" class="input-text" name="username" id="username2" value="" />
                                        </label>
                                    </p>

                                    <p class="form-row form-row-wide">
                                        <label for="email2">Email Address:
                                            <i class="im im-icon-Mail"></i>
                                            <input type="text" class="input-text" name="email" id="email2" value="" />
                                        </label>
                                    </p>

                                    <p class="form-row form-row-wide">
                                        <label for="password1">Password:
                                            <i class="im im-icon-Lock-2"></i>
                                            <input class="input-text" type="password" name="password1" id="password1"/>
                                        </label>
                                    </p>

                                    <p class="form-row form-row-wide">
                                        <label for="password2">Repeat Password:
                                            <i class="im im-icon-Lock-2"></i>
                                            <input class="input-text" type="password" name="password2" id="password2"/>
                                        </label>
                                    </p>

                                    <input type="submit" class="button border fw margin-top-10" name="register" value="Register" />

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Sign In Popup / End -->

            </div>
        </div>
        <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->

    @yield('content')

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<script type="text/javascript" src="{{asset('web/scripts/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/scripts/jquery-migrate-3.3.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/scripts/mmenu.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/scripts/chosen.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/scripts/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/scripts/rangeslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/scripts/magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/scripts/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/scripts/counterup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/scripts/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/scripts/tooltips.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/scripts/custom.js')}}"></script>


<!-- Leaflet // Docs: https://leafletjs.com/ -->
<script src="{{asset('web/scripts/leaflet.min.js')}}"></script>

<!-- Leaflet Maps Scripts -->
<script src="{{asset('web/scripts/leaflet-markercluster.min.js')}}"></script>
<script src="{{asset('web/scripts/leaflet-gesture-handling.min.js')}}"></script>
<script src="{{asset('web/scripts/leaflet-listeo.js')}}"></script>

<!-- Leaflet Geocoder + Search Autocomplete // Docs: https://github.com/perliedman/leaflet-control-geocoder -->
<script src="{{asset('web/scripts/leaflet-autocomplete.js')}}"></script>
<script src="{{asset('web/scripts/leaflet-control-geocoder.js')}}"></script>



<!-- Typed Script -->
<script type="text/javascript" src="{{asset('web/scripts/typed.js')}}"></script>
<script>
    // var typed = new Typed('.typed-words', {
    //     strings: ["Attractions"," Restaurants"," Hotels"],
    //     typeSpeed: 80,
    //     backSpeed: 80,
    //     backDelay: 4000,
    //     startDelay: 1000,
    //     loop: true,
    //     showCursor: true
    // });
</script>



<!-- Home Search Scripts -->
<script>
    $(window).on('load', function() { $('.msps-shapes').addClass('shapes-animation'); });
</script>

<script src="{{asset('web/scripts/parallax.min.js')}}"></script>
<script>
    // const parent = document.getElementById('scene');
    // const parallax = new Parallax(parent, {
    //     limitX: 50,
    //     limitY: 50,
    // });


    $('.msps-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 1000,
        fade: true,
        cssEase: 'linear'
    });

</script>

@stack('scripts_lib')

@stack('scripts')
</body>

</html>
