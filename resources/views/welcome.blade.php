@extends('layouts.app')

@section('content')

    <!-- Hero Full Page -->
    <div class="hero-search-full-page next-sq">

        <!-- Hero Search -->
        <!-- .thin .animate .shadow .colored -->
        <div class="h-search-h thin-sq shadow-sq animate-sq">
            <form action="" method="get" class="hero-search-form" id="searchForm">
                <div class="search-item">
                    <div class="fltp">
                        {{--<input type="text" value="" required>--}}
                        <select class="ui search dropdown" id="select_city" required>
                            <option value="Warszawa">Warszawa</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->name }}">{{ $city->name }}</option>
                            @endforeach
                        </select>

                        <label class="placeholder" data-big-placeholder="Miasto"
                               data-little-placeholder="np: Impreza Zamknięta"></label>
                    </div>
                </div>

                <div class="search-item">
                    <div class="fltp">
                        <select class="ui search dropdown" name="eventType" id="eventType">
                            <option value="Impreza zamknięta">Impreza zamknięta</option>
                            @foreach ($eventTypes as $eventType)
                                <option value="{{ $eventType->name }}">{{ $eventType->name }}</option>
                            @endforeach
                        </select>
                        <label class="placeholder">Typ eventu</label>
                    </div>
                </div>

                <div class="search-item">
                    <button type="button" class="button-sq hero-search-button" id="searchSubmit">
                        <i class="icon icon-search"></i>
                    </button>
                </div>

            </form>
        </div>

        <!-- Hero Big - Slick -->
        <div class="sq-slick hero-big slide-up-sq" data-mobile-arrows="false" data-tablet-arrows="false"
             data-mobile-dots="true" data-tablet-dots="true" data-fade="true" data-speed="500" data-ease="linear">
            <!-- .slide-up .fade .top .bottom -->

            <!--Slide 01-->
            <div class="">
                <div class="caption-content">
                    <h1 class="font-weight-extrabold-sq">Zorganizuj swój event</h1>
                    <p>Znajdź miejsce, catering, zespół muzyczny lub zleć organizację wydarzenia firmom eventowym
                    </p>
                </div>
                <div class="caption-outside">
                    <a class="button anchor-sq" href="#top">
                        <i class="icon big icon-location-pin-2"></i>
                        <span>Sprawdż</span>
                    </a>
                </div>

                <div class="image-wrapper">
                    <div class="image-inner">
                        <img class="image-sq" src="https://res.cloudinary.com/spokoloko/image/upload/s--T8JJP3ts--/c_fill,w_360/a_0/v1526054140/app/img/hero_big_28.jpg"
                                          srcset="
                                                        https://res.cloudinary.com/spokoloko/image/upload/s--T8JJP3ts--/c_fill,w_480/a_0/v1526054140/app/img/hero_big_28.jpg 480w,
                                                        https://res.cloudinary.com/spokoloko/image/upload/s--T8JJP3ts--/c_fill,w_750/a_0/v1526054140/app/img/hero_big_28.jpg 768w,
                                                        https://res.cloudinary.com/spokoloko/image/upload/s--T8JJP3ts--/a_0/v1526054140/app/img/hero_big_28.jpg 1000w"
                                          alt="asdasd" />



                    </div>
                </div>
            </div>


        </div>

    </div>

    <div class="ui layout" id="top">

        <div class="ui grid container">
            <div class="row">
                <div class="ui twelve wide computer column">
                    <div class="typo-section-sq bottom-default">

                        <div class="typo-section-header-sq">
                            <h2 class="text-align-left-sq">Najczęściej wyszukiwane</h2>
                            <p class="text-align-left-sq">Znajdź miejsce na Twoje wydarzenie.</p>
                        </div>

                        <div class="magic-grid photo-sq hover-default hover-center">

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" data-src="https://res.cloudinary.com/spokoloko/image/upload/w_360,h_360/v1526466580/app/img/club.jpg"
                                                     src="https://res.cloudinary.com/spokoloko/image/upload/c_scale,w_100/v1526490381/app/img/loading.jpg"
                                                     alt="photo"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="{{url('venues/Krak%C3%B3w?eventType=Impreza+zamkni%C4%99ta')}}" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Krakow"
                                           data-label-after="Zarezerwuj"></p>
                                        <p class="typo-title-sq">Sale na impreze</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" data-src="https://res.cloudinary.com/spokoloko/image/upload/w_360,h_360/v1526466580/app/img/wed.jpg"
                                                     src="https://res.cloudinary.com/spokoloko/image/upload/c_scale,w_100/v1526490381/app/img/loading.jpg"
                                                     alt="photo"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="{{url('venues/Kraków?eventType=Wesele')}}" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Krakow"
                                           data-label-after="Zarezerwuj"></p>
                                        <p class="typo-title-sq">Sale na wesele</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">

                                                <img class="image-sq" data-src="https://res.cloudinary.com/spokoloko/image/upload/w_360,h_360/v1526466580/app/img/conference.jpg"
                                                     src="https://res.cloudinary.com/spokoloko/image/upload/c_scale,w_100/v1526490381/app/img/loading.jpg"
                                                     alt="photo"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="{{url('venues/Kraków?eventType=Konferencja')}}" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Krakow"
                                           data-label-after="Zarezerwuj"></p>
                                        <p class="typo-title-sq">Sale konferencjne</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" data-src="https://res.cloudinary.com/spokoloko/image/upload/w_360,h_360/v1526466580/app/img/restaurant.jpg"
                                                     src="https://res.cloudinary.com/spokoloko/image/upload/c_scale,w_100/v1526490381/app/img/loading.jpg"
                                                     alt="photo"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="{{url('venues/Kraków?venue_types%5B%5D=Bar%2FRestauracja')}}" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Krakow"
                                           data-label-after="Zarezerwuj"></p>
                                        <p class="typo-title-sq">Restauracje</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" data-src="https://res.cloudinary.com/spokoloko/image/upload/w_360,h_360/v1526466580/app/img/magic_grid_photo_01.jpg"
                                                     src="https://res.cloudinary.com/spokoloko/image/upload/c_scale,w_100/v1526490381/app/img/loading.jpg"
                                                     alt="photo"
                                                />

                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="{{url('venues/Kraków?venue_types%5B%5D=Loft')}}" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Krakow"
                                           data-label-after="Zarezerwuj"></p>
                                        <p class="typo-title-sq">Lofty</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" data-src="https://res.cloudinary.com/spokoloko/image/upload/w_360,h_360/v1526466580/app/img/concert.jpg"
                                                     src="https://res.cloudinary.com/spokoloko/image/upload/c_scale,w_100/v1526490381/app/img/loading.jpg"
                                                     alt="photo"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="{{url('venues/Kraków?eventType=Koncert')}}" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Krakow"
                                           data-label-after="Zarezerwuj"></p>
                                        <p class="typo-title-sq">Sale koncertowe</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" data-src="https://res.cloudinary.com/spokoloko/image/upload/w_360,h_360/v1526482291/app/img/meet.jpg"
                                                     src="https://res.cloudinary.com/spokoloko/image/upload/c_scale,w_100/v1526490381/app/img/loading.jpg"
                                                     alt="photo"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="{{url('venues/Kraków?eventType=Meet-up')}}" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Krakow"
                                           data-label-after="Zarezerwuj"></p>
                                        <p class="typo-title-sq">Przestrzeń na meet-up </p>
                                    </a>

                                </div>
                            </div>

                        </div>

                        <a class="more-trigger" data-more="Więcej" href="{{url('/sitemap')}}">
                            <i class="icon icon-arrow-down-122"></i>
                        </a>
                    </div>

                </div>


            </div>
        </div>


       {{-- <div class="ui grid container">
            <div class="row">
                <div class="ui twelve wide computer column">
                    <div class="typo-section-sq bottom-default">

                        <div class="typo-section-header-sq">
                            <h2 class="text-align-left-sq">Czego brakuje do wydarzenia marzen</h2>
                            <p class="text-align-left-sq">Zobacz najlepszych uslugodawcow w calej Polsce.</p>
                        </div>

                        <div class="magic-grid photo-sq hover-default hover-center">

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" data-src="https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_320/v1526466580/app/img/v1/magic_grid_photo_01.jpg"
                                                     data-srcset="https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_320/v1526466580/app/img/v1/magic_grid_photo_01.jpg 320w,
                                                        https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_480/v1526466580/app/img/v1/magic_grid_photo_01.jpg 480w,
                                                        https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_600/v1526466580/app/img/v1/magic_grid_photo_01.jpg 600w"
                                                      />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="listing_page.html" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Krakow"
                                           data-label-after="Zarezerwuj"></p>
                                        <p class="typo-title-sq">Miejsce na wydarzenie</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" data-src="https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_320/v1526466580/app/img/v1/magic_grid_photo_02.jpg"
                                                     data-srcset="https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_320/v1526466580/app/img/v1/magic_grid_photo_02.jpg 320w,
                                                        https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_480/v1526466580/app/img/v1/magic_grid_photo_02.jpg 480w,
                                                        https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_600/v1526466580/app/img/v1/magic_grid_photo_02.jpg 600w"
                                                     />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="listing_page.html" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Krakow"
                                           data-label-after="Najlepsza"></p>
                                        <p class="typo-title-sq">Obsługa na wydarzenie</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">

                                                <img class="image-sq " data-src="https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_320/v1526466580/app/img/v1/magic_grid_photo_03.jpg"
                                                     data-srcset="https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_320/v1526466580/app/img/v1/magic_grid_photo_03.jpg 320w,
                                                        https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_480/v1526466580/app/img/v1/magic_grid_photo_03.jpg 480w,
                                                        https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_600/v1526466580/app/img/v1/magic_grid_photo_03.jpg 600w"
                                                      />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="listing_page.html" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Krakow"
                                           data-label-after="Nagraj"></p>
                                        <p class="typo-title-sq">Foto/Video</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" data-src="https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_320/v1526466580/app/img/v1/magic_grid_photo_04.jpg"
                                                     data-srcset="https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_320/v1526466580/app/img/v1/magic_grid_photo_04.jpg 320w,
                                                        https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_480/v1526466580/app/img/v1/magic_grid_photo_04.jpg 480w,
                                                        https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_600/v1526466580/app/img/v1/magic_grid_photo_04.jpg 600w"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="listing_page.html" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Krakow"
                                           data-label-after="Znajdż"></p>
                                        <p class="typo-title-sq">Catering na wydarzenie</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" data-src="https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_320/v1526466580/app/img/v1/magic_grid_photo_dec.jpg"
                                                     data-srcset="https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_320/v1526466580/app/img/v1/magic_grid_photo_dec.jpg 320w,
                                                        https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_480/v1526466580/app/img/v1/magic_grid_photo_dec.jpg 480w,
                                                        https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_600/v1526466580/app/img/v1/magic_grid_photo_dec.jpg 600w"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="listing_page.html" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Krakow"
                                           data-label-after="Znajdż"></p>
                                        <p class="typo-title-sq">Firmy eventowe</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" data-src="https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_320/v1526466580/app/img/v1/magic_grid_photo_ae.jpg"
                                                     data-srcset="https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_320/v1526466580/app/img/v1/magic_grid_photo_ae.jpg 320w,
                                                        https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_480/v1526466580/app/img/v1/magic_grid_photo_ae.jpg 480w,
                                                        https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_600/v1526466580/app/img/v1/magic_grid_photo_ae.jpg 600w"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="listing_page.html" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Krakow"
                                           data-label-after="Dodaj"></p>
                                        <p class="typo-title-sq">Dekoracje na wydarzenie</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" data-src="https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_320/v1526466580/app/img/v1/magic_grid_photo_mu.jpg"
                                                     data-srcset="https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_320/v1526466580/app/img/v1/magic_grid_photo_mu.jpg 320w,
                                                        https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_480/v1526466580/app/img/v1/magic_grid_photo_mu.jpg 480w,
                                                        https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_600/v1526466580/app/img/v1/magic_grid_photo_mu.jpg 600w"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="listing_page.html" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Krakow"
                                           data-label-after="Melodyczna"></p>
                                        <p class="typo-title-sq">Myzyka na wydarzenie</p>
                                    </a>

                                </div>
                            </div>

                        </div>

                        <a class="more-trigger" data-more="Zobacz wszystko" href="{{url('/sitemap')}}">
                            <i class="icon icon-arrow-down-122"></i>
                        </a>
                    </div>

                </div>


            </div>
        </div> --}}


        <div class="ui grid container">
            <div class="row">
                <div class="ui column">
                    <div class="typo-section-sq bottom-default">

                        <div class="typo-section-header-sq" style="padding-top: 0px">
                            <h2 class="text-align-left-sq">Gdzie planujesz wydarzenie?</h2>
                            <p class="text-align-left-sq">Wybierz miasto i wyszukaj wśród polecanych partnerów. Pamiętaj, że zawsze możesz zlecić nam wyszukiwanie i dostać ofertę dopasowaną do Ciebie. I to wszystko za darmo!

                            </p>
                        </div>

                        <div class="magic-grid category-sq special-sq hover-scale">
                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" data-src="https://res.cloudinary.com/spokoloko/image/upload/w_360,h_360/v1526482291/app/img/krakow.jpg"
                                                     src="https://res.cloudinary.com/spokoloko/image/upload/c_scale,w_100/v1526490381/app/img/loading.jpg"
                                                     alt="photo"
                                                />

                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="{{url('venues/Krak%C3%B3w')}}" class="typo-sq">
                                        <p class="typo-title-sq">Krakow</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" data-src="https://res.cloudinary.com/spokoloko/image/upload/w_360,h_360/v1526482291/app/img/warszawa.jpg"
                                                     src="https://res.cloudinary.com/spokoloko/image/upload/c_scale,w_100/v1526490381/app/img/loading.jpg"
                                                     alt="photo"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="{{url('venues/Warszawa')}}" class="typo-sq">
                                        <p class="typo-title-sq">Warszawa</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" data-src="https://res.cloudinary.com/spokoloko/image/upload/w_360,h_360/v1526482291/app/img/wroclaw.jpg"
                                                     src="https://res.cloudinary.com/spokoloko/image/upload/c_scale,w_100/v1526490381/app/img/loading.jpg"
                                                     alt="photo"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="{{url('venues/Wroclaw')}}" class="typo-sq">
                                        <p class="typo-title-sq">Wroclaw</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" data-src="https://res.cloudinary.com/spokoloko/image/upload/w_360,h_360/v1526482291/app/img/gdansk.jpg"
                                                     src="https://res.cloudinary.com/spokoloko/image/upload/c_scale,w_100/v1526490381/app/img/loading.jpg"
                                                     alt="photo"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="{{url('venues/Gdansk')}}" class="typo-sq">
                                        <p class="typo-title-sq">Gdańsk</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" data-src="https://res.cloudinary.com/spokoloko/image/upload/w_360,h_360/v1526482291/app/img/katowice.jpg"
                                                     src="https://res.cloudinary.com/spokoloko/image/upload/c_scale,w_100/v1526490381/app/img/loading.jpg"
                                                     alt="photo"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="{{url('venues/Katowice')}}" class="typo-sq">
                                        <p class="typo-title-sq">Katowice</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" data-src="https://res.cloudinary.com/spokoloko/image/upload/w_360,h_360/v1526482291/app/img/poznan.jpg"
                                                     src="https://res.cloudinary.com/spokoloko/image/upload/c_scale,w_100/v1526490381/app/img/loading.jpg"
                                                     alt="photo"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="{{url('venues/Poznan')}}" class="typo-sq">
                                        <p class="typo-title-sq">Poznań</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" style="background-color: #F57C00; opacity: 0.8"
                                                     src=""
                                                     alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="{{url('sitemap')}}" class="typo-sq">
                                        <p class="typo-title-sq">Inne</p>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
                </div>
            </div>
        </div>


        <div class="ui layout" id="top2">
            <div class="ui grid container">

                <div class="row">
                    <div class="ui column">

                        <div class="typo-section-sq">
                            <div class="typo-section-header-sq">
                                <h2 class="text-align-center-sq">Popularne miejsca</h2>
                                <p class="heading-inline text-align-center-sq">
                                    <i class="icon icon-slim-arrow-left sq-prev-button"></i>
                                    <span>Zobacz najbardziej znane miejsca w Polsce</span>
                                    <i class="icon icon-slim-arrow-right sq-next-button"></i>
                                </p>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="ui grid container typo-section-sq bottom-default">
                    <div class="row">

                        <div class="sq-slick article-sq-slick" data-arrows="false" data-center-mode="true"

                             data-center-padding="0px" data-desktop-center-padding="0px" data-show-slides="3"
                             data-scroll-slides="5" data-tablet-show-slides="2" data-tablet-scroll-slides="2"
                             data-mobile-show-slides="1" data-mobile-scroll-slides="2" data-tablet-center-padding="0px"
                             data-mobile-center-padding="50px">

                            <!-- Slide 01-->
                            <div>
                                <div class="property-item caption-sq">
                                    <div class="property-item-inner">

                                        <div class="price-tag-sq">
                                            <span>od </span>200
                                            PLN <span>/1 godz</span>
                                        </div>
                                        <a class="add-wishlist modal-ui-trigger" href=""
                                           data-trigger-for="wishlist">
                                            <i class="icon icon-heart-line"></i>
                                        </a>


                                        <a class="image-sq" href="venue/after-beng-club"
                                           target="_blank">
                                                <span class="image-wrapper">
                                                    <span class="image-inner">
                                                        <img src="new-assets/images/property/property_little_01.jpg"
                                                             alt="" class="" style="height: 100%">
                                                        {{--<img src="{{ asset('new-assets/images/property/property_little_01.jpg') }}"
                                                             alt="" class="">--}}
                                                    </span>
                                                </span>
                                        </a>

                                        <div class="main-details">
                                            <div class="title-row">
                                                <a href="venue/after-beng-club" target="_blank"
                                                   class="title-sq">After Beng</a>


                                            </div>
                                            <div class="biz-adres">
                                                <strong style="padding-right: 10px;">Klub muzycny</strong>| Rynek głowny 28
                                            </div>

                                            <div class="icons-row">
                                                <div class="icons-column">
                                                    <i class="icon icon-star-2"></i> 8.6
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-account-group-5"></i> 200
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-home-3"></i> 100m²
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="property-item caption-sq">
                                    <div class="property-item-inner">

                                        <div class="price-tag-sq">
                                            <span>od </span>200
                                            PLN <span>/1 godz</span>
                                        </div>
                                        <a class="add-wishlist modal-ui-trigger" href=""
                                           data-trigger-for="wishlist">
                                            <i class="icon icon-heart-line"></i>
                                        </a>


                                        <a class="image-sq" href="venue/after-beng-club"
                                           target="_blank">
                                                <span class="image-wrapper">
                                                    <span class="image-inner">
                                                        <img src="new-assets/images/property/property_little_02.jpg"
                                                             alt="" class="" style="height: 100%">
                                                        {{--<img src="{{ asset('new-assets/images/property/property_little_01.jpg') }}"
                                                             alt="" class="">--}}
                                                    </span>
                                                </span>
                                        </a>

                                        <div class="main-details">
                                            <div class="title-row">
                                                <a href="venue/after-beng-club" target="_blank"
                                                   class="title-sq">After Beng</a>


                                            </div>
                                            <div class="biz-adres">
                                                <strong style="padding-right: 10px;">Klub muzycny</strong>| Rynek głowny 28
                                            </div>

                                            <div class="icons-row">
                                                <div class="icons-column">
                                                    <i class="icon icon-star-2"></i> 8.6
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-account-group-5"></i> 200
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-home-3"></i> 100m²
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="property-item caption-sq">
                                    <div class="property-item-inner">

                                        <div class="price-tag-sq">
                                            <span>od </span>200
                                            PLN <span>/1 godz</span>
                                        </div>
                                        <a class="add-wishlist modal-ui-trigger" href=""
                                           data-trigger-for="wishlist">
                                            <i class="icon icon-heart-line"></i>
                                        </a>


                                        <a class="image-sq" href="venue/after-beng-club"
                                           target="_blank">
                                                <span class="image-wrapper">
                                                    <span class="image-inner">
                                                        <img src="new-assets/images/property/property_little_03.jpg"
                                                             alt="" class="" style="height: 100%">
                                                        {{--<img src="{{ asset('new-assets/images/property/property_little_01.jpg') }}"
                                                             alt="" class="">--}}
                                                    </span>
                                                </span>
                                        </a>

                                        <div class="main-details">
                                            <div class="title-row">
                                                <a href="venue/after-beng-club" target="_blank"
                                                   class="title-sq">After Beng</a>


                                            </div>
                                            <div class="biz-adres">
                                                <strong style="padding-right: 10px;">Klub muzycny</strong>| Rynek głowny 28
                                            </div>

                                            <div class="icons-row">
                                                <div class="icons-column">
                                                    <i class="icon icon-star-2"></i> 8.6
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-account-group-5"></i> 200
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-home-3"></i> 100m²
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="property-item caption-sq">
                                    <div class="property-item-inner">

                                        <div class="price-tag-sq">
                                            <span>od </span>200
                                            PLN <span>/1 godz</span>
                                        </div>
                                        <a class="add-wishlist modal-ui-trigger" href=""
                                           data-trigger-for="wishlist">
                                            <i class="icon icon-heart-line"></i>
                                        </a>


                                        <a class="image-sq" href="venue/after-beng-club"
                                           target="_blank">
                                                <span class="image-wrapper">
                                                    <span class="image-inner">
                                                        <img src="new-assets/images/property/property_little_01.jpg"
                                                             alt="" class="" style="height: 100%">
                                                        {{--<img src="{{ asset('new-assets/images/property/property_little_01.jpg') }}"
                                                             alt="" class="">--}}
                                                    </span>
                                                </span>
                                        </a>

                                        <div class="main-details">
                                            <div class="title-row">
                                                <a href="venue/after-beng-club" target="_blank"
                                                   class="title-sq">After Beng</a>


                                            </div>
                                            <div class="biz-adres">
                                                <strong style="padding-right: 10px;">Klub muzycny</strong>| Rynek głowny 28
                                            </div>

                                            <div class="icons-row">
                                                <div class="icons-column">
                                                    <i class="icon icon-star-2"></i> 8.6
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-account-group-5"></i> 200
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-home-3"></i> 100m²
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="property-item caption-sq">
                                    <div class="property-item-inner">

                                        <div class="price-tag-sq">
                                            <span>od </span>200
                                            PLN <span>/1 godz</span>
                                        </div>
                                        <a class="add-wishlist modal-ui-trigger" href=""
                                           data-trigger-for="wishlist">
                                            <i class="icon icon-heart-line"></i>
                                        </a>


                                        <a class="image-sq" href="venue/after-beng-club"
                                           target="_blank">
                                                <span class="image-wrapper">
                                                    <span class="image-inner">
                                                        <img src="new-assets/images/property/property_little_02.jpg"
                                                             alt="" class="" style="height: 100%">
                                                        {{--<img src="{{ asset('new-assets/images/property/property_little_01.jpg') }}"
                                                             alt="" class="">--}}
                                                    </span>
                                                </span>
                                        </a>

                                        <div class="main-details">
                                            <div class="title-row">
                                                <a href="venue/after-beng-club" target="_blank"
                                                   class="title-sq">After Beng</a>


                                            </div>
                                            <div class="biz-adres">
                                                <strong style="padding-right: 10px;">Klub muzycny</strong>| Rynek głowny 28
                                            </div>

                                            <div class="icons-row">
                                                <div class="icons-column">
                                                    <i class="icon icon-star-2"></i> 8.6
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-account-group-5"></i> 200
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-home-3"></i> 100m²
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="property-item caption-sq">
                                    <div class="property-item-inner">

                                        <div class="price-tag-sq">
                                            <span>od </span>200
                                            PLN <span>/1 godz</span>
                                        </div>
                                        <a class="add-wishlist modal-ui-trigger" href=""
                                           data-trigger-for="wishlist">
                                            <i class="icon icon-heart-line"></i>
                                        </a>


                                        <a class="image-sq" href="venue/after-beng-club"
                                           target="_blank">
                                                <span class="image-wrapper">
                                                    <span class="image-inner">
                                                        <img src="new-assets/images/property/property_little_03.jpg"
                                                             alt="" class="" style="height: 100%">
                                                        {{--<img src="{{ asset('new-assets/images/property/property_little_01.jpg') }}"
                                                             alt="" class="">--}}
                                                    </span>
                                                </span>
                                        </a>

                                        <div class="main-details">
                                            <div class="title-row">
                                                <a href="venue/after-beng-club" target="_blank"
                                                   class="title-sq">After Beng</a>


                                            </div>
                                            <div class="biz-adres">
                                                <strong style="padding-right: 10px;">Klub muzycny</strong>| Rynek głowny 28
                                            </div>

                                            <div class="icons-row">
                                                <div class="icons-column">
                                                    <i class="icon icon-star-2"></i> 8.6
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-account-group-5"></i> 200
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-home-3"></i> 100m²
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>




                        </div>

                        <div class="ui twelve wide mobile twelve wide tablet twelve wide computer twelve wide large screen twelve wide widescreen column">
                            <div class="typo-section-sq bottom-default">
                                <a href="{{url('venues/Krakow')}}" class="more-trigger" data-more="Więcej">
                                    <i class="icon icon-arrow-down-122"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="promo-section">

                <!-- content -->
                <div class="ui container grid centered">
                    <div class="row">
                        <div class="ui twelve wide mobile ten wide tablet eight wide computer six wide large screen six wide widescreen column">
                            <div class="promo-content style-01">
                                <h2>Udostępnij swój biznes</h2>
                                <p>Wypromuj swój biznes razem ze Spokoloko. Dotrzyj do swoich pożądanych klientów w prosty sposób.</p>

                                <a href="{{ url('b2b') }}" class="button-sq see-through-sq"> Wypróbuj za darmo  </a>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- picture -->
                <div class="image-wrapper">
                    <div class="image-inner">


                        <img class="image-sq" src="https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_360/v1526493029/app/img/promo_section_01.jpg"
                             srcset="https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_480/v1526493029/app/img/promo_section_01.jpg 480w,
                                                        https://res.cloudinary.com/spokoloko/image/upload/c_fill,w_750/v1526493029/app/img/promo_section_01.jpg 768w,
                                                        https://res.cloudinary.com/spokoloko/image/upload/v1526493029/app/img/promo_section_01.jpg 1000w"
                             alt="asdasd" />

                    </div>
                </div>
            </div>

            <!--  <div class="ui grid container">
                  <div class="row">
                      <div class="ui column">

                          <div class="typo-section-sq bottom-big">
                              <div class="typo-section-header-sq">
                                  <h2 class="text-align-center-sq">Popularne w Krakowie</h2>

                                  <p class="text-align-center-sq">Zobacz z ktorych uslug zazwyczaj korzystaja w Krakowie.</p>
                              </div>

                              <div class="ui grid">

                                  <div class="twelve wide mobile four wide tablet four wide computer column">
                                      <div class="property-item caption-sq small-sq">
                                          <div class="property-item-inner">

                                              <div class="price-tag-sq">112 &euro; <span>/ night</span></div>
                                              <a class="add-wishlist modal-ui-trigger" href="" data-trigger-for="wishlist">
                                                  <i class="icon icon-add-wishlist"></i>
                                              </a>

                                              <a class="image-sq" href="property_page.html">
                                                  <span class="image-wrapper">
                                                      <span class="image-inner">
                                                          <img src="new-assets/images/property/property_little_01.jpg" alt="" class="">
                                                      </span>
                                                  </span>
                                              </a>

                                              <div class="main-details">
                                                  <div class="title-row">
                                                      <a href="property_page.html" class="title-sq">Downtown Sweet House</a>
                                                      <a href="vendor_details.html" class="avatar-sq">
                                                          <img src="new-assets/images/avatar/avatar_01.jpg" alt="">
                                                      </a>
                                                  </div>

                                                  <div class="icons-row">
                                                      <div class="icons-column">
                                                          <i class="icon icon-heart"></i> 8.6
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-account-group-5"></i> x 4
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-door-simple"></i> x 6
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-bed-double"></i> x 2
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>
                                      </div>
                                  </div>

                                  <div class="twelve wide mobile four wide tablet four wide computer column">
                                      <div class="property-item caption-sq small-sq">
                                          <div class="property-item-inner">

                                              <div class="price-tag-sq">78 &euro; <span>/ night</span></div>
                                              <a class="add-wishlist modal-ui-trigger" href="" data-trigger-for="wishlist">
                                                  <i class="icon icon-add-wishlist"></i>
                                              </a>


                                              <a class="image-sq" href="property_page.html">
                                                      <span class="image-wrapper">
                                                          <span class="image-inner">
                                                              <img src="new-assets/images/property/property_little_02.jpg" alt="" class="">
                                                          </span>
                                                      </span>
                                              </a>

                                              <div class="main-details">

                                                  <div class="title-row">
                                                      <a href="property_page.html" class="title-sq">Large and confortable double room</a>
                                                      <a href="vendor_details.html" class="avatar-sq">
                                                          <img src="new-assets/images/avatar/avatar_02.jpg" alt="">
                                                      </a>
                                                  </div>

                                                  <div class="icons-row">
                                                      <div class="icons-column">
                                                          <i class="icon icon-heart"></i> 7.8
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-account-group-5"></i> x 2
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-door-simple"></i> x 3
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-bed-double"></i> x 2
                                                      </div>
                                                  </div>

                                              </div>

                                          </div>
                                      </div>
                                  </div>

                                  <div class="twelve wide mobile four wide tablet four wide computer column">
                                      <div class="property-item caption-sq small-sq">
                                          <div class="property-item-inner">

                                              <div class="price-tag-sq">51 &euro; <span>/ night</span></div>
                                              <a class="add-wishlist modal-ui-trigger" href="" data-trigger-for="wishlist">
                                                  <i class="icon icon-add-wishlist"></i>
                                              </a>

                                              <a class="image-sq" href="property_page.html">
                                                  <span class="image-wrapper">
                                                      <span class="image-inner">
                                                          <img src="new-assets/images/property/property_little_03.jpg" alt="" class="">
                                                      </span>
                                                  </span>
                                              </a>


                                              <div class="main-details">

                                                  <div class="title-row">
                                                      <a href="property_page.html" class="title-sq">Modern studio flat with garden</a>
                                                      <a href="vendor_details.html" class="avatar-sq">
                                                          <img src="new-assets/images/avatar/avatar_03.jpg"
                                                               alt="">
                                                      </a>
                                                  </div>

                                                  <div class="icons-row">
                                                      <div class="icons-column">
                                                          <i class="icon icon-heart"></i> 7.5
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-account-group-5"></i> x 2
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-door-simple"></i> x 1
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-bed-double"></i> x 3
                                                      </div>
                                                  </div>

                                              </div>

                                          </div>
                                      </div>
                                  </div>

                                  <div class="twelve wide mobile four wide tablet four wide computer column">
                                      <div class="property-item caption-sq small-sq">
                                          <div class="property-item-inner">

                                              <div class="price-tag-sq">130 &euro; <span>/ night</span></div>
                                              <a class="add-wishlist modal-ui-trigger" href="" data-trigger-for="wishlist">
                                                  <i class="icon icon-add-wishlist"></i>
                                              </a>

                                              <a class="image-sq" href="property_page.html">
                                                  <span class="image-wrapper">
                                                      <span class="image-inner">
                                                          <img src="new-assets/images/property/property_little_04.jpg" alt="" class="">
                                                      </span>
                                                  </span>
                                              </a>


                                              <div class="main-details">
                                                  <div class="title-row">
                                                      <a href="property_page.html" class="title-sq">Bright clean room close to Brixton</a>
                                                      <a href="vendor_details.html" class="avatar-sq">
                                                          <img src="new-assets/images/avatar/avatar_04.jpg" alt="">
                                                      </a>
                                                  </div>

                                                  <div class="icons-row">
                                                      <div class="icons-column">
                                                          <i class="icon icon-heart"></i> 8.1
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-account-group-5"></i> x 2
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-door-simple"></i> x 2
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-bed-double"></i> x 2
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>
                                      </div>
                                  </div>

                                  <div class="twelve wide mobile four wide tablet four wide computer column">
                                      <div class="property-item caption-sq small-sq">
                                          <div class="property-item-inner">

                                              <div class="price-tag-sq">59 &euro; <span>/ night</span></div>
                                              <a class="add-wishlist modal-ui-trigger" href="" data-trigger-for="wishlist">
                                                  <i class="icon icon-add-wishlist"></i>
                                              </a>

                                              <a class="image-sq" href="property_page.html">
                                                  <span class="image-wrapper">
                                                      <span class="image-inner">
                                                          <img src="new-assets/images/property/property_little_05.jpg" alt="" class="">
                                                      </span>
                                                  </span>
                                              </a>

                                              <div class="main-details">

                                                  <div class="title-row">
                                                      <a href="property_page.html" class="title-sq">Romantic Suite in family home</a>
                                                      <a href="vendor_details.html" class="avatar-sq">
                                                          <img src="new-assets/images/avatar/avatar_05.jpg" alt="">
                                                      </a>
                                                  </div>

                                                  <div class="icons-row">
                                                      <div class="icons-column">
                                                          <i class="icon icon-heart"></i> 7.5
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-account-group-5"></i> x 4
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-door-simple"></i> x 2
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-bed-double"></i> x 1
                                                      </div>
                                                  </div>

                                              </div>

                                          </div>
                                      </div>
                                  </div>

                                  <div class="twelve wide mobile four wide tablet four wide computer column">
                                      <div class="property-item caption-sq small-sq">
                                          <div class="property-item-inner">

                                              <div class="price-tag-sq">32 &euro; <span>/ night</span></div>
                                              <a class="add-wishlist modal-ui-trigger" href="" data-trigger-for="wishlist">
                                                  <i class="icon icon-add-wishlist"></i>
                                              </a>


                                              <a class="image-sq" href="property_page.html">
                                                  <span class="image-wrapper">
                                                      <span class="image-inner">
                                                          <img src="new-assets/images/property/property_little_06.jpg" alt="" class="">
                                                      </span>
                                                  </span>
                                              </a>

                                              <div class="main-details">

                                                  <div class="title-row">
                                                      <a href="property_page.html" class="title-sq">Quit and bright room in the heart of Amsterdam</a>
                                                      <a href="vendor_details.html" class="avatar-sq">
                                                          <img src="new-assets/images/avatar/avatar_06.jpg" alt="">
                                                      </a>
                                                  </div>

                                                  <div class="icons-row">
                                                      <div class="icons-column">
                                                          <i class="icon icon-heart"></i> 7.5
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-account-group-5"></i> x 7
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-door-simple"></i> x 2
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-bed-double"></i> x 2
                                                      </div>
                                                  </div>

                                              </div>

                                          </div>
                                      </div>
                                  </div>

                              </div>

                              <a href="listing_page.html" class="more-trigger" data-more="Discover All">
                                  <i class="icon icon-arrow-down-122"></i>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>

              -->


        {{--
            <div class="ui grid container">
                <div class="row">
                    <div class="ui column">


                        <div class="typo-section-sq bottom-big">
                            <div class="typo-section-header-sq">
                                <h2 class="text-align-center-sq">News</h2>
                                <p class="text-align-center-sq"> Nunc sit amet velit nibh. Proin consectetur, ante quis
                                    tristique mattis, massa massa condimentum enim.</p>
                            </div>


                            <div class="magic-grid article-sq hover-scale">

                                <!-- item-->
                                <div class="item">
                                    <div class="item-inner">

                                        <!-- image container -->
                                        <a class="image-sq" href="article.html">
                    	                <span class="image-wrapper">
                    	                    <span class="image-inner">
                    	                        <img class="image-sq"
                                                     src="new-assets/images/magic_grid/magic_grid_article_01.jpg"
                                                     alt="">
                    	                    </span>
                    	                </span>
                                        </a>

                                        <!-- typography container-->
                                        <div class="typo-sq">
                                            <p class="typo-label-sq" data-label-before="Travel"
                                               data-label-after="Book a home in"></p>
                                            <p class="typo-title-sq">Getting Cheap Airfare For Last Minute Travel</p>
                                            <p class="typo-desc-sq">The city of southern California, san diego is
                                                locally known as ‘America’s Finest City’. It’s located on San Diego Bay,
                                                an inlet of the Pacific Ocean near the Mexican border. San Diego is the
                                                second largest city in</p>

                                            <a href="article.html" class="read-more-sq">read more <i
                                                        class="icon icon-arrow-right-122"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- item-->
                                <div class="item">
                                    <div class="item-inner">

                                        <!-- image container -->
                                        <a class="image-sq" href="article.html">
                    	                <span class="image-wrapper">
                    	                    <span class="image-inner">
                    	                        <img class="image-sq"
                                                     src="new-assets/images/magic_grid/magic_grid_article_02.jpg"
                                                     alt="">
                    	                    </span>
                    	                </span>
                                        </a>

                                        <!-- typography container-->
                                        <div class="typo-sq">
                                            <p class="typo-label-sq" data-label-before="Beauty"
                                               data-label-after="Book a home in"></p>
                                            <p class="typo-title-sq">10 Steps To Look Younger</p>
                                            <p class="typo-desc-sq">Lots of people are unaware of the fact that adult
                                                acne exists and they seem not to know how to treat adult acne. People
                                                have this misconception that acne only happens during teenage years and
                                                gradually wears off as they age. For most people, this fact may be true
                                                but it is important to note that acne does not start during teenage
                                                years only. However, it is important to note that there are a
                                                significant number of adults that experience such condition.</p>

                                            <a href="" class="read-more-sq">read more <i
                                                        class="icon icon-arrow-right-122"></i></a>
                                        </div>

                                    </div>
                                </div>

                                <!-- item-->
                                <div class="item">
                                    <div class="item-inner">

                                        <!-- image container -->
                                        <a class="image-sq" href="article.html">
                    	                <span class="image-wrapper">
                    	                    <span class="image-inner">
                    	                        <img class="image-sq"
                                                     src="new-assets/images/magic_grid/magic_grid_article_03.jpg"
                                                     alt="">
                    	                    </span>
                    	                </span>
                                        </a>

                                        <!-- typography container-->
                                        <div class="typo-sq">
                                            <p class="typo-label-sq" data-label-before="Cooking"
                                               data-label-after="Book a home in"></p>
                                            <p class="typo-title-sq">The Benefits And Drawbacks Of Buying Designer
                                                Kitchenware Products</p>
                                            <p class="typo-desc-sq">When it is time to bake cookies, we usually think
                                                that it is complicated, that it takes a lot of time. In one word : that
                                                it is not worthwhile ! We will show you hereunder that it is simply not
                                                true. Baking cookies is easy, fast and, most important, fun. Come and
                                                join all our readers who decided to give it a try and now,</p>


                                            <a href="" class="read-more-sq">read more <i
                                                        class="icon icon-arrow-right-122"></i></a>
                                        </div>

                                    </div>
                                </div>

                                <!-- item-->
                                <div class="item">
                                    <div class="item-inner">

                                        <!-- image container -->
                                        <a class="image-sq" href="article.html">
                    	                <span class="image-wrapper">
                    	                    <span class="image-inner">
                    	                        <img class="image-sq"
                                                     src="new-assets/images/magic_grid/magic_grid_article_04.jpg"
                                                     alt="">
                    	                    </span>
                    	                </span>
                                        </a>

                                        <!-- typography container-->
                                        <div class="typo-sq">

                                            <p class="typo-label-sq" data-label-before="Advertising"
                                               data-label-after="Book a home in"></p>
                                            <p class="typo-title-sq">Enhance Your Brand Potential With Giant Advertising
                                                Blimps</p>
                                            <p class="typo-desc-sq">It is a small world after all. Globalization is that
                                                great process that started perhaps with Mr. Marco Polo, but has since
                                                regained its prestige after a short stint of protectionism following the
                                                great depression</p>

                                            <a href="" class="read-more-sq">read more <i
                                                        class="icon icon-arrow-right-122"></i></a>
                                        </div>

                                    </div>
                                </div>

                                <!-- item-->
                                <div class="item">
                                    <div class="item-inner">

                                        <!-- image container -->
                                        <a class="image-sq" href="article.html">
                    	                <span class="image-wrapper">
                    	                    <span class="image-inner">
                    	                        <img class="image-sq"
                                                     src="new-assets/images/magic_grid/magic_grid_article_05.jpg"
                                                     alt="">
                    	                    </span>
                    	                </span>
                                        </a>

                                        <!-- typography container-->
                                        <div class="typo-sq">
                                            <p class="typo-label-sq" data-label-before="Motivation"
                                               data-label-after="Book a home in"></p>
                                            <p class="typo-title-sq">Counting Your Chicken Before They Hatch</p>
                                            <p class="typo-desc-sq">Be more concerned with your character than with your
                                                reputation. Your character is what you really are while your reputation
                                                is merely what others think you are.</p>

                                            <a href="" class="read-more-sq">read more <i
                                                        class="icon icon-arrow-right-122"></i></a>
                                        </div>

                                    </div>
                                </div>

                                <!-- item-->
                                <div class="item">
                                    <div class="item-inner">

                                        <!-- image container -->
                                        <a class="image-sq" href="article.html">
                    	                <span class="image-wrapper">
                    	                    <span class="image-inner">
                    	                        <img class="image-sq"
                                                     src="new-assets/images/magic_grid/magic_grid_article_06.jpg"
                                                     alt="">
                    	                    </span>
                    	                </span>
                                        </a>

                                        <!-- typography container-->
                                        <div class="typo-sq">
                                            <p class="typo-label-sq" data-label-before="Tech"
                                               data-label-after="Book a home in"></p>
                                            <p class="typo-title-sq">Download Anything Now A Days</p>
                                            <p class="typo-desc-sq">Do you want to download free song for ipod? If so,
                                                reading this article could save you from getting in to a lot of trouble!
                                                Downloading music to your Ipod has more than one pitfall associated with
                                                it, and this article will tell you the best way to download free song
                                                for Ipod.</p>

                                            <a href="" class="read-more-sq">read more <i
                                                        class="icon icon-arrow-right-122"></i></a>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <a href="article_listing.html" class="more-trigger" data-more="View More">
                                <i class="icon icon-arrow-down-122"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            --}}

        </div>
    </div>
@endsection
