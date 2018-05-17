@extends('user.layouts.user')

@section('user_content')
    <div class="typo-header-sq">
        <div class="ui grid">
            <div class="row">
                <div class="ui twelve wide computer column">
                    <h2>{{ __('Wiadomości') }} {{--<sup>6</sup>--}}</h2>

                    <ul class="inline-menu-sq list-default-sq list-style-inline-sq">
                        <li class="active">
                            <a>Odebrane</a>
                        </li>
                        <li>
                            <a>Wysłane</a>
                        </li>
                        {{--<li class="">
                            <a href="#">Unread</a>
                        </li>
                        <li class="">
                            <a href="#">Archive</a>
                        </li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="ui grid">
        <div class="row">

            <div class="ui twelve wide tablet twelve wide computer eight wide widescreen eight wide large screen column">
                <div class="message-nav">
                    <a href="{{ route('messages') }}" class="message-back">
                        <i class="icon icon-slim-arrow-left"></i>
                    </a>
                    <p class="message-title-sq">
                        {{ $venue->name }} rezerwacja {{ $venueBooking->book_date }}
                    </p>
                </div>
            </div>

            <div class="ui twelve wide tablet twelve wide computer twelve wide widescreen twelve wide large screen column">

                <div class="ui tablet reversed computer reversed widescreeen reversed large screen reversed grid">

                    <div class="ui twelve wide tablet twelve wide computer four wide widescreen four wide large screen column">
                        <div class="message-dashboard-details">

                            <header>
                                <div class="avatar-sq text-align-center-sq">
                                    <img src="https://res.cloudinary.com/spokoloko/image/upload/c_fill,f_auto,g_auto,f_auto,g_face,w_150,h_150/avatars/{{ $sender_avatar }}"
                                         alt="">
                                </div>

                                <p class="dashboard-heading-sq text-align-center-sq">{{ $venueBooking->client_name }}</p>

                                <span class="desc-subscribers-sq text-align-center-sq">
                                                            {{--<span class="dashboard-label-sq">Bucharest |</span>
                                                            <span class="dashboard-label-sq">1326 followers</span>--}}
                                                        </span>

                                <span class="dashboard-label-sq">Email</span>
                                <p class="dashboard-content-sq"><a
                                            href="mailto:{{ $venueBooking->client_email }}">{{ $venueBooking->client_email }}</a>
                                </p>

                                <span class="dashboard-label-sq">Telefon</span>
                                <p class="dashboard-content-sq">{{ $venueBooking->client_phone }}</p>
                            </header>


                            <p class="dashboard-headeing-sq">
                                Szczegóły rezerwacji
                            </p>

                            <span class="dashboard-label-sq">Obiekt</span>
                            <p class="dashboard-content-sq"><a href="{{ route('venue', ['venue_url' => $venue->url]) }}"
                                                               target="_blank">{{ $venue->name }}</a></p>

                            {{--<span class="dashboard-label-sq">Address</span>
                            <p class="dashboard-content-sq">9646 Rath Flats Suite 216</p>--}}

                            <span class="dashboard-label-sq">Data</span>
                            <p class="dashboard-content-sq">{{ $venueBooking->book_date }}</p>

                            <span class="dashboard-label-sq">Okres</span>
                            <p class="dashboard-content-sq">{{ $venueBooking->time_from }}
                                -{{ $venueBooking->time_to }}</p>

                            <span class="dashboard-label-sq">Numer rezerwacji</span>
                            <p class="dashboard-content-sq">{{ $venueBooking->booking_number }}</p>

                            <a href="" class="button-sq small-sq see-through-sq"
                               style="width: 100%; margin-bottom: 1em;">Zatwierdź rezerwację</a>
                            <a href="" class="button-sq small-sq see-through-sq" style="width: 100%;">Odrzuć
                                rezerwację</a>

                        </div>
                    </div>

                    <div class="ui twelve wide tablet twelve wide computer eight wide widescreen eight wide large screen column">
                        <div class="message-chat">

                        @foreach($messages as $message)
                            <!-- Message Item -->
                                <div class="message-chat-item-sq {{ $message->sender == 'Owner' ? 'dashboard-message' : ''}}">
                                    <div class="avatar-sq little-avatar-sq">
                                        @if($message->sender == 'Owner')
                                            <img src="https://res.cloudinary.com/spokoloko/image/upload/c_lfill,d_profileimage.png,g_face,h_50,w_50/avatars/{{ Auth::user()->avatar }}"
                                                 alt="">
                                        @else
                                            <img src="https://res.cloudinary.com/spokoloko/image/upload/c_lfill,d_profileimage.png,g_face,h_50,w_50/avatars/{{ $sender_avatar }}"
                                                 alt="">
                                        @endif
                                    </div>

                                    <p class="message-chat-content">
                                        {{ $message->message }}
                                    </p>
                                    <div class="message-date-sq">{{ date('Y-m-d', strtotime($message->created_at)) }}</div>
                                </div>
                            @endforeach



                            {{--<!-- Reservation Confirmed -->
                            <div class="message-chat-item-sq confirmation-message-sq">

                                <p class="message-title-sq">
                                    <span>Reservation Confirmed</span>
                                </p>

                                <div class="message-date-sq">30 Apr 2017</div>

                                <p class="message-chat-content">
                                    Bryce Canyon A In hac habitasse platea dictumst. Integer quis tortor enim. Integer
                                    et elit nec magna ultricies convallis. In venenatis eu erat et facilisis. Vestibulum
                                    congue enim nisl. Fusce arcu enim, porta a auctor vel, hendrerit a libero. Vivamus
                                    vel dapibus sem. Us Travel Destination
                                </p>

                            </div>--}}

                            <div class="message-chat-item-sq dashboard-message comment-sq">
                                <div class="avatar-sq little-avatar-sq">
                                    <img src="https://res.cloudinary.com/spokoloko/image/upload/c_lfill,d_profileimage.png,g_face,h_50,w_50/avatars/{{ Auth::user()->avatar}}"
                                         alt="">
                                </div>

                                <textarea class="message-chat-content" cols="30" rows="6"
                                          style="color: black;"></textarea>

                                <a class="button-sq font-weight-extrabold-sq small-sq" href="">Wyślij</a>

                            </div>


                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>
@endsection
