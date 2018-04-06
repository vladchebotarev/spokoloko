@extends('layouts.app')

@section('title', 'Wyszukiwanie')

@section('content')
    <header class="header-section mhs header-sticky header-fullwidth header-isnt-tablet header-isnt-mobile">
        <form method="get" action="venues/{{ $current_city->name }}" id="search_form">
            <div class="header-content">
                <div class="ui container grid">
                    <div class="header-item header-left">
                    </div>

                    <div class="header-item header-center ">
                    </div>

                    <div class="header-item header-right flex-align-left flex-grow-true">

                        <div class="item menu-default burger-mobile-modal burger-tablet-modal search-visible flex-grow-true"
                             data-burger="menu02">

                            <a href="" class="modal-trigger hamburger hamburger-spin item" data-trigger-for="menu02">
                            <span class="hamburger-box">
                              <span class="hamburger-inner"></span>
                            </span>
                            </a>

                            <ul>
                                <li>
                                    <div class="field item">
                                        <select class="ui search dropdown">
                                            <option value="">State</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District Of Columbia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>



                                        {{--<div class="ui fluid search selection dropdown" style="min-width: 250px;" onkeydown = "if (event.keyCode == 13)
                                                alert(1)">

                                            --}}{{--<input type="hidden" name="city" id="city">--}}{{--

                                            <div class="default text" onclick="alert(1);">{{ $current_city->name }}</div>
                                            <div class="menu">
                                                @foreach ($cities as $city)
                                                    <div class="item" id="city" data-value="{{ $city->name }}"
                                                         onclick="sendSearchForm(this.getAttribute('data-value'))">{{ $city->name }}</div>
                                                @endforeach
                                            </div>
                                        </div>--}}



                                    </div>

                                </li>

                                <li>
                                    <div class="field item" style="margin-left: 0px;">

                                        <div class="ui fluid search selection dropdown" style="min-width: 250px;">
                                            <input type="hidden" name="eventType">
                                            <i class="dropdown icon"></i>
                                            <div class="default text">{{ $current_event_type }}</div>
                                            <div class="menu">
                                                @foreach ($eventTypes as $eventType)
                                                    <div class="item"
                                                         data-value="{{ $eventType->name }}">{{ $eventType->name }}</div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                </li>


                                <li class="flex-grow-desktop-true flex-grow-large-desktop-true">
                                    <div class="price-range-slider mobile-big item flex-grow-desktop-true flex-grow-large-desktop-true">

                                        <label class="placeholder hidden-desktop hidden-large-desktop">Price
                                            Range</label>

                                        <div id="price-range-slider" class="price-range-slider-base"></div>
                                    </div>
                                </li>

                                <li class="has-submenu has-megamenu open-inside-modal filters-dropdown overlay-dropdown">

                                    <a href="#" class="item hidden-tablet hidden-mobile">
                                        <i class="icon icon-filter"></i>
                                        <span class="">{{ __('Filtry') }}</span>
                                    </a>

                                    <ul class="submenu megamenu special-sq">
                                        <li class="item">
                                            <div class="content">

                                                <div class="div-c inline-3">
                                                    <div class="divided-column">
                                                        <label>Bedrooms</label>
                                                        <select name="dropdown" class="dropdown item">
                                                            <option value="0">1</option>
                                                            <option value="1">2</option>
                                                            <option value="2">3</option>
                                                            <option value="3">4</option>
                                                            <option value="4">5</option>
                                                            <option value="5">6</option>
                                                            <option value="6">7</option>
                                                            <option value="7">8</option>
                                                            <option value="8">9</option>
                                                            <option value="9">10</option>
                                                        </select>
                                                    </div>

                                                    <div class="divided-column">
                                                        <label>Number of beds</label>
                                                        <select name="dropdown" class="dropdown item">
                                                            <option value="0">1</option>
                                                            <option value="1">2</option>
                                                            <option value="2">3</option>
                                                            <option value="3">4</option>
                                                            <option value="4">5</option>
                                                            <option value="5">6</option>
                                                            <option value="6">7</option>
                                                            <option value="7">8</option>
                                                            <option value="8">9</option>
                                                            <option value="9">10</option>
                                                        </select>
                                                    </div>

                                                    <div class="divided-column">
                                                        <label>Bathrooms</label>
                                                        <select name="dropdown" class="dropdown item">
                                                            <option value="0">1</option>
                                                            <option value="1">2</option>
                                                            <option value="2">3</option>
                                                            <option value="3">4</option>
                                                            <option value="4">5</option>
                                                            <option value="5">6</option>
                                                            <option value="6">7</option>
                                                            <option value="7">8</option>
                                                            <option value="8">9</option>
                                                            <option value="9">10</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="div-c inline-3">

                                                    <div class="divided-column">
                                                        <label>Instant Booking</label>
                                                        <input type="checkbox" id="extra01">
                                                        <label for="extra01">Instant Booking</label>
                                                    </div>
                                                    <div class="divided-column">
                                                        <label>Super Host</label>
                                                        <input type="checkbox" id="extra02">
                                                        <label for="extra02">Super Host</label>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="ui accordion more-sq">
                                                    <div class="title">
                                                        <a class="accordion-trigger more-trigger"
                                                           data-more="{{ __('Więcej') }}" data-less="{{ __('Mniej') }}">
                                                            <i class="icon icon-arrow-down-122"></i>
                                                        </a>

                                                        <div class="div-c inline-3 one-label">
                                                            <label>{{ __('Typy mejsc') }}</label>
                                                            @for ($i = 0; $i < 3; $i++)
                                                                <div class="divided-column">
                                                                    <input type="checkbox"
                                                                           id="venue_type_{{ $venueTypes[$i]->id }}">
                                                                    <label for="venue_type_{{ $venueTypes[$i]->id }}">{{ $venueTypes[$i]->name }}</label>
                                                                </div>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <div class="div-c inline-3">
                                                            @for ($i = 3; $i < count($venueTypes); $i++)
                                                                <div class="divided-column">
                                                                    <input type="checkbox"
                                                                           id="venue_type_{{ $venueTypes[$i]->id }}">
                                                                    <label for="venue_type_{{ $venueTypes[$i]->id }}">{{ $venueTypes[$i]->name }}</label>
                                                                </div>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="ui accordion more-sq">
                                                    <div class="title">
                                                        <a class="accordion-trigger more-trigger"
                                                           data-more="{{ __('Więcej') }}" data-less="{{ __('Mniej') }}">
                                                            <i class="icon icon-arrow-down-122"></i>
                                                        </a>

                                                        <div class="div-c inline-3 one-label">
                                                            <label>{{ __('Udogodnienia') }}</label>
                                                            @for ($i = 0; $i < 3; $i++)
                                                                <div class="divided-column">
                                                                    <input type="checkbox"
                                                                           id="amenity_{{ $amenities[$i]->id }}">
                                                                    <label for="amenity_{{ $amenities[$i]->id }}">{{ $amenities[$i]->name }}</label>
                                                                </div>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <div class="div-c inline-3">
                                                            @for ($i = 3; $i < count($amenities); $i++)
                                                                <div class="divided-column">
                                                                    <input type="checkbox"
                                                                           id="amenity_{{ $amenities[$i]->id }}">
                                                                    <label for="amenity_{{ $amenities[$i]->id }}">{{ $amenities[$i]->name }}</label>
                                                                </div>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="ui accordion more-sq">
                                                    <div class="title">
                                                        <a class="accordion-trigger more-trigger"
                                                           data-more="{{ __('Więcej') }}" data-less="{{ __('Mniej') }}">
                                                            <i class="icon icon-arrow-down-122"></i>
                                                        </a>

                                                        <div class="div-c inline-3 one-label">
                                                            <label>{{ __('Cechy') }}</label>
                                                            @for ($i = 0; $i < 3; $i++)
                                                                <div class="divided-column">
                                                                    <input type="checkbox"
                                                                           id="amenity_{{ $features[$i]->id }}">
                                                                    <label for="amenity_{{ $features[$i]->id }}">{{ $features[$i]->name }}</label>
                                                                </div>
                                                            @endfor
                                                        </div>

                                                    </div>
                                                    <div class="content">
                                                        <div class="div-c inline-3">
                                                            @for ($i = 3; $i < count($features); $i++)
                                                                <div class="divided-column">
                                                                    <input type="checkbox"
                                                                           id="amenity_{{ $features[$i]->id }}">
                                                                    <label for="amenity_{{ $features[$i]->id }}">{{ $features[$i]->name }}</label>
                                                                </div>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="div-c inline-3 one-label">
                                                    <label>House Rules</label>
                                                    <div class="divided-column">
                                                        <input type="checkbox" id="rules01">
                                                        <label for="rules01">Pets allowed</label>
                                                    </div>
                                                    <div class="divided-column">
                                                        <input type="checkbox" id="rules02">
                                                        <label for="rules02">Smoking allowed</label>
                                                    </div>
                                                    <div class="divided-column">
                                                        <input type="checkbox" id="rules03">
                                                        <label for="rules03">Suitable for events</label>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="footer">
                                                <div class="div-c inline-2">
                                                    <div class="divided-column">
                                                        <div class="applied-filters">
                                                            <div class="filters-icon-container">
                                                                <i class="icon icon-filter"></i>
                                                            </div>
                                                            <a class="remove-all">
                                                                Remove All<i class="icon icon-close"></i>
                                                            </a>
                                                            <a class="">
                                                                Applied Filter<i class="icon icon-close"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="divided-column">
                                                        <a href=""
                                                           class="float-right-sq button-sq modal-button font-weight-bold-sq">{{ __('Zastosuj') }}</a>

                                                        {{--<a class="item float-right-sq button-sq cancel-sq hidden-tablet hidden-mobile" href="#">{{ __('Zamknij') }}</a>--}}

                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                    </ul>


                                </li>

                            </ul>

                        </div>

                    </div>

                </div>
            </div>
        </form>
    </header>

    <div class="ui layout">

        <!-- grid -->
        <div class="ui grid container fluid">
            <div class="row">
                <div class="ui half-layout">

                    <div class="switch-view-controller">
                        <a href="" id="only-list-trigger" class="item">
                            <i class="icon icon-list"></i>
                            <span>Lista</span>
                        </a>
                        <a href="" id="both-trigger" class="item active hidden-mobile">
                            <i class="icon icon-both"></i>
                            <span>Razem</span>
                        </a>

                        <a href="" id="only-map-trigger" class="item">
                            <i class="icon icon-map"></i>
                            <span>Mapa</span>
                        </a>

                        <a href="" class="modal-trigger item hidden-desktop hidden-large-desktop"
                           data-trigger-for="menu02">
                            <i class="icon icon-filter"></i>
                            <span>Filtry</span>
                        </a>
                    </div>


                    <div class="ui column map">
                        <div id="map"></div>
                    </div>

                    <div class="ui column variable">


                        <div class="ui grid narrow-sq">
                            <div class="row">

                            @for ($i = 1; $i < 10; $i++)
                                <!-- property item -->
                                    <div class="ui twelve wide mobile six wide tablet six wide computer four wide widescreen four wide large screen column">
                                        <div class="property-item ">
                                            <div class="property-item-inner">

                                                <div class="price-tag-sq"><span>od </span>112 PLN <span>/3 godz</span>
                                                </div>
                                                <a class="add-wishlist modal-ui-trigger" href=""
                                                   data-trigger-for="wishlist">
                                                    <i class="icon icon-heart-line"></i>
                                                </a>

                                                <a class="image-sq" href="{{ url('venue') }}">
                                                <span class="image-wrapper">
                                                    <span class="image-inner">
                                                        <img src="{{ asset('new-assets/images/property/property_little_0'.$i.'.jpg') }}"
                                                             alt="" class="">
                                                    </span>
                                                </span>
                                                </a>

                                                <div class="main-details">
                                                    <div class="title-row" style="margin-bottom: 5px;">
                                                        <a href="{{ url('venue') }}" class="title-sq">Downtown Sweet
                                                            House</a>


                                                    </div>
                                                    <div class="asd" style="color:white; margin-bottom: 0px">
                                                        <i class="icon icon-location-pin-2"></i> ul. Zamenhofa 7
                                                    </div>

                                                    <div class="icons-row" style="padding-top: 20px;">
                                                        <div class="icons-column">
                                                            <i class="icon icon-star-2"></i> 8.6
                                                        </div>
                                                        <div class="icons-column">
                                                            <i class="icon icon-account-group-5"></i> 520
                                                        </div>
                                                        <div class="icons-column">
                                                            <i class="icon icon-home-3"></i> 30m²
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end ui container-->

    </div>
@endsection