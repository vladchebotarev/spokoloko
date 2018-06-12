@extends('layouts.app')

@section('title', $venue->name .' - Rezerwacja na Twoje Wydarzenie - Spokoloko')
@section('description','Rezerwuj '.$venue->name .', '.$venue_city.' od '.number_format($venue->price_hour*$venue->min_hours, 0, '', '').' zł. Zobacz ceny, opinia, zdjęcia, menu. Zapłanuj twoje wydarzenie ze Spokoloko.')
@section('ogimage','https://res.cloudinary.com/spokoloko/image/upload/q_auto,c_fill,w_1190,h_623/v1/venues/'.$venue->url.'/'.$venue_cover_image)

@section('content')
    <!--BASIC LAYOUT-->

    <div class="property-section-default">

        <div class="image-wrapper" onclick="location.href='#section-02';">
            <div class="image-inner">
                <img class="image-sq slick-img"
                     src="https://res.cloudinary.com/spokoloko/image/upload/q_auto,c_fill,w_360/v1/venues/{{$venue->url}}/{{$venue_cover_image}}"
                     srcset="https://res.cloudinary.com/spokoloko/image/upload/q_auto,c_fill,w_480/v1/venues/{{$venue->url}}/{{$venue_cover_image}} 480w,
                            https://res.cloudinary.com/spokoloko/image/upload/q_auto,c_fill,w_750/v1/venues/{{$venue->url}}/{{$venue_cover_image}} 768w,
                            https://res.cloudinary.com/spokoloko/image/upload/q_auto,c_fill,w_1200/v1/venues/{{$venue->url}}/{{$venue_cover_image}} 1000w
                     "
                     alt="{{ $venue->name }}"
                     data-gallery="gallery"
                     data-caption="Cover Photo">
            </div>
        </div>

        <div class="property-main-content">
            <div class="ui grid container stackable app layout right side">
                <div class="row">
                    <div class="ui column main-column">

                        <h1 class="title-sq">{{ $venue->name }}</h1>

                        <div class="rating-sq">
                            <span>9.4</span>
                            <i class="icon icon-heart-line"></i>
                        </div>

                        <div class="location-sq">
                            <i class="icon icon-location-pin-2"></i>
                            {{ $venue->street_address }} {{ $venue->street_number }}, {{ $venue_city }}
                        </div>

                        <div class="icons-row">
                            <div class="icons-column">
                                <i class="icon icon-account-group-5"></i>
                                do {{ $venue->max_guests_standing }} osób
                            </div>
                            <div class="icons-column">
                                <i class="icon icon-home-3"></i>
                                {{ $venue->area }} m²
                            </div>
                            <div class="icons-column">
                                <i class="icon icon-user-circle"></i>
                                {{ $venue->max_guests_standing }} stojąco
                            </div>
                            <div class="icons-column">
                                <i class="icon icon-armchair-1"></i>
                                {{ $venue->max_guests_seating }} siedząco
                            </div>
                        </div>


                    </div>

                    <div class="ui column side-column">

                        <div class="property-sticky-box-wrapper">

                            <div class="sticky-element sticky-desktop sticky-large-desktop not-sticky under-ths burger-mobile-modal search-visible"
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

                                        <span class="price-sq"
                                              style="font-size: 18px;">od {{number_format($venue->price_hour*$venue->min_hours, 0, '', '')}}
                                            PLN</span>
                                        <span class="per-sq" data-text-mobile="/ " data-text="za ">{{$venue->min_hours}}
                                            h</span>
                                    </div>

                                    <div class="button-sq font-weight-extrabold-sq mobile-fixed-trigger hidden-desktop hidden-large-desktop hidden-tablet modal-trigger"
                                         data-trigger-for="menu04">Skontaktuj się
                                    </div>

                                    <div class="mobile-fixed-section">
                                        <div class="sticky-box-content">
                                            <div class="mobile hidden">
                                                <div class="calendar_title"><p>Data wydarzenia:</p></div>

                                                <div id="examplecalendar" class="calendar-sq"
                                                     style="padding-bottom: 10px;">
                                                    <input type="text" id="event_date" value="" required
                                                           placeholder="Wybierz date">
                                                </div>


                                                <div class="main-infos inline-check-in">


                                                    <div class="check-in calendar-sq" id="sticky-box-rangestart">


                                                        <div class="relative">
                                                            <input type="text" id="from_hour" class="filter" value=""
                                                                   required
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
                                                    <button class="button-sq fullwidth-sq font-weight-extrabold-sq  modal-ui-trigger"
                                                            data-trigger-for="contact" id="sender_dates">
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

                                                        a.social_icons {
                                                            font-size: 15px !important;
                                                            margin: 0px !important;
                                                            position: static !important;
                                                            width: 100%;
                                                            border: 1px;
                                                            border-style: solid;
                                                            background-color: white;
                                                        }

                                                        a.social_icons.disabled {
                                                            border-color: #e5e5e5 !important;
                                                            color: #e5e5e5 !important;
                                                            pointer-events: none !important;
                                                        }

                                                        a.social_icons.facebook {
                                                            border-color: dodgerblue;
                                                            color: dodgerblue;
                                                        }

                                                        a.social_icons.instagram {
                                                            border-color: deeppink;
                                                            color: deeppink;
                                                        }

                                                        a.social_icons.tripadvisor {
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
                                                            <button class="button_call" number="{{ $venue->phone }}"
                                                                    id="callnow"><i class="fa fa-phone"
                                                                                    style="padding-right: 10px;"></i>
                                                                Zadzwon do nas
                                                            </button>
                                                        </div>
                                                    </li>
                                                    {{--        <li>
                                                              <div>
                                                                  <button class="button_message"><i class="fa fa-commenting"
                                                                                                    style="padding-right: 10px;"></i>
                                                                      Czat s nami
                                                                  </button>
                                                              </div>
                                                          </li>

                                                          <div style="width: 100%; border:1px; border-style: solid; border-bottom:none; border-color: #c5c5c5; margin-top: 15px; margin-bottom: 10px;"></div>--}}

                                                    <div class="calendar_title"><p>Obserwuj nas:</p></div>

                                                    <li>
                                                        <div class="ui internally celled grid">
                                                            <div class="row"
                                                                 style="padding-right: 20px; padding-left: 20px;">
                                                                <div class="four wide column"
                                                                     style="padding-right: 1%; padding-left:0%;">
                                                                    @if($venue->facebook)
                                                                        <a href="https://www.facebook.com/{{ $venue->facebook }}"
                                                                           target="_blank"
                                                                           class="button-sq small-sq see-through-sq social_icons facebook"><i
                                                                                    class="fa fa-facebook"></i>
                                                                        </a>
                                                                    @else
                                                                        <a class="button-sq small-sq see-through-sq social_icons facebook disabled"><i
                                                                                    class="fa fa-facebook"></i>
                                                                        </a>
                                                                    @endif
                                                                </div>

                                                                <div class="four wide column"
                                                                     style="padding-right: 1%; padding-left:1%;">
                                                                    @if($venue->instagram)
                                                                        <a href="https://www.instagram.com/{{ $venue->instagram }}"
                                                                           target="_blank"
                                                                           class="button-sq small-sq see-through-sq social_icons instagram"><i
                                                                                    class="fa fa-instagram"></i>
                                                                        </a>
                                                                    @else
                                                                        <a class="button-sq small-sq see-through-sq social_icons instagram disabled"><i
                                                                                    class="fa fa-instagram"></i>
                                                                        </a>
                                                                    @endif
                                                                </div>
                                                                <div class="four wide column"
                                                                     style="padding-right: 0%;  padding-left:1%;">
                                                                    @if($venue->tripadvisor)
                                                                        <a href="{{ $venue->tripadvisor }}"
                                                                           target="_blank"
                                                                           class="button-sq small-sq see-through-sq social_icons tripadvisor"><i
                                                                                    class="fa fa-tripadvisor"></i>
                                                                        </a>
                                                                    @else
                                                                        <a class="button-sq small-sq see-through-sq social_icons tripadvisor disabled"><i
                                                                                    class="fa fa-tripadvisor"></i>
                                                                        </a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    {{--<li>
                                                        <div style="width: 100%">
                                                            <div style="text-align: center">afterbeng.pl</div>
                                                        </div>
                                                    </li>--}}
                                                </ul>
                                            </div>


                                        </div>
                                        @auth
                                            <div class="sticky-box-wishlist">
                                                <div class="wishlist-sq">

                                                    <button status="{{ $wishlist == true ? 1 : 0 }}"
                                                            venue="{{ $venue->id }}"
                                                            class="add-wishlist button-sq small-sq link-sq modal-ui-trigger"
                                                            style="color: #F57C00"
                                                            data-trigger-for="added_wishlist"></button>
                                                </div>

                                                <div class="share-sq">
                                                    <a href=""><i class="icon icon-share"></i>Udostępnij</a>
                                                </div>
                                            </div>
                                        @endauth

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
                    <div class="typo-section-sq top-default bottom-default anchor-menu">
                        <h3>O przestrzeni</h3>

                        <p>
                            {{ $venue->description }}
                            <a href="#section-02">Więcej</a>
                        </p>

                        <a href="#price-section" class="item button-sq small-sq see-through-sq">Cena</a>
                        <div class="button-sq small-sq modal-ui-trigger" data-trigger-for="contact">
                            Kontakty
                        </div>

                        {{--<div class="button-sq link-sq small-sq float-right-sq">
                            <i class="icon icon-share"></i>
                            share
                        </div>--}}

                    </div>

                    <div class="typo-section-sq bottom-default">
                        <h5>Najważniejsze</h5>
                        <div class="ui grid moved">
                            <div class="twelve wide mobile six wide tablet six wide computer column">
                                <ul class="description-list">
                                    <li>
                                        <i class="icon icon-user-circle"></i>
                                        <div>
                                            <p>Ilosc gosci stojąco:</p>
                                            <strong>{{ $venue->max_guests_standing }} osob</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <i class="icon icon-armchair-1"></i>
                                        <div>
                                            <p>Ilosc gosci siedzaco:</p>
                                            <strong>{{ $venue->max_guests_seating }} osob</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <i class="icon icon-bed-double"></i>
                                        <div><p>Przestzen:</p>
                                            <strong>{{ $venue->area }} m²</strong>
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
                                            <strong>{{ $venue_type }}</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <i class="icon icon-door-simple"></i>
                                        <div>
                                            <p>Styl:</p>
                                            <strong>{{ $venue_style }}</strong>

                                        </div>
                                    </li>

                                    <li>
                                        <i class="icon icon-house"></i>
                                        <div><p>Ilość pokoi:</p>
                                            <strong>{{ $venue->room_number }}</strong></div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>


                    <div id="price-section" class="typo-section-sq bottom-default">
                        <h5>Cena i zasady rezerwacji</h5>
                        <div class="ui grid moved">
                            <div class="twelve wide mobile six wide tablet six wide computer column">
                                <ul class="description-list">
                                    <li>
                                        <div>
                                            <p>Cena za godzine:</p>
                                            <strong>{{ $venue->price_hour }} PLN</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <div><p>Min. ilosc godzin:</p>
                                            <strong>{{ $venue->min_hours }}</strong></div>
                                    </li>

                                    <li>
                                        <div><p>Cena za dzien:</p>
                                            <strong>{{ $venue->price_day }} PLN</strong></div>
                                    </li>

                                    @if($venue->price_depends_on_weekday)
                                        <li>
                                            <div>
                                                <p>Cena zależy od dnia tygodnia:</p>
                                                <strong><i class="fa fa-check"></i></strong>
                                            </div>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            <div class="twelve wide mobile six wide tablet six wide computer column">
                                <ul class="description-list">
                                    @if($venue->security_deposit)
                                        <li>
                                            <div>
                                                <p>Kaucja:</p>
                                                <strong>{{ $venue->security_deposit }} PLN</strong>
                                            </div>
                                        </li>
                                    @else
                                        <li>
                                            <div><strong>Kaucja nie jest wymagana.</strong></div>
                                        </li>
                                    @endif

                                    {{--<li>
                                        <div><strong>Rezerwacja za 3 dni do wydarzenia
                                            </strong></div>
                                    </li>--}}
                                    @if($venue->days_full_refund)
                                        <li>
                                            <div><strong>Rezygnacja za {{ $venue->days_full_refund }} dni do
                                                    wydarzenia.</strong></div>
                                        </li>
                                    @endif


                                </ul>
                            </div>
                            @if($venue->price_info)
                                <div class="twelve wide column" style="padding-top:20px;">
                                    <strong>Dodatkowa informacja cenowa:</strong>
                                    <div class="extra-text">
                                        <p>{{ $venue->price_info }}</p>
                                    </div>
                                </div>
                            @endif

                            @if($venue->cancellation_information)
                                <div class="twelve wide column" style="padding-top:20px;">
                                    <strong>Dodatkowe zasady rezygnacji:</strong>
                                    <div class="extra-text">
                                        <p>{{ $venue->cancellation_information }}</p>
                                    </div>
                                </div>
                            @endif
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
                                            <strong>{{ $venue->street_address }} {{ $venue->street_number }}
                                                , {{ $venue_city }}, {{ $venue->postal_code }}</strong>
                                        </div>
                                    </li>


                                    <li>
                                        <div>
                                            <p>Telefon:</p>
                                            <strong>{{ $venue->phone }}</strong>
                                        </div>
                                    </li>

                                    @if($venue->phone2)
                                        <li>
                                            <div>
                                                <p>Telefon 2:</p>
                                                <strong>{{ $venue->phone2 }}</strong>
                                            </div>
                                        </li>
                                    @endif

                                    @if($venue->webpage)
                                        <li>
                                            <div>
                                                <p>Strona internetowa:</p>
                                                <strong>{{ $venue->webpage }}</strong>
                                            </div>
                                        </li>
                                    @endif

                                </ul>
                            </div>
                            <div class="twelve wide mobile six wide tablet six wide computer column">
                                <ul class="description-list">
                                    @if($venue->facebook)
                                        <li>
                                            <div>
                                                <p>Facebook:</p>
                                                <strong>facebook.com/{{ $venue->facebook }}</strong>
                                            </div>
                                        </li>
                                    @endif

                                    @if($venue->instagram)
                                        <li>
                                            <div>
                                                <p>Instagram</p>
                                                <strong>instagram.com/{{ $venue->instagram }}</strong>
                                            </div>
                                        </li>
                                    @endif

                                    {{--@if($venue->tripadvisor)
                                        <li>
                                            <div>
                                                <p>Opinia Tripadvisor:</p>
                                                <strong>tripadvisor.com/{{ $venue->tripadvisor }}</strong>
                                            </div>
                                        </li>
                                    @endif--}}

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
                                <div class="ui grid">
                                    <div class="twelve wide mobile twelve wide tablet twelve wide computer column">
                                        <ul class="description-list">
                                            @foreach($venue_eventTypes as $eventType)
                                                <div class="ui label">{{ $eventType }}</div>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="typo-section-sq bottom-default">
                        <h5>Udogodnienia</h5>
                        <div class="ui grid moved">
                            <div class="ui column">
                                <div class="ui grid">
                                    @foreach($venue_amenities as $amenity)
                                        <div class="twelve wide mobile six wide tablet four wide computer column"
                                             style="padding-top: 6px; padding-bottom: 6px;">
                                            <i class="icon icon-check-22" style="position: absolute"></i>
                                            <div style="padding-left: 40px;display: block;"><p>{{ $amenity }}</p></div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="typo-section-sq bottom-default">
                        <h5>Opis</h5>
                        <div class="ui grid moved">
                            <div class="twelve wide column">
                                {{--<p>
                                    <strong>Sleeping Arrangements</strong>
                                </p>


                                <strong id="section-cena">The Space</strong>--}}

                                <p>{{ $venue->full_description }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="typo-section-sq bottom-default">
                        <h5>Cechy</h5>
                        <div class="ui grid moved">
                            @foreach($venue_features as $features)
                                <div class="twelve wide mobile six wide tablet four wide computer column"
                                     style="padding-top: 6px; padding-bottom: 6px;">
                                    <i class="icon icon-star-2" style="position: absolute"></i>
                                    <div style="padding-left: 40px;display: block;"><p>{{ $features }}</p></div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="typo-section-sq bottom-default">
                        <h5>Zasady</h5>
                        <div class="ui grid moved">
                            @foreach($venue_rules as $rule)
                                <div class="twelve wide mobile twelve wide tablet twelve wide computer column"
                                     style="padding-top: 6px; padding-bottom: 6px;">
                                    <i class="icon icon-lock-close-32" style="position: absolute"></i>
                                    <div style="padding-left: 40px;display: block;"><p>{{ $rule }}</p></div>
                                </div>
                            @endforeach


                            <div class="twelve wide column" style="padding-top: 30px;">
                                <strong>Dodatkowe zasady:</strong>

                                <p>{{ $venue->additional_rules }}</p>


                            </div>
                        </div>
                    </div>


                    <div class="typo-section-sq bottom-default">
                        <h5>Dostępnośc</h5>
                        <div class="ui grid moved">
                            @if($venue->availability_type == 'Week')
                                <div class="twelve wide mobile six wide tablet six wide computer column">
                                    <ul class="description-list">
                                        @foreach($weekday as $key => $day)
                                            <li>
                                                <div>
                                                    <p>{{ $day }}:</p>
                                                    @if(array_key_exists($key, $venue_availability))
                                                        <strong style="float: right">{{ $venue_availability[$key]['time_from'] }}
                                                            - {{ $venue_availability[$key]['time_to'] }}</strong>
                                                    @else
                                                        <strong style="float: right">Niedostępne</strong>
                                                    @endif
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @else
                                <div class="twelve wide column">
                                    <strong>Dostępny tylko dla rezerwacji</strong>
                                </div>
                            @endif

                        </div>
                    </div>


                </div>


                <div class="section-container" id="section-02">
                    <div class="typo-section-sq bottom-default" style="padding-left: 5px; padding-right: 5px;">
                        <h3>Zdjęcia</h3>

                        <div class="sq-slick carousel-sq center-sq shadow-sq" data-infinite="false"
                             data-center-mode="false"
                             data-center-padding="100px" data-desktop-center-padding="50px" data-show-slides="2"
                             data-scroll-slides="1" data-tablet-show-slides="1" data-tablet-scroll-slides="1"
                             data-mobile-show-slides="1" data-mobile-scroll-slides="1" data-tablet-center-padding="50px"
                             data-mobile-center-padding="20px">

                            {{--<div>
                                <div class="caption-content">
                                    <img src="http://placehold.it/350x300?text=1" alt="">
                                </div>
                            </div>--}}

                            @for($n = 0; $n < count($venue_images); $n++)
                                <div>
                                    <div class="caption-content">
                                        <img class="slick-img"
                                             data-src="https://res.cloudinary.com/spokoloko/image/upload/q_auto,c_fill,w_750/v1/venues/{{$venue->url}}/{{$venue_images[$n]->image_url}}"
                                             data-lazy="https://res.cloudinary.com/spokoloko/image/upload/q_auto,c_fill,w_750/v1/venues/{{$venue->url}}/{{$venue_images[$n]->image_url}}"
                                             alt="{{$venue->url}} {{$n+1}}" data-gallery="gallery"
                                             data-caption="Zdjęcie {{ $n + 1 }}">
                                    </div>
                                </div>
                            @endfor

                        </div>

                        {{--<div class="photo-grid grid-5">
                            @for($n = 0; $n < 5; $n++)
                                @if($n != 3)
                                    <div class="photo-item">
                                        <div class="image-wrapper">
                                            <img class="image-sq slick-img"
                                                 src="https://res.cloudinary.com/spokoloko/image/upload/c_fill,e_improve,f_jpg,g_auto,h_1080,w_1920/v1/venues/{{$venue->url}}/{{$venue_images[$n]->image_url}}"
                                                 alt="" data-gallery="gallery" data-caption="Zdjęcie {{ $n + 1}}">
                                        </div>
                                    </div>
                                @else
                                    <div class="photo-item">
                                        <div class="image-wrapper">
                                            <a data-items="+{{ count($venue_images) + 1 }} Zdjęć">
                                                <img class="image-sq slick-img"
                                                     src="https://res.cloudinary.com/spokoloko/image/upload/c_fill,e_improve,f_jpg,g_auto,h_1080,w_1920/v1/venues/{{$venue->url}}/{{$venue_images[$n]->image_url}}"
                                                     alt="" data-gallery="gallery"
                                                     data-caption="Zdjęcie {{ $n + 1}}">
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            @endfor

                            @for($n = 5; $n < count($venue_images); $n++)
                                <img src="https://res.cloudinary.com/spokoloko/image/upload/c_fill,e_improve,f_jpg,g_auto,h_1080,w_1920/v1/venues/{{$venue->url}}/{{$venue_images[$n]->image_url}}"
                                     alt="" data-gallery="gallery"
                                     data-caption="Zdjęcie {{ $n + 1 }}" style="display: none">
                            @endfor
                        </div>--}}
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
                        <h3>Lokalizacja</h3>
                    </div>
                </div>
                <div class="ui column side-column"></div>
                <input type="hidden" id="lat" value="{{ $venue->lat }}">
                <input type="hidden" id="lng" value="{{ $venue->lng }}">
            </div>
        </div>

        <div class="ui grid xfluid" style="max-width: 100%!important;  margin: 0px!important;">
            <div class="row">
                <div class="ui twelve wide computer twelve wide tablet column"
                     style="padding-left: 0px!important ;padding-right: 0px!important">
                    <div class="map-wrapper">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="ui grid container stackable app layout right side">
         <div class="stretched row">
             <div class="ui column main-column" role="main">
                 <div class="section-container" id="section-04">

                     <div class="typo-section-sq top-default bottom-default">
                         <h3>Opinia</h3>
                         <div class="reviews-header">
                             <div class="rating-big">
                                 <div class="rating-badge">
                                     <span>9.2</span>
                                     <i class="icon icon-star"></i>
                                 </div>
                                 <div class="rating-info">
                                     <p>Ponad <strong>10</strong> osób rekomendują to miejsce</p>
                                 </div>
                             </div>
                             <div class="rating-percentage">
                                 <div class="rating-column">
                                     <p class="rating-label"><strong>Cena</strong></p>
                                     <div class="basic-progressbar">
                                         <div class="inner" style="width:75%"></div>
                                     </div>
                                 </div>

                                 <div class="rating-column">
                                     <p class="rating-label"><strong>Oceny</strong></p>
                                     <div class="basic-progressbar">
                                         <div class="inner" style="width:55%"></div>
                                     </div>
                                 </div>

                                 <div class="rating-column">
                                     <p class="rating-label"><strong>Popularnośc</strong></p>
                                     <div class="basic-progressbar">
                                         <div class="inner" style="width:25%"></div>
                                     </div>
                                 </div>

                                 <div class="rating-column">
                                     <p class="rating-label"><strong>Profil</strong></p>
                                     <div class="basic-progressbar">
                                         <div class="inner" style="width:80%"></div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="reviews-feed" style="padding-top: 10px;">
                             <div class="reviews-row" style="border-radius: 5px;border-style: solid; border-width: 1px; border-color: limegreen; padding-right: 15px; padding-left:5px;">

                                 <div class="review-meta">
                                     <a class="avatar-sq " href="{{url('user/profile')}}">
                                         <img src="{{ asset('new-assets/images/avatar/avatar_01.jpg') }}" alt="">
                                     </a>
                                     <a class="name-sq" href="{{url('user/profile')}}">Danny Martinez</a>
                                 </div>

                                 <div class="comment-sq">
                                     <span class="date-sq" style="opacity: 1;"><div class="ui star rating" data-rating="3" data-max-rating="5"></div></span>

                                     <span class="date-sq" >12 september 2017 </span>



                                     <p>As the saying goes: “Hospitality is making your guests feel at home, even though
                                         you wish they were". So please treat the place and the building neighbours as
                                         you would do your own.</p>
                                 </div>
                                <div class="button-sq small-sq see-through-sq" style="position: absolute; right:10px;">
                                         Zmień
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

                                     <span class="date-sq" style="opacity: 1;"><div class="ui star rating disabled" data-rating="3" data-max-rating="5"></div></span>

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

                             <div class="reviews-row">
                                 <div class="review-meta">

                                     <a class="name-sq" href="vendor_details.html">Nathaniel Brown</a>
                                 </div>
                                 <div class="comment-sq">
                                     <span class="date-sq" style="opacity: 1;"><div class="ui star rating disabled" data-rating="3" data-max-rating="5"></div></span>
                                     <span class="date-sq">24 august 2017</span>


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
     </div> --}}



    <!--end ui container-->

    <!-- Contact -->
    <div class="ui modal small" data-for="contact" id="infos_request">


        <i class="icon icon-close close-modal"></i>
        <div class="header center" style="padding-top: 30px;">
            <h3>Sprawdź dostępność</h3>
        </div>


        <div class="content">
            <form method="post" action="{{ route('venue-booking-request') }}" id="venueBookingRequest">
                @csrf

                <div id="examplecalendar2" class="calendar-sq" style="padding-bottom: 10px;">
                    <input type="text" name="book_date" id="event_date_new" value="" placeholder="Wybierz datę">
                </div>

                <div class="main-infos  div-c inline-2">
                    <div class="timecalendar calendar-sq divided-column">
                        <div class="relative">
                            <input type="text" class="filter" id="from_hour_new"
                                   name="time_from" value=""
                                   placeholder="od">
                        </div>
                    </div>

                    <div class="timecalendar calendar-sq divided-column">
                        <input type="text" class="filter" name="time_to"
                               id="to_hour_new" value="" placeholder="do">
                    </div>
                </div>


                <div class="div-c">
                    <label>Imię</label>
                    <input type="text" name="name" autofocus
                           value="@auth{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}@endauth"
                           placeholder=" ">
                </div>

                <div class="div-c inline-2">
                    <div class="divided-column">
                        <label>Telefon</label>
                        <input type="text" name="phone" value="@auth{{ Auth::user()->phone }}@endauth" placeholder=" ">
                    </div>

                    <div class="divided-column">
                        <label>Email</label>
                        <input type="email" name="email" value="@auth{{ Auth::user()->email }}@endauth" placeholder=" ">
                    </div>
                </div>

                <input type="hidden" name="sender_id" value="@auth{{ Auth::user()->id }}@endauth">
                <input type="hidden" name="venue_id" value="{{ $venue->id }}">

                <div class="div-c">
                    <label>Message</label>
                    <textarea name="message" cols="30" rows="10" placeholder=""></textarea>
                </div>

            </form>
        </div>

        <div class="actions">
            <div class="div-c">
                <div class="divided-column" style="padding-bottom: 20px;">
                    <div class="button-sq fullwidth-sq modal-ui-trigger" data-trigger-for="success"
                         id="send_request_availability">Wyślij
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ui modal small"
         style="background: none; background-color: transparent; box-shadow: none; text-align: center; color: white"
         data-for="success" id="icon_succes_send">
        <p><i style="color:#F57C00; font-size: 50px;"
              class="fa fa-check-circle"></i></p>
        <p>Wiadomość została wysłana</p>
    </div>

    <div class="ui modal small"
         style="background: none; background-color: transparent; box-shadow: none; text-align: center; color: white"
         data-for="added_wishlist" id="added_wishlist">
        <p><i style="color:#F57C00; font-size: 50px;"
              class="fa fa-check-circle"></i></p>
        <p id="text_wishlist">Dodano do listy życzeń</p>
    </div>

    <div id="fbchat"></div>
    <div class="fb-customerchat"
         logged_in_greeting="Potrzebujesz pomocy? Napisz do nas!"
         logged_out_greeting="Potrzebujesz pomocy? Zaloguj się i napisz do nas!"
         theme_color="#f57C00" page_id="{{ $venue->facebook_page_id }}">
    </div>

@endsection
