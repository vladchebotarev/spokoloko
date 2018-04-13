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
                                        <input type="hidden" name="city" id="city" lat="{{ $current_city->lat }}"
                                               lng="{{ $current_city->lng }}" disabled>
                                        <select class="ui search dropdown" id="select_city">
                                            <option value="">Miasto</option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->name }}"
                                                        @if($current_city->name === $city->name) selected @endif>{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </li>

                                <li>
                                    <div class="field item" style="margin-left: 0px;">
                                        <select class="ui search dropdown" id="select_event_type" name="eventType">
                                            <option value="">Wydarzenie</option>
                                            @foreach ($eventTypes as $eventType)
                                                <option value="{{ $eventType->name }}"
                                                        @if($current_event_type === $eventType->name) selected @endif>{{ $eventType->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </li>


                                <li class="flex-grow-desktop-true flex-grow-large-desktop-true">
                                    <div class="price-range-slider mobile-big item flex-grow-desktop-true flex-grow-large-desktop-true">
                                        <input type="hidden" name="minPrice" id="minPrice" value="{{$min_price}}">
                                        <input type="hidden" name="maxPrice" id="maxPrice" value="{{$max_price}}">
                                        <label class="placeholder hidden-desktop hidden-large-desktop">Zakres
                                            cen</label>

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
                                                        <label>{{ __('Powierzchnia m²') }}</label>
                                                        <input type="number" name="area" min="0"
                                                               value="{{$current_area}}">

                                                    </div>

                                                    <div class="divided-column">
                                                        <label>{{ __('Liczba osób (stojąco)') }}</label>
                                                        <input type="number" name="guests_standing" min="0"
                                                               value="{{$current_guests_standing}}">
                                                    </div>

                                                    <div class="divided-column">
                                                        <label>{{ __('Liczba osób (siedząco)') }}</label>
                                                        <input type="number" name="guests_seating" min="0"
                                                               value="{{$current_guests_seating}}">
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
                                                            @for ($i = 0; $i < 6; $i++)
                                                                <div class="divided-column">
                                                                    <input type="checkbox"
                                                                           id="venue_type_{{ $venueTypes[$i]->id }}"
                                                                           name="venue_types[]"
                                                                           value="{{ $venueTypes[$i]->name }}"
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
                                                            @for ($i = 6; $i < count($venueTypes); $i++)
                                                                <div class="divided-column">
                                                                    <input type="checkbox"
                                                                           id="venue_type_{{ $venueTypes[$i]->id }}"
                                                                           name="venue_types[]"
                                                                           value="{{ $venueTypes[$i]->name }}"
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
                                                            @for ($i = 0; $i < 6; $i++)
                                                                <div class="divided-column">
                                                                    <input type="checkbox"
                                                                           id="amenity_{{ $amenities[$i]->id }}"
                                                                           name="amenities[]"
                                                                           value="{{ $amenities[$i]->name }}"
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
                                                            @for ($i = 6; $i < count($amenities); $i++)
                                                                <div class="divided-column">
                                                                    <input type="checkbox"
                                                                           id="amenity_{{ $amenities[$i]->id }}"
                                                                           name="amenities[]"
                                                                           value="{{ $amenities[$i]->name }}"
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
                                                            <label>{{ __('Zasasdy') }}</label>
                                                            @for ($i = 0; $i < 6; $i++)
                                                                <div class="divided-column">
                                                                    <input type="checkbox"
                                                                           id="rules_{{ $rules[$i]->id }}"
                                                                           name="rules[]" value="{{ $rules[$i]->name }}"
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
                                                                           id="rules_{{ $rules[$i]->id }}"
                                                                           name="rules[]" value="{{ $rules[$i]->name }}"
                                                                           @if(in_array($rules[$i]->name, $current_rules))
                                                                           checked
                                                                            @endif>
                                                                    <label for="rules_{{ $rules[$i]->id }}">{{ $rules[$i]->name }}</label>
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
                                                            <label>{{ __('Style') }}</label>
                                                            @for ($i = 0; $i < 6; $i++)
                                                                <div class="divided-column">
                                                                    <input type="checkbox"
                                                                           id="style_{{ $styles[$i]->id }}"
                                                                           name="styles[]"
                                                                           value="{{ $styles[$i]->name }}"
                                                                           @if(in_array($styles[$i]->name, $current_styles))
                                                                           checked
                                                                            @endif>
                                                                    <label for="style_{{ $styles[$i]->id }}">{{ $styles[$i]->name }}</label>
                                                                </div>
                                                            @endfor
                                                        </div>

                                                    </div>
                                                    <div class="content">
                                                        <div class="div-c inline-3">
                                                            @for ($i = 6; $i < count($styles); $i++)
                                                                <div class="divided-column">
                                                                    <input type="checkbox"
                                                                           id="style_{{ $styles[$i]->id }}"
                                                                           name="styles[]"
                                                                           value="{{ $styles[$i]->name }}"
                                                                           @if(in_array($styles[$i]->name, $current_styles))
                                                                           checked
                                                                            @endif>
                                                                    <label for="style_{{ $styles[$i]->id }}">{{ $styles[$i]->name }}</label>
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
                                                            @for ($i = 0; $i < 6; $i++)
                                                                <div class="divided-column">
                                                                    <input type="checkbox"
                                                                           id="feature_{{ $features[$i]->id }}"
                                                                           name="features[]"
                                                                           value="{{ $features[$i]->name }}"
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
                                                            @for ($i = 6; $i < count($features); $i++)
                                                                <div class="divided-column">
                                                                    <input type="checkbox"
                                                                           id="feature_{{ $features[$i]->id }}"
                                                                           name="features[]"
                                                                           value="{{ $features[$i]->name }}"
                                                                           @if(in_array($features[$i]->name, $current_features))
                                                                           checked
                                                                            @endif>
                                                                    <label for="feature_{{ $features[$i]->id }}">{{ $features[$i]->name }}</label>
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
                                                        <button type="submit"
                                                                class="float-right-sq button-sq modal-button font-weight-bold-sq">{{ __('Zastosuj') }} </button>
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

                            @if(count($venues) != 0)
                                @for($i =0; $i<10 ; $i++)

                                @foreach ($venues as $venue)
                                    <!-- property item -->
                                        <div class="ui twelve wide mobile six wide tablet six wide computer four wide widescreen four wide large screen column">
                                            <div class="property-item caption-sq">
                                                <div class="property-item-inner">

                                                    <div class="price-tag-sq">
                                                        <span>od </span>{{ number_format($venue->min_price, 0, '', '')  }}
                                                        PLN <span>/{{ $venue->min_hours }} godz</span>
                                                    </div>
                                                    <a class="add-wishlist modal-ui-trigger" href=""
                                                       data-trigger-for="wishlist">
                                                        <i class="icon icon-heart-line"></i>
                                                    </a>
                                                    <a class="image-left" href="">
                                                         <i class="icon icon-arrow-left-12"></i>
                                                    </a>
                                                    <a class="image-right" href="">
                                                        <i class="icon icon-arrow-right-12"></i>
                                                    </a>

                                                    <a class="image-sq" href="{{ url('venue/'.$venue->url) }}"
                                                       target="_blank">
                                                <span class="image-wrapper">
                                                    <span class="image-inner">
                                                        <img src="{{ asset('/images/venues/'.$venue->image_url) }}"
                                                             alt="" class="" style="height: 100%">
                                                        {{--<img src="{{ asset('new-assets/images/property/property_little_01.jpg') }}"
                                                             alt="" class="">--}}
                                                    </span>
                                                </span>
                                                    </a>

                                                    <div class="main-details">
                                                        <div class="title-row">
                                                            <a href="{{ url('venue/'.$venue->url) }}" target="_blank"
                                                               class="title-sq">{{ $venue->name }}</a>


                                                        </div>
                                                        <div class="biz-adres">
                                                             <strong style="padding-right: 10px;">Klub muzycny</strong>| {{ $venue->street_address }}
                                                        </div>

                                                        <div class="icons-row">
                                                            <div class="icons-column">
                                                                <i class="icon icon-star-2"></i> 8.6
                                                            </div>
                                                            <div class="icons-column">
                                                                <i class="icon icon-account-group-5"></i> {{ $venue->max_guests }}
                                                            </div>
                                                            <div class="icons-column">
                                                                <i class="icon icon-home-3"></i> {{ $venue->area }}m²
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endfor
                                @else
                                    Nie ma takich lokali
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end ui container-->

    </div>
@endsection