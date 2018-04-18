@extends('layouts.app')

@section('title', 'Usługi')

@section('content')
    <div class="ui layout">
        <!-- grid -->
        <div class="ui grid container stackable centered">
            <div class="row">
                <div class="ui twelve wide tablet twelve wide computer ten wide widescreen ten wide large screen column property-section-boxed">

                    <br>

                    <div class="white-section shadow-sq">
                        <div class="inner-section">

                            <div class="ui grid">
                                <div class="row">

                                    <!-- Left-->
                                    <div class="ui twelve wide mobile six wide computer column">

                                        <!-- Slick aici-->

                                        <div class="property-image-wrapper">
                                            <div class="sq-slick carousel-sq" data-center-mode="true" data-center-padding="0" data-show-slides="1" data-scroll-slides="1" data-mobile-center-padding="0" data-tablet-arrows="false" data-mobile-arrows="false" data-fade="true" data-ease="linear" data-speed="500" data-tablet-fade="false" data-tablet-ease="ease" data-tablet-speed="300" data-mobile-fade="false" data-mobile-ease="ease" data-mobile-speed="300">

                                                <!-- Slide 01-->
                                                <div>
                                                    <div class="caption-content"></div>
                                                    <div class="image-wrapper">
                                                        <div class="image-inner">
                                                            <img class="image-sq slick-img" src="{{ asset('/images/venues/after-beng-club-3.jpg') }}" alt="" data-gallery="gallery" data-caption="Car 01">
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Slide 02-->
                                                <div>
                                                    <div class="caption-content"></div>

                                                    <div class="image-wrapper">
                                                        <div class="image-inner">
                                                            <img class="image-sq slick-img" src="assets/images/property/property_big_01.jpg" alt="" data-gallery="gallery" data-caption="Car 02">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Slide 03-->
                                                <div>
                                                    <div class="caption-content"></div>

                                                    <div class="image-wrapper">
                                                        <div class="image-inner">
                                                            <img class="image-sq slick-img" src="assets/images/property/property_big_02.jpg" alt="" data-gallery="gallery" data-caption="Car 03">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Slide 04-->
                                                <div>
                                                    <div class="caption-content"></div>

                                                    <div class="image-wrapper">
                                                        <div class="image-inner">
                                                            <img class="image-sq slick-img" src="assets/images/property/property_big_03.jpg" alt="" data-gallery="gallery" data-caption="Car 04">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <a class="host-sq" href="vendor_details.html">
                                                <span class="avatar-sq">
                                                    <img src="{{ asset('new-assets/images/avatar/avatar_04.jpg') }} " alt="">
                                                </span>
                                                <p class="host-name-sq">
                                                    Dustin Porter
                                                </p>

                                            </a>
                                        </div>

                                        <h1 class="title-sq">Audi A3 2.0 TDI</h1>

                                        <div class="icons-row">
                                            <div class="icons-column">
                                                <div class="rating-sq">
                                                    <i class="icon icon-heart"></i>
                                                    8.9
                                                </div>
                                            </div>
                                            <div class="icons-column">
                                                <i class="icon icon-ac"></i> A/C
                                            </div>
                                            <div class="icons-column">
                                                <i class="icon icon-gearbox"></i> A
                                            </div>
                                            <div class="icons-column">
                                                <i class="icon icon-user-circle"></i> x 4
                                            </div>
                                        </div>

                                        <p class="description-sq">
                                            In hac habitasse platea dictumst. Integer quis tortor enim. Integer et elit nec magna ultricies convallis. In venenatis eu erat et facilisis. Vestibulum congue enim nisl. Fusce arcu enim, porta a auctor vel, hendrerit a libero. Vivamus vel dapibus sem.
                                        </p>

                                    </div>

                                    <!-- Right -->
                                    <div class="ui twelve wide mobile six wide computer column">

                                        <div class="property-checkout-container main-infos">

                                            <div class="div-c">
                                                <label>Pick up location</label>
                                                <input type="text" placeholder=" ">
                                            </div>

                                            <div class="div-c">
                                                <label>Return location</label>
                                                <input type="text" placeholder=" ">
                                            </div>
                                            <div class="div-c">
                                                <input type="checkbox" id="checkbox1">
                                                <label for="checkbox1">Return car to the same location</label>
                                            </div>


                                            <div class="div-c inline-2 inline-check-in">

                                                <div class="divided-column calendar-sq" id="sticky-box-rangestart">
                                                    <label class="placeholder">Check in</label>

                                                    <div class="relative-sq">
                                                        <input type="text" class="filter" value="" required placeholder="date">

                                                        <i class="icon icon-little-arrow filters-arrow"></i>
                                                    </div>

                                                </div>

                                                <div class="divided-column calendar-sq" id="sticky-box-rangeend">

                                                    <label class="placeholder">Check Out</label>

                                                    <input type="text" class="filter" value="" required placeholder="date">

                                                </div>
                                            </div>

                                            <div class="div-c extras-sq">
                                                <label class="placeholder">Extras</label>

                                                <div class="divided-column">
                                                    <input type="checkbox" id="checkbox2">
                                                    <label for="checkbox2">Child Seat</label>

                                                    <span class="value-sq">$10</span>
                                                </div>

                                                <div class="divided-column">
                                                    <input type="checkbox" id="checkbox3">
                                                    <label for="checkbox3">Driver</label>

                                                    <span class="value-sq">$13</span>
                                                </div>

                                                <div class="divided-column">
                                                    <input type="checkbox" id="checkbox4">
                                                    <label for="checkbox4">Neque consequa es nterdum erat consequa es nterdum erat</label>

                                                    <span class="value-sq">$10</span>
                                                </div>

                                                <div class="divided-column">
                                                    <input type="checkbox" id="checkbox5">
                                                    <label for="checkbox5">Phasellus sed neque consequa es nterdum erat</label>

                                                    <span class="value-sq">$10</span>
                                                </div>

                                            </div>


                                            <div class="div-c total-sq">
                                                <div class="divided-column">
                                                    <label class="placeholder">Total</label>
                                                    <span class="value-sq">$200</span>

                                                </div>
                                            </div>

                                            <a class="button-sq fullwidth-sq font-weight-bold-sq" href="">Instant Booking</a>

                                        </div>


                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <h3>Location</h3>

                    <div class="map-wrapper shadow-sq">
                        <div id="map"></div>
                    </div>

                    <h3>Reviews</h3>

                    <div class="reviews-header">
                        <div class="rating-big">
                            <div class="rating-badge">
                                <span>9.2</span>
                                <i class="icon icon-heart"></i>
                            </div>
                            <div class="rating-info">
                                <p>More than <strong>95%</strong> of guests recommend this place</p>
                            </div>
                        </div>
                        <div class="rating-percentage">
                            <div class="rating-column">
                                <p class="rating-label"><strong>Accuracy</strong></p>
                                <div class="basic-progressbar">
                                    <div class="inner" style="width:75%"></div>
                                </div>
                            </div>

                            <div class="rating-column">
                                <p class="rating-label"><strong>Communication</strong></p>
                                <div class="basic-progressbar">
                                    <div class="inner" style="width:55%"></div>
                                </div>
                            </div>

                            <div class="rating-column">
                                <p class="rating-label"><strong>Location</strong></p>
                                <div class="basic-progressbar">
                                    <div class="inner" style="width:25%"></div>
                                </div>
                            </div>

                            <div class="rating-column">
                                <p class="rating-label"><strong>Cleanliness</strong></p>
                                <div class="basic-progressbar">
                                    <div class="inner" style="width:80%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="reviews-search">
                        <form action="#" class="">
                            <input id="reviews-search" type="text" placeholder="Search reviews" value="" required="">
                            <label><i class="icon icon-search"></i></label>
                        </form>
                    </div>

                    <div class="reviews-feed">
                        <div class="reviews-row">
                            <div class="review-meta">
                                <a class="avatar-sq verified-sq" href="vendor_details.html">
                                    <img src="{{ asset('new-assets/images/avatar/avatar_01.jpg') }}" alt="">
                                </a>
                                <a class="name-sq" href="vendor_details.html">Danny Martinez</a>
                            </div>

                            <div class="comment-sq">
                                <span class="date-sq">12 september 2017</span>

                                <p>As the saying goes: “Hospitality is making your guests feel at home, even though you wish they were". So please treat the place and the building neighbours as you would do your own.</p>
                            </div>
                        </div>

                        <div class="reviews-row">
                            <div class="review-meta">
                                <a class="avatar-sq verified-sq" href="vendor_details.html">
                                    <img src="{{ asset('new-assets/images/avatar/avatar_02.jpg') }}" alt="">
                                </a>
                                <a class="name-sq" href="vendor_details.html">Nathaniel Brown</a>
                            </div>
                            <div class="comment-sq">
                                <span class="date-sq">24 august 2017</span>

                                <p>With your budget in mind, it is easy to plan a chartered yacht vacation. Companies often have a fleet of sailing vessels that can accommodate parties of various sizes. You may want to make it a more intimate trip with only close family. There are charters that can be rented for as few as two people.</p>
                            </div>
                        </div>

                        <div class="reviews-row">
                            <div class="review-meta">
                                <a class="avatar-sq verified-sq" href="vendor_details.html">
                                    <img src="{{ asset('new-assets/images/avatar/avatar_03.jpg') }}" alt="">
                                </a>
                                <a class="name-sq" href="vendor_details.html">Adele Burke</a>
                            </div>

                            <div class="comment-sq">
                                <span class="date-sq">06 May 2017</span>

                                <div class="ui accordion more-sq">
                                    <div class="title">
                                        <a class="accordion-trigger more-trigger right-sq" data-more="More" data-less="Less">
                                            <i class="icon icon-arrow-down-122"></i>
                                        </a>
                                        <p>It is important to choose a hotel that makes you feel comfortable – contemporary or traditional furnishings, local decor or international, formal or relaxed. The ideal hotel directory should let you know of the options available.
                                        </p>

                                    </div>

                                    <div class="content">
                                        <p>If it matters that your hotel is, for example, on the beach, close to the theme park, or convenient for the airport, then location is paramount. Any decent directory should offer a location map of the hotel and its surroundings. There should be distance charts to the airport offered as well as some form of interactive map.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="reviews-row">

                            <div class="review-meta">
                                <div class="avatar-sq verified-sq my-avatar-sq">
                                    <img src="{{ asset('new-assets/images/avatar/avatar_04.jpg') }}" alt="">
                                </div>
                                <p class="name-sq">Me</p>
                            </div>

                            <div class="comment-sq">
                                <textarea class="comment-textarea"  cols="30" rows="5" placeholder="Comment here"></textarea>
                                <br>
                                <br>
                                <a class="button-sq font-weight-extrabold-sq small-sq float-right-sq" href="">Post comment</a>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
