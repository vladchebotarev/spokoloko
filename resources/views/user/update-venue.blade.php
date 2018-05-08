@extends('layouts.app')

@section('content')

    <div class="property-section-default anchor editable-sq">
        <div class="ui grid container stackable change-cover">
            <a href="#section-06" class="">
                Zmien tło
                <i class="icon icon-pin1"></i>
            </a>
        </div>

        <div class="image-wrapper">
            <div class="image-inner">
                <img class="image-sq"
                     src="https://res.cloudinary.com/spokoloko/image/upload/c_fill,e_improve,f_jpg,g_auto,h_1080,w_1920/v1/venues/{{$venue->url}}/{{$venue_cover_image}}"
                     alt="">
            </div>
        </div>

        <div class="property-main-content">
            <div class="ui grid container stackable app layout right side">
                <div class="stretched row">

                    <div class="ui column main-column">

                        <h1 class="title-sq">{{ $venue->name }}</h1>

                        <div class="rating-sq">
                            <span>9.4</span>
                            <i class="icon icon-heart-line"></i>
                        </div>

                        <div class="location-sq">
                            <a class="anchor-sq" href="#section-01"><i class="icon icon-location-pin-2"></i>
                                Polska, {{ $venue_city->name }}</a>
                        </div>


                    </div>

                    <div class="ui column side-column">
                        <div class="property-sticky-box-wrapper">

                            <div class="sticky-element sticky-mobile sticky-tablet sticky-desktop sticky-large-desktop under-ths">

                                <div class="property-sticky-box">

                                    <div class="sticky-box-content">

                                        <div class="main-infos">

                                            <div class="completed-percentage">
                                                <p><strong>65%</strong> completed</p>
                                                <div class="basic-progressbar">
                                                    <div class="inner" style="width:75%"></div>
                                                </div>
                                            </div>

                                            <p class="info">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                                faucibus magna vel ex semper, in pharetra justo pulvinar.
                                            </p>
                                        </div>


                                        <a class="button-sq fullwidth-sq font-weight-extrabold-sq"
                                           onclick="getElementById('button_submit').click()">Apply Updates</a>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <header class="header-section mhs header-sticky header-is-bottom is-half" id="section-header">
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
                                    <span>Głowne</span>
                                </a>
                            </li>

                            <li><a href="#section-02" class="item">
                                    <span>Kategorje</span>
                                </a>
                            </li>

                            <li><a href="#section-03" class="item">
                                    <span>O przestrzeni</span>
                                </a>
                            </li>

                            <li><a href="#section-04" class="item">
                                    <span>Udogodnienia i zasady</span>
                                </a>
                            </li>

                            <li><a href="#section-05" class="item">
                                    <span>Dostępnośc i ceny</span>
                                </a>
                            </li>

                            <li><a href="#section-06" class="item">
                                    <span>Foto</span>
                                </a>
                            </li>

                            <li><a href="#section-07" class="item">
                                    <span>Facebook</span>
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </header>

    <form action="" method="post" enctype="multipart/form-data">
    @csrf
    <!-- grid -->
        <div class="ui grid container stackable app layout right side editable">
            <div class="stretched row">
                <div class="ui column main-column" role="main">

                    @if ($errors->any())
                        <div class="ui twelve wide computer column">
                            <div class="ui negative message">
                                <i class="fa fa-times close" aria-hidden="true" style="float: right;"></i>
                                <div class="header">
                                    Popraw następujące blędy
                                </div>
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    @if (session('status'))
                        <div class="ui twelve wide computer column">
                            <div class="ui positive message">
                                <i class="fa fa-times close" aria-hidden="true" style="float: right;"></i>
                                <div class="header">
                                    Powodzenie
                                </div>
                                <p>{{ session('status') }}</p>
                            </div>
                        </div>
                    @endif

                    <div class="section-container" id="section-01">

                        <div class="typo-section-sq top-default bottom-default">

                            <h3 class="title-sq">Najwarzniejsze</h3>

                            <p class="description-sq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                faucibus magna vel ex semper, in pharetra justo pulvinar. </p>

                            <div class="div-c">
                                <div class="divided-column">
                                    <label>Nazwa przestrzeni</label>
                                    <input type="text" name="name" value="{{ $venue->name }}"
                                           placeholder="" disabled>
                                </div>
                            </div>

                            <div class="div-c">
                                <div class="divided-column">
                                    <label>Ustaw położenie na Mapie</label>
                                    <div style="height:300px;">

                                        <div id="map"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="div-c">
                                <div class="divided-column">
                                    <label>Adres</label>
                                    <input type="text" id="route" name="street_address"
                                           value="{{ $venue->street_address }}"
                                           placeholder="" disabled>
                                    <input type="hidden" id="lat" name="lat" value="{{ $venue->lat }}">
                                    <input type="hidden" id="lng" name="lng" value="{{ $venue->lng }}">
                                </div>
                            </div>

                            <div class="div-c inline-2">
                                <div class="divided-column">
                                    <label>Numer domu</label>
                                    <input type="text" name="street_number" value="{{ $venue->street_number }}"
                                           placeholder="" disabled>
                                </div>


                                <div class="divided-column">
                                    <label>Kod pocztowy</label>
                                    <input type="text" name="postal_code" value="{{ $venue->postal_code }}"
                                           placeholder="31-000" disabled>
                                </div>
                            </div>


                            <div class="div-c inline-2">
                                <div class="divided-column">
                                    <label>Telefon</label>
                                    <div class="ui labeled input">
                                        <div class="ui label">
                                            +48
                                        </div>
                                        <input type="text" name="phone" value="{{ $venue->phone }}"
                                               placeholder="730 000 000">
                                    </div>
                                </div>

                                <div class="divided-column">
                                    <label>Telefon 2(Jeżeli istneje)</label>

                                    <div class="ui labeled input">
                                        <div class="ui label">
                                            +48
                                        </div>
                                        <input type="text" name="phone2" value="{{ $venue->phone2 }}"
                                               placeholder="730 000 000">
                                    </div>
                                </div>
                            </div>

                            <div class="div-c inline-2">
                                <div class="divided-column">
                                    <label>Strona internetowa</label>
                                    <div class="ui labeled input">
                                        <div class="ui label">
                                            https://
                                        </div>
                                        <input type="text" name="webpage" value="{{ $venue->webpage }}"
                                               placeholder="nazwabiznesu.pl">
                                    </div>
                                </div>

                                <div class="divided-column">
                                    <label>Tripadvisor</label>
                                    <input type="text" name="tripadvisor" value="{{ $venue->tripadvisor }}"
                                           placeholder="tripadwisor link">
                                </div>
                            </div>

                            <div class="div-c inline-2">
                                <div class="divided-column">
                                    <label>Facebook</label>
                                    <div class="ui labeled input">
                                        <div class="ui label">
                                            fb.com/
                                        </div>
                                        <input type="text" name="facebook" value="{{ $venue->facebook }}"
                                               placeholder="">
                                    </div>
                                </div>

                                <div class="divided-column">
                                    <label>Instagram</label>
                                    <div class="ui labeled input">
                                        <div class="ui label">
                                            @
                                        </div>
                                        <input type="text" name="instagram" value="{{ $venue->instagram }}"
                                               placeholder="">
                                    </div>
                                </div>
                            </div>


                            <div class="div-c">
                                <div class="divided-column">
                                    <label>Opis lokalu(krótki)</label>
                                    <textarea name="description" cols="30" rows="5"
                                              placeholder="Max 750 symb" required>{{ $venue->description }}</textarea>
                                </div>
                            </div>

                            <div class="div-c">
                                <div class="divided-column">
                                    <label>Opis lokalu(długi)</label>
                                    <textarea name="full_description" cols="30" rows="10"
                                              placeholder="Max 7000 symb."
                                              required>{{ $venue->full_description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-container" id="section-02">
                        <div class="typo-section-sq bottom-default">
                            <h3 class="title-sq">Kategorje</h3>

                            <p class="description-sq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                faucibus magna vel ex semper, in pharetra justo pulvinar. </p>

                            <div class="div-c">
                                <div class="divided-column">
                                    <label>Typ przestrzeni</label>
                                    <select name="venue_type" class="ui search dropdown req-select"
                                            id="select_venue_type">
                                        <option value="">Wybierz typ przestrzeni</option>
                                        @foreach ($venueTypes as $venueType)
                                            <option value="{{ $venueType->id }}"
                                                    @if($venue->venue_type_id === $venueType->id) selected @endif>{{ $venueType->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="div-c inline-2 one-label">
                                <label>Typ wydarzeń</label>

                                @foreach ($eventTypes as $eventType)
                                    <div class="divided-column">
                                        <input type="checkbox" name="event_types[]" id="event_type_{{ $eventType->id }}"
                                               value="{{ $eventType->id }}"
                                               @if(in_array($eventType->id, $venue_eventTypes)) checked @endif>
                                        <label for="event_type_{{ $eventType->id }}">{{ $eventType->name }}</label>
                                    </div>
                                @endforeach
                            </div>


                        </div>
                    </div>

                    <div class="section-container" id="section-03">
                        <div class="typo-section-sq bottom-default">
                            <h3 class="title-sq">O przestrzeni</h3>

                            <p class="description-sq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                faucibus magna vel ex semper, in pharetra justo pulvinar. </p>

                            <div class="div-c inline-2">
                                <div class="divided-column">
                                    <label>Styl przestrzeni</label>
                                    <select name="venue_style" class="ui search dropdown"
                                            id="select_venue_style">
                                        <option value="">Wybierz styl</option>
                                        @foreach ($styles as $style)
                                            <option value="{{ $style->id }}"
                                                    @if($venue->venue_style_id === $style->id) selected @endif>{{ $style->name }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="divided-column">
                                    <label>Przestrzen m2</label>
                                    <input type="number" name="area" min="0"
                                           value="{{ $venue->area }}" required>
                                </div>
                            </div>

                            <div class="div-c inline-2">
                                <div class="divided-column">
                                    <label>Ilośc pokoi</label>
                                    <input type="number" name="room_number" min="0"
                                           value="{{ $venue->room_number }}" required>
                                </div>

                                <div class="divided-column">
                                    <label>Ilośc lazenek</label>
                                    <input type="number" name="restroom_number" min="0"
                                           value="{{ $venue->restroom_number }}" required>
                                </div>
                            </div>

                            <div class="div-c inline-2">
                                <div class="divided-column">
                                    <label>Ilośc góści stojąco</label>
                                    <input type="number" name="max_guests_standing" min="0"
                                           value="{{ $venue->max_guests_standing }}" required>
                                </div>

                                <div class="divided-column">
                                    <label>Ilośc gości siedzaco</label>
                                    <input type="number" name="max_guests_seating" min="0"
                                           value="{{ $venue->max_guests_seating }}" required>
                                </div>
                            </div>

                            <div class="div-c inline-2 one-label">
                                <label>Cechy</label>

                                @foreach ($features as $feature)
                                    <div class="divided-column">
                                        <input type="checkbox" name="features[]" id="feature_{{ $feature->id }}"
                                               value="{{ $feature->id }}"
                                               @if(in_array($feature->id, $venue_features)) checked @endif>
                                        <label for="feature_{{ $feature->id }}">{{ $feature->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="section-container" id="section-04">
                        <div class="typo-section-sq bottom-default">
                            <h3 class="title-sq">Udogodnienia i zasady</h3>

                            <p class="description-sq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                faucibus magna vel ex semper, in pharetra justo pulvinar. </p>


                            <div class="div-c inline-2 one-label">
                                <label>Udogodnienia</label>
                                @foreach ($amenities as $amenity)
                                    <div class="divided-column">
                                        <input type="checkbox" name="amenities[]" id="amenity_{{ $amenity->id }}"
                                               value="{{ $amenity->id }}"
                                               @if(in_array($amenity->id, $venue_amenities)) checked @endif>
                                        <label for="amenity_{{ $amenity->id }}">{{ $amenity->name }}</label>
                                    </div>
                                @endforeach
                            </div>

                            <div class="div-c inline-1 one-label">
                                <label>Zasady</label>
                                @foreach ($rules as $rule)
                                    <div class="divided-column">
                                        <input type="checkbox" name="rules[]" id="rule_{{ $rule->id }}"
                                               value="{{ $rule->id }}"
                                               @if(in_array($rule->id, $venue_rules)) checked @endif>
                                        <label for="rule_{{ $rule->id }}">{{ $rule->name }}</label>
                                    </div>
                                @endforeach
                            </div>

                            <div class="div-c">
                                <div class="divided-column">
                                    <label>Dodatkowo zasady</label>
                                    <textarea cols="30" rows="5" name="additional_rules"
                                              placeholder="Be clear and descriptive">{{ $venue->additional_rules }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="section-container" id="section-05">
                        <div class="typo-section-sq bottom-default">

                            <h3 class="title-sq">Dostępnośc lokalu</h3>

                            <p class="description-sq">Kiedy jest otwarty lokal? </p>


                            <div class="div-c inline-2 one-label">
                                <div class="divided-column">
                                    <input type="radio" id="timeweek" name="availability" value="Week"
                                           @if($venue->availability_type == 'Week') checked @endif>
                                    <label for="timeweek">W ciagu tygodnia</label>
                                </div>

                                <div class="divided-column">
                                    <input type="radio" id="timeres" name="availability" value="Reservation"
                                           @if($venue->availability_type == 'Reservation') checked @endif>
                                    <label for="timeres">Tylko dla rezerwacji</label>
                                </div>
                            </div>

                            <div id="setweek" @if($venue->availability_type == 'Reservation') hidden @endif>
                                <div class="div-c inline-2 one-label">
                                    <div class="divided-column">
                                        <input type="radio" id="timeonce" name="week_availability" value="All"
                                               @if($venue->week_availability == 'All' ) checked @endif>
                                        <label for="timeonce">Staly grafik pracy</label>
                                    </div>

                                    <div class="divided-column">
                                        <input type="radio" id="timeseven" name="week_availability" value="Custom"
                                               @if($venue->week_availability == 'Custom' ) checked @endif>
                                        <label for="timeseven">Wybierz</label>
                                    </div>
                                </div>

                                <div id="setonce" style="padding-top: 10px;"
                                     @if($venue->week_availability == 'Custom' ) hidden @endif>
                                    <p class="description-sq">Wprowadż godziny pracy:</p>

                                    <div class="div-c inline-2">
                                        <div class="divided-column">
                                            <strong>Poniedzialek - Niedziela</strong>
                                        </div>

                                        <div class="divided-column">
                                            <div class="main-infos  div-c inline-2">
                                                <div class="timecalendar calendar-sq divided-column">
                                                    <div class="relative">
                                                        <input type="text" name="week_from" class="filter"
                                                               @if($venue->week_availability == 'All' ) value="{{ $venue_availability->time_from }}"
                                                               @endif
                                                               placeholder="od">

                                                    </div>
                                                </div>

                                                <div class="timecalendar calendar-sq divided-column">
                                                    <input type="text" name="week_to" class="filter"
                                                           @if($venue->week_availability == 'All' ) value="{{ $venue_availability->time_to }}"
                                                           @endif
                                                           placeholder="do">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="setseven" @if($venue->week_availability == 'All' ) hidden @endif>
                                    <p class="description-sq">Wybierz dni tygodnia oraz godziny otwarcia:</p>

                                    @foreach($weekday as $key => $day_title)
                                        <div class="div-c inline-2">
                                            <div class="divided-column">
                                                <input type="checkbox" id="week_day_{{ $key }}"
                                                       name="week_day_{{ $key }}" onClick="handleChange(this);"
                                                       @if(array_key_exists($key, $venue_availability)) checked @endif>
                                                <label for="week_day_{{ $key }}">{{ $day_title }}</label>
                                            </div>
                                            <div class="divided-column">
                                                <div class="main-infos  div-c inline-2">
                                                    <div class="timecalendar calendar-sq divided-column">
                                                        <div class="relative">
                                                            <input type="text" class="filter"
                                                                   id="from_week_day_{{ $key  }}"
                                                                   name="{{ $key }}_from" placeholder="od"
                                                                   @if(array_key_exists($key, $venue_availability)) value="{{ $venue_availability[$key]['time_from'] }}"
                                                                   @else disabled @endif>
                                                        </div>
                                                    </div>

                                                    <div class="timecalendar calendar-sq divided-column">
                                                        <input type="text" class="filter" name="{{ $key }}_to"
                                                               id="to_week_day_{{ $key }}" placeholder="do"
                                                               @if(array_key_exists($key, $venue_availability)) value="{{ $venue_availability[$key]['time_to'] }}"
                                                               @else disabled @endif>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>


                            <h3 class="title-sq">Informacja cenowa</h3>


                            <p class="description-sq">Lorem ipsum dolor it sit </p>

                            <div class="div-c inline-2">
                                <div class="divided-column">
                                    <label>Cena za godzinę</label>
                                    <input type="text" name="price_hour" value="{{ $venue->price_hour }}"
                                           placeholder="350" required>
                                </div>

                                <div class="divided-column">
                                    <label>Min. ilosc godzin</label>
                                    <input type="number" name="min_hours" value="{{ $venue->min_hours }}" placeholder=""
                                           min="1" required>
                                </div>
                            </div>

                            <div class="div-c inline-2">
                                <div class="divided-column">
                                    <label>Cena za calą dobe</label>
                                    <input type="text" name="price_day" value="{{ $venue->price_day }}"
                                           placeholder="350" required>
                                </div>

                                <div class="divided-column" style="padding-top: 50px;">
                                    <input type="checkbox" id="price_depends_on_weekday"
                                           name="price_depends_on_weekday"
                                           @if($venue->price_depends_on_weekday == true) checked @endif>
                                    <label for="price_depends_on_weekday">Cena zależy od dnia tygodnia</label>
                                </div>
                            </div>

                            <div class="div-c">
                                <div class="divided-column">
                                    <label>Informacja dodatkowa</label>
                                    <textarea cols="30" rows="5" name="price_info"
                                              placeholder="Opisz co wchodzi w cenę. Jak zmienia sie cena zaleznie od dnia tygodnia.">{{ $venue->price_info }}</textarea>
                                </div>
                            </div>


                            <h3 class="title-sq">Zaliczka oraz zasady rezerwacji</h3>

                            <p class="description-sq">Lorem ipsum dolor it sit </p>

                            <div class="div-c inline-2">
                                <div class="divided-column">
                                    <label>Zaliczka wymagana</label>
                                    <input type="text" id="to_security_deposit_not_required" name="security_deposit"
                                           value="{{ $venue->security_deposit }}"
                                           @if($venue->security_deposit == null) disabled @endif
                                           placeholder="min. 500zł">
                                </div>

                                <div class="divided-column" style="padding-top: 50px;">
                                    <input type="checkbox" id="security_deposit_not_required"
                                           onclick="handleChange2(this)" name="security_deposit_not_required"
                                           @if($venue->security_deposit == null) checked @endif>
                                    <label for="security_deposit_not_required">Zaliczka nie jest wymagana</label>
                                </div>
                            </div>

                            <div class="div-c inline-2">
                                <div class="divided-column">
                                    <label>Zwrot zaliczki za N dni do wydarzenia</label>
                                    <input type="number" id="to_cancel_book_in_eventday" name="days_full_refund" min="1"
                                           value="{{ $venue->days_full_refund }}"
                                           @if($venue->days_full_refund == null) disabled @endif
                                           placeholder="2">
                                </div>

                                <div class="divided-column" style="padding-top: 50px;">
                                    <input type="checkbox" id="cancel_book_in_eventday" onclick="handleChange2(this)"
                                           name="cancel_book_in_eventday"
                                           @if($venue->cancel_book_in_eventday == null) checked @endif>
                                    <label for="cancel_book_in_eventday">Mozna zrezygnować w dzień wydarzenia</label>
                                </div>
                            </div>

                            <div class="div-c">
                                <div class="divided-column">
                                    <label>Informacja dodatkowa</label>
                                    <textarea cols="30" rows="5" name="cancellation_information"
                                              placeholder="Omów warunki zwrotu zaliczki. Np: 100%  >3 dni do wydarzenia, 50% <2 dni do wydarzenia ">{{ $venue->cancellation_information }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-container" id="section-06">
                        <div class="typo-section-sq bottom-default">
                            <h3 class="title-sq">Photos</h3>
                            <p>Every space on MyBNB is unique. Highlight what makes your listing welcoming so that it
                                stands
                                out to guests who want to stay in your area.</p><br>

                            <p class="description-sq alert-message">
                                <i class="icon icon-pin1"></i>
                                Pin the cover photo
                            </p>

                            <div class="ui grid">
                                <div class="row photo-upload">

                                    <div class="ui twelve wide computer column">
                                        <div class="ui negative message">
                                            <i class="fa fa-times close" aria-hidden="true" style="float: right;"></i>
                                            <div class="header">
                                                Uwaga
                                            </div>
                                            Aktualizacja zdjęć chwilowo jest niedostępna
                                        </div>
                                    </div>

                                    @foreach($venue_images as $image)
                                        <div class="ui four wide computer six wide tablet six wide mobile column">
                                            <div class="photo-upload-item">
                                                <div class="image-wrapper">
                                                    <img class="image-sq"
                                                         src="https://res.cloudinary.com/spokoloko/image/upload/c_fill,e_improve,f_jpg,g_auto,h_375,w_500/v1/venues/{{$venue->url}}/{{$image}}"
                                                         alt="">
                                                </div>
                                                <a class="remove"><i class="icon icon-close"></i></a>
                                            </div>
                                        </div>
                                    @endforeach


                                    <div class="ui four wide computer six wide tablet six wide mobile column">
                                        <div class="photo-upload-item" id="add-photo">
                                            <label for="file-upload" class="add-photo custom-file-upload" id="new-img">
                                                <i class="icon icon-add-wishlist"></i>
                                                Add Photo
                                            </label>
                                            <input type="file" id="file-upload" name="images[]"
                                                   multiple
                                                   accept=".png, .jpg, .jpeg"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div hidden>
                                <button type="submit" id="button_submit">Wyślij</button>
                            </div>
                        </div>
                    </div>

                    <div class="section-container" id="section-07">
                        <div class="typo-section-sq bottom-default">
                            <h3 class="preview-sq title-sq">Facebook Messager</h3>
                            <p>Wlacz integracje z Facebook aby ...</p><br>
                            <div class="div-c">
                                <div class="divided-column">
                                    <label>Facebook Page ID</label>
                                    <input type="number" id="facebook_page_id" name="facebook_page_id"
                                           value="{{ $venue->facebook_page_id }}" placeholder="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection