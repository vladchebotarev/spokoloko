@extends('layouts.app')

@section('title', 'Venue')

@section('content')
    <!--BASIC LAYOUT-->

    <div class="property-section-default">

        <div class="image-wrapper">
            <div class="image-inner">
                <img class="image-sq slick-img" src="{{ asset('new-assets/images/hero/hero_big_32.jpg') }}" alt=""
                     data-gallery="gallery"
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
                                do {{ $max_guests }} osób
                            </div>
                            <div class="icons-column">
                                <i class="icon icon-home-3"></i>
                                {{ $area }} m²
                            </div>
                            <div class="icons-column">
                                <i class="icon icon-user-circle"></i>
                                {{ $max_guests_standing }} stojąco
                            </div>
                            <div class="icons-column">
                                <i class="icon icon-armchair-1"></i>
                                {{ $max_guests_seating }} siedząco
                            </div>
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
                                        <span class="price-sq" style="font-size: 18px;">od {{number_format($price_hour*$min_hours, 0, '', '')}}
                                            PLN</span>
                                        <span class="per-sq" data-text-mobile="/ " data-text="za ">{{$min_hours}}
                                            g</span>
                                    </div>

                                    <div class="button-sq font-weight-extrabold-sq mobile-fixed-trigger hidden-desktop hidden-large-desktop hidden-tablet modal-trigger"
                                         data-trigger-for="menu04">Skontaktuj się
                                    </div>

                                    <div class="mobile-fixed-section">
                                        <div class="sticky-box-content">
                                            <div class="mobile hidden">
                                            <div class="calendar_title"><p>Data wydarzenia:</p></div>

                                            <div id="examplecalendar" class="calendar-sq" style="padding-bottom: 10px;">
                                                <input type="text" id="event_date" value="" required placeholder="Wybierz date">
                                            </div>


                                                <div class="main-infos inline-check-in">


                                                    <div class="check-in calendar-sq" id="sticky-box-rangestart">


                                                        <div class="relative">
                                                            <input type="text" id="from_hour" class="filter" value="" required
                                                                   placeholder="od">
                                                            <i class="icon icon-little-arrow filters-arrow"></i>
                                                        </div>

                                                    </div>

                                                    <div class="check-out calendar-sq" id="sticky-box-rangeend"
                                                         style="border-right: 1px;">


                                                        <input type="text" class="filter" id="to_hour" value="" required
                                                               placeholder="do">

                                                    </div>


                                                </div>

                                            </div>

                                            <div class="twelve wide column">
                                                <ul class="description-list" style="font-size:10pt">
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
                                                    <button class="button-sq fullwidth-sq font-weight-extrabold-sq  modal-ui-trigger" data-trigger-for="contact" id="sender_dates">
                                                        Sprawdz dostepnosc
                                                    </button>

                                                    <div style="width: 100%; border:1px; border-style: solid; border-bottom:none; border-color: #c5c5c5; margin-top: 15px; margin-bottom: 10px;"></div>



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
                                                            border-style: solid;
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

                                                    <div style="width: 100%; border:1px; border-style: solid; border-bottom:none; border-color: #c5c5c5; margin-top: 15px; margin-bottom: 10px;"></div>

                                                    <div class="calendar_title"><p>Obserwuj nas:</p></div>

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
                                                    <li>
                                                        <div style="width: 100%">
                                                        <div style="text-align: center">afterbeng.pl</div>
                                                        </div>
                                                    </li>


                                                </ul>
                                            </div>


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
                            Nulla quis ligula eget mi euismod eleifend vitae eu lectus. Suspendisse potenti.<a
                                    href="#section-cena">
                                Czytac więcej
                            </a></p>

                        <div class="button-sq small-sq see-through-sq modal-ui-trigger" data-trigger-for="contact">
                            Cena
                        </div>
                        <div class="button-sq small-sq ">
                            Kontakty
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
                                            <p>Ilosc gosci stojąco:</p>
                                            <strong>240 osob</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <i class="icon icon-bath-tub"></i>
                                        <div>
                                            <p>Ilosc gosci siedzaco:</p>
                                            <strong>64 osob</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <i class="icon icon-bed-double"></i>
                                        <div><p>Przestzen:</p>
                                            <strong>150 m²</strong>
                                        </div>
                                    </li>
                                </ul>


                            </div>

                            <div class="twelve wide mobile six wide tablet six wide computer column">
                                <ul class="description-list">
                                    <li>
                                        <i class="icon icon-building-7"></i>
                                        <div>
                                            <p>Typ przestrzeni:</p>
                                            <strong>Restauracja/Bar</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <i class="icon icon-door-simple"></i>
                                        <div>
                                            <p>Styl:</p>
                                            <strong>Modern </strong>

                                        </div>
                                    </li>

                                    <li>
                                        <i class="icon icon-house"></i>
                                        <div><p>Ilosc pokoi</p>
                                            <strong>2</strong></div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>



                    <div class="typo-section-sq bottom-default">
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
                        <h5>Kontakty</h5>
                        <div class="ui grid moved">
                            <div class="twelve wide mobile six wide tablet six wide computer column">
                                <ul class="description-list">
                                    <li>
                                        <div>
                                            <p>Adres:</p>
                                            <strong>Kraków, Rynek Głowny 28, 31-010</strong>
                                        </div>
                                    </li>


                                    <li>
                                        <div>
                                            <p>Telefon:</p>
                                            <strong>730 035 946</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <div><p>Telefon 2:</p>
                                            <strong>730 035 946</strong></div>
                                    </li>

                                    <li>
                                        <div><p>Strona internetowa:</p>
                                            <strong>afterbeng.pl</strong></div>
                                    </li>




                                </ul>
                            </div>
                            <div class="twelve wide mobile six wide tablet six wide computer column">
                                <ul class="description-list">
                                    <li>
                                        <div>
                                            <p>Facebook:</p>
                                            <strong>facebook.com/stronapl</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <div>
                                            <p>Instagram</p>
                                            <strong>instagram.com/lolkek
                                            </strong></div>
                                    </li>



                                    <li>
                                        <div><p>Opinia Tripadvisor:</p>
                                            <strong>tripadvisor.com/kokoko</strong></div>
                                    </li>

                                </ul>
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


                    <div class="typo-section-sq bottom-default">
                        <h5>Description</h5>

                        <div class="ui grid moved">
                            <div class="twelve wide column">
                                <p>
                                    <strong>Sleeping Arrangements</strong>
                                </p>


                                <strong id="section-cena">The Space</strong>

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
                        <h5>Zasady</h5>

                        <div class="ui grid moved">
                            <div class="twelve wide mobile six wide tablet six wide computer column">
                                <ul class="description-list">
                                    <li>
                                        <div>

                                            <strong>Nie palic</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <div><strong>Bez dzieci</strong></div>
                                    </li>

                                    <li>
                                        <div><strong>Glosna muzyka do godz 23:00</strong></div>
                                    </li>

                                    <li>
                                        <div><strong>Bez wlasnego alkoholu</strong></div>
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

                            <div class="twelve wide column" style="padding-top: 30px;">
                                <strong><i class="icon icon-house"></i>Dodatkowo</strong>


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

                <div class="typo-section-sq bottom-default">
                    <h5>Dostępnośc</h5>
                    <div class="ui grid moved">
                        <div class="twelve wide mobile six wide tablet six wide computer column">
                            <ul class="description-list">
                                <li>
                                    <div>
                                        <p>Poniedziałek:</p>
                                        <strong style="float: right">18:00 - 20:00</strong>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p>Wtorek:</p>
                                        <strong style="float: right">18:00 - 20:00</strong>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p>Sroda:</p>
                                        <strong style="float: right">18:00 - 20:00</strong>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p>Czwartek:</p>
                                        <strong style="float: right">18:00 - 20:00</strong>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p>Piątek:</p>
                                        <strong style="float: right">18:00 - 20:00</strong>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p>Sobota:</p>
                                        <strong style="float: right">Niedostępne</strong>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p>Niedziela:</p>
                                        <strong style="float: right">Niedostępne</strong>
                                    </div>
                                </li>



                            </ul>
                        </div>
                    </div>
                </div>

                <div class="section-container" id="section-02">
                    <div class="typo-section-sq bottom-default">
                        <h3>Photos</h3>

                        <div class="photo-grid grid-5">
                            <div class="photo-item">
                                <div class="image-wrapper">
                                    <img class="image-sq slick-img"
                                         src="{{ asset('new-assets/images/property/property_big_01.jpg') }}"
                                         alt="" data-gallery="gallery" data-caption="Photo 01">
                                </div>
                            </div>
                            <div class="photo-item">
                                <div class="image-wrapper">
                                    <img class="image-sq slick-img"
                                         src="{{ asset('new-assets/images/property/property_big_02.jpg') }}"
                                         alt="" data-gallery="gallery" data-caption="Photo 02">
                                </div>
                            </div>
                            <div class="photo-item">
                                <div class="image-wrapper">
                                    <img class="image-sq slick-img"
                                         src="{{ asset('new-assets/images/property/property_big_03.jpg') }}"
                                         alt="" data-gallery="gallery" data-caption="Photo 03">
                                </div>
                            </div>
                            <div class="photo-item">
                                <div class="image-wrapper">
                                    <a data-items="+22 Photos"><img class="image-sq slick-img"
                                                                    src="{{ asset('new-assets/images/property/property_big_04.jpg') }}"
                                                                    alt="" data-gallery="gallery"
                                                                    data-caption="Photo 04"></a>
                                </div>
                            </div>
                            <div class="photo-item">
                                <div class="image-wrapper">
                                    <img class="image-sq slick-img"
                                         src="{{ asset('new-assets/images/property/property_big_05.jpg') }}"
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


