@extends('layouts.app')

@section('content')
    <div class="ui layout">

        <div class="promo-section" style="max-height: 600px;">

            <!-- content -->
            <div class="ui container grid centered">
                <div class="row">
                    <div class="ui twelve wide mobile ten wide tablet eight wide computer six wide large screen six wide widescreen column">
                        <div class="promo-content style-02" style="background-color: rgba(37,37,37,0.8); borderborder-radius: 30px;">
                            <h2>Zarabiaj ze Spokoloko</h2>
                            <p>Masz lokal do wynajęcia, lub pomagasz innym tworzyć wydarzenia? <br>
                                Dodaj swój biznes i powiększ swoje zyski.<br>
                                Zarządzaj swoim profilem, promuj się, a resztę zostaw nam.</p>


                            <a href="{{url('user/share')}}" class="button-sq see-through-sq" > Zarejestruj Się </a>
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
                        <h3 style="padding-bottom: 20px">Stań się widoczny </h3>
                        <p>Profesjonalny profil pomoże Ci dotrzeć do serca organizatora. W prosty i klarowny  sposób zaprezentuj swój biznes do swoich beneficjentów.  </p>
                        <p>Każdy profil bierze udział w kampanii SMM/SEO i zwiększa rozpoznawalność marki.
                        </p>

                    </div>


                </div>

                <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">

                    <div class="image-full-height">
                        <div class="image-wrapper">
                            <div class="image-inner">
                                <img  src="new-assets/images/host/host_01.jpg" alt="" class="image-sq">
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
                                <img src="new-assets/images/host/moneybox.jpg" alt="" class="image-sq">
                            </div>
                        </div>
                    </div>

                </div>


                <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">


                    <div class="become-dashboard-inner">
                        <h3 style="padding-bottom: 20px"> Zarabiaj więcej </h3>
                        <p>Za pomocą Spokoloko zwiększysz swoje zyski nawet kilkukrotnie!
                        </p>
                        <p>Docieraj do swoich docelowych klientów, otrzymuj zamówienia i prezentuj się w najlepszy sposób.
                        </p>
                        <p>Nigdy wcześniej interakcja z klientami nie była tak prosta. </p>
                    </div>


                </div>


            </div>

            <div class="row become-dashboard-description" style="margin-top: 10px;">
                <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">


                    <div class="become-dashboard-inner">
                        <h3 style="padding-bottom: 20px">Bądź na czasie </h3>
                        <p>Nie trać czasu i pieniędzy na bezużyteczne kampanie reklamowe. Dołącz się do
                            pierwszego w Polsce portalu łączącego organizatorów wydarzeń z gospodarzami i usługodawcami. Bezpośrednio i bez zbędnych kosztów.
                        </p>

                    </div>


                </div>

                <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">

                    <div class="image-full-height">
                        <div class="image-wrapper">
                            <div class="image-inner">
                                <img  src="new-assets/images/host/timer.jpg" alt="" class="image-sq">
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
                                <h2>Zarejestruj się za darmo</h2>
                                <p>Pomagaj organizować eventy w całej Polsce.
                                    Dodaj swój biznes do serwisu Spokoloko całkowicie za darmo</p>

                                <a href="{{url('user/share')}}" class="button-sq see-through-sq"> Rejestracja  </a>
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
{{--}}
            <div class="ui container text" style="padding-top: 50px;">
                <h3 class="text-align-center-sq" style="padding:10px; ">Dostępne pakiety</h3>

                <div class="ui link cards three stackable grid" style = "padding: 20px;">
                    <div class="ui card">
                        <div class="content">
                            <div class="header center aligned">Free</div>
                            <div class="meta center aligned">free and unlimited</div>
                            <div class="ui divider horizontal">$0 / month</div>
                            <div class="ui list">
                                <div class="item"><i class="icon checkmark"></i> <div class="content">
                                        Do things
                                    </div></div>
                                <div class="item"><i class="icon checkmark"></i> <div class="content">
                                        <b>25.000</b> of stuff
                                    </div></div>
                                <div class="item"><i class="icon checkmark"></i> <div class="content">
                                        <b>30</b> days of history
                                    </div></div>
                                <div class="item"><i class="icon checkmark"></i> <div class="content">
                                        <b>20</b> is just a number
                                    </div></div>
                                <div class="item"><i class="icon checkmark"></i> <div class="content">
                                        <b>15</b> is another number
                                    </div></div>
                                <div class="item"><i class="icon minus"></i> <div class="content">
                                        <b>Default</b> Server
                                        <br><small>(50 Petaflops/s)</small>
                                    </div></div>
                            </div>
                        </div>
                        <div class="extra content">
                            <button class="ui button fluid grey disabled">Default</button>
                        </div>
                    </div>
                    <div class="ui card raised">
                        <div class="content">

                            <div class="header center aligned">Premium</div>
                            <div class="meta center aligned">prio ressources</div>
                            <div class="ui divider horizontal">$2 / month</div>
                            <div class="ui list" style="padding-top: 20px;">
                                <div class="item"><i class="icon icon-check-2 blue"></i> <div class="content">
                                        Do <b>all</b> things
                                    </div></div>
                                <div class="item"><i class="icon checkmark blue"></i> <div class="content">
                                        <b>60.000</b> of stuff
                                    </div></div>
                                <div class="item"><i class="icon checkmark blue"></i> <div class="content">
                                        <b>120</b> days of history
                                    </div></div>
                                <div class="item"><i class="icon checkmark blue"></i> <div class="content">
                                        <b>100</b> is just a number
                                    </div></div>
                                <div class="item"><i class="icon checkmark blue"></i> <div class="content">
                                        <b>60</b> is another number
                                    </div></div>
                                <div class="item"><i class="icon checkmark blue"></i> <div class="content">
                                        <b>Awesome</b> Server
                                        <br><small>(50 Petaflops/s)</small>
                                    </div></div>
                                <div class="item"><i class="icon checkmark blue"></i> <div class="content">
                                        <b>Support</b> the development
                                    </div></div>
                            </div>
                        </div>
                        <div class="extra content">
                            <button class="ui button fluid blue">Order now</button>
                        </div>
                    </div>
                    <div class="ui card raised">
                        <div class="content">
                            <a class="ui label left corner blue">
                                <i class="icon plus"></i>
                            </a>
                            <div class="header center aligned">Premium</div>
                            <div class="meta center aligned">prio ressources</div>
                            <div class="ui divider horizontal">$2 / month</div>
                            <div class="ui list">
                                <div class="item"><i class="icon checkmark blue"></i> <div class="content">
                                        Do <b>all</b> things
                                    </div></div>
                                <div class="item"><i class="icon checkmark blue"></i> <div class="content">
                                        <b>60.000</b> of stuff
                                    </div></div>
                                <div class="item"><i class="icon checkmark blue"></i> <div class="content">
                                        <b>120</b> days of history
                                    </div></div>
                                <div class="item"><i class="icon checkmark blue"></i> <div class="content">
                                        <b>100</b> is just a number
                                    </div></div>
                                <div class="item"><i class="icon checkmark blue"></i> <div class="content">
                                        <b>60</b> is another number
                                    </div></div>
                                <div class="item"><i class="icon checkmark blue"></i> <div class="content">
                                        <b>Awesome</b> Server
                                        <br><small>(50 Petaflops/s)</small>
                                    </div></div>
                                <div class="item"><i class="icon checkmark blue"></i> <div class="content">
                                        <b>Support</b> the development
                                    </div></div>
                            </div>
                        </div>
                        <div class="extra content">
                            <button class="ui button fluid blue">Order now</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row" style="padding-top: 40px; padding-bottom: 20px;">
                <div class="ui twelve wide tablet six wide computer six wide widescreen six wide large screen column" >

                    <h3 class="text-align-center-sq">
                        Nie pasuje żaden Pakiet?
                    </h3>
                    <br>

                    <p class="text-align-center-sq">   Skontaktuj się z nami i skomponuj swój własny Pakiet <br>


                    </p>
                    <br>
                    <div class="text-align-center-sq">
                        <a class="button-sq font-weight-bold-sq" href="add_listing.html">Zacznij</a>
                    </div>



                </div>

            </div>
--}}
        </div>
    </div>
@endsection