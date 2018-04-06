@extends('layouts.app')

@section('title', 'Venue')

@section('content')
    <!--BASIC LAYOUT-->

    <div class="property-section-default">

        <div class="image-wrapper">
            <div class="image-inner">
                <img class="image-sq slick-img" src="{{ asset('new-assets/images/hero/hero_big_32.jpg') }}" alt="" data-gallery="gallery"
                     data-caption="Cover Photo">
            </div>
        </div>

        <div class="property-main-content">
            <div class="ui grid container stackable app layout right side">
                <div class="row">
                    <div class="ui column main-column">

                        <h1 class="title-sq">{{ $name }}</h1>

                        <div class="rating-sq">
                            <span>9.4</span>
                            <i class="icon icon-heart-line"></i>
                        </div>

                        <div class="location-sq">
                            <i class="icon icon-location-pin-2"></i>
                            {{ $street_address }}
                        </div>

                        <div class="icons-row">
                            <div class="icons-column">
                                <i class="icon icon-account-group-5"></i>
                                do 240 osob
                            </div>
                            <div class="icons-column">
                                <i class="icon icon-home-3"></i>
                                150 m²
                            </div>
                            <div class="icons-column">
                                <i class="icon icon-user-circle"></i>
                                120 stojąco
                            </div>
                            <div class="icons-column">
                                <i class="icon icon-armchair-1"></i>
                                64 siedząco
                            </div>
                        </div>

                        <div class="host-sq">
                            <a href="vendor_details.html" class="avatar-sq">
                                <img src="{{ asset('new-assets/images/avatar/avatar_04.jpg') }}" alt="">
                            </a>
                            <span class="host-right-sq">
                                <a class="host-name-sq" href="vendor_details.html">Dustin Porter</a>
                                <a class="host-contact-link-sq modal-ui-trigger" href="" data-trigger-for="contact">Contact me</a>
                            </span>

                        </div>

                    </div>

                    <div class="ui column side-column">

                        <div class="property-sticky-box-wrapper">

                            <div class="sticky-element sticky-desktop sticky-large-desktop under-ths burger-mobile-modal search-visible"
                                 data-burger="menu04">

                                <a href=""
                                   class="modal-trigger close-sq hamburger hamburger-spin item hidden-tablet hidden-desktop hidden-large-desktop"
                                   data-trigger-for="menu04">
                                        <span class="hamburger-box">
                                          <span class="hamburger-inner"></span>
                                        </span>
                                </a>

                                <div class="property-sticky-box">
                                    <div class="price-tag-sq">
                                        <span class="price-sq">od 250 PLN</span>
                                        <span class="per-sq" data-text-mobile="/ " data-text="za ">3h</span>
                                    </div>

                                    <div class="button-sq font-weight-extrabold-sq mobile-fixed-trigger hidden-desktop hidden-large-desktop hidden-tablet modal-trigger"
                                         data-trigger-for="menu04">Skontaktuj się
                                    </div>

                                    <div class="mobile-fixed-section">
                                        <div class="sticky-box-content">

                                                <div class="twelve wide column">
                                                    <ul class="description-list" style="font-size:10pt">
                                                        <li>
                                                            <div>
                                                                <p>Cena za godzine:</p>
                                                                <strong style="float: right">100 PLN</strong>
                                                            </div>
                                                        </li>



                                                        <li>
                                                            <div><p>Cena za dzien:</p>
                                                                <strong style="float: right">1200 PLN</strong></div>
                                                        </li>

                                                        <li>
                                                            <div><p>Kaucja:</p>
                                                                <strong style="float: right">500zl</strong></div>
                                                        </li>
                                                        <li>
                                                            <div class="ui internally celled grid">
                                                            <div class="row" style="padding-right: 20px; padding-left: 20px;">
                                                                <div class="four wide column" style="padding-right: 1%; padding-left:0%;"> <button class="social_icons facebook" ><i class="fa fa-facebook"></i>
                                                                    </button></div>

                                                                <div class="four wide column" style="padding-right: 1%; padding-left:1%;"><button class="column social_icons instagram" ><i class="fa fa-instagram"></i>
                                                                </button></div>
                                                                <div class="four wide column" style="padding-right: 0%;  padding-left:1%;"><button class="column social_icons tripadvisor" ><i class="fa fa-tripadvisor"></i>
                                                                    </button></div>
                                                            </div></div>
                                                        </li>



        <style>
            div.soc_buttons{
                width:100%;
            }

            button.social_icons{
                font-size: 15px;
                width: 100%;

                border: 1px;
                border-style: inset;
                background-color: white;
            }
            button.social_icons.facebook {
                border-color: dodgerblue;
                color: dodgerblue;
            }
            button.social_icons.instagram {
                border-color: deeppink;
                color: deeppink;
            }
            button.social_icons.tripadvisor {
                border-color: forestgreen;
                color: forestgreen;
            }
            button.button_call{
                width: 100%;
                border: 1px;
                border-style: solid;

                background-color: white;
                color:orangered;
                border-bottom-color: orangered;
            }
            button.button_message{
                width: 100%;
                border: 1px;
                border-style: solid;

                background-color: white;
                color:dodgerblue;
                border-bottom-color: dodgerblue;
            }




        </style>



                                                        <li>
                                                            <div>
                                                                <button class="button_call"><i class="fa fa-phone" style="padding-right: 10px;"></i> Zadzwon do nas
                                                                </button>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div>
                                                                <button class="button_message"><i class="fa fa-commenting" style="padding-right: 10px;"></i>  Czat s nami
                                                                </button>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>





                                            <button class="button-sq fullwidth-sq font-weight-extrabold-sq">Zarezerwuj teraz
                                            </button>
                                        </div>

                                        <div class="sticky-box-wishlist">
                                            <div class="wishlist-sq">
                                                <a href=""><i class="icon icon-filter-heart"></i>Zachowaj</a>
                                            </div>

                                            <div class="share-sq">
                                                <a href=""><i class="icon icon-share"></i>Udostępnij</a>
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

    </div>

    <header class="header-section mhs header-sticky header-is-bottom is-half">
        <div class="header-content">
            <div class="ui container stackable grid">

                <div class="header-item header-left">
                </div>

                <div class="header-item header-center ">
                </div>

                <div class="header-item header-right flex-align-left flex-grow-true">

                    <div class="menu-default menu-mobile-vertical" data-burger="menu02">

                        <ul class="main-menu anchor-menu">

                            <li class="active"><a href="#section-01" class="item">
                                    <span>O przestrzeni</span>
                                </a>
                            </li>

                            <li><a href="#section-02" class="item">
                                    <span>Photos</span>
                                </a>
                            </li>

                            <li><a href="#section-03" class="item">
                                    <span>Location</span>
                                </a>
                            </li>

                            <li><a href="#section-04" class="item">
                                    <span>Reviews</span>
                                </a>
                            </li>

                            <li><a href="#section-05" class="item">
                                    <span>The Host</span>
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </header>

    <!-- grid -->
    <div class="ui grid container stackable app layout right side">

        <div class="row">

            <div class="ui column main-column" role="main">

                <div class="section-container" id="section-01">

                    <div class="typo-section-sq top-default bottom-default">
                        <h3>O przestrzeni</h3>

                        <p>Our house is a wood and glass house, built in the 21th century's first years. A large living
                            room widely glazed with a fireplace, two large sofas and the "chief's armchair" and a
                            kitchen corner (washdishes).
                            <br><br>
                            Cras nec felis nibh. Etiam consequat ligula ac dolor aliquet vulputate. Quisque sagittis
                            bibendum enim, et auctor mi faucibus at. Nunc nec nisi nulla. Donec eget sollicitudin diam.
                            Nulla quis ligula eget mi euismod eleifend vitae eu lectus. Suspendisse potenti.<a href="#section-cena">
                                ...
                            </a></p>

                        <div class="button-sq small-sq see-through-sq modal-ui-trigger" data-trigger-for="contact">
                            message us
                        </div>

                        <div class="button-sq link-sq small-sq float-right-sq">
                            <i class="icon icon-share"></i>
                            share
                        </div>

                    </div>

                    <div class="typo-section-sq bottom-default">
                        <h5>Najważniejsze</h5>
                        <div class="ui grid moved">
                            <div class="twelve wide mobile six wide tablet six wide computer column">
                                <ul class="description-list">
                                    <li>
                                        <i class="icon icon-account-group-5"></i>
                                        <div>
                                            <p>Number of guests:</p>
                                            <strong>4</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <i class="icon icon-bath-tub"></i>
                                        <div>
                                            <p>Bathrooms:</p>
                                            <strong>2</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <i class="icon icon-bed-double"></i>
                                        <div><p>Bed:</p>
                                            <strong>3 - Real Bed</strong>
                                        </div>
                                    </li>
                                </ul>


                            </div>

                            <div class="twelve wide mobile six wide tablet six wide computer column">
                                <ul class="description-list">
                                    <li>
                                        <i class="icon icon-building-7"></i>
                                        <div>
                                            <p>Property:</p>
                                            <strong>Apartment</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <i class="icon icon-door-simple"></i>
                                        <div>
                                            <p>Room Type:</p>
                                            <strong>Entire Apartment </strong>

                                        </div>
                                    </li>

                                    <li>
                                        <i class="icon icon-house"></i>
                                        <div><p>Check In / Out:</p>
                                            <strong>1:00 PM</strong> / <strong>11:00 AM</strong></div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="typo-section-sq bottom-default">
                        <h5>Dodatkowe atuty</h5>

                        <div class="ui grid moved">
                            <div class="ui column">
                                <div class="ui accordion more-sq">
                                    <div class="title">
                                        <div class="ui grid">
                                            <a class="accordion-trigger more-trigger" data-more="More" data-less="Less">
                                                <i class="icon icon-arrow-down-122"></i>
                                            </a>

                                            <div class="twelve wide mobile six wide tablet four wide computer column">
                                                <ul class="description-list">
                                                    <li>
                                                        <i class="icon icon-wifi-modem-2"></i>
                                                        <div><p>Wifi</p></div>
                                                    </li>

                                                    <li>
                                                        <i class="icon icon-television"></i>
                                                        <div><p>TV</p></div>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="twelve wide mobile six wide tablet four wide computer column">
                                                <ul class="description-list">
                                                    <li>
                                                        <i class="icon icon-radio-2"></i>
                                                        <div><p>Hifi System</p></div>
                                                    </li>

                                                    <li>
                                                        <i class="icon icon-radio-1"></i>
                                                        <div><p>Radio</p></div>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div class="twelve wide mobile six wide tablet four wide computer column">
                                                <ul class="description-list">
                                                    <li>
                                                        <i class="icon icon-air-heater"></i>
                                                        <div><p>Air Heater</p></div>
                                                    </li>

                                                    <li>
                                                        <i class="icon icon-fitness-center"></i>
                                                        <div><p>Gym</p></div>
                                                    </li>


                                                </ul>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="content">
                                        <div class="ui grid">
                                            <div class="twelve wide mobile six wide tablet four wide computer column">
                                                <ul class="description-list">
                                                    <li>
                                                        <i class="icon icon-teddy-bear"></i>
                                                        <div><p>Playground</p></div>
                                                    </li>

                                                    <li>
                                                        <i class="icon icon-house"></i>
                                                        <div><p>Iron</p></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="twelve wide mobile six wide tablet four wide computer column">
                                                <ul class="description-list">
                                                    <li>
                                                        <i class="icon icon-fire-extinguisher"></i>
                                                        <div><p>Fire Extinguisher</p></div>
                                                    </li>
                                                    <li>
                                                        <i class="icon icon-cc-camera-2"></i>
                                                        <div><p>Camera</p></div>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div class="twelve wide mobile six wide tablet four wide computer column">
                                                <ul class="description-list">
                                                    <li>
                                                        <i class="icon icon-air-conditioner"></i>
                                                        <div><p>A.C.</p></div>
                                                    </li>
                                                    <li>
                                                        <i class="icon icon-safe-1"></i>
                                                        <div><p>Big Safe</p></div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="typo-section-sq bottom-default" id="section-cena">
                        <h5>Cena i zasady rezerwacji</h5>
                        <div class="ui grid moved">
                            <div class="twelve wide column">
                                <ul class="description-list">
                                    <li>
                                        <div>
                                            <p>Extra people:</p>
                                            <strong>$10 / night after 2 guests</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <div><p>Cleaning Fee:</p>
                                            <strong>$29</strong></div>
                                    </li>

                                    <li>
                                        <div><p>Security Deposit:</p>
                                            <strong>$234</strong></div>
                                    </li>

                                    <li>
                                        <div><p>Weekly discount:</p>
                                            <strong>5%</strong></div>
                                    </li>
                                    <li>
                                        <div><p>Monthly discount:</p>
                                            <strong>5%</strong></div>
                                    </li>
                                    <li>
                                        <div><p>Cancellation</p>
                                            <strong class="accent-color">Moderate</strong></div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>

                    <div class="typo-section-sq bottom-default">
                        <h5>Description</h5>

                        <div class="ui grid moved">
                            <div class="twelve wide column">
                                <p>
                                    <strong>Sleeping Arrangements</strong>
                                </p>

                                <ul class="description-list desc-icon-style inline-2">
                                    <li>
                                        <i class="icon icon-bed-double"></i>
                                        <span>2 Bedrooms</span>
                                        <em>2 queen bed</em>
                                    </li>

                                    <li>
                                        <i class="icon icon-couch"></i>
                                        <span>Common spaces</span>
                                        <em>1 couch</em>
                                    </li>

                                    <li>
                                        <i class="icon icon-bed-single"></i>
                                        <span>1 Bedroom</span>
                                        <em>2 beds</em>
                                    </li>

                                    <li>
                                        <i class="icon icon-couch"></i>
                                        <span>Common spaces</span>
                                        <em>1 couch</em>
                                    </li>

                                </ul>


                                <strong>The Space</strong>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur faucibus magna vel
                                    ex semper, in pharetra justo pulvinar. Donec non quam vitae justo mattis vestibulum
                                    a nec nisi. Morbi mi felis, ultrices vitae risus consectetur, porta ultrices sapien.
                                    <br><br>
                                    Nunc sit amet velit nibh. Proin consectetur, ante quis tristique mattis, massa massa
                                    condimentum enim, quis euismod arcu purus ac eros. Sed dictum elementum odio, id
                                    viverra est auctor nec. Sed condimentum dolor justo, vitae mattis magna maximus
                                    feugiat. Mauris malesuada leo libero, vitae tempor ante sagittis vitae. Suspendisse
                                    consectetur facilisis enim. Donec sollicitudin sed nibh eget rutrum. Donec tincidunt
                                    nibh non feugiat suscipit. Ut ultricies pretium erat non aliquet.
                                    <br><br>
                                    In hac habitasse platea dictumst. Integer quis tortor enim. Integer et elit nec
                                    magna ultricies convallis. In venenatis eu erat et facilisis. Vestibulum congue enim
                                    nisl. Fusce arcu enim, porta a auctor vel, hendrerit a libero. Vivamus vel dapibus
                                    sem. Cras nec felis nibh. Etiam consequat ligula ac dolor aliquet vulputate. Quisque
                                    sagittis bibendum enim, et auctor mi faucibus at. Nunc nec nisi nulla. Donec eget
                                    sollicitudin diam. Nulla quis ligula eget mi euismod eleifend vitae eu lectus.
                                    Suspendisse potenti.
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="typo-section-sq bottom-default">
                        <h5>House Rules</h5>

                        <div class="ui grid moved">
                            <div class="twelve wide column">
                                <strong><i class="icon icon-house"></i>The Rules</strong>

                                <div class="ui accordion more-sq">
                                    <div class="title">
                                        <a class="accordion-trigger more-trigger" data-more="More" data-less="Less">
                                            <i class="icon icon-arrow-down-122"></i>
                                        </a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur faucibus
                                            magna vel ex semper, in pharetra justo pulvinar. Donec non quam vitae justo
                                            mattis vestibulum a nec nisi. Morbi mi felis, ultrices vitae risus
                                            consectetur, porta ultrices sapien.
                                        </p>

                                    </div>

                                    <div class="content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur faucibus
                                            magna vel ex semper, in pharetra justo pulvinar. Donec non quam vitae justo
                                            mattis vestibulum a nec nisi. Morbi mi felis, ultrices vitae risus
                                            consectetur, porta ultrices sapien.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-container" id="section-02">
                    <div class="typo-section-sq bottom-default">
                        <h3>Photos</h3>

                        <div class="photo-grid grid-5">
                            <div class="photo-item">
                                <div class="image-wrapper">
                                    <img class="image-sq slick-img" src="{{ asset('new-assets/images/property/property_big_01.jpg') }}"
                                         alt="" data-gallery="gallery" data-caption="Photo 01">
                                </div>
                            </div>
                            <div class="photo-item">
                                <div class="image-wrapper">
                                    <img class="image-sq slick-img" src="{{ asset('new-assets/images/property/property_big_02.jpg') }}"
                                         alt="" data-gallery="gallery" data-caption="Photo 02">
                                </div>
                            </div>
                            <div class="photo-item">
                                <div class="image-wrapper">
                                    <img class="image-sq slick-img" src="{{ asset('new-assets/images/property/property_big_03.jpg') }}"
                                         alt="" data-gallery="gallery" data-caption="Photo 03">
                                </div>
                            </div>
                            <div class="photo-item">
                                <div class="image-wrapper">
                                    <a data-items="+22 Photos"><img class="image-sq slick-img" src="{{ asset('new-assets/images/property/property_big_04.jpg') }}" alt="" data-gallery="gallery"
             data-caption="Photo 04"></a>
                                </div>
                            </div>
                            <div class="photo-item">
                                <div class="image-wrapper">
                                    <img class="image-sq slick-img" src="{{ asset('new-assets/images/property/property_big_05.jpg') }}"
                                         alt="" data-gallery="gallery" data-caption="Photo 05">
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

            </div>

            <div class="ui column side-column"></div>

        </div>

    </div>

    <div class="section-container" id="section-03">
        <div class="ui grid container stackable app layout right side">
            <div class="stretched row">
                <div class="ui column main-column" role="main">
                    <div class="typo-section-sq">
                        <h3>Location</h3>
                    </div>
                </div>
                <div class="ui column side-column"></div>
            </div>
        </div>

        <div class="ui grid xfluid">
            <div class="row">
                <div class="ui twelve wide computer twelve wide tablet column">
                    <div class="map-wrapper">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="ui grid container stackable app layout right side">
        <div class="stretched row">
            <div class="ui column main-column" role="main">
                <div class="section-container" id="section-04">

                    <div class="typo-section-sq top-default bottom-default">
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
                                <input id="reviews-search" type="text" placeholder="Search reviews" value=""
                                       required="">
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

                                    <p>As the saying goes: “Hospitality is making your guests feel at home, even though
                                        you wish they were". So please treat the place and the building neighbours as
                                        you would do your own.</p>
                                </div>
                            </div>

                            <div class="reviews-row">
                                <div class="review-meta">
                                    <a class="avatar-sq verified-sq" href="vendor_details.html">
                                        <img src="{{ asset('new-assets/images/avatar/avatar_03.jpg') }}" alt="">
                                    </a>
                                    <a class="name-sq" href="vendor_details.html">Nathaniel Brown</a>
                                </div>
                                <div class="comment-sq">
                                    <span class="date-sq">24 august 2017</span>

                                    <p>With your budget in mind, it is easy to plan a chartered yacht vacation.
                                        Companies often have a fleet of sailing vessels that can accommodate parties of
                                        various sizes. You may want to make it a more intimate trip with only close
                                        family. There are charters that can be rented for as few as two people.</p>
                                </div>
                            </div>

                            <div class="reviews-row">
                                <div class="review-meta">
                                    <a class="avatar-sq verified-sq" href="vendor_details.html">
                                        <img src="{{ asset('new-assets/images/avatar/avatar_02.jpg') }}" alt="">
                                    </a>
                                    <a class="name-sq" href="vendor_details.html">Adele Burke</a>
                                </div>

                                <div class="comment-sq">
                                    <span class="date-sq">06 May 2017</span>

                                    <div class="ui accordion more-sq">
                                        <div class="title">
                                            <a class="accordion-trigger more-trigger right-sq" data-more="More"
                                               data-less="Less">
                                                <i class="icon icon-arrow-down-122"></i>
                                            </a>
                                            <p>It is important to choose a hotel that makes you feel comfortable –
                                                contemporary or traditional furnishings, local decor or international,
                                                formal or relaxed. The ideal hotel directory should let you know of the
                                                options available.
                                            </p>

                                        </div>

                                        <div class="content">
                                            <p>If it matters that your hotel is, for example, on the beach, close to the
                                                theme park, or convenient for the airport, then location is paramount.
                                                Any decent directory should offer a location map of the hotel and its
                                                surroundings. There should be distance charts to the airport offered as
                                                well as some form of interactive map.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>

            <div class="ui column side-column"></div>
        </div>
    </div>

    <div class="section-container" id="section-05">
        <div class="typo-section-sq bottom-default">
            <div class="ui grid container stackable app layout right side">
                <div class="stretched row">
                    <div class="ui column main-column" role="main">
                        <div class="typo-section-sq">
                            <h3 class="host-heading">The Host</h3>
                        </div>
                    </div>
                </div>
            </div>


            <div class="host-background">
                <div class="ui grid container stackable app layout right side">
                    <div class="stretched row">
                        <div class="ui column main-column" role="main">
                            <div class="host-row">
                                <div class="host-avatar-column">
                                    <a class="image-sq verified-sq" href="vendor_details.html">
                                        <img src="{{ asset('new-assets/images/avatar/avatar_04.jpg') }}" alt="">
                                    </a>

                                    <div class="social-row">
                                        <ul class="social-links-sq">
                                            <li><a href="https://www.facebook.com/seventhqueen.themes" target="_blank"
                                                   class="fb"><i class="icon icon-logo-facebook2"></i></a></li>

                                            <li><a href="https://twitter.com/seventhqueen" target="_blank" class="tw"><i
                                                            class="icon icon-logo-twitter-bird2"></i></a></li>

                                            <li><a href="#" class="gp"><i
                                                            class="icon icon-logo-circle-google-plus-22"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="host-meta-column">
                                    <div class="host-above">
                                        <a class="host-name" href="vendor_details.html">Dustin Porter</a>
                                        <span class="host-location"><i class="icon icon-location-pin-2"></i>Bucharest, Romania</span>
                                    </div>

                                    <div class="host-icons-row">
                                        <div class="icons-column rating">
                                            <span><strong>9.2</strong></span><i class="icon icon-heart"></i>
                                            <p>Reviews</p>

                                        </div>

                                        <div class="icons-column">
                                            <span><strong>6</strong> x</span><i class="icon icon-house"></i>
                                            <p>Listings</p>
                                        </div>

                                        <div class="icons-column">
                                            <span><strong>145</strong> x</span><i class="icon icon-house"></i>
                                            <p>Rentals</p>
                                        </div>
                                    </div>

                                    <div class="basic-progressbar">
                                        <div class="inner" style="width:90%"></div>
                                    </div>


                                    <div class="about-host">
                                        <!--<strong>Description</strong>-->
                                        <p class="quote">Somos una familia multicultural lo cual nos enorgullece y nos
                                            enriquece. Nos gusta mucho viajar, hemos estado en Alemania, España, Italia,
                                            Francia, Luxemburgo, Bélgica, Perú, Bolivia, Argentina, México y de cada
                                            lugar hemos traído bellas memorias y aprendizajes. </p>
                                    </div>

                                    <a class="button-sq small-sq modal-ui-trigger" data-trigger-for="contact">
                                        Contact Host
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--end ui container-->

    <!-- Contact -->
    <div class="ui modal small" data-for="contact">
        <i class="icon icon-close close-modal"></i>
        <div class="header center">
            <h3>Contact Form</h3>
        </div>

        <div class="content">
            <p>Donec non quam vitae justo mattis vestibulum a nec nisi. Morbi mi felis, ultrices vitae risus
                consectetur, porta ultrices sapien.</p>
            <div class="div-c inline-2">
                <div class="divided-column">
                    <label>Name</label>
                    <input type="text" placeholder=" ">
                </div>

                <div class="divided-column">
                    <label>Title</label>
                    <input type="text" placeholder=" ">
                </div>
            </div>

            <div class="div-c">
                <label>Message</label>
                <textarea cols="30" rows="10" placeholder=" "></textarea>
            </div>
        </div>

        <div class="actions">
            <div class="div-c inline-2">
                <div class="divided-column">
                    <div class="button-sq cancel-sq fullwidth-sq">Cancel</div>
                </div>

                <div class="divided-column">
                    <div class="button-sq fullwidth-sq">Send</div>
                </div>
            </div>

        </div>
    </div>
@endsection
