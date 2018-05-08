@extends('layouts.app')

@section('title', 'Wyszukiwanie usług')

@section('content')
    <header class="header-section mhs header-sticky header-isnt-tablet header-isnt-mobile">

        <div class="header-content">
            <div class="ui container grid">
                <div class="header-item header-left">
                </div>

                <div class="header-item header-center ">
                </div>

                <div class="header-item header-right flex-align-left flex-grow-true">

                    <!-- Mega Menu-->
                    <div class="item menu-default burger-mobile-modal burger-tablet-modal dropdown-fullwidth flex-grow-true"
                         data-burger="menu02">

                        <a href="" class="modal-trigger close-sq hamburger hamburger-spin item"
                           data-trigger-for="menu02">
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
                                        <option value="">Typ uslugi</option>
                                        @foreach ($eventTypes as $eventType)
                                            <option value="{{ $eventType->name }}"
                                                    @if($current_event_type === $eventType->name) selected @endif>{{ $eventType->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </li>



                            <div class="price-range-slider mobile-big item flex-grow-desktop-true flex-grow-large-desktop-true" style="padding-right: 25px;">
                                <input type="hidden" name="minPrice" id="minPrice" value="{{$min_price}}">
                                <input type="hidden" name="maxPrice" id="maxPrice" value="{{$max_price}}">
                                <label class="placeholder hidden-desktop hidden-large-desktop">Zakres
                                    cen</label>

                                <div id="price-range-slider" class="price-range-slider-base"></div>
                            </div>








                        </ul>

                    </div>

                </div>
            </div>
        </div>

    </header>

    <div class="ui layout">
        <!-- grid -->
        <div class="ui grid container centered">


            <div class="switch-view-controller hidden-desktop hidden-large-desktop">

                <a href="" class="modal-trigger item hidden-desktop hidden-large-desktop" data-trigger-for="menu02">
                    <i class="icon icon-filter"></i>
                    <span>Filters</span>
                </a>
            </div>

            @for($i=0; $i<9; $i++)
                <div class="ui twelve wide mobile six wide tablet four wide computer column">
                    <div class="property-item caption-sq ">
                        <div class="property-item-inner">

                            <div class="price-tag-sq">
                                <span>od </span>300
                                PLN <span>/1 godz</span>
                            </div>
                            <a class="add-wishlist modal-ui-trigger" href=""
                               data-trigger-for="wishlist">
                                <i class="icon icon-heart-line"></i>
                            </a>


                            <a class="image-sq" href="#"
                               target="_blank">
                                                <span class="image-wrapper">
                                                    <span class="image-inner">
                                                        <img src="{{ asset('new-assets/images/property/property_little_01.jpg') }}"
                                                             alt="" class="" style="height: 100%">
                                                        {{--<img src="{{ asset('new-assets/images/property/property_little_01.jpg') }}"
                                                             alt="" class="">--}}
                                                    </span>
                                                </span>
                            </a>

                            <div class="main-details">
                                <div class="title-row">
                                    <a href="#" target="_blank"
                                       class="title-sq">Usluga takajato</a>


                                </div>
                                <div class="biz-adres">
                                    <strong style="padding-right: 10px;">Dj</strong>| Skarzynskiego 5
                                </div>

                                <div class="icons-row">
                                    <div class="icons-column">
                                        <i class="icon icon-star-2"></i> 8.6
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endfor

        </div>
        <!--end ui container-->

    </div>
@endsection