{{--    <div class="ui grid container stackable app layout right side">
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
    </div>--}}



    <!--end ui container-->

    <!-- Contact -->
    <div class="ui modal small" data-for="contact" id="infos_request">
        <i class="icon icon-close close-modal"></i>
        <div class="header center" style="padding-top: 30px;">
            <h3>Sprawdż dostępnosc</h3>
        </div>


        <div class="content" >
            <p>Donec non quam vitae justo mattis vestibulum a nec nisi. Morbi mi felis, ultrices vitae risus
                consectetur, porta ultrices sapien.</p>

            <form>

            <div id="examplecalendar2" class="calendar-sq" style="padding-bottom: 10px;">
                <input type="text" id="event_date_new" value="" placeholder="Wybierz date" >
            </div>


            <div class="main-infos  div-c inline-2">
                    <div class="timecalendar calendar-sq divided-column">
                        <div class="relative">
                            <input type="text" class="filter" id="from_hour_new"
                                   name="from_hour_new" value=""
                                   placeholder="od">
                        </div>
                    </div>

                    <div class="timecalendar calendar-sq divided-column">
                        <input type="text" class="filter" name="to_hour"
                               id="to_hour_new" value="" placeholder="do"
                              >
                    </div>
                </div>


            <div class="div-c inline-2">
                <div class="divided-column">
                    <label>Imie</label>
                    <input type="text" autofocus placeholder=" ">
                </div>

                <div class="divided-column">
                    <label>Nazwisko</label>
                    <input type="text" placeholder=" ">
                </div>
            </div>

                <div class="div-c inline-2">
                    <div class="divided-column">
                        <label>Telefon</label>
                        <input type="number" autofocus placeholder=" ">
                    </div>

                    <div class="divided-column">
                        <label>Email</label>
                        <input type="text" placeholder=" ">
                    </div>
                </div>

            <div class="div-c">
                <label>Message</label>
                <textarea cols="30" rows="10" placeholder=" "></textarea>
            </div>
            </form>
        </div>

        <div class="actions">
            <div class="div-c ">


                <div class="divided-column">
                    <div class="button-sq fullwidth-sq modal-ui-trigger" data-trigger-for="success" id="send_request_availability">Send</div>
                </div>
            </div>

        </div>

    </div>
    <div class="ui modal small" style="background: none; box-shadow: none; text-align: center; color: white" data-for="success" id="icon_succes_send">
        <p><i style="color:#F57C00; font-size: 50px;"
                    class="fa fa-check-circle"></i></p>
        <p>Wiadosośc zostanie dostarczona</p>
    </div>

    <div class="fb-customerchat"
         logged_in_greeting = "Potrzebujesz pomocy? Napisz do nas!"
         logged_out_greeting = "Potrzebujesz pomocy? Zaloguj się i napisz do nas!"
         theme_color = "#f57C00" page_id="{{ $facebook_page_id }}">
    </div>

@endsection
