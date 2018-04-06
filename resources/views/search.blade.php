@extends('layouts.app')

@section('title', 'Wyszukiwanie')

@section('content')
    <header class="header-section mhs header-sticky header-fullwidth header-isnt-tablet header-isnt-mobile">
        <form method="get" action="{{ $current_city->name }}" id="search_form">
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
                                        <select class="ui search dropdown" id="select_city">
                                            <option value="">Miasto</option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->name }}" @if($current_city->name === $city->name) selected @endif>{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </li>

                                <li>
                                    <div class="field item" style="margin-left: 0px;">
                                        <select class="ui search dropdown" id="select_event_type" name="eventType">
                                            <option value="">Wydarzenie</option>
                                            @foreach ($eventTypes as $eventType)
                                                <option value="{{ $eventType->name }}" @if($current_event_type === $eventType->name) selected @endif>{{ $eventType->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </li>


                                <li class="flex-grow-desktop-true flex-grow-large-desktop-true">
                                    <div class="price-range-slider mobile-big item flex-grow-desktop-true flex-grow-large-desktop-true">
                                        <input type="hidden" name="minPrice" id="minPrice" value="{{$min_price}}">
                                        <input type="hidden" name="maxPrice" id="maxPrice" value="{{$max_price}}">
                                        <label class="placeholder hidden-desktop hidden-large-desktop">Zakres cen</label>

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
                                                        <select class="dropdown item">
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
                                                        <select class="dropdown item">
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
                                                        <select class="dropdown item">
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
                                                                           id="venue_type_{{ $venueTypes[$i]->id }}" name="venue_types[]" value="{{ $venueTypes[$i]->name }}"
                                                                           @if(in_array($venueTypes[$i]->name, $current_venue_types))
                                                                                checked
                                                                           @endif>
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
                                                                           id="venue_type_{{ $venueTypes[$i]->id }}" name="venue_types[]" value="{{ $venueTypes[$i]->name }}"
                                                                           @if(in_array($venueTypes[$i]->name, $current_venue_types))
                                                                                checked
                                                                           @endif>
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
                                                                           id="amenity_{{ $amenities[$i]->id }}" name="amenities[]" value="{{ $amenities[$i]->name }}"
                                                                           @if(in_array($amenities[$i]->name, $current_amenities))
                                                                                checked
                                                                           @endif>
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
                                                                           id="amenity_{{ $amenities[$i]->id }}" name="amenities[]" value="{{ $amenities[$i]->name }}"
                                                                           @if(in_array($amenities[$i]->name, $current_amenities))
                                                                                checked
                                                                           @endif>
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
                                                                           id="feature_{{ $features[$i]->id }}" name="features[]" value="{{ $features[$i]->name }}"
                                                                           @if(in_array($features[$i]->name, $current_features))
                                                                                checked
                                                                           @endif>
                                                                    <label for="feature_{{ $features[$i]->id }}">{{ $features[$i]->name }}</label>
                                                                </div>
                                                            @endfor
                                                        </div>

                                                    </div>
                                                    <div class="content">
                                                        <div class="div-c inline-3">
                                                            @for ($i = 3; $i < count($features); $i++)
                                                                <div class="divided-column">
                                                                    <input type="checkbox"
                                                                           id="feature_{{ $features[$i]->id }}" name="features[]" value="{{ $features[$i]->name }}"
                                                                           @if(in_array($features[$i]->name, $current_features))
                                                                                checked
                                                                           @endif>
                                                                    <label for="feature_{{ $features[$i]->id }}">{{ $features[$i]->name }}</label>
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
                                                            <label>{{ __('Zasasdy') }}</label>
                                                            @for ($i = 0; $i < 6; $i++)
                                                                <div class="divided-column">
                                                                    <input type="checkbox"
                                                                           id="rules_{{ $rules[$i]->id }}" name="rules[]" value="{{ $rules[$i]->name }}"
                                                                           @if(in_array($rules[$i]->name, $current_rules))
                                                                                checked
                                                                           @endif>
                                                                    <label for="rules_{{ $rules[$i]->id }}">{{ $rules[$i]->name }}</label>
                                                                </div>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <div class="div-c inline-3">
                                                            @for ($i = 6; $i < count($rules); $i++)
                                                                <div class="divided-column">
                                                                    <input type="checkbox"
                                                                           id="rules_{{ $rules[$i]->id }}" name="rules[]"  value="{{ $rules[$i]->name }}"
                                                                           @if(in_array($rules[$i]->name, $current_rules))
                                                                                checked
                                                                           @endif>
                                                                    <label for="rules_{{ $rules[$i]->id }}">{{ $rules[$i]->name }}</label>
                                                                </div>
                                                            @endfor
                                                        </div>
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
                                                            <a class="remove-all" id="clearFilters">
                                                                Wyczyść filtry<i class="icon icon-close"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="divided-column">
                                                        <button type="submit" class="float-right-sq button-sq modal-button font-weight-bold-sq">{{ __('Zastosuj') }} </button>
                                                        {{--<a href=""
                                                           class="float-right-sq button-sq modal-button font-weight-bold-sq">{{ __('Zastosuj') }}</a>--}}

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
                                {{ dump($venues) }}
                            {{--@for ($i = 1; $i < 10; $i++)
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
                                @endfor--}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end ui container-->

    </div>
@endsection