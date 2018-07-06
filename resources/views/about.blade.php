@extends('layouts.app')

@section('content')
    <div class="ui layout">
        <div class="promo-section" style="max-height: 600px;">

            <!-- content -->
            <div class="ui container grid centered">
                <div class="row">
                    <div class="ui twelve wide mobile ten wide tablet eight wide computer six wide large screen six wide widescreen column">
                        <div class="promo-content style-02" style="background-color: rgba(255,140,0,0.9); borderborder-radius: 30px;">
                            <h2>Czym jest Spokoloko</h2>
                            <p>Jesteśmy po to, aby pomóc Ci w organizacji wydarzenia.
                                Połączymy Cię z właścicielami przestrzeni oraz sprawdzonymi usługodawcami. </p>

                            <a href="{{url('sitemap')}}" class="button-sq see-through-sq">Znajdź usługodawców</a>
                            <br><br>

                            <a href="{{url('b2b')}}" class="button-sq see-through-sq" >Dodaj swój biznes</a>
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
                <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">


                    <div class="become-dashboard-inner">
                        <h3 style="padding-bottom: 20px">Wszystko w jednym miejscu</h3>
                        <p>Przeglądaj komfortowo oferty dopasowane do Twoich potrzeb. Za pomocą Spokoloko możesz skupić siły na tworzeniu wydarzenia, ponieważ dla Ciebie zebraliśmy wszystko w jednym miejscu.
                        </p>
                        <p>Do Twojej dyspozycji, pozostawiamy także chatbota który może Ci pomóc w znalezieniu  perfekcyjnej przestrzeni </p>
                        <p>Za pomocą Spokoloko  znajdziesz wszystko w jednym miejscu!
                        </p>
                    </div>


                </div>

                <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">

                    <div class="image-full-height">
                        <div class="image-wrapper">
                            <div class="image-inner">
                                <img  src="new-assets/images/host/allinoneplace.jpg" alt="" class="image-sq">
                            </div>
                        </div>
                    </div>

                </div>

            </div>


            <div class="row become-dashboard-description">
                <div class="ui tablet computer widescreen large screen only twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">

                    <div class="image-full-height">
                        <div class="image-wrapper">
                            <div class="image-inner">
                                <img src="new-assets/images/host/timer.jpg" alt="" class="image-sq">
                            </div>
                        </div>
                    </div>

                </div>


                <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">


                    <div class="become-dashboard-inner">
                        <h3 style="padding-bottom: 20px">Oszczędzaj czas</h3>
                        <p>Znajdź odpowiadający Ci lokal, albo usługę na terenie całej Polski i skontaktuj się z właścicielem, aby ustalić każdy szczegół Twojego wydarzenia.


                        </p>
                        <p>Nigdy kontakt pomiędzy organizatorem wydarzenia, a gospodarzem lub usługodawcą nie był taki łatwy i szybki.
                        </p>
                        <p>Nie trać więcej czasu na czasochłonny research w sieci.
                        </p>
                    </div>


                </div>


            </div>

            <div class="row become-dashboard-description">
                <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">


                    <div class="become-dashboard-inner">
                        <h3 style="padding-bottom: 20px">Nie przepłacaj </h3>
                        <p>Spokoloko służy pomocą w znalezieniu i porównaniu ofert wszystkich możliwych miejsc i usług w Polsce. Wszystkie profile są zaprezentowane tak samo, co ułatwia wyszukanie odpowiedniej przestrzeni albo usługi. </p>
                        <p>Na profilu lokalu, bądź usługi zawsze znajdziesz aktualną cenę, a kontaktując się wprost do właściciela zawsze masz możliwość negocjacji.
                        </p>
                        <p>Mamy dla Ciebie dobrą wiadomość - nie pobieramy za to żadnych opłat! </p>
                    </div>


                </div>

                <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">

                    <div class="image-full-height">
                        <div class="image-wrapper">
                            <div class="image-inner">
                                <img  src="new-assets/images/host/moneybox.jpg" alt="" class="image-sq">
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
                                <h2>Zleć wyszukiwanie</h2>
                                <p>Nie masz czasu lub nie wiesz jak się za to zabrać?
                                    Wystarczy, że nam to zlecisz, a my zajmiemy się resztą! </p>

                                <a href="/b2b" class="button-sq see-through-sq"> Złeć</a>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- picture -->
                <div class="image-wrapper">
                    <div class="image-inner">
                        <img class="image-sq" src="new-assets/images/promo_section/promo_section_02.jpg" alt="">
                    </div>
                </div>
            </div>







        </div>
    </div>
    <div class="fb-customerchat"
         logged_in_greeting="Potrzebujesz pomocy? Napisz do nas!"
         logged_out_greeting="Potrzebujesz pomocy? Zaloguj się i napisz do nas!"
         theme_color="#f57C00" page_id="451368201896328">
    </div>
@endsection