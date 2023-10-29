<!DOCTYPE html>
<head>

    <title>TCA - Home</title>
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
    <header id="header-container">

        <!-- Header -->
        <div id="header" class="not-sticky">
            <div class="container">

                <!-- Left Side Content -->
                <div class="left-side">

                    <!-- Logo -->
                    <div id="logo">
                        <a href="{{url('/')}}"><img src="{{asset('/img/logo.png')}}" alt=""></a>
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

                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/productsData')}}">Products</a></li>

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

    <!-- Footer
    ================================================== -->
    <div id="footer" class="margin-top-15">
        <!-- Main -->
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <img class="footer-logo" src="images/logo.png" alt="">
                    <br><br>
                    <p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
                </div>

                <div class="col-md-4 col-sm-6 ">
                    <h4>Helpful Links</h4>
                    <ul class="footer-links">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Sign Up</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Add Listing</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>

                    <ul class="footer-links">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Our Partners</a></li>
                        <li><a href="#">How It Works</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-3  col-sm-12">
                    <h4>Contact Us</h4>
                    <div class="text-widget">
                        <span>12345 Little Lonsdale St, Melbourne</span> <br>
                        Phone: <span>(123) 123-456 </span><br>
                        E-Mail:<span> <a href="#">office@example.com</a> </span><br>
                    </div>

                    <ul class="social-icons margin-top-20">
                        <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                        <li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
                    </ul>

                </div>

            </div>

            <!-- Copyright -->
            <div class="row">
                <div class="col-md-12">
                    <div class="copyrights">© 2021 Listeo. All Rights Reserved.</div>
                </div>
            </div>

        </div>

    </div>
    <!-- Footer / End -->


    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>

    <!-- Booking Sticky Footer -->
    <div class="booking-sticky-footer">
        <div class="container">
            <div class="bsf-left">
                <h4>Starting from $29</h4>
                <div class="star-rating" data-rating="5">
                    <div class="rating-counter"></div>
                </div>
            </div>
            <div class="bsf-right">
                <a href="#booking-widget-anchor" class="button">Book Now</a>
            </div>
        </div>
    </div>


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

@livewireScripts



<!-- Leaflet // Docs: https://leafletjs.com/ -->
<script src="{{asset('web/scripts/leaflet.min.js')}}"></script>

<!-- Leaflet Maps Scripts -->
<script src="{{asset('web/scripts/leaflet-markercluster.min.js')}}"></script>
<script src="{{asset('web/scripts/leaflet-gesture-handling.min.js')}}"></script>
<script src="{{asset('web/scripts/leaflet-listeo.js')}}"></script>

<!-- Leaflet Geocoder + Search Autocomplete // Docs: https://github.com/perliedman/leaflet-control-geocoder -->
<script src="{{asset('web/scripts/leaflet-autocomplete.js')}}"></script>
<script src="{{asset('web/scripts/leaflet-control-geocoder.js')}}"></script>

<!-- Booking Widget - Quantity Buttons -->
{{--<script src="{{asset('web/ascripts/quantityButtons.js')}}"></script>--}}

<!-- Date Range Picker - docs: http://www.daterangepicker.com/ -->
<script src="{{asset('web/scripts/moment.min.js')}}"></script>
<script src="{{asset('web/scripts/daterangepicker.js')}}"></script>



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





<script>
    // Calendar Init
    $(function() {
        $('#date-picker').daterangepicker({
            "opens": "left",
            singleDatePicker: true,

            // Disabling Date Ranges
            isInvalidDate: function(date) {
                // Disabling Date Range
                var disabled_start = moment('09/02/2018', 'MM/DD/YYYY');
                var disabled_end = moment('09/06/2018', 'MM/DD/YYYY');
                return date.isAfter(disabled_start) && date.isBefore(disabled_end);

                // Disabling Single Day
                // if (date.format('MM/DD/YYYY') == '08/08/2018') {
                //     return true;
                // }
            }
        });
    });

    // Calendar animation
    $('#date-picker').on('showCalendar.daterangepicker', function(ev, picker) {
        $('.daterangepicker').addClass('calendar-animated');
    });
    $('#date-picker').on('show.daterangepicker', function(ev, picker) {
        $('.daterangepicker').addClass('calendar-visible');
        $('.daterangepicker').removeClass('calendar-hidden');
    });
    $('#date-picker').on('hide.daterangepicker', function(ev, picker) {
        $('.daterangepicker').removeClass('calendar-visible');
        $('.daterangepicker').addClass('calendar-hidden');
    });
</script>


<!-- Replacing dropdown placeholder with selected time slot -->
<script>
    $(".time-slot").each(function() {
        var timeSlot = $(this);
        $(this).find('input').on('change',function() {
            var timeSlotVal = timeSlot.find('strong').text();

            $('.panel-dropdown.time-slots-dropdown a').html(timeSlotVal);
            $('.panel-dropdown').removeClass('active');
        });
    });
</script>


<!-- Style Switcher
================================================== -->
<script src="{{asset('web/scripts/switcher.js')}}"></script>

<div id="style-switcher">
    <h2>Color Switcher <a href="#"><i class="sl sl-icon-settings"></i></a></h2>

    <div>
        <ul class="colors" id="color1">
            <li><a href="#" class="main" title="Main"></a></li>
            <li><a href="#" class="blue" title="Blue"></a></li>
            <li><a href="#" class="green" title="Green"></a></li>
            <li><a href="#" class="orange" title="Orange"></a></li>
            <li><a href="#" class="navy" title="Navy"></a></li>
            <li><a href="#" class="yellow" title="Yellow"></a></li>
            <li><a href="#" class="peach" title="Peach"></a></li>
            <li><a href="#" class="beige" title="Beige"></a></li>
            <li><a href="#" class="purple" title="Purple"></a></li>
            <li><a href="#" class="celadon" title="Celadon"></a></li>
            <li><a href="#" class="red" title="Red"></a></li>
            <li><a href="#" class="brown" title="Brown"></a></li>
            <li><a href="#" class="cherry" title="Cherry"></a></li>
            <li><a href="#" class="cyan" title="Cyan"></a></li>
            <li><a href="#" class="gray" title="Gray"></a></li>
            <li><a href="#" class="olive" title="Olive"></a></li>
        </ul>
    </div>

</div>
<!-- Style Switcher / End -->


@stack('scripts_lib')

@stack('scripts')
</body>
</html>
