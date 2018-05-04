@extends('layouts.app')

@section('content')

    <form action="" method="post" style="height: 100%" enctype="multipart/form-data">
        @csrf
        <div class="add-listing-content active-block">
            <div class="ui grid container">
                <div class="row">
                    <div class="ui six wide computer twelve wide tablet column">
                        <h3 class="title-sq">Najwarzniejsze</h3>

                        <p class="description-sq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                            faucibus magna vel ex semper, in pharetra justo pulvinar. </p>

                        <div class="div-c">
                            <div class="divided-column">
                                <label class="required">Miasto</label>
                                <select name="city" class="ui search dropdown req-select" id="select_city">
                                    <option value="">Miasto</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="div-c">
                            <div class="divided-column">
                                <label>Wyszukaj na mapie</label>
                                <input id="searchng" type="text"
                                       placeholder="np: 'HardRock music club' lub 'Sala konferencyjna Anna' ">
                            </div>
                        </div>

                        <div style="height:300px;">
                            <div id="map"></div>
                        </div>

                        <br>

                        <div class="div-c">
                            <div class="divided-column">
                                <label class="required">Nazwa przestrzeni</label>
                                <input type="text" id="name" name="name" class="req-check"
                                       placeholder="np: 'HardRock music club' lub 'Sala konferencyjna Anna' ">
                            </div>
                        </div>


                        <div class="div-c">
                            <div class="divided-column">
                                <label class="required">Adres</label>
                                <input type="text" class="req-check" id="route" name="street_address"
                                       placeholder="ul. Warszawska 1">
                                <input type="hidden" id="lat" name="lat">
                                <input type="hidden" id="lng" name="lng">
                            </div>
                        </div>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label class="required">Numer domu</label>
                                <input type="text" class="req-check" id="street_number" name="street_number"
                                       placeholder="21/2">
                            </div>


                            <div class="divided-column">
                                <label class="required">Kod pocztowy</label>
                                <input class="req-check" type="text" id="postal_code" name="postal_code"
                                       placeholder="31-000">
                            </div>
                        </div>


                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label class="required">Telefon</label>
                                <div class="ui labeled input">
                                    <div class="ui label">
                                        +48
                                    </div>
                                    <input type="text" class="req-check" name="phone" id="phone"
                                           placeholder="730 000 000">
                                </div>
                            </div>

                            <div class="divided-column">
                                <label>Telefon 2(Jeżeli istneje)</label>

                                <div class="ui labeled input">
                                    <div class="ui label">
                                        +48
                                    </div>
                                    <input type="text" name="phone2" placeholder="730 000 000">
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
                                    <input type="text" name="webpage" id="website" placeholder="nazwabiznesu.pl">
                                </div>
                            </div>

                            <div class="divided-column">
                                <label>Tripadvisor</label>
                                <input type="text" name="tripadvisor" placeholder="tripadwisor link">
                            </div>
                        </div>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label>Facebook</label>
                                <div class="ui labeled input">
                                    <div class="ui label">
                                        fb.com/
                                    </div>
                                    <input type="text" name="facebook" placeholder="spokolokoeu">
                                </div>
                            </div>

                            <div class="divided-column">
                                <label>Instagram</label>
                                <div class="ui labeled input">
                                    <div class="ui label">
                                        @
                                    </div>
                                    <input type="text" name="instagram" placeholder="spokoloko.eu">
                                </div>
                            </div>
                        </div>


                        <div class="div-c">
                            <div class="divided-column">
                                <label class="required">Opis lokalu(krótki)</label>
                                <textarea name="description" class="req-check" cols="30" rows="5"
                                          placeholder="Max 750 symb"></textarea>
                            </div>
                        </div>

                        <div class="div-c">
                            <div class="divided-column">
                                <label class="required">Opis lokalu(długi)</label>
                                <textarea name="full_description" class="req-check" cols="30" rows="10"
                                          placeholder="Max 7000 symb."></textarea>
                            </div>
                        </div>
                        {{--<div class="ui six wide computer twelve wide tablet column">
                          <div class="image-full-height">
                            <div class="image-wrapper">
                              <div class="image-inner">
                                <img src="../../new-assets/images/host/host_05.jpg" alt="" class="image-sq">
                              </div>
                            </div>
                          </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>


        <div class="add-listing-content">
            <div class="ui grid container">
                <div class="row">
                    <div class="ui six wide computer twelve wide tablet column">
                        <h3 class="title-sq">Kategorje</h3>

                        <p class="description-sq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                            faucibus magna vel ex semper, in pharetra justo pulvinar. </p>

                        <div class="div-c">
                            <div class="divided-column">
                                <label class="required">Typ przestrzeni</label>
                                <select name="venue_type" class="ui search dropdown req-select" id="select_venue_type">
                                    <option value="">Wybierz typ przestrzeni</option>
                                    @foreach ($venueTypes as $venueType)
                                        <option value="{{ $venueType->id }}">{{ $venueType->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="div-c inline-2 one-label">
                            <label class="required">Typ wydarzeń</label>

                            @foreach ($eventTypes as $eventType)
                                <div class="divided-column">
                                    <input type="checkbox" name="event_types[]" id="event_type_{{ $eventType->id }}"
                                           value="{{ $eventType->id }}">
                                    <label for="event_type_{{ $eventType->id }}">{{ $eventType->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- <div class="ui six wide computer twelve wide tablet column">
                      <div class="image-full-height">
                        <div class="image-wrapper">
                          <div class="image-inner">
                            <img src="../../new-assets/images/host/host_05.jpg" alt="" class="image-sq">
                          </div>
                        </div>
                      </div>
                    </div> --}}
                </div>
            </div>
        </div>


        <div class="add-listing-content">
            <div class="ui grid container">
                <div class="row">
                    <div class="ui six wide computer twelve wide tablet column">
                        <h3 class="title-sq">O przestrzeni</h3>

                        <p class="description-sq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                            faucibus magna vel ex semper, in pharetra justo pulvinar. </p>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label class="required">Styl przestrzeni</label>
                                <select name="venue_style" class="ui search dropdown req-select"
                                        id="select_venue_style">
                                    <option value="">Wybierz styl</option>
                                    @foreach ($styles as $style)
                                        <option value="{{ $style->id }}">{{ $style->name }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="divided-column">
                                <label class="required">Przestrzen m2</label>
                                <input class="req-check" type="number" name="area" min="0" value="{{ old('area') }}">
                            </div>
                        </div>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label class="required">Ilośc pokoi</label>
                                <input class="req-check" type="number" name="room_number" min="0"
                                       value="{{ old('room_number') }}">
                            </div>

                            <div class="divided-column">
                                <label class="required">Ilośc lazenek</label>
                                <input class="req-check" type="number" name="restroom_number" min="0"
                                       value="{{ old('restroom_number') }}">
                            </div>
                        </div>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label class="required">Ilośc góści stojąco</label>
                                <input class="req-check" type="number" name="max_guests_standing" min="0"
                                       value="{{ old('max_guests_standing') }}">
                            </div>

                            <div class="divided-column">
                                <label class="required">Ilośc gości siedzaco</label>
                                <input class="req-check" type="number" name="max_guests_seating" min="0"
                                       value="{{ old('max_guests_seating') }}">
                            </div>
                        </div>

                        <div class="div-c inline-2 one-label">
                            <label>Cechy</label>

                            @foreach ($features as $feature)
                                <div class="divided-column">
                                    <input type="checkbox" name="features[]" id="feature_{{ $feature->id }}"
                                           value="{{ $feature->id }}">
                                    <label for="feature_{{ $feature->id }}">{{ $feature->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- <div class="ui six wide computer twelve wide tablet column">
                      <div class="image-full-height">
                        <div class="image-wrapper">
                          <div class="image-inner">
                            <img src="../../new-assets/images/host/host_05.jpg" alt="" class="image-sq">
                          </div>
                        </div>
                      </div>
                    </div> --}}
                </div>
            </div>
        </div>


        <div class="add-listing-content">
            <div class="ui grid container">
                <div class="row">
                    <div class="ui six wide computer twelve wide tablet column">
                        <h3 class="title-sq">Udogodnienia i zasady</h3>

                        <p class="description-sq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                            faucibus magna vel ex semper, in pharetra justo pulvinar. </p>

                        <div class="div-c inline-2 one-label">
                            <label>Udogodnienia</label>
                            @foreach ($amenities as $amenity)
                                <div class="divided-column">
                                    <input type="checkbox" name="amenities[]" id="amenity_{{ $amenity->id }}"
                                           value="{{ $amenity->id }}">
                                    <label for="amenity_{{ $amenity->id }}">{{ $amenity->name }}</label>
                                </div>
                            @endforeach
                        </div>

                        <div class="div-c inline-1 one-label">
                            <label>Zasady</label>
                            @foreach ($rules as $rule)
                                <div class="divided-column">
                                    <input type="checkbox" name="rules[]" id="rule_{{ $rule->id }}"
                                           value="{{ $rule->id }}">
                                    <label for="rule_{{ $rule->id }}">{{ $rule->name }}</label>
                                </div>
                            @endforeach
                        </div>

                        <div class="div-c">
                            <div class="divided-column">
                                <label>Dodatkowo zasady</label>
                                <textarea cols="30" rows="5" name="additional_rules"
                                          placeholder="Be clear and descriptive"></textarea>
                            </div>
                        </div>

                    </div>
                    {{-- <div class="ui six wide computer twelve wide tablet column">
                      <div class="image-full-height">
                        <div class="image-wrapper">
                          <div class="image-inner">
                            <img src="../../new-assets/images/host/host_05.jpg" alt="" class="image-sq">
                          </div>
                        </div>
                      </div>
                    </div> --}}
                </div>
            </div>
        </div>


        <div class="add-listing-content">
            <div class="ui grid container">
                <div class="row">
                    <div class="ui six wide computer twelve wide tablet column">
                        <h3 class="title-sq">Dostępnośc lokalu</h3>

                        <p class="description-sq">Kiedy jest otwarty lokal? </p>

                        <div class="div-c inline-2 one-label">
                            <div class="divided-column">
                                <input type="radio" id="timeweek" name="availability" value="Week">
                                <label for="timeweek">W ciagu tygodnia</label>
                            </div>

                            <div class="divided-column">
                                <input type="radio" id="timeres" name="availability" value="Reservation" checked>
                                <label for="timeres">Tylko dla rezerwacji</label>
                            </div>
                        </div>

                        <div id="setweek" style="display:none">
                            <div class="div-c inline-2 one-label">
                                <div class="divided-column">
                                    <input type="radio" id="timeonce" name="week_availability" value="all" checked>
                                    <label for="timeonce">Staly grafik pracy</label>
                                </div>

                                <div class="divided-column">
                                    <input type="radio" id="timeseven" name="week_availability" value="custom">
                                    <label for="timeseven">Wybierz</label>
                                </div>
                            </div>

                            <div id="setonce" style="padding-top: 10px;">
                                <p class="description-sq">Wprowadż godziny pracy:</p>

                                <div class="div-c inline-2">
                                    <div class="divided-column">
                                        <strong>Poniedzialek - Niedziela</strong>
                                    </div>

                                    <div class="divided-column">
                                        <div class="main-infos  div-c inline-2">
                                            <div class="timecalendar calendar-sq divided-column">
                                                <div class="relative">
                                                    <input type="text" name="week_from" class="filter" value=""
                                                           placeholder="od">

                                                </div>
                                            </div>

                                            <div class="timecalendar calendar-sq divided-column">
                                                <input type="text" name="week_to" class="filter" value=""
                                                       placeholder="do">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="setseven" style="display:none">
                                <p class="description-sq">Wybierz dni tygodnia oraz godziny otwarcia:</p>

                                @foreach($weekday as $key => $day_title)
                                    <div class="div-c inline-2">
                                        <div class="divided-column">
                                            <input type="checkbox" id="week_day_{{ $key }}" name="week_day_{{ $key }}"
                                                   onClick="handleChange(this);">
                                            <label for="week_day_{{ $key }}">{{ $day_title }}</label>
                                        </div>
                                        <div class="divided-column">
                                            <div class="main-infos  div-c inline-2">
                                                <div class="timecalendar calendar-sq divided-column">
                                                    <div class="relative">
                                                        <input type="text" class="filter" id="from_week_day_{{ $key  }}"
                                                               name="{{ $key }}_from" value=""
                                                               placeholder="od" disabled>
                                                    </div>
                                                </div>

                                                <div class="timecalendar calendar-sq divided-column">
                                                    <input type="text" class="filter" name="{{ $key }}_to"
                                                           id="to_week_day_{{ $key }}" value="" placeholder="do"
                                                           disabled>
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
                                <input type="text" name="price_hour" placeholder="350">
                            </div>

                            <div class="divided-column">
                                <label>Min. ilosc godzin</label>
                                <input type="number" name="min_hours" placeholder="" min="1">
                            </div>
                        </div>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label>Cena za calą dobe</label>
                                <input type="text" name="price_day" placeholder="350">
                            </div>

                            <div class="divided-column" style="padding-top: 50px;">
                                <input type="checkbox" id="price_depends_on_weekday" name="price_depends_on_weekday">
                                <label for="price_depends_on_weekday">Cena zależy od dnia tygodnia</label>
                            </div>
                        </div>

                        <div class="div-c">
                            <div class="divided-column">
                                <label>Informacja dodatkowa</label>
                                <textarea cols="30" rows="5" name="price_info"
                                          placeholder="Opisz co wchodzi w cenę. Jak zmienia sie cena zaleznie od dnia tygodnia."></textarea>
                            </div>
                        </div>

                        <h3 class="title-sq">Zaliczka oraz zasady anulowania</h3>

                        <p class="description-sq">Lorem ipsum dolor it sit </p>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label>Zaliczka wymagana</label>
                                <input type="text" id="to_security_deposit_not_required" name="security_deposit"
                                       placeholder="min. 500zł">
                            </div>

                            <div class="divided-column" style="padding-top: 50px;">
                                <input type="checkbox" id="security_deposit_not_required" onclick="handleChange2(this)"
                                       name="security_deposit_not_required">
                                <label for="security_deposit_not_required">Zaliczka nie jest wymagana</label>
                            </div>
                        </div>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label>Zwrot zaliczki za N dni do wydarzenia</label>
                                <input type="number" placeholder="2" id="to_cancel_book_in_eventday">
                            </div>

                            <div class="divided-column" style="padding-top: 50px;">
                                <input type="checkbox" id="cancel_book_in_eventday" onclick="handleChange2(this)"
                                       name="cancel_book_in_eventday">
                                <label for="cancel_book_in_eventday">Mozna zrezygnować w dzień wydarzenia</label>
                            </div>
                        </div>

                        <div class="div-c">
                            <div class="divided-column">
                                <label>Informacja dodatkowa</label>
                                <textarea cols="30" rows="5" name="cancellation_information" value=""
                                          placeholder="Omów warunki zwrotu zaliczki. Np: 100%  >3 dni do wydarzenia, 50% <2 dni do wydarzenia "></textarea>
                            </div>
                        </div>


                    </div>

                    {{-- <div class="ui six wide computer twelve wide tablet column">
                        <div class="image-full-height">
                            <div class="image-wrapper">
                                <div class="image-inner">
                                    <img src="../../new-assets/images/host/host_05.jpg" alt="" class="image-sq">
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>


        <div class="add-listing-content">
            <div class="ui grid container">
                <div class="row">
                    <div class="ui twelve wide tablet twelve wide computer twelve wide widescreen twelve wide large screen column">
                        <h3 class="title-sq">Photos</h3>
                    </div>

                    <div class="ui twelve wide tablet eight wide computer eight wide widescreen eight wide large screen column">
                        <p class="description-sq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                            faucibus magna vel ex semper, in pharetra justo pulvinar. </p>
                    </div>

                    <div class="ui twelve wide tablet four wide computer four wide widescreen four wide large screen column">
                        <p class="description-sq alert-message">
                            <i class="icon icon-pin1"></i>
                            Pin the cover photo
                        </p>
                    </div>
                </div>
                <div class="row photo-upload">
                    <div class="ui three wide computer six wide tablet six wide mobile column">
                        <div class="photo-upload-item" id="add-photo">
                            <label for="file-upload" class="add-photo custom-file-upload" id="new-img">
                                <i class="icon icon-add-wishlist"></i>
                                Add Photo
                            </label>
                            <input type="file" class="req-check" id="file-upload" name="images[]" multiple
                                   accept=".png, .jpg, .jpeg"/>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="main-image" />
            </div>
        </div>


        <div class="add-listing-footer">
            <div class="ui grid container">
                <div class="row">
                    <div class="ui column">
                        <button type=button class="button-sq prev-btn">
                            <i class="icon icon-slim-arrow-left"></i>
                        </button>
                        <nav id="pagination">
                            <ul class="pagination-list">
                                <li class="pagination-active"></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </nav>
                        <button type=button class="button-sq next-sq">
                            <i class="icon icon-slim-arrow-right"></i>
                        </button>
                        <button class="button-submit">Wyślij</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
