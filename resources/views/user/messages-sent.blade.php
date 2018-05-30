@extends('user.layouts.user')

@section('user_content')
    <div class="typo-header-sq">
        <div class="ui grid">
            <div class="row">
                <div class="ui twelve wide computer column">
                    <h2>{{ __('Wiadomości') }} {{--<sup>6</sup>--}}</h2>

                    <ul class="inline-menu-sq list-default-sq list-style-inline-sq">
                        <li>
                            <a href="{{ route('messages-inbox') }}">Odebrane</a>
                        </li>
                        <li class="active">
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

            <div class="ui twelve wide tablet twelve wide computer twelve wide widescreen twelve wide large screen column">

            @foreach($messages as $message)
                <!-- Message -->
                    <div class="message-sq {{--favorite-sq--}}
                    @switch($message->status)
                    @case('Pending')
                            in-pending-sq
                            @break
                    @case('Confirmed')
                            completed-sq
                            @break
                    @case('Declined')
                            declined-sq
                            @break
                    @endswitch
                            ">

                        <div class="ui grid">
                            <div class="ui twelve wide mobile eight wide tablet eight wide computer eight wide widescreen eight wide large screen column">

                                <a class="avatar-sq" href="messages-sent/{{ $message->booking_number  }}">
                                    <img src="https://res.cloudinary.com/spokoloko/image/upload/c_fill,f_auto,g_auto,f_auto,g_face,w_150,h_150/avatars/{{ $message->owner_avatar }}"
                                         alt="">
                                </a>

                                <a class="message-content-sq" href="messages-sent/{{ $message->booking_number }}">
                                    <h3 class="message-title-sq">{{ $message->owner_name }}</h3>
                                    <span class="message-date-sq">{{ date('Y-m-d', strtotime($message->created_at)) }}</span>
                                    <br>

                                    <p class="message-body-sq">
                                        {{ $message->message }}
                                    </p>

                                </a>

                            </div>


                            <div class="ui twelve wide mobile four wide tablet four wide computer for wide widescreen four wide large screen column">

                                <div class="message-status-sq">
                                    @switch($message->status)
                                        @case('Pending')
                                        W oczekiwaniu
                                        @break
                                        @case('Confirmed')
                                        Zatwierdzona
                                        @break
                                        @case('Declined')
                                        Odrzucona
                                        @break
                                    @endswitch
                                </div>

                                <div class="message-related-sq">
                                    <span>Obiekt: </span>
                                    <a href="{{ route('venue', ['venue_url' => $message->venue_url]) }}"
                                       target="_blank">{{ $message->venue_name }}</a>
                                </div>
                            </div>

                        </div>

                    </div>
                @endforeach
            </div>

            {{--<div class="ui twelve wide tablet twelve wide computer twelve wide widescreen twelve wide large screen column">

                <ul class="list-default-sq pagination-simple-sq right-sq">
                    <li class="active"><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                </ul>

            </div>--}}

        </div>
    </div>
@endsection