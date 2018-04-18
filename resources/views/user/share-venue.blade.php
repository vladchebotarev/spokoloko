@extends('layouts.app')

@section('content')


<div class="add-listing-content active-block">
    <div class="ui grid container">
        <div class="row">
            <div class="ui six wide computer twelve wide tablet column">
                <h3 class="title-sq">Najwarzniejsze</h3>

                <p class="description-sq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur faucibus magna vel ex semper, in pharetra justo pulvinar. </p>

                <div class="div-c">
                    <div class="divided-column">
                        <label>Miasto</label>
                        <select class="ui search dropdown" id="select_city">
                            <option value="">Miasto</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->name }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="div-c">
                    <div class="divided-column">
                        <label>Wyszukaj na mapie</label>
                        <input id="searchng" type="text" placeholder="np: 'HardRock music club' lub 'Sala konferencyjna Anna' ">
                    </div>
                </div>





                <div style="height:300px;">
                    <div id="map"></div>
                </div>
                <br>

                <div class="div-c">
                    <div class="divided-column">
                        <label>Nazwa przestrzeni</label>
                        <input id="name" type="text" placeholder="np: 'HardRock music club' lub 'Sala konferencyjna Anna' ">
                    </div>
                </div>

                <div class="div-c">
                    <div class="divided-column">
                        <label>Adres</label>
                        <input type="text" id="route" placeholder="ul. Warszawska 1">
                    </div>
                </div>


                <div class="div-c inline-2">
                    <div class="divided-column">
                        <label>Telefon 1</label>
                        <input type="text" placeholder="+48 000 000 000">
                    </div>

                    <div class="divided-column">
                        <label>Telefon 2 (jeżeli istneje)</label>
                        <input type="text" placeholder="+48 000 000 000">
                    </div>
                </div>

                <div class="div-c inline-2">
                    <div class="divided-column">
                        <label>Strona internetowa</label>
                        <input type="text" placeholder="https://nazwabiznes.pl">
                    </div>

                    <div class="divided-column">
                        <label>Instagram</label>
                        <input type="text" placeholder="tripadwisor link">
                    </div>
                </div>

                <div class="div-c inline-2">
                    <div class="divided-column">
                        <label>Facebook</label>
                        <input type="text" placeholder="facebook.com/spokolokoeu">
                    </div>

                    <div class="divided-column">
                        <label>Instagram</label>
                        <input type="text" placeholder="instagram.com/spokoloko.eu">
                    </div>
                </div>




                <div class="div-c">
                    <div class="divided-column">
                        <label>Listing Description</label>
                        <textarea  cols="30" rows="5" placeholder="Be clear and descriptive"></textarea>
                    </div>
                </div>




            </div>

            <!-- <div class="ui six wide computer twelve wide tablet column">
                <div class="image-full-height">
                    <div class="image-wrapper">
                        <div class="image-inner">
                            <img src="../../new-assets/images/host/host_05.jpg" alt="" class="image-sq">
                        </div>
                    </div>
                </div>
            </div> -->


        </div>
    </div>
</div>


