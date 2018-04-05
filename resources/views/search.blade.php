@extends('layouts.app')

@section('title', 'Wyszukiwanie')

@section('content')
    <header class="header-section mhs header-sticky header-fullwidth header-isnt-tablet header-isnt-mobile">
        <div class="header-content">
            <div class="ui container grid">
                <div class="header-item header-left">
                </div>

                <div class="header-item header-center ">
                </div>

                <div class="header-item header-right flex-align-left flex-grow-true">

                    <div class="item menu-default burger-mobile-modal burger-tablet-modal search-visible flex-grow-true" data-burger="menu02">

                        <a href="" class="modal-trigger hamburger hamburger-spin item" data-trigger-for="menu02">
                            <span class="hamburger-box">
                              <span class="hamburger-inner"></span>
                            </span>
                        </a>

                        <ul>



                            <li >
                                <div class="field item" >

                                    <div class="ui fluid search selection dropdown" style="min-width: 250px;" >

                                        <input type="hidden" name="country">
                                        <i class="dropdown icon" style="padding-left: 40px;"></i>
                                        <div class="default text">Miasto</div>
                                        <div class="menu">
                                            <div class="item" data-value="kr">Krakow</div>
                                            <div class="item" data-value="wa">Warszawa</div>
                                            <div class="item" data-value="tr">Trojmiasto</div>



                                        </div>
                                    </div>

                                </div>

                            </li>

                            <li>
                                <div class="field item" style="margin-left: 0px;">

                                    <div class="ui fluid search selection dropdown" style="min-width: 250px;">
                                        <input type="hidden" name="country">
                                        <i class="dropdown icon"></i>
                                        <div class="default text">Typ wydarzenia</div>
                                        <div class="menu">
                                            <div class="item" data-value="im"></i>Impreza</div>
                                            <div class="item" data-value="ko"></i>Konferecnja</div>
                                            <div class="item" data-value="sa"></i>Sasai Kudasai</div>


                                        </div>
                                    </div>
                                </div>

                            </li>



                            <li class="flex-grow-desktop-true flex-grow-large-desktop-true">
                                <div class="price-range-slider mobile-big item flex-grow-desktop-true flex-grow-large-desktop-true">

                                    <label class="placeholder hidden-desktop hidden-large-desktop">Price Range</label>

                                    <div id="price-range-slider" class="price-range-slider-base"></div>
                                </div>
                            </li>

                            <li class="has-submenu has-megamenu open-inside-modal filters-dropdown overlay-dropdown">

                                <a href="#" class="item hidden-tablet hidden-mobile">
                                    <i class="icon icon-filter"></i>
                                    <span class="">Filters</span>
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
                                                    <a class="accordion-trigger more-trigger" data-more="More" data-less="Less">
                                                        <i class="icon icon-arrow-down-122"></i>
                                                    </a>

                                                    <div class="div-c inline-3 one-label">
                                                        <label>Amenities</label>
                                                        <div class="divided-column">
                                                            <input type="checkbox" id="checkbox1">
                                                            <label for="checkbox1">Wireless Internet</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="checkbox2">
                                                            <label for="checkbox2">Laptop friendly workspace</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="checkbox3">
                                                            <label for="checkbox3">Iron</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="checkbox4">
                                                            <label for="checkbox4">Hangers</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="checkbox5">
                                                            <label for="checkbox5">Hair Dry</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="checkbox6">
                                                            <label for="checkbox6">Washer</label>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="content">
                                                    <div class="div-c inline-3">
                                                        <div class="divided-column">
                                                            <input type="checkbox" id="checkbox7">
                                                            <label for="checkbox7">Shampoo</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="checkbox8">
                                                            <label for="checkbox8">TV</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="checkbox9">
                                                            <label for="checkbox9">Kitchen</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="checkbox10">
                                                            <label for="checkbox10">Essentials</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="checkbox11">
                                                            <label for="checkbox11">Heating</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="checkbox12">
                                                            <label for="checkbox12">Items</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="ui accordion more-sq">
                                                <div class="title">
                                                    <a class="accordion-trigger more-trigger" data-more="More" data-less="Less">
                                                        <i class="icon icon-arrow-down-122"></i>
                                                    </a>

                                                    <div class="div-c inline-3 one-label">
                                                        <label>Host Language</label>
                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang1">
                                                            <label for="lang1">Afrikanns</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang2">
                                                            <label for="lang2">Albanian</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang3">
                                                            <label for="lang3">Arabic</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang4">
                                                            <label for="lang4">Armenian</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang5">
                                                            <label for="lang5">Basque</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang6">
                                                            <label for="lang6">Bengali</label>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="content">
                                                    <div class="div-c inline-3">
                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang7">
                                                            <label for="lang7">Bulgarian</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang8">
                                                            <label for="lang8">Catalan</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang9">
                                                            <label for="lang9">Cambodian</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang10">
                                                            <label for="lang10">Chinese (Mandarin)</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang11">
                                                            <label for="lang11">Croation</label>
                                                        </div>

                                                        <div class="divided-column">
                                                            <input type="checkbox" id="lang12">
                                                            <label for="lang12">Czech</label>
                                                        </div>
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
                                                    <a href="" class="float-right-sq button-sq modal-button font-weight-bold-sq">Apply</a>

                                                    <a class="float-right-sq button-sq cancel-sq hidden-tablet hidden-mobile" href="">Cancel</a>

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

                        <a href="" class="modal-trigger item hidden-desktop hidden-large-desktop" data-trigger-for="menu02">
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

                                                    <div class="price-tag-sq"><span>od </span>112 PLN <span>/3 godz</span></div>
                                                    <a class="add-wishlist modal-ui-trigger" href="" data-trigger-for="wishlist">
                                                        <i class="icon icon-heart-line"></i>
                                                    </a>

                                                    <a class="image-sq" href="{{ url('venue') }}">
                                                <span class="image-wrapper">
                                                    <span class="image-inner">
                                                        <img src="{{ asset('new-assets/images/property/property_little_0'.$i.'.jpg') }}" alt="" class="">
                                                    </span>
                                                </span>
                                                    </a>

                                                    <div class="main-details" >
                                                        <div class="title-row" style="margin-bottom: 5px;">
                                                            <a href="{{ url('venue') }}" class="title-sq">Downtown Sweet House</a>



                                                        </div>
                                                        <div class="asd" style="color:white; margin-bottom: 0px">
                                                            <i class="icon icon-location-pin-2"></i> ul. Zamenhofa 7
                                                        </div>

                                                        <div class="icons-row" style="padding-top: 20px;">
                                                            <div class="icons-column" >
                                                                <i class="icon icon-star-2"></i> 8.6
                                                            </div>
                                                            <div class="icons-column">
                                                                <i class="icon icon-account-group-5" ></i> 520
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