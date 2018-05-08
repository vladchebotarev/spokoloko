@extends('layouts.app')

@section('content')
    <div class="ui layout">
        <div class="promo-section" style="max-height: 600px;">

            <!-- content -->
            <div class="ui container grid centered">
                <div class="row">
                    <div class="ui twelve wide mobile ten wide tablet eight wide computer six wide large screen six wide widescreen column">
                        <div class="promo-content style-02" style="background-color: rgba(255,140,0,0.9); borderborder-radius: 30px;">
                            <h2>Tworzymy wydarzenia razem</h2>
                            <p>Na tej stronie jest przedstawiona karta serwisu Spokoloko dla wybranego miasta</p>

                            <div class="fltp"  style="background-color: white; padding-left: 10px;">
                                <select name="dropdown" size="13" class="dropdown" required>
                                    <option value="0" selected>Krakow</option>
                                    <option value="0">Krakow</option>
                                    <option value="2">Opole</option>
                                    <option value="3">Muzyka</option>
                                    <option value="4">Foto/Video</option>
                                    <option value="5">Agencje Eventowe</option>
                                    <option value="6">Rozrywki</option>
                                    <option value="7">Dekoracje</option>
                                    <option value="5">Kuchnia/Catering</option>

                                </select>
                                <label style="padding-left: 20px" class="placeholder">Wybierz</label>
                            </div>
                            <br><br>


                        </div>

                    </div>
                </div>
            </div>

            <!-- picture -->
            <div class="image-wrapper">
                <div class="image-inner">
                    <img class="image-sq" src="new-assets/images/promo_section/promo_section_03.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="ui centered grid container" >


            <div class="row become-dashboard-description">








                <div style="width: 100%; text-align: left; padding-bottom: 70px; "><h3>Miejsca na wydarzenia</h3>

                <div class="ui grid moved" style="width: 100%; padding-top: 50px">
                    <div class="ui column">
                        <div class="ui accordion more-sq">
                            <h5 style="text-align: left">Wydarzenia firmowe</h5>
                            <div class="title">
                                <div class="ui grid">
                                    <a class="accordion-trigger more-trigger" data-more="More" data-less="Less">
                                        <i class="icon icon-arrow-down-122"></i>
                                    </a>

                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Impreza firmowa</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Kolacja firmowa</a></div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Wigilia firmowa</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Urodziny firmowe</a></div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Prezentacja</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Kolacja firmowa</a></div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Impreza firmowa</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Kolacja firmowa</a></div>
                                            </li>
                                        </ul>
                                    </div>


                                </div>
                            </div>

                            <div class="content">
                                <div class="ui grid">
                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Impreza firmowa</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Kolacja firmowa</a></div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Wigilia firmowa</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Urodziny firmowe</a></div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Prezentacja</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Kolacja firmowa</a></div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Impreza firmowa</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Kolacja firmowa</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ui grid moved" style="width: 100%; padding-top: 50px;">
                    <div class="ui column">
                        <div class="ui accordion more-sq">
                            <h5 style="text-align: left">Wydarzenia prywatne i imprezy</h5>
                            <div class="title">
                                <div class="ui grid">
                                    <a class="accordion-trigger more-trigger" data-more="More" data-less="Less">
                                        <i class="icon icon-arrow-down-122"></i>
                                    </a>

                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Impreza urodzinowa</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Chszty</a></div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Wigilia firmowa</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Urodziny firmowe</a></div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Prezentacja</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Kolacja firmowa</a></div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Impreza firmowa</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Kolacja firmowa</a></div>
                                            </li>
                                        </ul>
                                    </div>


                                </div>
                            </div>

                            <div class="content">
                                <div class="ui grid">
                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Impreza firmowa</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Kolacja firmowa</a></div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Wigilia firmowa</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Urodziny firmowe</a></div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Prezentacja</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Kolacja firmowa</a></div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Impreza firmowa</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Kolacja firmowa</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ui grid moved" style="width: 100%; padding-top: 50px;">
                    <div class="ui column">
                        <div class="ui accordion more-sq">
                            <h5 style="text-align: left">Wystawy, prezentacje i studia zjęciowe</h5>
                            <div class="title">
                                <div class="ui grid">
                                    <a class="accordion-trigger more-trigger" data-more="More" data-less="Less">
                                        <i class="icon icon-arrow-down-122"></i>
                                    </a>

                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Impreza urodzinowa</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Chszty</a></div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Wigilia firmowa</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Urodziny firmowe</a></div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Prezentacja</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Kolacja firmowa</a></div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Impreza firmowa</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Kolacja firmowa</a></div>
                                            </li>
                                        </ul>
                                    </div>


                                </div>
                            </div>

                            <div class="content">
                                <div class="ui grid">
                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Impreza firmowa</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Kolacja firmowa</a></div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Wigilia firmowa</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Urodziny firmowe</a></div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Prezentacja</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Kolacja firmowa</a></div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="six wide mobile four wide tablet three wide computer column">
                                        <ul class="description-list" style="text-align: left;">
                                            <li>

                                                <div><a href="#">Impreza firmowa</a></div>
                                            </li>

                                            <li>

                                                <div><a href="#">Kolacja firmowa</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div style="width: 100%; text-align: left; padding-bottom: 40px; "><h3>Obsluga na wydarznenia</h3>

                    <div class="ui grid moved" style="width: 100%; padding-top: 50px">
                        <div class="ui column">
                            <div class="ui accordion more-sq">

                                <div class="title">
                                    <div class="ui grid">
                                        <a class="accordion-trigger more-trigger" data-more="More" data-less="Less">
                                            <i class="icon icon-arrow-down-122"></i>
                                        </a>

                                        <div class="six wide mobile four wide tablet three wide computer column">
                                            <ul class="description-list" style="text-align: left;">
                                                <li>

                                                    <div><a href="#">Catering</a></div>
                                                </li>

                                                <li>

                                                    <div><a href="#">Muzyka</a></div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="six wide mobile four wide tablet three wide computer column">
                                            <ul class="description-list" style="text-align: left;">
                                                <li>

                                                    <div><a href="#">Obsługa wydarzen</a></div>
                                                </li>

                                                <li>

                                                    <div><a href="#">Firmy eventowe</a></div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="six wide mobile four wide tablet three wide computer column">
                                            <ul class="description-list" style="text-align: left;">
                                                <li>

                                                    <div><a href="#">Dekoracje</a></div>
                                                </li>

                                                <li>

                                                    <div><a href="#">Shisha</a></div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="six wide mobile four wide tablet three wide computer column">
                                            <ul class="description-list" style="text-align: left;">
                                                <li>

                                                    <div><a href="#">Impreza firmowa</a></div>
                                                </li>

                                                <li>

                                                    <div><a href="#">Kolacja firmowa</a></div>
                                                </li>
                                            </ul>
                                        </div>


                                    </div>
                                </div>

                                <div class="content">
                                    <div class="ui grid">
                                        <div class="six wide mobile four wide tablet three wide computer column">
                                            <ul class="description-list" style="text-align: left;">
                                                <li>

                                                    <div><a href="#">Impreza firmowa</a></div>
                                                </li>

                                                <li>

                                                    <div><a href="#">Kolacja firmowa</a></div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="six wide mobile four wide tablet three wide computer column">
                                            <ul class="description-list" style="text-align: left;">
                                                <li>

                                                    <div><a href="#">Wigilia firmowa</a></div>
                                                </li>

                                                <li>

                                                    <div><a href="#">Urodziny firmowe</a></div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="six wide mobile four wide tablet three wide computer column">
                                            <ul class="description-list" style="text-align: left;">
                                                <li>

                                                    <div><a href="#">Prezentacja</a></div>
                                                </li>

                                                <li>

                                                    <div><a href="#">Kolacja firmowa</a></div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="six wide mobile four wide tablet three wide computer column">
                                            <ul class="description-list" style="text-align: left;">
                                                <li>

                                                    <div><a href="#">Impreza firmowa</a></div>
                                                </li>

                                                <li>

                                                    <div><a href="#">Kolacja firmowa</a></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


        </div>
    </div>

@endsection