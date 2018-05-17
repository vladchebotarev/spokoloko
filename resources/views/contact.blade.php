@extends('layouts.app')

@section('title', 'Venue')

@section('content')
    <div class="ui layout">




        <div class="ui centered grid container" >


            <div class="row become-dashboard-description">
                <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">


                    <div class="become-dashboard-inner">
                        <h3 style="padding-bottom: 20px">Kontakty</h3>
                        <div class="content">
                            <p>Jesteśmy do Twojej dyspozycji.
                                Zadzwoń, napisz lub umów się na spotkanie z nami.
                            </p>


                                <ul class="description-list">
                                    <li>
                                        <div>
                                            <p>Adres:</p>
                                            <strong style="float: right">Jasło, ul.T.Kościuszki 31/5, 38-200</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <div>
                                            <p>Oddział w Krakowie</p>
                                            <strong style="float: right">Kraków, ul.Dekerta 2/21, 31-000</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <div>
                                            <p>Telefon:</p>
                                            <strong style="float: right">+ 48 730 035 936</strong>
                                        </div>
                                    </li>

                                    <li>
                                        <div><p>Mail:</p>
                                            <strong style="float: right">mail@spokoloko.me</strong></div>
                                    </li>

                                    <li>
                                        <div class="ui internally celled grid">
                                            <div class="row"
                                                 style="padding-right: 20px; padding-left: 20px;">
                                                <div class="four wide column"
                                                     style="padding-right: 1%; padding-left:0%;">
                                                    <button onclick="open('#')"
                                                            class="social_icons facebook"><i
                                                                class="fa fa-facebook"></i>
                                                    </button>
                                                </div>

                                                <div class="four wide column"
                                                     style="padding-right: 1%; padding-left:1%;">
                                                    <button class="column social_icons instagram"><i
                                                                class="fa fa-instagram"></i>
                                                    </button>
                                                </div>
                                                <div class="four wide column"
                                                     style="padding-right: 0%;  padding-left:1%;">
                                                    <button class="column social_icons twitter"><i
                                                                class="fa fa-twitter"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <div class="map-wrapper" style="padding-top: 20px; max-height: 360px;">
                                        <div id="map" ></div>
                                    </div>




                                </ul>



                        </div>
                    </div>

                    <style>
                        div.calendar_title {
                            font-size: 14px;
                            padding-bottom: 10px;
                            font-family: 'Lato';
                            line-height: 1.2142em;
                            color: #4d4d4d;
                        !important;
                        }

                        div.soc_buttons {
                            width: 100%;
                        }

                        button.social_icons {
                            font-size: 15px;
                            width: 100%;

                            border: 1px;
                            border-style: solid;
                            background-color: white;

                        }

                        button.social_icons.facebook {
                            border-color: dodgerblue;
                            color: dodgerblue;
                        }

                        button.social_icons.instagram {
                            border-color: deeppink;
                            color: deeppink;
                        }

                        button.social_icons.tripadvisor {
                            border-color: forestgreen;
                            color: forestgreen;
                        }

                        button.social_icons.twitter {
                            border-color: #00ACED;
                            color: #00aced;
                        }

                        button.button_call {
                            width: 100%;
                            border: 1px;
                            border-style: solid;

                            background-color: white;
                            color: orangered;
                            border-bottom-color: orangered;
                        }

                        button.button_message {
                            width: 100%;
                            border: 1px;
                            border-style: solid;

                            background-color: white;
                            color: dodgerblue;
                            border-bottom-color: dodgerblue;
                        }


                    </style>





                </div>

                <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">


                    <div class="become-dashboard-inner">
                        <h3 style="padding-bottom: 20px">Napisz do nas</h3>
                        <div class="content">
                            <p>Masz pytania? Skontaktuj się z nami używając poniższego formularza.
                                </p>

                            <form>




                                <div class="div-c ">
                                    <div class="divided-column">
                                        <label>Imie</label>
                                        <input type="text" autofocus placeholder=" ">
                                    </div>


                                </div>

                                <div class="div-c inline-2">
                                    <div class="divided-column">
                                        <label>Telefon</label>
                                        <input type="number" autofocus placeholder=" ">
                                    </div>

                                    <div class="divided-column">
                                        <label>Email</label>
                                        <input type="text" placeholder=" ">
                                    </div>
                                </div>

                                <div class="div-c">
                                    <label>Message</label>
                                    <textarea cols="30" rows="10" placeholder=" "></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="actions" style="padding-top: 10px;">
                            <div class="div-c ">


                                <div class="divided-column">
                                    <div class="button-sq fullwidth-sq" > Wyślij </div>
                                </div>
                            </div>

                        </div>

                    </div>



                </div>

            </div>












        </div>
    </div>

@endsection