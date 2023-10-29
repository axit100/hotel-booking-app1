@extends('layouts.products')
@push('css_lib')

@endpush
@section('content')
    <div class="main-search-container plain-color">
        <div class="main-search-inner">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-search-headlines">
                            <h2>
                                Find Nearby
                                <!-- Typed words can be configured in script settings at the bottom of this HTML file -->
                                <span class="typed-words"></span>
                            </h2>
                            <h4>Expolore top-rated attractions, activities and more</h4>
                        </div>
                        <form action="{{ route('list') }}" id="searchForm" method="GET">
                            <div class="main-search-input">

                                <div class="main-search-input-item">
                                    <input type="text"  name="query" placeholder="What are you looking for?" value=""/>
                                </div>

                                <div class="main-search-input-item">
                                    <select data-placeholder="All Categories" name="check[]" class="chosen-select">
                                        <option>All Categories</option>
                                        @foreach($category as $k => $val)
                                            <option value="{{$val->id}}"> {{ucfirst($val->category_name)}} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <button class="button" type="submit">
                                    Search
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
                <!-- Features Categories -->
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="highlighted-categories-headline">Or browse featured categories:</h5>
                        <div class="highlighted-categories">
                            @foreach($category as $k => $val)
                                <a href="{{ route('list', ['check[]' => $val->id]) }}" class="highlighted-category">
                                    <i class="im im-icon-Circular-Point"></i>
                                    <h4>{{ucfirst($val->category_name)}}</h4>
                                </a>
                            @endforeach
                        </div>

                    </div>
                </div>
                <!-- Featured Categories - End -->
            </div>

        </div>

        <!-- Main Search Photo Slider -->
        <div class="container msps-container">

            <div class="main-search-photo-slider">
                <div class="msps-slider-container">
                    <div class="msps-slider">
                        <div class="item"><img src="images/category-box-01.jpg" class="item" title="Title 1"/></div>
                        <div class="item"><img src="images/category-box-02.jpg" class="item" title="Title 1"/></div>
                        <div class="item"><img src="images/category-box-03.jpg" class="item" title="Title 1"/></div>
                    </div>
                </div>
            </div>

            <div class="msps-shapes" id="scene">

                <div class="layer" data-depth="0.2">
                    <svg height="40" width="40" class="shape-a">
                        <circle cx="20" cy="20" r="17" stroke-width="4" fill="transparent" stroke="#C400FF"/>
                    </svg>
                </div>

                <div class="layer" data-depth="0.5">
                    <svg width="90" height="90" viewBox="0 0 500 800" class="shape-b">
                        <g transform="translate(281,319)">
                            <path fill="transparent" style="transform:rotate(25deg)" stroke-width="35" stroke="#F56C83"
                                  fill d="M260.162831,132.205081
				A18,18 0 0,1 262.574374,141.205081
				A18,18 0 0,1 244.574374,159.205081H-244.574374
				A18,18 0 0,1 -262.574374,141.205081
				A18,18 0 0,1 -260.162831,132.205081L-15.588457,-291.410162
				A18,18 0 0,1 0,-300.410162
				A18,18 0 0,1 15.588457,-291.410162Z"/>
                        </g>
                    </svg>
                </div>

                <div class="layer" data-depth="0.2" data-invert-x="false" data-invert-y="false" style="z-index: -10">
                    <svg height="200" width="200" viewbox="0 0 250 250" class="shape-c">
                        <path d="
				    M 0, 30
				    C 0, 23.400000000000002 23.400000000000002, 0 30, 0
				    S 60, 23.400000000000002 60, 30
				        36.599999999999994, 60 30, 60
				        0, 36.599999999999994 0, 30
				" fill="#FADB5F" transform="rotate(
				    -25,
				    100,
				    100
				) translate(
				    0
				    0
				) scale(3.5)"></path>
                    </svg>
                </div>


                <div class="layer" data-depth="0.6" style="z-index: -10">
                    <svg height="120" width="120" class="shape-d">
                        <circle cx="60" cy="60" r="60" fill="#222"/>
                    </svg>
                </div>


                <div class="layer" data-depth="0.2">
                    <svg height="70" width="70" viewBox="0 0 200 200" class="shape-e">
                        <path fill="#FF0066"
                              d="M68.5,-24.5C75.5,-0.8,58.7,28.5,33.5,46.9C8.4,65.4,-25.2,73.1,-42.2,60.2C-59.2,47.4,-59.6,13.9,-49.8,-13.7C-40,-41.3,-20,-63.1,5.4,-64.8C30.7,-66.6,61.5,-48.3,68.5,-24.5Z"
                              transform="translate(100 100)"/>
                    </svg>
                </div>

            </div>
        </div>


    </div>



    <!-- Content
    ================================================== -->
    <section class="fullwidth margin-top-0 padding-top-0 padding-bottom-40" data-background-color="#fcfcfc">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h3 class="headline margin-top-75">
                        <strong class="headline-with-separator">Popular Categories</strong>
                    </h3>
                </div>

                <div class="col-md-12">
                    <div class="categories-boxes-container-alt margin-top-5 margin-bottom-30">

                        <!-- Box -->
                        @foreach($category as $k => $val)
                            <a href="{{ route('list', ['check[]' => $val->id]) }}" class="category-small-box-alt">
                                <i class="im im-icon-Circular-Point"></i>
                                <h4>{{ucfirst($val->category_name)}}</h4>
                                <span class="category-box-counter-alt">12</span>
                                <img src="{{asset('img/logo.png')}}">
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Boxes / End -->


    <!-- Listings -->
    <div class="container margin-top-70">
        <div class="row">

            <div class="col-md-12">
                <h3 class="headline centered margin-bottom-45">
                    <strong class="headline-with-separator">Most Visited Places</strong>
                    <span>Discover top-rated local businesses</span>
                </h3>
            </div>

            <div class="col-md-12">
                <div class="simple-slick-carousel dots-nav">

                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <a href="listings-single-page.html" class="listing-item-container">
                            <div class="listing-item">
                                <img src="images/listing-item-01.jpg" alt="">

                                <div class="listing-badge now-open">Now Open</div>

                                <div class="listing-item-content">
                                    <span class="tag">Eat & Drink</span>
                                    <h3>Tom's Restaurant</h3>
                                    <span>964 School Street, New York</span>
                                </div>
                                <span class="like-icon"></span>
                            </div>
                            <div class="star-rating" data-rating="3.5">
                                <div class="rating-counter">(12 reviews)</div>
                            </div>
                        </a>
                    </div>
                    <!-- Listing Item / End -->

                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <a href="listings-single-page.html" class="listing-item-container">
                            <div class="listing-item">
                                <img src="images/listing-item-02.jpg" alt="">
                                <div class="listing-item-details">
                                    <ul>
                                        <li>Friday, August 10</li>
                                    </ul>
                                </div>
                                <div class="listing-item-content">
                                    <span class="tag">Events</span>
                                    <h3>Sticky Band</h3>
                                    <span>Bishop Avenue, New York</span>
                                </div>
                                <span class="like-icon"></span>
                            </div>
                            <div class="star-rating" data-rating="5.0">
                                <div class="rating-counter">(23 reviews)</div>
                            </div>
                        </a>
                    </div>
                    <!-- Listing Item / End -->

                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <a href="listings-single-page.html" class="listing-item-container">
                            <div class="listing-item">
                                <img src="images/listing-item-03.jpg" alt="">
                                <div class="listing-item-details">
                                    <ul>
                                        <li>Starting from $59 per night</li>
                                    </ul>
                                </div>
                                <div class="listing-item-content">
                                    <span class="tag">Hotels</span>
                                    <h3>Hotel Govendor</h3>
                                    <span>778 Country Street, New York</span>
                                </div>
                                <span class="like-icon"></span>
                            </div>
                            <div class="star-rating" data-rating="2.0">
                                <div class="rating-counter">(17 reviews)</div>
                            </div>
                        </a>
                    </div>
                    <!-- Listing Item / End -->

                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <a href="listings-single-page.html" class="listing-item-container">
                            <div class="listing-item">
                                <img src="images/listing-item-04.jpg" alt="">

                                <div class="listing-badge now-open">Now Open</div>

                                <div class="listing-item-content">
                                    <span class="tag">Eat & Drink</span>
                                    <h3>Burger House</h3>
                                    <span>2726 Shinn Street, New York</span>
                                </div>
                                <span class="like-icon"></span>
                            </div>
                            <div class="star-rating" data-rating="5.0">
                                <div class="rating-counter">(31 reviews)</div>
                            </div>
                        </a>
                    </div>
                    <!-- Listing Item / End -->

                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <a href="listings-single-page.html" class="listing-item-container">
                            <div class="listing-item">
                                <img src="images/listing-item-05.jpg" alt="">
                                <div class="listing-item-content">
                                    <span class="tag">Other</span>
                                    <h3>Airport</h3>
                                    <span>1512 Duncan Avenue, New York</span>
                                </div>
                                <span class="like-icon"></span>
                            </div>
                            <div class="star-rating" data-rating="3.5">
                                <div class="rating-counter">(46 reviews)</div>
                            </div>
                        </a>
                    </div>
                    <!-- Listing Item / End -->

                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <a href="listings-single-page.html" class="listing-item-container">
                            <div class="listing-item">
                                <img src="images/listing-item-06.jpg" alt="">

                                <div class="listing-badge now-closed">Now Closed</div>

                                <div class="listing-item-content">
                                    <span class="tag">Eat & Drink</span>
                                    <h3>Think Coffee</h3>
                                    <span>215 Terry Lane, New York</span>
                                </div>
                                <span class="like-icon"></span>
                            </div>
                            <div class="star-rating" data-rating="4.5">
                                <div class="rating-counter">(15 reviews)</div>
                            </div>
                        </a>
                    </div>
                    <!-- Listing Item / End -->
                </div>

            </div>

        </div>
    </div>
    <!-- Listings / End -->


    <section class="fullwidth margin-top-70 padding-top-75 padding-bottom-70" data-background-color="#f9f9f9">
        <!-- Info Section -->
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h3 class="headline centered">
                        What Our Users Say
                        <span class="margin-top-25">We collect reviews from our users so you can get an honest opinion of what an experience with our website are really like!</span>
                    </h3>
                </div>
            </div>

        </div>
        <!-- Info Section / End -->

        <!-- Categories Carousel -->
        <div class="fullwidth-carousel-container margin-top-20">
            <div class="testimonial-carousel testimonials">

                <!-- Item -->
                <div class="fw-carousel-review">
                    <div class="testimonial-box">
                        <div class="testimonial">Bring to the table win-win survival strategies to ensure proactive
                            domination. At the end of the day, going forward, a new normal that has evolved from
                            generation is on the runway heading towards a streamlined cloud solution user generated
                            content.
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <img src="images/happy-client-01.jpg" alt="">
                        <h4>Jennie Smith <span>Coffee Shop Owner</span></h4>
                    </div>
                </div>

                <!-- Item -->
                <div class="fw-carousel-review">
                    <div class="testimonial-box">
                        <div class="testimonial">Capitalize on low hanging fruit to identify a ballpark value added
                            activity to beta test. Override the digital divide with additional clickthroughs from
                            DevOps. Nanotechnology immersion along the information highway will close the loop.
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <img src="images/happy-client-02.jpg" alt="">
                        <h4>Tom Baker <span>Clothing Store Owner</span></h4>
                    </div>
                </div>

                <!-- Item -->
                <div class="fw-carousel-review">
                    <div class="testimonial-box">
                        <div class="testimonial">Leverage agile frameworks to provide a robust synopsis for high level
                            overviews. Iterative approaches to corporate strategy foster collaborative thinking to
                            further the overall value proposition. Organically grow the holistic world view.
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <img src="images/happy-client-03.jpg" alt="">
                        <h4>Jack Paden <span>Restaurant Owner</span></h4>
                    </div>
                </div>

            </div>
        </div>
        <!-- Categories Carousel / End -->

    </section>


    <!-- Parallax -->
    <div class="parallax"
         data-background="images/slider-bg-02.jpg"
         data-color="#36383e"
         data-color-opacity="0.6"
         data-img-width="800"
         data-img-height="505">

        <!-- Infobox -->
        <div class="text-content white-font">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 col-sm-8">
                        <h2>Streamline Your Business</h2>
                        <p>We’re full-service, local agents who know how to find people and home each together. We use
                            online tools with an unmatched search capability to make you smarter and faster.</p>
                        <a href="listings-list-with-sidebar.html" class="button margin-top-25">Get Started</a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Infobox / End -->

    </div>
    <!-- Parallax / End -->



@endsection
@push('scripts_lib')

@endpush
@push('scripts')
@endpush
