@extends('layouts.app')

@section('content')

    <form action="" method="post" style="height: 100%" enctype="multipart/form-data" class="venue-form">
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
                                <select name="city"
                                        class="ui search dropdown req-select {{ $errors->has('city') ? 'warning' : '' }}"
                                        id="select_city">
                                    <option value="">Miasto</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}" {{ (old('city') == $city->id ? 'selected' : '') }}>{{ $city->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('city'))
                                    <small class="small-display-has-error">{{ $errors->first('city') }}</small>
                                @endif
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
                                <input type="text" id="name" name="name"
                                       class="req-check {{ $errors->has('name') ? 'warning' : '' }}"
                                       placeholder="np: 'HardRock music club' lub 'Sala konferencyjna Anna'"
                                       value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <small class="small-display-has-error">{{ $errors->first('name') }}</small>
                                @endif
                            </div>
                        </div>


                        <div class="div-c">
                            <div class="divided-column">
                                <label class="required">Adres</label>
                                <input type="text"
                                       class="req-check {{ $errors->has('street_address') ? 'warning' : '' }}"
                                       id="route" name="street_address"
                                       placeholder="ul. Warszawska 1" value="{{ old('street_address') }}">
                                @if ($errors->has('street_address'))
                                    <small class="small-display-has-error">{{ $errors->first('street_address') }}</small>
                                @endif
                                <input type="hidden" id="lat" name="lat" value="{{ old('lat') }}">
                                <input type="hidden" id="lng" name="lng" value="{{ old('lng') }}">
                            </div>
                        </div>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label class="required">Numer domu</label>
                                <input type="text"
                                       class="req-check {{ $errors->has('street_number') ? 'warning' : '' }}"
                                       id="street_number" name="street_number"
                                       placeholder="21/2" value="{{ old('street_number') }}">
                                @if ($errors->has('street_number'))
                                    <small class="small-display-has-error">{{ $errors->first('street_number') }}</small>
                                @endif
                            </div>


                            <div class="divided-column">
                                <label class="required">Kod pocztowy</label>
                                <input class="req-check {{ $errors->has('postal_code') ? 'warning' : '' }}" type="text"
                                       id="postal_code" name="postal_code"
                                       placeholder="31-000" value="{{ old('postal_code') }}">
                                @if ($errors->has('postal_code'))
                                    <small class="small-display-has-error">{{ $errors->first('postal_code') }}</small>
                                @endif
                            </div>
                        </div>


                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label class="required">Telefon</label>
                                <div class="ui labeled input">
                                    <div class="ui label">
                                        +48
                                    </div>
                                    <input type="text" class="req-check {{ $errors->has('phone') ? 'warning' : '' }}"
                                           name="phone" id="phone"
                                           placeholder="730 000 000" value="{{ old('phone') }}">
                               </div>
                                @if ($errors->has('phone'))
                                    <small class="small-display-has-error">{{ $errors->first('phone') }}</small>
                                @endif
                            </div>

                            <div class="divided-column">
                                <label>Telefon 2(Jeżeli istneje)</label>

                                <div class="ui labeled input">
                                    <div class="ui label">
                                        +48
                                    </div>
                                    <input type="text" class="{{ $errors->has('phone2') ? 'warning' : '' }}"
                                           name="phone2" placeholder="730 000 000" value="{{ old('phone2') }}">
                                </div>
                                @if ($errors->has('phone2'))
                                    <small class="small-display-has-error">{{ $errors->first('phone2') }}</small>
                                @endif
                            </div>
                        </div>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label>Strona internetowa</label>
                                <div class="ui labeled input">
                                    <div class="ui label">
                                        https://
                                    </div>
                                    <input type="text" class="{{ $errors->has('webpage') ? 'warning' : '' }}"
                                           name="webpage" id="website" placeholder="nazwabiznesu.pl"
                                           value="{{ old('webpage') }}">
                                </div>
                                @if ($errors->has('webpage'))
                                    <small class="small-display-has-error">{{ $errors->first('webpage') }}</small>
                                @endif
                            </div>

                            <div class="divided-column">
                                <label>Tripadvisor</label>
                                <input type="text" class="{{ $errors->has('tripadvisor') ? 'warning' : '' }}"
                                       name="tripadvisor" placeholder="tripadwisor link"
                                       value="{{ old('tripadvisor') }}">
                                @if ($errors->has('tripadvisor'))
                                    <small class="small-display-has-error">{{ $errors->first('tripadvisor') }}</small>
                                @endif
                            </div>
                        </div>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label>Facebook</label>
                                <div class="ui labeled input">
                                    <div class="ui label">
                                        fb.com/
                                    </div>
                                    <input type="text" class="{{ $errors->has('facebook') ? 'warning' : '' }}"
                                           name="facebook" placeholder="spokoloko"
                                           value="{{ old('facebook') }}">
                                </div>
                                @if ($errors->has('facebook'))
                                    <small class="small-display-has-error">{{ $errors->first('facebook') }}</small>
                                @endif
                            </div>

                            <div class="divided-column">
                                <label>Instagram</label>
                                <div class="ui labeled input">
                                    <div class="ui label">
                                        @
                                    </div>
                                    <input type="text" class="{{ $errors->has('instagram') ? 'warning' : '' }}"
                                           name="instagram" placeholder="spokoloko"
                                           value="{{ old('instagram') }}">
                                </div>
                                @if ($errors->has('instagram'))
                                    <small class="small-display-has-error">{{ $errors->first('instagram') }}</small>
                                @endif
                            </div>
                        </div>


                        <div class="div-c">
                            <div class="divided-column">
                                <label class="required">Opis lokalu(krótki)</label>
                                <textarea name="description"
                                          class="req-check {{ $errors->has('instagram') ? 'warning' : '' }}" cols="30"
                                          rows="5"
                                          placeholder="Max 750 symb">{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
                                    <small class="small-display-has-error">{{ $errors->first('description') }}</small>
                                @endif
                            </div>
                        </div>

                        <div class="div-c">
                            <div class="divided-column">
                                <label class="required">Opis lokalu(długi)</label>
                                <textarea name="full_description"
                                          class="req-check {{ $errors->has('full_description') ? 'warning' : '' }}"
                                          cols="30" rows="10"
                                          placeholder="Max 7000 symb.">{{ old('full_description') }}</textarea>
                                @if ($errors->has('full_description'))
                                    <small class="small-display-has-error">{{ $errors->first('full_description') }}</small>
                                @endif
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
                                <select name="venue_type"
                                        class="ui search dropdown req-select {{ $errors->has('venue_type') ? 'warning' : '' }}"
                                        id="select_venue_type">
                                    <option value="">Wybierz typ przestrzeni</option>
                                    @foreach ($venueTypes as $venueType)
                                        <option value="{{ $venueType->id }}" {{ (old('venue_type') == $venueType->id ? 'selected' : '') }}>{{ $venueType->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('venue_type'))
                                    <small class="small-display-has-error">{{ $errors->first('venue_type') }}</small>
                                @endif
                            </div>
                        </div>

                        <div class="div-c inline-2 one-label">

                            @if ($errors->has('event_types'))
                                <div style="width: 100%">
                                    <div class="ui negative message">
                                        <p>{{ $errors->first('event_types') }}</p>
                                    </div>
                                </div>
                            @endif

                            <label class="required">Typ wydarzeń</label>

                            @foreach ($eventTypes as $eventType)
                                <div class="divided-column">
                                    <input type="checkbox" name="event_types[]" id="event_type_{{ $eventType->id }}"
                                           value="{{ $eventType->id }}" {{ (is_array(old('event_types')) and in_array($eventType->id, old('event_types'))) ? ' checked' : '' }} >
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
                                <select name="venue_style"
                                        class="ui search dropdown req-select {{ $errors->has('venue_style') ? 'warning' : '' }}"
                                        id="select_venue_style">
                                    <option value="">Wybierz styl</option>
                                    @foreach ($styles as $style)
                                        <option value="{{ $style->id }}" {{ (old('venue_style') == $style->id ? 'selected' : '') }}>{{ $style->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('venue_style'))
                                    <small class="small-display-has-error">{{ $errors->first('venue_style') }}</small>
                                @endif
                            </div>

                            <div class="divided-column">
                                <label class="required">Przestrzen m2</label>
                                <input class="req-check {{ $errors->has('area') ? 'warning' : '' }}" type="number"
                                       name="area" min="0" value="{{ old('area') }}">
                                @if ($errors->has('area'))
                                    <small class="small-display-has-error">{{ $errors->first('area') }}</small>
                                @endif
                            </div>
                        </div>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label class="required">Ilośc pokoi</label>
                                <input class="req-check {{ $errors->has('room_number') ? 'warning' : '' }}"
                                       type="number" name="room_number" min="0"
                                       value="{{ old('room_number') }}">
                                @if ($errors->has('room_number'))
                                    <small class="small-display-has-error">{{ $errors->first('room_number') }}</small>
                                @endif
                            </div>

                            <div class="divided-column">
                                <label class="required">Ilośc lazenek</label>
                                <input class="req-check {{ $errors->has('restroom_number') ? 'warning' : '' }}"
                                       type="number" name="restroom_number" min="0"
                                       value="{{ old('restroom_number') }}">
                                @if ($errors->has('restroom_number'))
                                    <small class="small-display-has-error">{{ $errors->first('restroom_number') }}</small>
                                @endif
                            </div>
                        </div>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label class="required">Ilośc góści stojąco</label>
                                <input class="req-check {{ $errors->has('max_guests_standing') ? 'warning' : '' }}"
                                       type="number" name="max_guests_standing" min="0"
                                       value="{{ old('max_guests_standing') }}">
                                @if ($errors->has('max_guests_standing'))
                                    <small class="small-display-has-error">{{ $errors->first('max_guests_standing') }}</small>
                                @endif
                            </div>

                            <div class="divided-column">
                                <label class="required">Ilośc gości siedzaco</label>
                                <input class="req-check {{ $errors->has('max_guests_seating') ? 'warning' : '' }}"
                                       type="number" name="max_guests_seating" min="0"
                                       value="{{ old('max_guests_seating') }}">
                                @if ($errors->has('max_guests_seating'))
                                    <small class="small-display-has-error">{{ $errors->first('max_guests_seating') }}</small>
                                @endif
                            </div>
                        </div>

                        <div class="div-c inline-2 one-label">
                            <label>Cechy</label>

                            @foreach ($features as $feature)
                                <div class="divided-column">
                                    <input type="checkbox" name="features[]" id="feature_{{ $feature->id }}"
                                           value="{{ $feature->id }}" {{ (is_array(old('features')) and in_array($feature->id, old('features'))) ? ' checked' : '' }}>
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
                                           value="{{ $amenity->id }}" {{ (is_array(old('amenities')) and in_array($amenity->id, old('amenities'))) ? ' checked' : '' }}>
                                    <label for="amenity_{{ $amenity->id }}">{{ $amenity->name }}</label>
                                </div>
                            @endforeach
                        </div>

                        <div class="div-c inline-1 one-label">
                            <label>Zasady</label>
                            @foreach ($rules as $rule)
                                <div class="divided-column">
                                    <input type="checkbox" name="rules[]" id="rule_{{ $rule->id }}"
                                           value="{{ $rule->id }}" {{ (is_array(old('rules')) and in_array($rule->id, old('rules'))) ? ' checked' : '' }}>
                                    <label for="rule_{{ $rule->id }}">{{ $rule->name }}</label>
                                </div>
                            @endforeach
                        </div>

                        <div class="div-c">
                            <div class="divided-column">
                                <label>Dodatkowo zasady</label>
                                <textarea cols="30" rows="5"
                                          class="{{ $errors->has('additional_rules') ? 'warning' : '' }}"
                                          name="additional_rules"
                                          placeholder="Be clear and descriptive">{{ old('additional_rules') }}</textarea>
                                @if ($errors->has('additional_rules'))
                                    <small class="small-display-has-error">{{ $errors->first('additional_rules') }}</small>
                                @endif
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
                                <input type="radio" id="timeweek" name="availability"
                                       value="Week" {{ old('availability') == 'Week' ? 'checked' : '' }}>
                                <label for="timeweek">W ciagu tygodnia</label>
                            </div>

                            <div class="divided-column">
                                <input type="radio" id="timeres" name="availability"
                                       value="Reservation" {{ old('availability') != 'Week' ? 'checked' : '' }}>
                                <label for="timeres">Tylko dla rezerwacji</label>
                            </div>
                        </div>

                        <div id="setweek" style="display:none">
                            <div class="div-c inline-2 one-label">
                                <div class="divided-column">
                                    <input type="radio" id="timeonce" name="week_availability"
                                           value="All" {{ old('week_availability') != 'Custom' ? 'checked' : '' }}>
                                    <label for="timeonce">Staly grafik pracy</label>
                                </div>

                                <div class="divided-column">
                                    <input type="radio" id="timeseven" name="week_availability"
                                           value="Custom" {{ old('week_availability') == 'Custom' ? 'checked' : '' }}>
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
                                                    <input type="text" name="week_from" class="filter"
                                                           value="{{ old('week_from') }}"
                                                           placeholder="od">

                                                </div>
                                            </div>

                                            <div class="timecalendar calendar-sq divided-column">
                                                <input type="text" name="week_to" class="filter"
                                                       value="{{ old('week_to') }}"
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
                                                   onClick="handleChange(this);" {{ old($key.'_from') != null ? 'checked' : '' }}>
                                            <label for="week_day_{{ $key }}">{{ $day_title }}</label>
                                        </div>
                                        <div class="divided-column">
                                            <div class="main-infos  div-c inline-2">
                                                <div class="timecalendar calendar-sq divided-column">
                                                    <div class="relative">
                                                        <input type="text" class="filter" id="from_week_day_{{ $key  }}"
                                                               name="{{ $key }}_from" value="{{ old($key.'_from') }}"
                                                               placeholder="od" {{ old($key.'_from') == null ? 'disabled' : '' }}>
                                                    </div>
                                                </div>

                                                <div class="timecalendar calendar-sq divided-column">
                                                    <input type="text" class="filter" name="{{ $key }}_to"
                                                           id="to_week_day_{{ $key }}" value="{{ old($key.'_to') }}"
                                                           placeholder="do"
                                                            {{ old($key.'_to') == null ? 'disabled' : '' }}>
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
                                <label class="required">Cena za godzinę</label>
                                <input type="text" class="req-check {{ $errors->has('price_hour') ? 'warning' : '' }}"
                                       name="price_hour" placeholder="350"
                                       value="{{ old('price_hour') }}">
                                @if ($errors->has('price_hour'))
                                    <small class="small-display-has-error">{{ $errors->first('price_hour') }}</small>
                                @endif
                            </div>

                            <div class="divided-column">
                                <label class="required">Min. ilosc godzin</label>
                                <input type="number" class="req-check {{ $errors->has('min_hours') ? 'warning' : '' }}"
                                       name="min_hours" placeholder="" min="1" value="{{ old('min_hours') }}">
                                @if ($errors->has('min_hours'))
                                    <small class="small-display-has-error">{{ $errors->first('min_hours') }}</small>
                                @endif

                            </div>
                        </div>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label class="required">Cena za calą dobe</label>
                                <input type="text" class="req-check {{ $errors->has('price_day') ? 'warning' : '' }}"
                                       name="price_day" placeholder="350" value="{{ old('price_day') }}">
                                @if ($errors->has('price_day'))
                                    <small class="small-display-has-error">{{ $errors->first('price_day') }}</small>
                                @endif
                            </div>

                            <div class="divided-column" style="padding-top: 50px;">
                                <input type="checkbox" id="price_depends_on_weekday" name="price_depends_on_weekday"
                                        {{ old('price_depends_on_weekday') === 'on' ? 'checked' : '' }}>
                                <label for="price_depends_on_weekday">Cena zależy od dnia tygodnia</label>
                            </div>
                        </div>

                        <div class="div-c">
                            <div class="divided-column">
                                <label>Informacja dodatkowa</label>
                                <textarea cols="30" rows="5" name="price_info"
                                          class="{{ $errors->has('price_info') ? 'warning' : '' }}"
                                          placeholder="Opisz co wchodzi w cenę. Jak zmienia sie cena zaleznie od dnia tygodnia.">{{ old('price_info') }}</textarea>
                                @if ($errors->has('price_info'))
                                    <small class="small-display-has-error">{{ $errors->first('price_info') }}</small>
                                @endif
                            </div>
                        </div>

                        <h3 class="title-sq">Zaliczka oraz zasady anulowania</h3>

                        <p class="description-sq">Lorem ipsum dolor it sit </p>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label>Zaliczka wymagana</label>
                                <input type="text" class="{{ $errors->has('security_deposit') ? 'warning' : '' }}"
                                       id="to_security_deposit_not_required" name="security_deposit"
                                       placeholder="min. 500zł" value="{{ old('security_deposit') }}"
                                        {{ old('security_deposit_not_required') == 'on' ? 'disabled' : '' }}>
                                @if ($errors->has('security_deposit'))
                                    <small class="small-display-has-error">{{ $errors->first('security_deposit') }}</small>
                                @endif
                            </div>

                            <div class="divided-column" style="padding-top: 50px;">
                                <input type="checkbox" id="security_deposit_not_required" onclick="handleChange2(this)"
                                       name="security_deposit_not_required" {{ old('security_deposit_not_required') == 'on' ? 'checked' : '' }}>
                                <label for="security_deposit_not_required">Zaliczka nie jest wymagana</label>
                            </div>
                        </div>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label>Zwrot zaliczki za N dni do wydarzenia</label>
                                <input type="number" class="{{ $errors->has('days_full_refund') ? 'warning' : '' }}"
                                       min="1" name="days_full_refund" placeholder="2"
                                       id="to_cancel_book_in_eventday" value="{{ old('days_full_refund') }}"
                                        {{ old('cancel_book_in_eventday') == 'on' ? 'disabled' : '' }}>
                                @if ($errors->has('days_full_refund'))
                                    <small class="small-display-has-error">{{ $errors->first('days_full_refund') }}</small>
                                @endif
                            </div>

                            <div class="divided-column" style="padding-top: 50px;">
                                <input type="checkbox" id="cancel_book_in_eventday" onclick="handleChange2(this)"
                                       name="cancel_book_in_eventday" {{ old('cancel_book_in_eventday') == 'on' ? 'checked' : '' }}>
                                <label for="cancel_book_in_eventday">Mozna zrezygnować w dzień wydarzenia</label>
                            </div>
                        </div>

                        <div class="div-c">
                            <div class="divided-column">
                                <label>Informacja dodatkowa</label>
                                <textarea cols="30" rows="5" class="{{ $errors->has('cancellation_information') ? 'warning' : '' }}" name="cancellation_information"
                                          placeholder="Omów warunki zwrotu zaliczki. Np: 100%  >3 dni do wydarzenia, 50% <2 dni do wydarzenia ">{{ old('cancellation_information') }}</textarea>
                                @if ($errors->has('days_full_refund'))
                                    <small class="small-display-has-error">{{ $errors->first('days_full_refund') }}</small>
                                @endif
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
                <input type="hidden" name="cover_image" id="main-image"/>
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
                        <button type="button" class="button-submit">Wyślij</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
