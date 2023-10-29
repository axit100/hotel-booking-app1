@extends('layouts.products')
@push('css_lib')

@endpush
@section('content')


    <!-- Slider
    ================================================== -->
    <div class="listing-slider mfp-gallery-container margin-bottom-0">
        <a href="{{asset('https://cpimg.tistatic.com/05090150/b/7/Ceramic-Sanitary-Ware-Suite.jpg')}}" data-background-image="{{asset('https://cpimg.tistatic.com/05090150/b/7/Ceramic-Sanitary-Ware-Suite.jpg')}}" class="item mfp-gallery" title="Title 1"></a>
        <a href="{{asset('https://5.imimg.com/data5/QM/UA/MY-36039623/sanitary-wares.jpg')}}" data-background-image="{{asset('https://5.imimg.com/data5/QM/UA/MY-36039623/sanitary-wares.jpg')}}" class="item mfp-gallery" title="Title 3"></a>
        <a href="{{asset('https://www.bontena.com/images/articles/home/Best-Ceramic-Sanitary-Ware-Brands-1200.jpg')}}" data-background-image="{{asset('https://www.bontena.com/images/articles/home/Best-Ceramic-Sanitary-Ware-Brands-1200.jpg')}}" class="item mfp-gallery" title="Title 2"></a>
        <a href="{{asset('https://media.licdn.com/dms/image/D5612AQFaBPiVKQPGEw/article-cover_image-shrink_720_1280/0/1676011182349?e=2147483647&v=beta&t=PpDDLsQUKqig521qe43F7EEleVrlqhQOR8p0KRh6NxM')}}" data-background-image="{{asset('https://media.licdn.com/dms/image/D5612AQFaBPiVKQPGEw/article-cover_image-shrink_720_1280/0/1676011182349?e=2147483647&v=beta&t=PpDDLsQUKqig521qe43F7EEleVrlqhQOR8p0KRh6NxM')}}" class="item mfp-gallery" title="Title 4"></a>
    </div>


    <!-- Content
    ================================================== -->
    <div class="container">
        <div class="row sticky-wrapper">
            <div class="col-lg-8 col-md-8 padding-right-30">

                <!-- Titlebar -->
                <div id="titlebar" class="listing-titlebar">
                    <div class="listing-titlebar-title">
                        <h2>{{$listings->company_name}} <span class="listing-tag">{{$listings->category->category_name}}</span></h2>
                        <span>
						<a href="#listing-location" class="listing-address">
							<i class="fa fa-map-marker"></i>
							{{$listings->address}}
						</a>
					</span>
                        <div class="star-rating" data-rating="5">
                            <div class="rating-counter"><a href="#listing-reviews">(12 reviews)</a></div>
                        </div>
                    </div>
                </div>

                <!-- Listing Nav -->
                <div id="listing-nav" class="listing-nav-container">
                    <ul class="listing-nav">
                        <li><a href="#listing-overview" class="active">Overview</a></li>
                        <li><a href="#listing-pricing-list">Pricing</a></li>
                        <li><a href="#listing-location">Location</a></li>
                        <li><a href="#listing-reviews">Reviews</a></li>
                        <li><a href="#add-review">Add Review</a></li>
                    </ul>
                </div>

                <!-- Overview -->
                <div id="listing-overview" class="listing-section">

                    <!-- Description -->

                    <p>
                        Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus.
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.
                    </p>


                    <!-- Listing Contacts -->
                    <div class="listing-links-container">

                        <ul class="listing-links contact-links">

                            @if(!empty($listings->mobile_1))
                                <li><a href="tel:{{$listings->mobile_1}}" class="listing-links"><i class="fa fa-phone"></i> + {{$listings->mobile_1}}</a></li>
                            @endif
                            @if(!empty($listings->mobile_2))
                                <li><a href="tel:{{$listings->mobile_2}}" class="listing-links"><i class="fa fa-phone"></i> + {{$listings->mobile_2}}</a></li>
                            @endif
                            @if(!empty($listings->phone_1))
                                <li><a href="tel:{{$listings->phone_1}}" class="listing-links"><i class="fa fa-phone"></i> + {{$listings->phone_1}}</a></li>
                            @endif
                            @if(!empty($listings->phone_2))
                                <li><a href="tel:{{$listings->phone_2}}" class="listing-links"><i class="fa fa-phone"></i> + {{$listings->phone_2}}</a></li>
                            @endif
                            @if(!empty($listings->phone_3))
                                <li><a href="tel:{{$listings->phone_3}}" class="listing-links"><i class="fa fa-phone"></i> + {{$listings->phone_3}}</a></li>
                            @endif
                            @if(!empty($listings->email_id))
                            <li><a href="mailto:{{$listings->email_id}}" class="listing-links"><i class="fa fa-envelope-o"></i> {{$listings->email_id}}</a></li>
                            @endif
                            @if(!empty($listings->website))
                                <li><a href="http://{{$listings->website}}" target="_blank"  class="listing-links"><i class="fa fa-link"></i>{{$listings->website}}</a></li>
                            @endif
                        </ul>
                        <div class="clearfix"></div>

                        <ul class="listing-links">
                            <li><a href="#" target="_blank" class="listing-links-fb"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                            <li><a href="#" target="_blank" class="listing-links-yt"><i class="fa fa-youtube-play"></i> YouTube</a></li>
                            <li><a href="#" target="_blank" class="listing-links-ig"><i class="fa fa-instagram"></i> Instagram</a></li>
                            <li><a href="#" target="_blank" class="listing-links-tt"><i class="fa fa-twitter"></i> Twitter</a></li>
                        </ul>
                        <div class="clearfix"></div>

                    </div>
                    <div class="clearfix"></div>


                    <!-- Amenities -->
                    <h3 class="listing-desc-headline">Amenities</h3>
                    <ul class="listing-features checkboxes margin-top-0">
                        <li>Elevator in building</li>
                        <li>Friendly workspace</li>
                        <li>Instant Book</li>
                        <li>Wireless Internet</li>
                        <li>Free parking on premises</li>
                        <li>Free parking on street</li>
                    </ul>
                </div>


                <!-- Food Menu -->
                <div id="listing-pricing-list" class="listing-section">
                    <h3 class="listing-desc-headline margin-top-70 margin-bottom-30">Pricing</h3>

                    <div class="pricing-list-container">

                        <!-- Food List -->
                        <h4>Our Products</h4>
                        <ul>
                            <li>
                                <h5>Product - 1</h5>
                                <p>Our product best suited to your requirements you can eaily check...</p>
                                <span>2000 INR</span>
                            </li>
                            <li>
                                <h5>Product - 2</h5>
                                <p>Our product best suited to your requirements you can eaily check...</p>
                                <span>2000 INR</span>
                            </li>
                            <li>
                                <h5>Product - 3</h5>
                                <p>Our product best suited to your requirements you can eaily check...</p>
                                <span>2000 INR</span>
                            </li>
                        </ul>

                    </div>

                </div>
                <!-- Food Menu / End -->


                <!-- Location -->
                <div id="listing-location" class="listing-section">
                    <h3 class="listing-desc-headline margin-top-60 margin-bottom-30">Location</h3>

                    <div id="singleListingMap-container">
                        <div id="singleListingMap" data-latitude="{{$listings->latitude}}" data-longitude="{{$listings->longitude}}" data-map-icon="im im-icon-Map-Marker"></div>
                        <a href="#" id="streetView">Street View</a>
                    </div>
                </div>

                <!-- Reviews -->
                <div id="listing-reviews" class="listing-section">
                    <h3 class="listing-desc-headline margin-top-75 margin-bottom-20">Reviews <span>(12)</span></h3>

                    <!-- Rating Overview -->
                    <div class="rating-overview">
                        <div class="rating-overview-box">
                            <span class="rating-overview-box-total">4.2</span>
                            <span class="rating-overview-box-percent">out of 5.0</span>
                            <div class="star-rating" data-rating="5"></div>
                        </div>

                        <div class="rating-bars">
                            <div class="rating-bars-item">
                                <span class="rating-bars-name">Service <i class="tip" data-tip-content="Quality of customer service and attitude to work with you"></i></span>
                                <span class="rating-bars-inner">
									<span class="rating-bars-rating" data-rating="4.2">
										<span class="rating-bars-rating-inner"></span>
									</span>
									<strong>4.2</strong>
								</span>
                            </div>
                            <div class="rating-bars-item">
                                <span class="rating-bars-name">Value for Money <i class="tip" data-tip-content="Overall experience received for the amount spent"></i></span>
                                <span class="rating-bars-inner">
									<span class="rating-bars-rating" data-rating="2.8">
										<span class="rating-bars-rating-inner"></span>
									</span>
									<strong>2.8</strong>
								</span>
                            </div>
                            <div class="rating-bars-item">
                                <span class="rating-bars-name">Location <i class="tip" data-tip-content="Visibility, commute or nearby parking spots"></i></span>
                                <span class="rating-bars-inner">
									<span class="rating-bars-rating" data-rating="3.7">
										<span class="rating-bars-rating-inner"></span>
									</span>
									<strong>3.7</strong>
								</span>
                            </div>
                            <div class="rating-bars-item">
                                <span class="rating-bars-name">Cleanliness <i class="tip" data-tip-content="The physical condition of the business"></i></span>
                                <span class="rating-bars-inner">
									<span class="rating-bars-rating" data-rating="4.0">
										<span class="rating-bars-rating-inner"></span>
									</span>
									<strong>4.5</strong>
								</span>
                            </div>
                        </div>
                    </div>
                    <!-- Rating Overview / End -->


                    <div class="clearfix"></div>

                    <!-- Reviews -->
                    <section class="comments listing-reviews">
                        <ul>
                            <li>
                                <div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
                                <div class="comment-content"><div class="arrow-comment"></div>
                                    <div class="comment-by">Kathy Brown <i class="tip" data-tip-content="Person who left this review actually was a customer"></i> <span class="date">June 2019</span>
                                        <div class="star-rating" data-rating="5"></div>
                                    </div>
                                    <p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>

                                    <div class="review-images mfp-gallery-container">
                                        <a href="images/review-image-01.jpg" class="mfp-gallery"><img src="images/review-image-01.jpg" alt=""></a>
                                    </div>
                                    <a href="#" class="rate-review"><i class="sl sl-icon-like"></i> Helpful Review <span>12</span></a>
                                </div>
                            </li>

                            <li>
                                <div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /> </div>
                                <div class="comment-content"><div class="arrow-comment"></div>
                                    <div class="comment-by">John Doe<span class="date">May 2019</span>
                                        <div class="star-rating" data-rating="4"></div>
                                    </div>
                                    <p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
                                    <a href="#" class="rate-review"><i class="sl sl-icon-like"></i> Helpful Review <span>2</span></a>
                                </div>
                            </li>

                            <li>
                                <div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
                                <div class="comment-content"><div class="arrow-comment"></div>
                                    <div class="comment-by">Kathy Brown<span class="date">June 2019</span>
                                        <div class="star-rating" data-rating="5"></div>
                                    </div>
                                    <p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>

                                    <div class="review-images mfp-gallery-container">
                                        <a href="images/review-image-02.jpg" class="mfp-gallery"><img src="images/review-image-02.jpg" alt=""></a>
                                        <a href="images/review-image-03.jpg" class="mfp-gallery"><img src="images/review-image-03.jpg" alt=""></a>
                                    </div>
                                    <a href="#" class="rate-review"><i class="sl sl-icon-like"></i> Helpful Review <span>4</span></a>
                                </div>
                            </li>

                            <li>
                                <div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /> </div>
                                <div class="comment-content"><div class="arrow-comment"></div>
                                    <div class="comment-by">John Doe<span class="date">May 2019</span>
                                        <div class="star-rating" data-rating="5"></div>
                                    </div>
                                    <p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
                                    <a href="#" class="rate-review"><i class="sl sl-icon-like"></i> Helpful Review</a>
                                </div>

                            </li>
                        </ul>
                    </section>

                    <!-- Pagination -->
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Pagination -->
                            <div class="pagination-container margin-top-30">
                                <nav class="pagination">
                                    <ul>
                                        <li><a href="#" class="current-page">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- Pagination / End -->
                </div>


                <!-- Add Review Box -->
                <div id="add-review" class="add-review-box">

                    <!-- Add Review -->
                    <h3 class="listing-desc-headline margin-bottom-10">Add Review</h3>
                    <p class="comment-notes">Your email address will not be published.</p>

                    <!-- Subratings Container -->
                    <div class="sub-ratings-container">

                        <!-- Subrating #1 -->
                        <div class="add-sub-rating">
                            <div class="sub-rating-title">Service <i class="tip" data-tip-content="Quality of customer service and attitude to work with you"></i></div>
                            <div class="sub-rating-stars">
                                <!-- Leave Rating -->
                                <div class="clearfix"></div>
                                <form class="leave-rating">
                                    <input type="radio" name="rating" id="rating-1" value="1"/>
                                    <label for="rating-1" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-2" value="2"/>
                                    <label for="rating-2" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-3" value="3"/>
                                    <label for="rating-3" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-4" value="4"/>
                                    <label for="rating-4" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-5" value="5"/>
                                    <label for="rating-5" class="fa fa-star"></label>
                                </form>
                            </div>
                        </div>

                        <!-- Subrating #2 -->
                        <div class="add-sub-rating">
                            <div class="sub-rating-title">Value for Money <i class="tip" data-tip-content="Overall experience received for the amount spent"></i></div>
                            <div class="sub-rating-stars">
                                <!-- Leave Rating -->
                                <div class="clearfix"></div>
                                <form class="leave-rating">
                                    <input type="radio" name="rating" id="rating-11" value="1"/>
                                    <label for="rating-11" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-12" value="2"/>
                                    <label for="rating-12" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-13" value="3"/>
                                    <label for="rating-13" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-14" value="4"/>
                                    <label for="rating-14" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-15" value="5"/>
                                    <label for="rating-15" class="fa fa-star"></label>
                                </form>
                            </div>
                        </div>

                        <!-- Subrating #3 -->
                        <div class="add-sub-rating">
                            <div class="sub-rating-title">Location <i class="tip" data-tip-content="Visibility, commute or nearby parking spots"></i></div>
                            <div class="sub-rating-stars">
                                <!-- Leave Rating -->
                                <div class="clearfix"></div>
                                <form class="leave-rating">
                                    <input type="radio" name="rating" id="rating-21" value="1"/>
                                    <label for="rating-21" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-22" value="2"/>
                                    <label for="rating-22" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-23" value="3"/>
                                    <label for="rating-23" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-24" value="4"/>
                                    <label for="rating-24" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-25" value="5"/>
                                    <label for="rating-25" class="fa fa-star"></label>
                                </form>
                            </div>
                        </div>

                        <!-- Subrating #4 -->
                        <div class="add-sub-rating">
                            <div class="sub-rating-title">Cleanliness <i class="tip" data-tip-content="The physical condition of the business"></i></div>
                            <div class="sub-rating-stars">
                                <!-- Leave Rating -->
                                <div class="clearfix"></div>
                                <form class="leave-rating">
                                    <input type="radio" name="rating" id="rating-31" value="1"/>
                                    <label for="rating-31" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-32" value="2"/>
                                    <label for="rating-32" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-33" value="3"/>
                                    <label for="rating-33" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-34" value="4"/>
                                    <label for="rating-34" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-35" value="5"/>
                                    <label for="rating-35" class="fa fa-star"></label>
                                </form>
                            </div>
                        </div>

                        <!-- Uplaod Photos -->
                        <div class="uploadButton margin-top-15">
                            <input class="uploadButton-input" type="file"  name="attachments[]" accept="image/*, application/pdf" id="upload" multiple/>
                            <label class="uploadButton-button ripple-effect" for="upload">Add Photos</label>
                            <span class="uploadButton-file-name"></span>
                        </div>
                        <!-- Uplaod Photos / End -->

                    </div>
                    <!-- Subratings Container / End -->

                    <!-- Review Comment -->
                    <form id="add-comment" class="add-comment">
                        <fieldset>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name:</label>
                                    <input type="text" value=""/>
                                </div>

                                <div class="col-md-6">
                                    <label>Email:</label>
                                    <input type="text" value=""/>
                                </div>
                            </div>

                            <div>
                                <label>Review:</label>
                                <textarea cols="40" rows="3"></textarea>
                            </div>

                        </fieldset>

                        <button class="button">Submit Review</button>
                        <div class="clearfix"></div>
                    </form>

                </div>
                <!-- Add Review Box / End -->


            </div>


            <!-- Sidebar
            ================================================== -->
            <div class="col-lg-4 col-md-4 margin-top-75 sticky">


                <!-- Verified Badge -->
                <div class="verified-badge with-tip" data-tip-content="Listing has been verified and belongs the business owner or manager.">
                    <i class="sl sl-icon-check"></i> Verified Listing
                </div>

                <!-- Message Vendor -->
                <div id="booking-widget-anchor" class="boxed-widget booking-widget message-vendor margin-top-35">
                    <h3><i class="fa fa-envelope-o"></i> Message Vendor</h3>
                    <div class="row with-forms  margin-top-0">

                        <div class="col-lg-12">
                            <input type="text" placeholder="First and Last Name" value="Tom Smith">
                            <input type="text" placeholder="Email" value="mail@example.com">
                            <input type="text" placeholder="Phone" value="+12 345 678 910">
                            <textarea name="" id="" cols="10" rows="2" placeholder="Message"></textarea>
                        </div>

                        <!-- Preferred Contact Methos Radios -->
                        <div class="col-lg-12">
                            <div class="preferred-contact-method">
                                <h5>Preferred contact method</h5>

                                <div class="preferred-contact-radios">
                                    <div class="radio">
                                        <input id="radio-1" name="radio" type="radio" checked>
                                        <label for="radio-1"><span class="radio-label"></span> Email</label>
                                    </div>

                                    <div class="radio">
                                        <input id="radio-2" name="radio" type="radio">
                                        <label for="radio-2"><span class="radio-label"></span> Phone</label>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- Recaptcha Holder -->
                    <div class="captcha-holder">
                        <!-- Recaptcha goes here -->
                    </div>

                    <!-- Book Now -->
                    <a href="#" class="button book-now fullwidth margin-top-5">Request Pricing</a>
                </div>
                <!-- Book Now / End -->


                <!-- Opening Hours -->
                <div class="boxed-widget opening-hours margin-top-35">
                    <div class="listing-badge now-open">Now Open</div>
                    <h3><i class="sl sl-icon-clock"></i> Opening Hours</h3>
                    <ul>
                        <li>Monday <span>9 AM - 5 PM</span></li>
                        <li>Tuesday <span>9 AM - 5 PM</span></li>
                        <li>Wednesday <span>9 AM - 5 PM</span></li>
                        <li>Thursday <span>9 AM - 5 PM</span></li>
                        <li>Friday <span>9 AM - 5 PM</span></li>
                        <li>Saturday <span>9 AM - 3 PM</span></li>
                        <li>Sunday <span>Closed</span></li>
                    </ul>
                </div>
                <!-- Opening Hours / End -->


                <!-- Contact -->
                <div class="boxed-widget margin-top-35">
                    <div class="hosted-by-title">
                        <h4><span>Hosted by</span> <a href="pages-user-profile.html">Tom Perrin</a></h4>
                        <a href="pages-user-profile.html" class="hosted-by-avatar"><img src="images/dashboard-avatar.jpg" alt=""></a>
                    </div>
                    <ul class="listing-details-sidebar">
                        <li><i class="sl sl-icon-phone"></i> (123) 123-456</li>
                        <!-- <li><i class="sl sl-icon-globe"></i> <a href="#">http://example.com</a></li> -->
                        <li><i class="fa fa-envelope-o"></i> <a href="#">tom@example.com</a></li>
                    </ul>

                    <ul class="listing-details-sidebar social-profiles">
                        <li><a href="#" class="facebook-profile"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                        <li><a href="#" class="twitter-profile"><i class="fa fa-twitter"></i> Twitter</a></li>
                        <!-- <li><a href="#" class="gplus-profile"><i class="fa fa-google-plus"></i> Google Plus</a></li> -->
                    </ul>

                    <!-- Reply to review popup -->
                    <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                        <div class="small-dialog-header">
                            <h3>Send Message</h3>
                        </div>
                        <div class="message-reply margin-top-0">
                            <textarea cols="40" rows="3" placeholder="Your message to Tom"></textarea>
                            <button class="button">Send Message</button>
                        </div>
                    </div>

                    <a href="#small-dialog" class="send-message-to-owner button popup-with-zoom-anim"><i class="sl sl-icon-envelope-open"></i> Send Message</a>
                </div>
                <!-- Contact / End-->


                <!-- Share / Like -->
                <div class="listing-share margin-top-40 margin-bottom-40 no-border">
                    <button class="like-button"><span class="like-icon"></span> Bookmark this listing</button>
                    <span>159 people bookmarked this place</span>

                    <!-- Share Buttons -->
                    <ul class="share-buttons margin-top-40 margin-bottom-0">
                        <li><a class="fb-share" href="#"><i class="fa fa-facebook"></i> Share</a></li>
                        <li><a class="twitter-share" href="#"><i class="fa fa-twitter"></i> Tweet</a></li>
                        <li><a class="gplus-share" href="#"><i class="fa fa-google-plus"></i> Share</a></li>
                        <!-- <li><a class="pinterest-share" href="#"><i class="fa fa-pinterest-p"></i> Pin</a></li> -->
                    </ul>
                    <div class="clearfix"></div>
                </div>

            </div>
            <!-- Sidebar / End -->

        </div>
    </div>



@endsection
@push('scripts_lib')

@endpush
@push('scripts')
@endpush
