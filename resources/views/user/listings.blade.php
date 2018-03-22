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
                    <a href="add_listing.html" class="button-sq small-sq fullwidth-sq">
                        <i class="icon icon-add-1"></i><span>{{ __('Dodaj biznes') }}</span></a>
                </div>

            </div>

        </div>
    </div>

    <div class="ui grid">

        <div class="row">

            <div class="ui twelve wide tablet six wide computer six wide widescreen six wide large screen column">

                <div class="property-item">
                    <div class="property-item-inner">

                        <div class="price-tag-sq">77 &euro; <span>/ night</span></div>
                        <a class="add-wishlist" href="property_page.html">
                            <i class="icon icon-view-solid"></i>
                        </a>


                        <a class="image-sq" href="property_page_edit.html">
                                                <span class="image-wrapper">
                                                    <span class="image-inner">
                                                        <img src="{{ asset('new-assets/images/property/property_little_01.jpg') }}" alt="" class="">
                                                    </span>
                                                </span>
                        </a>

                        <div class="main-details">
                            <p class="progress-status">
                                In Progress
                            </p>
                            <div class="title-row">
                                <a href="property_page_edit.html" class="title-sq">Private Room for 5 people near Museum</a>
                                <a href="" class="avatar-sq">
                                    <img src="{{ asset('new-assets/images/avatar/my_avatar.jpg') }}" alt="">
                                </a>
                            </div>

                            <div class="icons-row">
                                <div class="icons-column">
                                    <i class="icon icon-heart"></i> 8.7
                                </div>
                                <div class="icons-column">
                                    <i class="icon icon-account-group-5"></i> x 4
                                </div>
                                <div class="icons-column">
                                    <i class="icon icon-door-simple"></i> x 6
                                </div>
                                <div class="icons-column">
                                    <i class="icon icon-bed-double"></i> x 2
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="ui twelve wide tablet six wide computer six wide widescreen six wide large screen column">
                <div class="property-item">
                    <div class="property-item-inner">

                        <div class="price-tag-sq">130 &euro; <span>/ night</span></div>
                        <a class="add-wishlist" href="property_page.html">
                            <i class="icon icon-view-solid"></i>
                        </a>


                        <a class="image-sq" href="property_page_edit.html">
                                                <span class="image-wrapper">
                                                    <span class="image-inner">
                                                        <img src="{{ asset('new-assets/images/property/property_little_02.jpg') }}" alt="" class="">
                                                    </span>
                                                </span>
                        </a>

                        <div class="main-details">
                            <p class="progress-status">
                                In Progress
                            </p>
                            <div class="title-row">
                                <a href="property_page_edit.html" class="title-sq">Modern fresh room in Old Street</a>
                                <a href="" class="avatar-sq">
                                    <img src="{{ asset('new-assets/images/avatar/my_avatar.jpg') }}" alt="">
                                </a>
                            </div>

                            <div class="icons-row">
                                <div class="icons-column">
                                    <i class="icon icon-heart"></i> 9.1
                                </div>
                                <div class="icons-column">
                                    <i class="icon icon-account-group-5"></i> x 10
                                </div>
                                <div class="icons-column">
                                    <i class="icon icon-door-simple"></i> x 4
                                </div>
                                <div class="icons-column">
                                    <i class="icon icon-bed-double"></i> x 5
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="ui twelve wide tablet six wide computer six wide widescreen six wide large screen column">
                <div class="property-item">
                    <div class="property-item-inner">

                        <div class="price-tag-sq">87 &euro; <span>/ night</span></div>
                        <a class="add-wishlist" href="property_page.html">
                            <i class="icon icon-view-solid"></i>
                        </a>


                        <a class="image-sq" href="property_page_edit.html">
                                                <span class="image-wrapper">
                                                    <span class="image-inner">
                                                        <img src="{{ asset('new-assets/images/property/property_little_04.jpg') }}" alt="" class="">
                                                    </span>
                                                </span>
                        </a>

                        <div class="main-details">
                            <p class="progress-status">
                                Completed
                            </p>
                            <div class="title-row">
                                <a href="property_page_edit.html" class="title-sq">Stylish house close to river</a>
                                <a href="" class="avatar-sq">
                                    <img src="{{ asset('new-assets/images/avatar/my_avatar.jpg') }}" alt="">
                                </a>
                            </div>

                            <div class="icons-row">
                                <div class="icons-column">
                                    <i class="icon icon-heart"></i> 9.0
                                </div>
                                <div class="icons-column">
                                    <i class="icon icon-account-group-5"></i> x 8
                                </div>
                                <div class="icons-column">
                                    <i class="icon icon-door-simple"></i> x 3
                                </div>
                                <div class="icons-column">
                                    <i class="icon icon-bed-double"></i> x 4
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="ui twelve wide tablet six wide computer six wide widescreen six wide large screen column">
                <div class="property-item">
                    <div class="property-item-inner">

                        <div class="price-tag-sq">156 &euro; <span>/ night</span></div>
                        <a class="add-wishlist" href="property_page.html">
                            <i class="icon icon-view-solid"></i>
                        </a>


                        <a class="image-sq" href="property_page_edit.html">
                                                <span class="image-wrapper">
                                                    <span class="image-inner">
                                                        <img src="{{ asset('new-assets/images/property/property_little_05.jpg') }}" alt="" class="">
                                                    </span>
                                                </span>
                        </a>

                        <div class="main-details">
                            <p class="progress-status">
                                Completed
                            </p>
                            <div class="title-row">
                                <a href="property_page_edit.html" class="title-sq">Light &amp; Spacious Flat London</a>
                                <a href="" class="avatar-sq">
                                    <img src="assets/images/avatar/my_avatar.jpg" alt="">
                                </a>
                            </div>

                            <div class="icons-row">
                                <div class="icons-column">
                                    <i class="icon icon-heart"></i> 8.9
                                </div>
                                <div class="icons-column">
                                    <i class="icon icon-account-group-5"></i> x 4
                                </div>
                                <div class="icons-column">
                                    <i class="icon icon-door-simple"></i> x 6
                                </div>
                                <div class="icons-column">
                                    <i class="icon icon-bed-double"></i> x 2
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="ui twelve wide tablet twelve wide computer twelve wide widescreen twelve wide large screen column">

                <ul class="list-default-sq pagination-simple-sq right-sq">
                    <li class="active"><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                </ul>

            </div>

        </div>
    </div>
@endsection