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
                <img class="image-sq" src="../new-assets/images/property/cover_photo.jpg" alt="">
            </div>
        </div>

        <div class="property-main-content">
            <div class="ui grid container stackable app layout right side">
                <div class="stretched row">

                    <div class="ui column main-column">

                        <h1 class="title-sq">Nazwa Przestrzeni</h1>

                        <div class="rating-sq">
                            <span>9.4</span>
                            <i class="icon icon-heart-line"></i>
                        </div>

                        <div class="location-sq">
                            <a class="anchor-sq" href="#section-05"><i class="icon icon-location-pin-2"></i>
                                Romania, Bucuresti</a>
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
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur faucibus magna vel ex semper, in pharetra justo pulvinar.
                                            </p>
                                        </div>


                                        <a class="button-sq fullwidth-sq font-weight-extrabold-sq" href="">Apply Updates</a>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <header class="header-section mhs header-sticky header-is-bottom is-half">
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
                                    <span>The Space</span>
                                </a>
                            </li>

                            <li><a href="#section-02" class="item">
                                    <span>Description</span>
                                </a>
                            </li>

                            <li><a href="#section-03" class="item">
                                    <span>Amenities</span>
                                </a>
                            </li>

                            <li><a href="#section-04" class="item">
                                    <span>Home Safety</span>
                                </a>
                            </li>

                            <li><a href="#section-05" class="item">
                                    <span>Location</span>
                                </a>
                            </li>

                            <li><a href="#section-06" class="item">
                                    <span>Photos</span>
                                </a>
                            </li>

                            <li><a href="#section-06" class="item">
                                    <span>Prices</span>
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </header>

    <!-- grid -->
    <div class="ui grid container stackable app layout right side editable">
        <div class="stretched row">
            <div class="ui column main-column" role="main">

                <div class="section-container" id="section-01">

                    <div class="typo-section-sq top-default bottom-default">

                        <h3 class="complete-sq title-sq">Najwarzniejsze</h3>

                        <p class="description-sq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur faucibus magna vel ex semper, in pharetra justo pulvinar. </p>

                        <div class="div-c">
                            <div class="divided-column">
                                <label>Nazwa przestrzeni</label>
                                <input type="text" placeholder="np: 'HardRock music club' lub 'Sala konferencyjna Anna' ">
                            </div>
                        </div>

                        <div style="height:300px;">
                            <div id="map"></div>
                        </div>
                        <br>

                        <div class="div-c">
                            <div class="divided-column">
                                <label>Miasto</label>
                                <select class="dropdown">
                                    <option value="0">Krakow</option>
                                    <option value="1">Warszawa</option>
                                </select>
                            </div>
                        </div>

                        <div class="div-c">
                            <div class="divided-column">
                                <label>Adres</label>
                                <input type="text" placeholder="ul. Warszawska 1">
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

                </div>

                <div class="section-container" id="section-02">
                    <div class="typo-section-sq bottom-default">
                        <h3 class="complete-sq title-sq">Kategorje</h3>

                        <p class="description-sq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur faucibus magna vel ex semper, in pharetra justo pulvinar. </p>

                        <div class="div-c">
                            <div class="divided-column">
                                <label>Typ przestrzeni</label>
                                <select class="dropdown">
                                    <option value="0">Loft</option>
                                    <option value="1">Restauracja/Bar</option>
                                </select>
                            </div>
                        </div>

                        <div class="div-c inline-2 one-label">
                            <label>Typ wydarzen</label>

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

                        <p>You can add more details to tell travelers about your space and hosting style.</p>

                    </div>
                </div>

                <div class="section-container" id="section-03">
                    <div class="typo-section-sq bottom-default">
                        <h3 class="complete-sq title-sq">O przestrzeni</h3>

                        <p class="description-sq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur faucibus magna vel ex semper, in pharetra justo pulvinar. </p>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label>Styl przestrzeni</label>
                                <select class="dropdown">
                                    <option value="1">Industrial</option>
                                    <option value="2">Modern</option>
                                </select>
                            </div>

                            <div class="divided-column">
                                <label>Przestrzen m2</label>
                                <input type="text" placeholder="350">
                            </div>
                        </div>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label>Ilośc pokoi</label>
                                <select class="dropdown">
                                    <option value="0">1</option>
                                    <option value="1">2</option>
                                    <option value="1">3</option>
                                    <option value="1">4</option>
                                    <option value="1">5+</option>
                                </select>
                            </div>
                            <div class="divided-column">
                                <label>Ilośc lazenek</label>
                                <select class="dropdown">
                                    <option value="0">1</option>
                                    <option value="1">2</option>
                                    <option value="1">3</option>
                                    <option value="1">4</option>
                                    <option value="1">5+</option>
                                </select>
                            </div>
                        </div>

                        <div class="div-c inline-2">
                            <div class="divided-column">
                                <label>Ilośc gości siedzaco</label>
                                <input type="text" placeholder="np 50">
                            </div>

                            <div class="divided-column">
                                <label>Ilośc góści stojąco</label>
                                <input type="text" placeholder="np 250">
                            </div>
                        </div>





                        <div class="div-c inline-3 one-label">
                            <label>Dodatkowo</label>

                            <div class="divided-column">

                                <input type="checkbox" id="checkbox1">
                                <label for="checkbox1">Ogrodek</label>
                            </div>

                            <div class="divided-column">
                                <input type="checkbox" id="checkbox2">
                                <label for="checkbox2">Rooftop</label>
                            </div>

                            <div class="divided-column">
                                <input type="checkbox" id="checkbox3">
                                <label for="checkbox3">Basen</label>
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

                        <div class="div-c inline-3 one-label">
                            <label>Dostep do pomiesczenia</label>

                            <div class="divided-column">

                                <input type="checkbox" id="checkbox1">
                                <label for="checkbox1">Ogrodek</label>
                            </div>

                            <div class="divided-column">
                                <input type="checkbox" id="checkbox2">
                                <label for="checkbox2">Rooftop</label>
                            </div>

                            <div class="divided-column">
                                <input type="checkbox" id="checkbox3">
                                <label for="checkbox3">Basen</label>
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

                <div class="section-container" id="section-04">
                    <div class="typo-section-sq bottom-default">
                        <h3 class="complete-sq title-sq">Uslugi</h3>

                        <p class="description-sq">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur faucibus magna vel ex semper, in pharetra justo pulvinar. </p>




                        <div class="div-c inline-3 one-label">
                            <label>Dodatkowo</label>

                            <div class="divided-column">

                                <input type="checkbox" id="checkbox1">
                                <label for="checkbox1">Ogrodek</label>
                            </div>

                            <div class="divided-column">
                                <input type="checkbox" id="checkbox2">
                                <label for="checkbox2">Rooftop</label>
                            </div>

                            <div class="divided-column">
                                <input type="checkbox" id="checkbox3">
                                <label for="checkbox3">Basen</label>
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

                        <div class="div-c inline-3 one-label">
                            <label>Zasady</label>

                            <div class="divided-column">

                                <input type="checkbox" id="checkbox1">
                                <label for="checkbox1">Ogrodek</label>
                            </div>

                            <div class="divided-column">
                                <input type="checkbox" id="checkbox2">
                                <label for="checkbox2">Rooftop</label>
                            </div>

                            <div class="divided-column">
                                <input type="checkbox" id="checkbox3">
                                <label for="checkbox3">Basen</label>
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

                        <div class="div-c">
                            <div class="divided-column">
                                <label>Dodatkowo zasady</label>
                                <textarea  cols="30" rows="5" placeholder="Be clear and descriptive"></textarea>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="section-container" id="section-05">
                    <div class="typo-section-sq bottom-default">

                            <h3 class="complete-sq title-sq">O rezerwacji</h3>

                            <p class="description-sq">Kiedy jest otwarty lokal? </p>


                            <div class="div-c inline-2 one-label">
                                <div class="divided-column">
                                    <input type="radio" id="timeweek" name="radio-group-01">
                                    <label for="timeweek">W ciagu tygodnia</label>
                                </div>

                                <div class="divided-column">
                                    <input type="radio" id="timeres" name="radio-group-01">
                                    <label for="timeres">Tylko dla rezerwacji</label>
                                </div>


                            </div>

                        <div id="setweek" style="display:none">

                            <div class="div-c inline-2 one-label">
                                <div class="divided-column">
                                    <input type="radio" id="timeonce" name="radio-group-02" checked="1">
                                    <label for="timeonce">Staly grafik pracy</label>
                                </div>

                                <div class="divided-column">
                                    <input type="radio" id="timeseven" name="radio-group-02">
                                    <label for="timeseven">Wybierz</label>
                                </div>


                            </div>
                            <div id="setonce" style="padding-top: 10px;">
                                <p class="description-sq">Wprowadż godziny pracy:</p>

                                <div class="div-c inline-2">



                                    <div class="divided-column"><strong>Poniedzialek - Niedziela</strong></div>

                                    <div class="divided-column">
                                        <div class="main-infos  div-c inline-2">
                                            <div class="supadupa calendar-sq divided-column"   >


                                                <div class="relative">
                                                    <input type="text" class="filter" value="" required placeholder="od">

                                                </div>

                                            </div>

                                            <div class="supadupa calendar-sq divided-column"  >


                                                <input type="text" class="filter" value="" required placeholder="do">
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div id = "setseven" style="display:none">


                                <p class="description-sq">Wybierz dni tygodnia oraz godziny otwarcia:</p>

                                <div class="div-c inline-2">

                                    <div class="divided-column">
                                        <input type="radio" id="radio_pn" name="radio-group-01">
                                        <label for="radio_pn">Poniedzialek</label>
                                    </div>

                                    <div class="divided-column">
                                        <div class="main-infos  div-c inline-2">
                                            <div class="supadupa calendar-sq divided-column"   >


                                                <div class="relative">
                                                    <input type="text" class="filter" value="" required placeholder="od">

                                                </div>

                                            </div>

                                            <div class="supadupa calendar-sq divided-column"  >


                                                <input type="text" class="filter" value="" required placeholder="do">
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="div-c inline-2">

                                    <div class="divided-column">
                                        <input type="radio" id="radio_wt" name="radio-group-01">
                                        <label for="radio_wt">Worek</label>
                                    </div>

                                    <div class="divided-column">
                                        <div class="main-infos  div-c inline-2">
                                            <div class="supadupa calendar-sq divided-column"   >


                                                <div class="relative">
                                                    <input type="text" class="filter" value="" required placeholder="od">

                                                </div>

                                            </div>

                                            <div class="supadupa calendar-sq divided-column"  >


                                                <input type="text" class="filter" value="" required placeholder="do">
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="div-c inline-2">

                                    <div class="divided-column">
                                        <input type="radio" id="radio_sr" name="radio-group-01">
                                        <label for="radio_sr">Sroda</label>
                                    </div>

                                    <div class="divided-column">
                                        <div class="main-infos  div-c inline-2">
                                            <div class="supadupa calendar-sq divided-column"   >


                                                <div class="relative">
                                                    <input type="text" class="filter" value="" required placeholder="od">

                                                </div>

                                            </div>

                                            <div class="supadupa calendar-sq divided-column"  >


                                                <input type="text" class="filter" value="" required placeholder="do">
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="div-c inline-2">

                                    <div class="divided-column">
                                        <input type="radio" id="radio_cz" name="radio-group-01">
                                        <label for="radio_cz">Czwartek</label>
                                    </div>

                                    <div class="divided-column">
                                        <div class="main-infos  div-c inline-2">
                                            <div class="supadupa calendar-sq divided-column"   >


                                                <div class="relative">
                                                    <input type="text" class="filter" value="" required placeholder="od">

                                                </div>

                                            </div>

                                            <div class="supadupa calendar-sq divided-column"  >


                                                <input type="text" class="filter" value="" required placeholder="do">
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="div-c inline-2">

                                    <div class="divided-column">
                                        <input type="radio" id="radio_pia" name="radio-group-01">
                                        <label for="radio_pia">Piatek</label>
                                    </div>

                                    <div class="divided-column">
                                        <div class="main-infos  div-c inline-2">
                                            <div class="supadupa calendar-sq divided-column"   >


                                                <div class="relative">
                                                    <input type="text" class="filter" value="" required placeholder="od">

                                                </div>

                                            </div>

                                            <div class="supadupa calendar-sq divided-column"  >


                                                <input type="text" class="filter" value="" required placeholder="do">
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="div-c inline-2">

                                    <div class="divided-column">
                                        <input type="radio" id="radio_sb" name="radio-group-01">
                                        <label for="radio_sb">Sobota</label>
                                    </div>

                                    <div class="divided-column">
                                        <div class="main-infos  div-c inline-2">
                                            <div class="supadupa calendar-sq divided-column"   >


                                                <div class="relative">
                                                    <input type="text" class="filter" value="" required placeholder="od">

                                                </div>

                                            </div>

                                            <div class="supadupa calendar-sq divided-column"  >


                                                <input type="text" class="filter" value="" required placeholder="do">
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="div-c inline-2">

                                    <div class="divided-column">
                                        <input type="radio" id="radio_nd" name="radio-group-01">
                                        <label for="radio_nd">Niedziela</label>
                                    </div>

                                    <div class="divided-column">
                                        <div class="main-infos  div-c inline-2">
                                            <div class="supadupa calendar-sq divided-column"   >


                                                <div class="relative">
                                                    <input type="text" class="filter" value="" required placeholder="od">

                                                </div>

                                            </div>

                                            <div class="supadupa calendar-sq divided-column"  >


                                                <input type="text" class="filter" value="" required placeholder="do">
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








                </div>



                <div class="section-container" id="section-06">
                    <div class="typo-section-sq bottom-default">
                        <h3 class="complete-sq title-sq">Photos</h3>
                        <p>Every space on MyBNB is unique. Highlight what makes your listing welcoming so that it stands out to guests who want to stay in your area.</p><br>

                        <p class="description-sq alert-message">
                            <i class="icon icon-pin1"></i>
                            Pin the cover photo
                        </p>

                        <div class="ui grid">
                            <div class="row photo-upload">
                                <div class="ui four wide computer six wide tablet twelve wide mobile column">

                                    <div class="photo-upload-item">
                                        <div class="image-wrapper">
                                            <img class="image-sq" src="assets/images/host/host_01.jpg" alt="">
                                        </div>

                                        <a href="" class="remove"><i class="icon icon-close2"></i></a>
                                        <a href="" class="cover-photo-sq"><i class="icon icon-pin1"></i></a>

                                        <textarea  cols="30" rows="2" placeholder="What are the highlights of this photo?"></textarea>


                                    </div>
                                </div>

                                <div class="ui four wide computer six wide tablet twelve wide mobile column">

                                    <div class="photo-upload-item">
                                        <div class="image-wrapper">
                                            <img class="image-sq" src="assets/images/host/host_02.jpg" alt="">
                                        </div>

                                        <a href="" class="remove"><i class="icon icon-close2"></i></a>
                                        <a href="" class="cover-photo-sq"><i class="icon icon-pin1"></i></a>

                                        <textarea  cols="30" rows="2" placeholder="What are the highlights of this photo?"></textarea>


                                    </div>
                                </div>

                                <div class="ui four wide computer six wide tablet twelve wide mobile column">
                                    <div class="photo-upload-item">
                                        <a href="" class="add-photo">
                                            <i class="icon icon-add-wishlist"></i>
                                            Add Photo
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="section-container" id="section-07">


                </div>


            </div>

        </div>

    </div>





@endsection