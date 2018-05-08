@extends('layouts.app')

@section('content')
    <div class="ui layout">
        <!-- grid -->
        <div class="ui grid container stackable centered">
            <div class="row">
                <div class="ui twelve wide tablet twelve wide computer ten wide widescreen ten wide large screen column property-section-boxed">
                    <div class="typo-section-sq top-default">
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
                                                                <img class="image-sq slick-img" src="assets/images/property/cover_photo.jpg" alt="" data-gallery="gallery" data-caption="Car 01">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Slide 02-->
                                                    <div>
                                                        <div class="caption-content"></div>

                                                        <div class="image-wrapper">
                                                            <div class="image-inner">
                                                                <img class="image-sq slick-img" src="assets/images/property/cover_photo.jpg" alt="" data-gallery="gallery" data-caption="Car 02">
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                                <a class="host-sq" href="vendor_details.html">
													<span class="avatar-sq">
														<img src="assets/images/avatar/avatar_04.jpg" alt="">
													</span>
                                                    <p class="host-name-sq">
                                                        Dustin Porter
                                                    </p>

                                                </a>
                                            </div>

                                        </div>

                                        <!-- Right -->
                                        <div class="ui twelve wide mobile six wide computer column">


                                            <div class="completed-percentage">
                                                <p><strong>65%</strong> completed</p>
                                                <div class="basic-progressbar">
                                                    <div class="inner" style="width:75%"></div>
                                                </div>
                                            </div>

                                            <h1 class="title-sq">Audi A3 2.0 TDI</h1>
                                            <div class="icons-row">
                                                <div class="icons-column">
                                                    <div class="rating-sq">
                                                        <i class="icon icon-heart"></i>
                                                        8.9
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="ui twelve wide tablet twelve wide computer ten wide widescreen ten wide large screen column editable">

                    <div class="typo-section-sq bottom-default">

                        <h3 class="complete-sq title-sq">Car Details</h3>
                        <p>People searching on MyBNB can filter by listing basics to find a car that matches their needs.</p>

                        <div class="div-c">
                            <div class="divided-column">
                                <label>Car Type</label>
                                <select class="dropdown">
                                    <option value="0">Regular Two Door</option>
                                    <option value="1">Regular Four Door</option>
                                    <option value="2">Station Wagons</option>
                                    <option value="3">Minivans</option>
                                    <option value="4">Sports</option>
                                    <option value="5">Luxury</option>
                                </select>
                            </div>
                        </div>

                        <div class="div-c inline-3">
                            <div class="divided-column">
                                <label>No of Seats</label>
                                <select class="dropdown">
                                    <option value="0">2</option>
                                    <option value="1">4</option>
                                    <option value="2">6</option>
                                    <option value="3">8</option>
                                    <option value="4">9</option>
                                    <option value="5">10+</option>
                                </select>
                            </div>

                            <div class="divided-column">
                                <label>Gearbox</label>
                                <select class="dropdown">
                                    <option value="0">Manual</option>
                                    <option value="1">Auto</option>

                                </select>
                            </div>

                            <div class="divided-column">
                                <label>Fuel</label>
                                <select class="dropdown">
                                    <option value="0">Diesel</option>
                                    <option value="1">Gas</option>
                                    <option value="2">Other</option>
                                </select>
                            </div>
                        </div>

                        <hr class="padded-sq">

                        <h3 class="complete-sq title-sq">Description</h3>
                        <p>People searching on MyCar can filter by listing basics to find a car that matches their needs.</p>

                        <div class="div-c">
                            <div class="div-c">
                                <label>Listing Title</label>
                                <input type="text" placeholder="Your listing title">
                            </div>
                        </div>

                        <div class="div-c">
                            <div class="div-c">
                                <label>Listing Description</label>
                                <textarea  cols="30" rows="5" placeholder="Be clear and descriptive"></textarea>
                            </div>
                        </div>

                        <div class="div-c">
                            <div class="div-c">
                                <label>Rules</label>
                                <textarea  cols="30" rows="5" placeholder="Be clear and descriptive"></textarea>
                            </div>
                        </div>

                        <p>You can add more details to tell travelers about your space and hosting style.</p>

                        <hr class="padded-sq">

                        <h3 class="complete-sq title-sq">Amenities</h3>
                        <p>Every space on MyBNB is unique. Highlight what makes your listing welcoming so that it stands out to guests who want to stay in your area.</p>

                        <div class="div-c inline-3">

                            <div class="divided-column">
                                <input type="checkbox" id="checkbox4">
                                <label for="checkbox4">A/C</label>
                            </div>

                            <div class="divided-column">
                                <input type="checkbox" id="checkbox5">
                                <label for="checkbox5">Bluetooth</label>
                            </div>

                            <div class="divided-column">
                                <input type="checkbox" id="checkbox6">
                                <label for="checkbox6">Heated Seats</label>
                            </div>

                            <div class="divided-column">
                                <input type="checkbox" id="checkbox7">
                                <label for="checkbox7">Child Seat</label>
                            </div>

                            <div class="divided-column">
                                <input type="checkbox" id="checkbox18">
                                <label for="checkbox18">Displays</label>
                            </div>

                            <div class="divided-column">
                                <input type="checkbox" id="checkbox8">
                                <label for="checkbox8">HiFi</label>
                            </div>

                        </div>

                        <hr class="padded-sq">

                        <h3 class="complete-sq title-sq">Location</h3>
                        <p>Every space on MyBNB is unique. Highlight what makes your listing welcoming so that it stands out to guests who want to stay in your area.</p>

                        <div style="height:300px;" class="shadow-sq">
                            <div id="map"></div>
                        </div>
                        <br>

                        <div class="div-c inline-3 sizes-1-3">
                            <div class="divided-column">
                                <label>Country</label>
                                <select name="dropdown"  class="dropdown">
                                    <option value="1">Item 01</option>
                                    <option value="2">Item 02</option>
                                    <option value="3">Item 03</option>
                                    <option value="4">Item 04</option>
                                    <option value="5">Item 05</option>
                                </select>
                            </div>

                            <div class="divided-column">
                                <label>Street Adress</label>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <div class="div-c inline-3">
                            <div class="divided-column">
                                <label>City</label>
                                <select name="dropdown"  class="dropdown">
                                    <option value="1">Item 01</option>
                                    <option value="2">Item 02</option>
                                    <option value="3">Item 03</option>
                                    <option value="4">Item 04</option>
                                    <option value="5">Item 05</option>
                                </select>
                            </div>

                            <div class="divided-column">
                                <label>State</label>
                                <input type="text" placeholder="">
                            </div>

                            <div class="divided-column">
                                <label>ZIP Code</label>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <hr class="padded-sq">

                        <h3 class="complete-sq title-sq">Photos</h3>
                        <p>Every space on MyBNB is unique. Highlight what makes your listing welcoming so that it stands out to guests who want to stay in your area.</p><br>

                        <p class="description-sq alert-message">
                            <i class="icon icon-pin1"></i>
                            Pin the cover photo
                        </p>

                        <div class="ui grid">
                            <div class="row photo-upload">
                                <div class="ui four wide computer six wide tablet twelve wide mobile column">

                                    <div class="photo-upload-item">
                                        <div class="image-wrapper">
                                            <img class="image-sq" src="assets/images/host/host_01.jpg" alt="">
                                        </div>

                                        <a href="" class="remove"><i class="icon icon-close2"></i></a>
                                        <a href="" class="cover-photo-sq"><i class="icon icon-pin1"></i></a>

                                        <textarea  cols="30" rows="2" placeholder="What are the highlights of this photo?"></textarea>


                                    </div>
                                </div>

                                <div class="ui four wide computer six wide tablet twelve wide mobile column">

                                    <div class="photo-upload-item">
                                        <div class="image-wrapper">
                                            <img class="image-sq" src="assets/images/host/host_02.jpg" alt="">
                                        </div>

                                        <a href="" class="remove"><i class="icon icon-close2"></i></a>
                                        <a href="" class="cover-photo-sq"><i class="icon icon-pin1"></i></a>

                                        <textarea  cols="30" rows="2" placeholder="What are the highlights of this photo?"></textarea>


                                    </div>
                                </div>

                                <div class="ui four wide computer six wide tablet twelve wide mobile column">
                                    <div class="photo-upload-item">
                                        <a href="" class="add-photo">
                                            <i class="icon icon-add-wishlist"></i>
                                            Add Photo
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <hr class="padded-sq">

                        <h3 class="complete-sq title-sq">Prices</h3>
                        <p>Every space on MyBNB is unique. Highlight what makes your listing welcoming so that it stands out to guests who want to stay in your area.</p>

                        <div class="div-c one-label">
                            <label>Base Price</label>

                            <div class="divided-column">
                                <div class="base-price-wrapper">

                                    <select name="dropdown" class="dropdown post-curency">
                                        <option value="0">USD</option>
                                        <option value="1">EUR</option>
                                        <option value="2">GBP</option>
                                        <option value="2">RON</option>
                                    </select>

                                    <input type="text" class="base-price-input" value="" required="" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="div-c">
                            <div class="divided-column">
                                <label>Cleaning Fee</label>
                                <div class="info-wrapper inside-sq ">
                                    <input type="text" placeholder="Type here">
                                    <a class="extra-info" href="">USD <i class="icon icon icon-info-full"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label>Monthly Discount</label>
                                <select class="dropdown">
                                    <option value="0">7%</option>
                                    <option value="1">10%</option>
                                    <option value="2">13%</option>
                                </select>
                            </div>

                            <div class="divided-column">
                                <label>Weekly Discount</label>
                                <select class="dropdown">
                                    <option value="0">4%</option>
                                    <option value="1">8%</option>
                                    <option value="2">12%</option>
                                    <option value="2">16%</option>
                                </select>
                            </div>
                        </div>

                        <hr class="padded-sq">

                        <a class="button-sq fullwidth-sq font-weight-bold-sq" href="">Apply Updates</a>

                    </div>




                </div>


            </div>


        </div>


    </div>

@endsection