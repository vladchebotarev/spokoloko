@extends('layouts.app')

@section('content')
    <form action="" method="post" style="height: 100%">
        @csrf
        <div class="add-listing-content active-block">
            <div class="ui grid container">
                <div class="row">
                    <div class="ui six wide computer twelve wide tablet column">
                        <h3 class="title-sq">Kategorje</h3>

                        <p class="description-sq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                            faucibus magna vel ex semper, in pharetra justo pulvinar. </p>

                        <div class="div-c">
                            <div class="divided-column">
                                <label>Typ biznesu</label>
                                <select name="venue_type" class="ui search dropdown" id="select_city">
                                    <option value="">Wybierz typ przestrzeni</option>
                                    @foreach ($venueTypes as $venueType)
                                        <option value="{{ $venueType->id }}">{{ $venueType->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="div-c">
                            <div class="divided-column">
                                <label>Podtyp biznesu</label>
                                <select name="venue_type" class="ui search dropdown" id="select_city">
                                    <option value="">Wybierz typ przestrzeni</option>
                                    @foreach ($venueTypes as $venueType)
                                        <option value="{{ $venueType->id }}">{{ $venueType->name }}</option>
                                    @endforeach
                                </select>
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

                        <h3 class="title-sq">O usludze</h3>

                        <p class="description-sq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                            faucibus magna vel ex semper, in pharetra justo pulvinar. </p>

                        <div class="div-c">
                            <div class="divided-column">
                                <label>Miasto</label>
                                <select name="city" class="ui search dropdown" id="select_city">
                                    <option value="">Miasto</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>



                        <div class="div-c">
                            <div class="divided-column">
                                <label>Nazwa serwisu</label>
                                <input type="text" id="name" name="name" placeholder="np: 'HardRock music club' lub 'Sala konferencyjna Anna' ">
                            </div>
                        </div>

                        <div class="div-c">
                            <div class="divided-column">
                                <label>Adres</label>
                                <input type="text" id="route" name="street_address" placeholder="ul. Warszawska 1">
                            </div>
                        </div>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label>Telefon 1</label>
                                <input type="text" name="phone" placeholder="+48 000 000 000">
                            </div>

                            <div class="divided-column">
                                <label>Telefon 2 (jeżeli istneje)</label>
                                <input type="text" name="phone2" placeholder="+48 000 000 000">
                            </div>
                        </div>

                        <div class="div-c">
                            <div class="divided-column">
                                <label>Strona internetowa</label>
                                <input type="text" name="webpage" placeholder="https://nazwabiznes.pl">
                            </div>


                        </div>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label>Facebook</label>
                                <input type="text" name="facebook" placeholder="facebook.com/spokolokoeu">
                            </div>

                            <div class="divided-column">
                                <label>Instagram</label>
                                <input type="text" name="instagram" placeholder="instagram.com/spokoloko.eu">
                            </div>
                        </div>


                        <div class="div-c">
                            <div class="divided-column">
                                <label>Opisz swoja firme/dzialalnosc</label>
                                <textarea name="description" cols="30" rows="5" placeholder="Be clear and descriptive"></textarea>
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
                        <h3 class="title-sq">Wydarzenia</h3>

                        <p class="description-sq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                            faucibus magna vel ex semper, in pharetra justo pulvinar. </p>

                        <div class="div-c inline-2 one-label">
                            <label>Typ obsługiwanych wydarzeń(można zaznaczyc wielie)</label>

                            @foreach ($eventTypes as $eventType)
                                <div class="divided-column">
                                    <input type="checkbox" name="event_types[]" id="event_type_{{ $eventType->id }}"
                                           value="{{ $eventType->id }}">
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
                        <h3 class="title-sq">Uslugi</h3>

                        <p class="description-sq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                            faucibus magna vel ex semper, in pharetra justo pulvinar. </p>


                        <div class="div-c">
                            <div class="divided-column">
                                <label>Tu opisz swiadczaca usluge oraz propozycje cenowe, promocje i td.</label>
                                <textarea cols="30" rows="5" placeholder="Be clear and descriptive"></textarea>
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



                        <p class="description-sq">Wybierz dni tygodnia dostępne dla rezerwacji:</p>
                        <div class="div-c inline-2 one-label">
                            <div class="divided-column">
                                <input type="radio" id="timeweek" name="radio-group-01">
                                <label for="timeweek">Wybierz dni</label>
                            </div>

                            <div class="divided-column">
                                <input type="radio" id="timeres" name="radio-group-01" checked>
                                <label for="timeres">Proszę kontaktowac się</label>
                            </div>
                        </div>




                            <div id="setweek" style="display:none">
                                <p class="description-sq">Wybierz dni tygodnia:</p>

                                @foreach($weekday as $key => $day_title)
                                    <div class="div-c inline-2">
                                        <div class="divided-column">
                                            <input type="checkbox" id="week_day_{{ $key }}">
                                            <label for="week_day_{{ $key }}">{{ $day_title }}</label>
                                        </div>

                                    </div>
                                @endforeach

                                <div class="div-c one-label">
                                    <div class="divided-column">
                                        <input type="checkbox" id="schedule_can_change" name="schedule_can_change">
                                        <label for="schedule_can_change">Godziny moga sie zmieniac</label>
                                    </div>
                                </div>
                            </div>








                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label>Minimalna cena rezerwacji</label>
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
                                <textarea cols="30" rows="5"
                                          placeholder="Opisz co wchodzi w cenę. Jak zmienia sie cena zaleznie od dnia tygodnia."></textarea>
                            </div>
                        </div>


                        <p class="description-sq">Zasady rezerwacji </p>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label>Zaliczka wymagana</label>
                                <input type="text" placeholder="min. 500zł">
                            </div>

                            <div class="divided-column" style="padding-top: 50px;">
                                <input type="checkbox" id="zal_wym">
                                <label for="zal_wym">Zaliczka nie wymagana</label>
                            </div>
                        </div>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label>Rezerwacja min. N dni do wydarzenia</label>
                                <input type="text" placeholder="2">
                            </div>

                            <div class="divided-column" style="padding-top: 50px;">
                                <input type="checkbox" id="moz_rez">
                                <label for="moz_rez">Mozna zarezerwowac w dzien wydarzenia</label>
                            </div>
                        </div>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label>Zwrot zaliczki za N dni do wydarzenia</label>
                                <input type="text" placeholder="2">
                            </div>

                            <div class="divided-column" style="padding-top: 50px;">
                                <input type="checkbox" id="moz_zre">
                                <label for="moz_zre">Mozna zrezygnowac w dzien wydarzenia</label>
                            </div>
                        </div>

                        <div class="div-c">
                            <div class="divided-column">
                                <label>Informacja dodatkowa</label>
                                <textarea cols="30" rows="5"
                                          placeholder="Omów warunki zwrotu zaliczki. Np: 100%  >3 dni do wydarzenia, 50% <2 dni do wydarzenia "></textarea>
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
                            <input id="file-upload" name="images[]" type="file" multiple accept=".png, .jpg, .jpeg"/>
                        </div>
                    </div>

                </div>
                <button type="submit">Wyślji</button>
            </div>
        </div>

        {{--<div class="add-listing-footer">
            <div class="ui grid container">
                <div class="row">
                    <div class="ui column">
                        <a class="button-sq link-sq" href="add_listing_amenities.html">
                            <i class="icon icon-slim-arrow-left"></i><span>back</span>
                        </a>

                        <div class="basic-progressbar dashboard-progressbar-sq">
                            <div class="inner" data-percentage="36%" style="width:36%"></div>
                        </div>

                        <a class="button-sq next-sq" href="add_listing_location.html"><i
                                    class="icon icon-slim-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>--}}

        <div class="add-listing-footer">
            <div class="ui grid container">
                <div class="row">
                    <div class="ui column">
                        <button class="button-sq link-sq">
                            <i class="icon icon-slim-arrow-left"></i>
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
                        <button class="button-sq next-sq">
                            <i class="icon icon-slim-arrow-right"></i>
                        </button>
                        <!-- href="add_listing_location.html" -->
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
