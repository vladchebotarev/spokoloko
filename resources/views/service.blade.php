@extends('layouts.app')

@section('title', 'Usługi')

@section('content')
    <div class="ui layout">
        <!-- grid -->
        <div class="ui grid container stackable centered">
            <div class="row">
                <div class="ui twelve wide tablet twelve wide computer ten wide widescreen ten wide large screen column property-section-boxed">

                    <br>

                    <div class="white-section" style="border-style: solid; border-width: 1px; border-color: #DCDDDE">
                        <div class="inner-section">

                            <div class="ui grid">
                                <div class="row">

                                    <!-- Left-->
                                    <div class="ui twelve wide mobile eight wide computer column">

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


                                        </div>

                                        <h1 class="title-sq">Catering Krakow Dragon</h1>

                                        <div class="icons-row">
                                            <div class="icons-column">
                                                <div class="rating-sq">
                                                    <i class="icon icon-heart"></i>
                                                    8.9
                                                </div>
                                            </div>
                                            <div class="icons-column">
                                                <i class="icon icon-ac"></i> Catering
                                            </div>
                                            <div class="icons-column">
                                                <i class="icon icon-gearbox"></i> Polska kuchnia
                                            </div>

                                        </div>

                                        <p class="description-sq">
                                            In hac habitasse platea dictumst. Integer quis tortor enim. Integer et elit nec magna ultricies convallis. In venenatis eu erat et facilisis. Vestibulum congue enim nisl. Fusce arcu enim, porta a auctor vel, hendrerit a libero. Vivamus vel dapibus sem.
                                        </p>

                                    </div>

                                    <!-- Right -->
                                    <div class="ui twelve wide mobile four wide computer column">

                                        <div class="property-checkout-container main-infos">


                                            <div class="div-c">
                                                <label>Data wydarzenia</label>
                                                <div id="examplecalendar" class="calendar-sq" style="padding-bottom: 10px; width: 100%">
                                                    <input type="text" value="" required placeholder="Wybierz...">
                                                </div>
                                            </div>
                                            <div class="div-c">
                                                <input type="checkbox" id="price_hours" name="price_hours" onclick="handleChange3(this)"
                                                name = "price_hours" checked>
                                                <label  for="price_hours" >Rezerwacja na cały dzień lub kilka dni</label>
                                            </div>


                                            <div class="div-c inline-2 inline-check-in hidden-desktop hidden-large-desktop hidden-mobile hidden-tablet" id="to_price_hours">

                                                <div class="divided-column calendar-sq" id="sticky-box-rangestart">
                                                    <label class="placeholder">Od</label>

                                                    <div class="relative-sq">
                                                        <input type="text" class="filter" value="" required placeholder="00:00">

                                                        <i class="icon icon-little-arrow filters-arrow"></i>
                                                    </div>

                                                </div>

                                                <div class="divided-column calendar-sq" id="sticky-box-rangeend">

                                                    <label class="placeholder">Do</label>

                                                    <input type="text" class="filter" value="" required placeholder="24:00">

                                                </div>
                                            </div>


                                            <div class="div-c extras-sq">
                                                <ul class="description-list" style="font-size:10pt; width:100%">
                                                    <!--     <li>
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
                                                    </li>  -->
                                                    <a class="button-sq fullwidth-sq font-weight-bold-sq" href="">Sprawdz dostepnosc</a>


                                                    <div style="width: 100%; border:1px; border-style: solid; border-bottom:none; border-color: #c5c5c5; margin-top: 15px; margin-bottom: 10px;"></div>

                                                    <li>
                                                        <div class="ui internally celled grid">
                                                            <div class="row"
                                                                 style="padding-right: 20px; padding-left: 20px;">
                                                                <div class="four wide column"
                                                                     style="padding-right: 1%; padding-left:0%;">
                                                                    <button onclick="open('#')"
                                                                            class="social_icons facebook"><i
                                                                                class="fa fa-facebook"></i>
                                                                    </button>
                                                                </div>

                                                                <div class="four wide column"
                                                                     style="padding-right: 1%; padding-left:1%;">
                                                                    <button class="column social_icons instagram"><i
                                                                                class="fa fa-instagram"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="four wide column"
                                                                     style="padding-right: 0%;  padding-left:1%;">
                                                                    <button class="column social_icons tripadvisor"><i
                                                                                class="fa fa-tripadvisor"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>


                                                    <style>
                                                        div.calendar_title {
                                                            font-size: 14px;
                                                            padding-bottom: 10px;
                                                            font-family: 'Lato';
                                                            line-height: 1.2142em;
                                                            color: #4d4d4d;
                                                        !important;
                                                        }

                                                        div.soc_buttons {
                                                            width: 100%;
                                                        }

                                                        button.social_icons {
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

                                                        button.button_call {
                                                            width: 100%;
                                                            border: 1px;
                                                            border-style: solid;

                                                            background-color: white;
                                                            color: orangered;
                                                            border-bottom-color: orangered;
                                                        }

                                                        button.button_message {
                                                            width: 100%;
                                                            border: 1px;
                                                            border-style: solid;

                                                            background-color: white;
                                                            color: dodgerblue;
                                                            border-bottom-color: dodgerblue;
                                                        }


                                                    </style>


                                                    <li>
                                                        <div>
                                                            <button class="button_call"><i class="fa fa-phone"
                                                                                           style="padding-right: 10px;"></i>
                                                                Zadzwon do nas
                                                            </button>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <button class="button_message"><i class="fa fa-commenting"
                                                                                              style="padding-right: 10px;"></i>
                                                                Czat s nami
                                                            </button>
                                                        </div>
                                                    </li>

                                                </ul>
                                              {{--  <div class="button-sq link-sq small-sq float-right-sq">
                                                    <i class="icon icon-share"></i>
                                                    share
                                                </div> --}}

                                            </div>






                                        </div>


                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>


                        <h3 style="text-align: left; margin: 20px 0;">O usłudze</h3>

                        <p>Our house is a wood and glass house, built in the 21th century's first years. A large living
                            room widely glazed with a fireplace, two large sofas and the "chief's armchair" and a
                            kitchen corner (washdishes).
                            <br><br>
                            Cras nec felis nibh. Etiam consequat ligula ac dolor aliquet vulputate. Quisque sagittis
                            bibendum enim, et auctor mi faucibus at. Nunc nec nisi nulla. Donec eget sollicitudin diam.
                            Nulla quis ligula eget mi euismod eleifend vitae eu lectus. Suspendisse potenti.</p>


                    <div class="typo-section-sq bottom-default" style="padding-top: 30px;">
                        <h5>Cena i zasady rezerwacji</h5>
                        <div class="ui grid moved">
                            <div class="twelve wide mobile six wide tablet six wide computer column">
                                <ul class="description-list">
                                    <li>
                                        <div>
                                            <p>Cena za godzine:</p>
                                            <strong>100 PLN</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <div><p>Min. ilosc godzin:</p>
                                            <strong>3</strong></div>
                                    </li>

                                    <li>
                                        <div><p>Cena za dzien:</p>
                                            <strong>1200 PLN</strong></div>
                                    </li>

                                    <li>
                                        <div><p>W dni powszednie taniej:</p>
                                            <strong><i class="fa fa-check"></i></strong></div>
                                    </li>

                                </ul>
                            </div>
                            <div class="twelve wide mobile six wide tablet six wide computer column">
                                <ul class="description-list">
                                    <li>
                                        <div>
                                            <p>Kaucja:</p>
                                            <strong>400 PLN</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <div><strong>Rezerwacja za 3 dni do wydarzenia
                                            </strong></div>
                                    </li>

                                    <li>
                                        <div><strong>Zrezygnuj za 2 dni do wydarzenia
                                            </strong></div>
                                    </li>


                                </ul>
                            </div>
                            <div class="twelve wide column" style="padding-top:20px;">
                                <strong>Informacja od wlasciciela:</strong>
                                <div class="extra-text"><p>W cenie rezerwacji zawarty jest depozyt na kwotę rowną kwocie
                                        rezerwacji. Rezerwujac sale na caly dzien mozesz wykorzystac kwote 1200 zl na
                                        barze. Rezerwacja przestrzeni musi buyc dokonana conajmniej za dzien do
                                        wydarzenia.
                                        Rezerwując przestrzen obowiazkowa jest kaucja 400 zł. Ktora jest zwrocana
                                        wynajmujacemu przy anulowaniu rezerwacji conajmniej za 2 dni do wydarzenia.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="typo-section-sq bottom-default">
                        <h5>Wydarzenia</h5>
                        <p>Ta przestrzen jest swietnym miejscem na
                        </p>

                        <div class="ui grid moved">
                            <div class="ui column">
                                <div class="ui accordion more-sq">
                                    <div class="title">
                                        <div class="ui grid">
                                            <a class="accordion-trigger more-trigger" data-more="More" data-less="Less">
                                                <i class="icon icon-arrow-down-122"></i>
                                            </a>

                                            <div class="twelve wide mobile twelve wide tablet twelve wide computer column">
                                                <ul class="description-list">
                                                    <div class="ui label">Impreza firmowa</div>
                                                    <div class="ui label">Konferenja</div>
                                                    <div class="ui label">Urodziny</div>
                                                    <div class="ui label">Prezentacja</div>
                                                    <div class="ui label">Zdjecia</div>
                                                    <div class="ui label">Impreza firmowa</div>
                                                    <div class="ui label">Konferenja</div>
                                                    <div class="ui label">Urodziny</div>
                                                    <div class="ui label">Prezentacja</div>
                                                    <div class="ui label">Zdjecia</div>
                                                    <div class="ui label">Impreza firmowa</div>
                                                    <div class="ui label">Konferenja</div>
                                                    <div class="ui label">Urodziny</div>
                                                    <div class="ui label">Prezentacja</div>
                                                    <div class="ui label">Zdjecia</div>


                                                </ul>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="content">
                                        <div class="ui grid">
                                            <div class="twelve wide mobile twelve wide tablet twelve wide computer column">
                                                <ul class="description-list">

                                                    <div class="ui label">Urodziny</div>
                                                    <div class="ui label">Prezentacja</div>
                                                    <div class="ui label">Zdjecia</div>
                                                    <div class="ui label">Impreza firmowa</div>
                                                    <div class="ui label">Konferenja</div>
                                                    <div class="ui label">Urodziny</div>
                                                    <div class="ui label">Prezentacja</div>
                                                    <div class="ui label">Zdjecia</div>
                                                    <div class="ui label">Impreza firmowa</div>
                                                    <div class="ui label">Konferenja</div>
                                                    <div class="ui label">Urodziny</div>
                                                    <div class="ui label">Prezentacja</div>
                                                    <div class="ui label">Zdjecia</div>


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <style>
                        .ui.label {
                            margin-bottom: 10px;
                            background-color: white;
                            border-style: solid;
                            border-width: 1px;
                            border-color: orange;
                            color: darkorange;

                        }
                    </style>




                    <h3 style="text-align: left">Location</h3>

                    <div class="map-wrapper shadow-sq">
                        <div id="map"></div>
                    </div>

                    <h3 style="text-align: left">Reviews</h3>

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
