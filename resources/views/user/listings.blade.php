@extends('user.layouts.user')

@section('user_content')
    <div class="typo-header-sq">
        <div class="ui grid">
            <div class="row">
                <div class="ui twelve wide computer column">
                    <h2>{{ __('Moje Biznesy') }} <sup>4</sup></h2>
                </div>

                <div class="ui twelve wide tablet eight wide computer eight wide widescreen eight wide large screen column">
                    <ul class="inline-menu-sq list-default-sq list-style-inline-sq">
                        <li class="active">
                            <a href="my_listings.html">{{ __('Wszystkie') }}</a>
                        </li>
                        <li class="">
                            <a href="my_listings_completed.html">{{ __('Przestrzenie') }}</a>
                        </li>
                        <li class="">
                            <a href="my_listings_in_progress.html">{{ __('Biznes eventowy') }}</a>
                        </li>
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

            <div class="ui twelve wide tablet six wide computer six wide widescreen six wide large screen column">

                <div class="property-item caption-sq">
                    <div class="property-item-inner">

                        <div class="price-tag-sq">
                            <span>od </span>120
                            PLN <span>/3 godz</span>
                        </div>
                        <a class="add-wishlist modal-ui-trigger" href="edit-venue">

                            <i class="icon icon-cog2"></i>
                        </a>


                        <a class="image-sq" href="edit-venue"
                           target="_blank">
                                                <span class="image-wrapper">
                                                    <span class="image-inner">
                                                        <img src="../../new-assets/images/property/property_little_01.jpg"
                                                             alt="" class="" style="height: 100%">
                                                        {{--<img src="{{ asset('new-assets/images/property/property_little_01.jpg') }}"
                                                             alt="" class="">--}}
                                                    </span>
                                                </span>
                        </a>

                        <div class="main-details">
                            <div class="title-row">
                                <a href="edit-venue" target="_blank"
                                   class="title-sq">After Beng Club</a>


                            </div>
                            <div class="biz-adres">
                                <strong style="padding-right: 10px;">Klub muzycny</strong>| Rynk Głowny 28
                            </div>

                            <div class="icons-row">
                                <div class="icons-column">
                                    <i class="icon icon-star-2"></i> 8.6
                                </div>
                                <div class="icons-column">
                                    <i class="icon icon-account-group-5"></i> 120
                                </div>
                                <div class="icons-column">
                                    <i class="icon icon-home-3"></i> 300m²
                                </div>

                            </div>
                        </div>

                    </div>

                   

                </div>
            </div>





        </div>
    </div>
@endsection