<div class="add-listing-content">
    <div class="ui grid container">
        <div class="row">
            <div class="ui six wide computer twelve wide tablet column">
                <h3 class="title-sq">Kategorje</h3>

                <p class="description-sq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur faucibus magna vel ex semper, in pharetra justo pulvinar. </p>

                <div class="div-c">
                    <div class="divided-column">
                        <label>Typ przestrzeni</label>
                        <select class="ui search dropdown" id="select_city">
                            <option value="">Wybierz typ przestrzeni</option>
                            @foreach ($venueTypes as $venueType)
                                <option value="{{ $venueType->name }}">{{ $venueType->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="div-c inline-2 one-label">
                    <label>Typ wydarzeń</label>

                    @foreach ($eventTypes as $eventType)
                        <div class="divided-column">
                            <input type="checkbox" id="event_type_{{ $eventType->id }}" name="event_types[]" value="{{ $eventType->name }}">
                            <label for="event_type_{{ $eventType->id }}">{{ $eventType->name }}</label>
                        </div>
                    @endforeach
                </div>






            </div>

            <!-- <div class="ui six wide computer twelve wide tablet column">
                <div class="image-full-height">
                    <div class="image-wrapper">
                        <div class="image-inner">
                            <img src="../../new-assets/images/host/host_05.jpg" alt="" class="image-sq">
                        </div>
                    </div>
                </div>
            </div> -->


        </div>
    </div>
</div>

<div class="add-listing-content">
    <div class="ui grid container">
        <div class="row">
            <div class="ui six wide computer twelve wide tablet column">
                <h3 class="title-sq">O przestrzeni</h3>

                <p class="description-sq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur faucibus magna vel ex semper, in pharetra justo pulvinar. </p>

                <div class="div-c inline-2">
                    <div class="divided-column">
                        <label>Styl przestrzeni</label>
                        <select class="ui search dropdown" id="select_city">
                            <option value="">Wybierz styl</option>
                            @foreach ($styles as $style)
                                <option value="{{ $style->name }}">{{ $style->name }}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="divided-column">
                        <label>Przestrzen m2</label>
                        <input type="number" name="area" min="0" value="{{ old('area') }}">
                    </div>
                </div>

                <div class="div-c inline-2">
                    <div class="divided-column">
                        <label>Ilośc pokoi</label>
                        <input type="number" name="room_number" min="0" value="{{ old('room_number') }}">
                    </div>

                    <div class="divided-column">
                        <label>Ilośc lazenek</label>
                        <input type="number" name="restroom_number" min="0" value="{{ old('restroom_number') }}">
                    </div>
                </div>

                <div class="div-c inline-2">
                    <div class="divided-column">
                        <label>Ilośc góści stojąco</label>
                        <input type="number" name="guests_standing" min="0" value="{{ old('guests_standing') }}">
                    </div>

                    <div class="divided-column">
                        <label>Ilośc gości siedzaco</label>
                        <input type="number" name="guests_standing" min="0" value="{{ old('guests_seating') }}">
                    </div>
                </div>


                <div class="div-c inline-2 one-label">
                    <label>Cechy</label>

                    @foreach ($features as $feature)
                        <div class="divided-column">
                            <input type="checkbox" id="feature_{{ $feature->id }}" name="features[]" value="{{ $feature->name }}">
                            <label for="feature_{{ $feature->id }}">{{ $feature->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- <div class="ui six wide computer twelve wide tablet column">
                <div class="image-full-height">
                    <div class="image-wrapper">
                        <div class="image-inner">
                            <img src="../../new-assets/images/host/host_05.jpg" alt="" class="image-sq">
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</div>

<div class="add-listing-content">
    <div class="ui grid container">
        <div class="row">
            <div class="ui six wide computer twelve wide tablet column">
                <h3 class="title-sq">Udogodnienia i zasady</h3>

                <p class="description-sq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur faucibus magna vel ex semper, in pharetra justo pulvinar. </p>




                <div class="div-c inline-2 one-label">
                    <label>Udogodnienia</label>
                    @foreach ($amenities as $amenity)
                        <div class="divided-column">
                            <input type="checkbox" id="amenity_{{ $amenity->id }}" name="amenities[]" value="{{ $amenity->name }}">
                            <label for="amenity_{{ $amenity->id }}">{{ $amenity->name }}</label>
                        </div>
                    @endforeach
                </div>

                <div class="div-c inline-1 one-label">
                    <label>Zasady</label>
                    @foreach ($rules as $rule)
                        <div class="divided-column">
                            <input type="checkbox" id="rule_{{ $rule->id }}" name="rules[]" value="{{ $rule->name }}">
                            <label for="rule_{{ $rule->id }}">{{ $rule->name }}</label>
                        </div>
                    @endforeach
                </div>

                <div class="div-c">
                    <div class="divided-column">
                        <label>Dodatkowo zasady</label>
                        <textarea  cols="30" rows="5" placeholder="Be clear and descriptive"></textarea>
                    </div>
                </div>
            </div>

            <!-- <div class="ui six wide computer twelve wide tablet column">
                <div class="image-full-height">
                    <div class="image-wrapper">
                        <div class="image-inner">
                            <img src="../../new-assets/images/host/host_05.jpg" alt="" class="image-sq">
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</div>

<div class="add-listing-content">
    <div class="ui grid container">
        <div class="row">
            <div class="ui six wide computer twelve wide tablet column">
                <h3 class="title-sq">O rezerwacji</h3>

                <p class="description-sq">Kiedy jest otwarty lokal? </p>


                <div class="div-c inline-2 one-label">
                    <div class="divided-column">
                    <input type="radio" id="radio1" name="radio-group-01">
                        <label for="radio1">W ciagu tygodnia</label>
                    </div>

                    <div class="divided-column">
                    <input type="radio" id="radio2" name="radio-group-01">
                    <label for="radio2">Tylko dla rezerwacji</label>
                    </div>


                </div>

                <p class="description-sq">Wybierz dni tygodnia oraz godziny otwarcia:</p>
                <div class="week-group">
                    <div class="day">
                        <button type="button" name="button" class="day-btn" id="day1" checked="false"></button>
                        <div class="label">
                            Poniedziałek
                        </div>
                        <div class="hours-available">
                            <div class="divided-column">
                                <input type="text" placeholder="7:00">
                            </div>

                            <div class="divided-column">
                                <input type="text" placeholder="19:00">
                            </div>
                        </div>
                    </div>
                    <div class="day">
                        <button type="button" name="button" class="day-btn" id="day2" checked="false"></button>
                        <div class="label">
                            Wtorek
                        </div>
                        <div class="hours-available">
                            <div class="divided-column">
                                <input type="text" placeholder="7:00">
                            </div>

                            <div class="divided-column">
                                <input type="text" placeholder="19:00">
                            </div>
                        </div>
                    </div>
                    <div class="day">
                        <button type="button" name="button" class="day-btn" id="day3" checked="false"></button>
                        <div class="label">
                            Środa
                        </div>
                        <div class="hours-available">
                            <div class="divided-column">
                                <input type="text" placeholder="7:00">
                            </div>

                            <div class="divided-column">
                                <input type="text" placeholder="19:00">
                            </div>
                        </div>
                    </div>
                    <div class="day">
                        <button type="button" name="button" class="day-btn" id="day4" checked="false"></button>
                        <div class="label">
                            Czwartek
                        </div>
                        <div class="hours-available">
                            <div class="divided-column">
                                <input type="text" placeholder="7:00">
                            </div>

                            <div class="divided-column">
                                <input type="text" placeholder="19:00">
                            </div>
                        </div>
                    </div>
                    <div class="day">
                        <button type="button" name="button" class="day-btn" id="day5" checked="false"></button>
                        <div class="label">
                            Piątek
                        </div>
                        <div class="hours-available">
                            <div class="divided-column">
                                <input type="text" placeholder="7:00">
                            </div>

                            <div class="divided-column">
                                <input type="text" placeholder="19:00">
                            </div>
                        </div>
                    </div>
                    <div class="day">
                        <button type="button" name="button" class="day-btn" id="day6" checked="false"></button>
                        <div class="label">
                            Sobota
                        </div>
                        <div class="hours-available">
                            <div class="divided-column">
                                <input type="text" placeholder="7:00">
                            </div>

                            <div class="divided-column">
                                <input type="text" placeholder="19:00">
                            </div>
                        </div>
                    </div>
                    <div class="day">
                        <button type="button" name="button" class="day-btn" id="day7" checked="false"></button>
                        <div class="label">
                            Niedziela
                        </div>
                        <div class="hours-available">
                            <div class="divided-column">
                                <input type="text" placeholder="7:00">
                            </div>

                            <div class="divided-column">
                                <input type="text" placeholder="19:00">
                            </div>
                        </div>
                    </div>
                </div>



                <div class="div-c one-label">
                    <div class="divided-column">
                        <input type="radio" id="radio3" name="radio-group-01">
                        <label for="radio3">Godziny moga sie zmieniac</label>
                    </div>


                </div>



                <div class="div-c inline-2">
                    <div class="divided-column">
                        <label>Cena za godzinę</label>
                        <input type="text" placeholder="350">
                    </div>

                    <div class="divided-column">
                        <label>Min. ilosc godzin</label>
                        <input type="text" placeholder="350">
                    </div>
                </div>

                <div class="div-c inline-2">
                    <div class="divided-column">
                        <label>Cena za calą dobe</label>
                        <input type="text" placeholder="350">
                    </div>

                    <div class="divided-column" style="padding-top: 50px;">
                        <input type="radio" id="radio4" name="radio-group-01">
                        <label for="radio4">Cena zależy od dnia tygodnia</label>
                    </div>
                </div>

                <div class="div-c">
                    <div class="divided-column">
                        <label>Informacja dodatkowa</label>
                        <textarea  cols="30" rows="5" placeholder="Opisz co wchodzi w cenę. Jak zmienia sie cena zaleznie od dnia tygodnia."></textarea>
                    </div>
                </div>


                <p class="description-sq">Zasady rezerwacji </p>

                <div class="div-c inline-2">
                    <div class="divided-column">
                        <label>Zaliczka wymagana</label>
                        <input type="text" placeholder="min. 500zł">
                    </div>

                    <div class="divided-column" style="padding-top: 50px;">
                        <input type="radio" id="radio6" name="radio-group-01">
                        <label for="radio6">Zaliczka nie wymagana</label>
                    </div>
                </div>

                <div class="div-c inline-2">
                    <div class="divided-column">
                        <label>Rezerwacja min. N dni do wydarzenia</label>
                        <input type="text" placeholder="2">
                    </div>

                    <div class="divided-column" style="padding-top: 50px;">
                        <input type="radio" id="radio5" name="radio-group-01">
                        <label for="radio5">Mozna zarezerwowac w dzien wydarzenia</label>
                    </div>
                </div>

                <div class="div-c inline-2">
                    <div class="divided-column">
                        <label>Zwrot zaliczki za N dni do wydarzenia</label>
                        <input type="text" placeholder="2">
                    </div>

                    <div class="divided-column" style="padding-top: 50px;">
                        <input type="radio" id="radio6" name="radio-group-01">
                        <label for="radio6">Mozna zrezygnowac w dzien wydarzenia</label>
                    </div>
                </div>

                <div class="div-c">
                    <div class="divided-column">
                        <label>Informacja dodatkowa</label>
                        <textarea  cols="30" rows="5" placeholder="Omów warunki zwrotu zaliczki. Np: 100%  >3 dni do wydarzenia, 50% <2 dni do wydarzenia "></textarea>
                    </div>
                </div>


            </div>

            <!-- <div class="ui six wide computer twelve wide tablet column">
                <div class="image-full-height">
                    <div class="image-wrapper">
                        <div class="image-inner">
                            <img src="../../new-assets/images/host/host_05.jpg" alt="" class="image-sq">
                        </div>
                    </div>
                </div>
            </div> -->

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

                <p class="description-sq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur faucibus magna vel ex semper, in pharetra justo pulvinar. </p>

            </div>

            <div class="ui twelve wide tablet four wide computer four wide widescreen four wide large screen column">

                <p class="description-sq alert-message">
                    <i class="icon icon-pin1"></i>
                    Pin the cover photo
                </p>
            </div>


        </div>

        <div class="row photo-upload">

            <div class="ui three wide computer six wide tablet twelve wide mobile column">

                <div class="photo-upload-item">
                    <div class="image-wrapper">
                        <img class="image-sq" src="../new-assets/images/host/host_01.jpg" alt="">
                    </div>

                    <a class="remove"><i class="icon icon-close"></i></a>
                    <!-- <a href="" class="cover-photo-sq"><i class="icon icon-pin1"></i></a> -->

                    <!-- <textarea  cols="30" rows="2" placeholder="What are the highlights of this photo?"></textarea> -->


                </div>
            </div>

            <div class="ui three wide computer six wide tablet twelve wide mobile column">

                <div class="photo-upload-item">
                    <div class="image-wrapper">
                        <img class="image-sq" src="../new-assets/images/host/host_02.jpg" alt="">
                    </div>

                    <a class="remove"><i class="icon icon-close"></i></a>
                    <!-- <a href="" class="cover-photo-sq"><i class="icon icon-pin1"></i></a> -->

                    <!-- <textarea  cols="30" rows="2" placeholder="What are the highlights of this photo?"></textarea> -->


                </div>
            </div>

            <div class="ui three wide computer six wide tablet twelve wide mobile column">

                <div class="photo-upload-item">
                    <div class="image-wrapper">
                        <img class="image-sq" src="../new-assets/images/host/host_03.jpg" alt="">
                    </div>

                    <a class="remove"><i class="icon icon-close"></i></a>
                    <!-- <a href="" class="cover-photo-sq"><i class="icon icon-pin1"></i></a> -->

                    <!-- <textarea  cols="30" rows="2" placeholder="What are the highlights of this photo?"></textarea> -->


                </div>
            </div>


            <div class="ui three wide computer six wide tablet twelve wide mobile column">
                <div class="photo-upload-item" id="add-photo">
                    <label for="file-upload" class="add-photo custom-file-upload" id="new-img">
                        <i class="icon icon-add-wishlist"></i>
                        Add Photo
                    </label>
                    <input id="file-upload" type="file" multiple accept=".png, .jpg, .jpeg"/>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="add-listing-footer">
    <div class="ui grid container">
        <div class="row">
            <div class="ui column">
                <a class="button-sq link-sq" href="add_listing_amenities.html">
                    <i class="icon icon-slim-arrow-left"></i><span>back</span>
                </a>

                <div class="basic-progressbar dashboard-progressbar-sq">
                    <div class="inner" data-percentage="36%" style="width:36%"></div>
                </div>

                <a class="button-sq next-sq" href="add_listing_location.html"><i class="icon icon-slim-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="add-listing-footer">
   <div class="ui grid container">
       <div class="row">
           <div class="ui column">
               <button class="button-sq link-sq">
                   <i class="icon icon-slim-arrow-left"></i><span>back</span>
               </button>
               <!-- href="add_listing_amenities.html" -->
               <!-- <div class="basic-progressbar dashboard-progressbar-sq">
                   <div class="inner" data-percentage="0%" style="width:0%"></div>
               </div> -->
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
               <button class="button-sq next-sq" >
                   <i class="icon icon-slim-arrow-right"></i>
               </button>
               <!-- href="add_listing_location.html" -->
           </div>
       </div>
   </div>
</div>


@endsection
