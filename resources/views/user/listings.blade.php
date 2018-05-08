@extends('user.layouts.user')

@section('user_content')
    <div class="typo-header-sq">
        <div class="ui grid">
            <div class="row">

                @if (session('status'))
                    <div class="ui twelve wide computer column">
                        <div class="ui positive message" style="margin-bottom: 30px;">
                            <i class="close icon"></i>
                            <i class="fa fa-times close" aria-hidden="true" style="float: right;"></i>
                            <div class="header">
                                Powodzenie
                            </div>
                            <p>{{ session('status') }}</p>
                        </div>
                    </div>
                @endif

                <div class="ui twelve wide computer column">
                    <h2>{{ __('Moje Biznesy') }} {{--<sup>4</sup>--}}</h2>
                </div>

                <div class="ui twelve wide tablet eight wide computer eight wide widescreen eight wide large screen column">
                    <ul class="inline-menu-sq list-default-sq list-style-inline-sq">
                        <li class="active">
                            <a href="{{ url('user/listings') }}">{{ __('Wszystkie') }}</a>
                        </li>
                        {{--<li class="">
                            <a href="my_listings_completed.html">{{ __('Przestrzenie') }}</a>
                        </li>
                        <li class="">
                            <a href="my_listings_in_progress.html">{{ __('Biznes eventowy') }}</a>
                        </li>--}}
                    </ul>
                </div>
                <div class="ui twelve wide tablet four wide computer four wide widescreen four wide large screen column">
                    <a href="share" class="button-sq small-sq fullwidth-sq">
                        <i class="icon icon-add-1"></i><span>{{ __('Dodaj biznes') }}</span></a>
                </div>

            </div>

        </div>
    </div>

    <div class="ui grid">

        <div class="row">

            @foreach($venues as $venue)
                <div class="ui twelve wide tablet six wide computer six wide widescreen six wide large screen column">
                    <div class="property-item caption-sq">
                        <div class="property-item-inner">
                            {{--<div class="price-tag-sq">
                                <span>od </span>{{ number_format($venue->min_price, 0, '', '')  }}
                                PLN <span>/{{ $venue->min_hours }} h</span>
                            </div>--}}
                            <a class="add-wishlist" href="{{ url('user/update-venue/'.$venue->url) }}"
                               target="_blank">
                                <i class="icon icon-cog2"></i>
                            </a>

                            <a class="image-sq" href="{{ url('user/update-venue/'.$venue->url) }}" target="_blank">
                            <span class="image-wrapper">
                                <span class="image-inner">
                                    <img src="https://res.cloudinary.com/spokoloko/image/upload/c_fill,e_improve,f_jpg,g_auto,h_375,w_500/v1/venues/{{$venue->url}}/{{$venue->image_url}}"
                                         alt="" class=""
                                         style="height: 100%">
                                </span>
                            </span>
                            </a>

                            <div class="main-details">
                                <div class="title-row">
                                    <a href="{{ url('user/update-venue/'.$venue->url) }}" target="_blank"
                                       class="title-sq">{{ $venue->name }}</a>
                                </div>

                                <div class="biz-adres">
                                    <strong style="padding-right: 10px;">{{ $venue->venue_type }}</strong>| {{ $venue->street_address }}
                                </div>

                                {{--<div class="icons-row">
                                    <div class="icons-column">
                                        <i class="icon icon-star-2"></i> 8.6
                                    </div>
                                    <div class="icons-column">
                                        <i class="icon icon-account-group-5"></i> 120
                                    </div>
                                    <div class="icons-column">
                                        <i class="icon icon-home-3"></i> 300m²
                                    </div>
                                </div>--}}
                            </div>
                        </div>
                    </div>

                   

                </div>
            @endforeach


        </div>
    </div>
@endsection