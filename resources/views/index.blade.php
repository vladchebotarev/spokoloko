@extends('layouts.app')

@section('content')
    <!-- Hero Full Page -->
    <div class="hero-search-full-page next-sq">

        <!-- Hero Search -->
        <!-- .thin .animate .shadow .colored -->
        <div class="h-search-h thin-sq shadow-sq animate-sq">
            <form action="listing_page.html" class="hero-search-form">
                <div class="search-item">
                    <div class="fltp">
                        <input type="text" value="" required>
                        <label class="placeholder" data-big-placeholder="Where do you travel?" data-little-placeholder="Where?"></label>
                    </div>
                </div>

                <div class="search-item">
                    <div class="fltp calendar-sq" id="rangestart">
                        <input type="text" class="filter" value="" required placeholder="enter date">
                        <label class="placeholder"  data-big-placeholder="Check in" data-little-placeholder="Start"></label>
                    </div>

                    <i class="icon icon-little-arrow"></i>

                    <div class="fltp calendar-sq" id="rangeend">
                        <input type="text" class="filter" value="" required placeholder="enter date">
                        <label class="placeholder"  data-big-placeholder="Check out" data-little-placeholder="Ends"></label>
                    </div>
                </div>

                <div class="search-item">
                    <div class="fltp">
                        <select name="dropdown" size="13" class="dropdown" required>
                            <option value="0" selected>Guests</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="5">6</option>
                            <option value="5">7</option>
                            <option value="5">8</option>
                            <option value="5">9</option>
                            <option value="5">10</option>
                            <option value="5">11</option>
                            <option value="5">12</option>
                        </select>
                        <label class="placeholder">Guests</label>
                    </div>
                </div>

                <div class="search-item">
                    <button class="button-sq hero-search-button">
                        <i class="icon icon-search"></i>
                    </button>
                </div>

            </form>
        </div>

        <!-- Hero Big - Slick -->
        <div class="sq-slick hero-big slide-up-sq" data-mobile-arrows="false" data-tablet-arrows="false" data-mobile-dots="true" data-tablet-dots="true" data-fade="true" data-speed="500" data-ease="linear">
            <!-- .slide-up .fade .top .bottom -->

            <!--Slide 01-->
            <div class="">
                <div class="caption-content">
                    <h1 class="font-weight-extrabold-sq">New Experiences</h1>
                </div>
                <div class="caption-outside">
                    <a class="button anchor-sq" href="#top">
                        <i class="icon big icon-compass"></i>
                        <span>Explore</span>
                    </a>
                </div>

                <div class="image-wrapper">
                    <div class="image-inner">
                        <img class="image-sq" src="new-assets/images/hero/hero_big_28.jpg" alt="">
                    </div>
                </div>
            </div>

            <!--Slide 02-->
            <div>
                <div class="caption-content">
                    <h1 class="font-weight-extrabold-sq">New Feelings</h1>
                </div>

                <div class="caption-outside">
                    <a class="button anchor-sq" href="#top">
                        <i class="icon big icon-compass"></i>
                        <span>Find</span>
                    </a>
                </div>

                <div class="image-wrapper">
                    <div class="image-inner">
                        <img class="image-sq" src="new-assets/images/hero/hero_big_29.jpg" alt="">
                    </div>
                </div>
            </div>

            <!--Slide 03-->
            <div>
                <div class="caption-content">
                    <h1 class="font-weight-extrabold-sq">New Stories</h1>
                </div>

                <div class="caption-outside">
                    <a class="button anchor-sq" href="#top">
                        <i class="icon big icon-compass"></i>
                        <span>Read</span>
                    </a>
                </div>

                <div class="image-wrapper">
                    <div class="image-inner">
                        <img class="image-sq" src="new-assets/images/hero/hero_big_30.jpg" alt="">
                    </div>
                </div>
            </div>

            <!--Slide 04-->
            <div>
                <div class="caption-content">
                    <h1 class="font-weight-extrabold-sq">New Locations</h1>
                </div>
                <div class="caption-outside">
                    <a class="button anchor-sq" href="#top">
                        <i class="icon big icon-compass"></i>
                        <span>View</span>
                    </a>
                </div>

                <div class="image-wrapper">
                    <div class="image-inner">
                        <img class="image-sq" src="new-assets/images/hero/hero_big_31.jpg" alt="">
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="ui layout" id="top">
        <div class="ui grid container">
            <div class="row">
                <div class="ui twelve wide computer column">
                    <div class="typo-section-sq bottom-big">

                        <div class="typo-section-header-sq">
                            <h2 class="text-align-center-sq">Top Cities to visit</h2>
                            <p class="text-align-center-sq">Discover awesome experiences around the world.</p>
                        </div>

                        <div class="magic-grid photo-sq hover-default hover-center">

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" src="new-assets/images/magic_grid/magic_grid_photo_01.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="listing_page.html" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Greece" data-label-after="Book a home in"></p>
                                        <p class="typo-title-sq">Lefkada</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" src="new-assets/images/magic_grid/magic_grid_photo_02.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="listing_page.html" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Netherlands" data-label-after="Book a home in"></p>
                                        <p class="typo-title-sq">Amsterdam</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" src="new-assets/images/magic_grid/magic_grid_photo_03.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="listing_page.html" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="France" data-label-after="Book a home in"></p>
                                        <p class="typo-title-sq">Paris</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" src="new-assets/images/magic_grid/magic_grid_photo_04.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="listing_page.html" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Czech" data-label-after="Book a home in"></p>
                                        <p class="typo-title-sq">Prague</p>
                                    </a>

                                </div>
                            </div>

                        </div>

                        <a class="more-trigger" data-more="See All" href="listing_page.html">
                            <i class="icon icon-arrow-down-122"></i>
                        </a>
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
                            <h2>Explore the world</h2>
                            <p>Spectacular natural wonders and astonishing man-made structures. The list of great landmarks are often limited to seven, but the world is filled with wonders.</p>

                            <a href="listing_page.html" class="button-sq see-through-sq"> See Map </a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- picture -->
            <div class="image-wrapper">
                <div class="image-inner">
                    <img class="image-sq" src="new-assets/images/promo_section/promo_section_01.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="ui grid container">
            <div class="row">
                <div class="ui column">

                    <div class="typo-section-sq bottom-big">
                        <div class="typo-section-header-sq">
                            <h2 class="text-align-center-sq">Popular Places</h2>

                            <p class="text-align-center-sq">Find the most visited places in entire world.</p>
                        </div>

                        <div class="ui grid">

                            <div class="twelve wide mobile four wide tablet four wide computer column">
                                <div class="property-item">
                                    <div class="property-item-inner">

                                        <div class="price-tag-sq">112 &euro; <span>/ night</span></div>
                                        <a class="add-wishlist modal-ui-trigger" href="" data-trigger-for="wishlist">
                                            <i class="icon icon-add-wishlist"></i>
                                        </a>

                                        <a class="image-sq" href="property_page.html">
                    	                    <span class="image-wrapper">
                    	                        <span class="image-inner">
                    	                            <img src="new-assets/images/property/property_little_01.jpg" alt="" class="">
                    	                        </span>
                    	                    </span>
                                        </a>

                                        <div class="main-details">
                                            <div class="title-row">
                                                <a href="property_page.html" class="title-sq">Downtown Sweet House</a>
                                                <a href="vendor_details.html" class="avatar-sq">
                                                    <img src="new-assets/images/avatar/avatar_01.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="icons-row">
                                                <div class="icons-column">
                                                    <i class="icon icon-heart"></i> 8.6
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

                            <div class="twelve wide mobile four wide tablet four wide computer column">
                                <div class="property-item">
                                    <div class="property-item-inner">

                                        <div class="price-tag-sq">78 &euro; <span>/ night</span></div>
                                        <a class="add-wishlist modal-ui-trigger" href="" data-trigger-for="wishlist">
                                            <i class="icon icon-add-wishlist"></i>
                                        </a>


                                        <a class="image-sq" href="property_page.html">
                    	                        <span class="image-wrapper">
                    	                            <span class="image-inner">
                    	                                <img src="new-assets/images/property/property_little_02.jpg" alt="" class="">
                    	                            </span>
                    	                        </span>
                                        </a>

                                        <div class="main-details">

                                            <div class="title-row">
                                                <a href="property_page.html" class="title-sq">Large and confortable double room</a>
                                                <a href="vendor_details.html" class="avatar-sq">
                                                    <img src="new-assets/images/avatar/avatar_02.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="icons-row">
                                                <div class="icons-column">
                                                    <i class="icon icon-heart"></i> 7.8
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-account-group-5"></i> x 2
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-door-simple"></i> x 3
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-bed-double"></i> x 2
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="twelve wide mobile four wide tablet four wide computer column">
                                <div class="property-item">
                                    <div class="property-item-inner">

                                        <div class="price-tag-sq">51 &euro; <span>/ night</span></div>
                                        <a class="add-wishlist modal-ui-trigger" href="" data-trigger-for="wishlist">
                                            <i class="icon icon-add-wishlist"></i>
                                        </a>

                                        <a class="image-sq" href="property_page.html">
                    	                    <span class="image-wrapper">
                    	                        <span class="image-inner">
                    	                            <img src="new-assets/images/property/property_little_03.jpg" alt="" class="">
                    	                        </span>
                    	                    </span>
                                        </a>


                                        <div class="main-details">

                                            <div class="title-row">
                                                <a href="property_page.html" class="title-sq">Modern studio flat with garden</a>
                                                <a href="vendor_details.html" class="avatar-sq">
                                                    <img src="new-assets/images/avatar/avatar_03.jpg"
                                                         alt="">
                                                </a>
                                            </div>

                                            <div class="icons-row">
                                                <div class="icons-column">
                                                    <i class="icon icon-heart"></i> 7.5
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-account-group-5"></i> x 2
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-door-simple"></i> x 1
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-bed-double"></i> x 3
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="twelve wide mobile four wide tablet four wide computer column">
                                <div class="property-item">
                                    <div class="property-item-inner">

                                        <div class="price-tag-sq">130 &euro; <span>/ night</span></div>
                                        <a class="add-wishlist modal-ui-trigger" href="" data-trigger-for="wishlist">
                                            <i class="icon icon-add-wishlist"></i>
                                        </a>

                                        <a class="image-sq" href="property_page.html">
                    	                    <span class="image-wrapper">
                    	                        <span class="image-inner">
                    	                            <img src="new-assets/images/property/property_little_04.jpg" alt="" class="">
                    	                        </span>
                    	                    </span>
                                        </a>


                                        <div class="main-details">
                                            <div class="title-row">
                                                <a href="property_page.html" class="title-sq">Bright clean room close to Brixton</a>
                                                <a href="vendor_details.html" class="avatar-sq">
                                                    <img src="new-assets/images/avatar/avatar_04.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="icons-row">
                                                <div class="icons-column">
                                                    <i class="icon icon-heart"></i> 8.1
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-account-group-5"></i> x 2
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-door-simple"></i> x 2
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-bed-double"></i> x 2
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="twelve wide mobile four wide tablet four wide computer column">
                                <div class="property-item">
                                    <div class="property-item-inner">

                                        <div class="price-tag-sq">59 &euro; <span>/ night</span></div>
                                        <a class="add-wishlist modal-ui-trigger" href="" data-trigger-for="wishlist">
                                            <i class="icon icon-add-wishlist"></i>
                                        </a>

                                        <a class="image-sq" href="property_page.html">
                    	                    <span class="image-wrapper">
                    	                        <span class="image-inner">
                    	                            <img src="new-assets/images/property/property_little_05.jpg" alt="" class="">
                    	                        </span>
                    	                    </span>
                                        </a>

                                        <div class="main-details">

                                            <div class="title-row">
                                                <a href="property_page.html" class="title-sq">Romantic Suite in family home</a>
                                                <a href="vendor_details.html" class="avatar-sq">
                                                    <img src="new-assets/images/avatar/avatar_05.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="icons-row">
                                                <div class="icons-column">
                                                    <i class="icon icon-heart"></i> 7.5
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-account-group-5"></i> x 4
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-door-simple"></i> x 2
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-bed-double"></i> x 1
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="twelve wide mobile four wide tablet four wide computer column">
                                <div class="property-item">
                                    <div class="property-item-inner">

                                        <div class="price-tag-sq">32 &euro; <span>/ night</span></div>
                                        <a class="add-wishlist modal-ui-trigger" href="" data-trigger-for="wishlist">
                                            <i class="icon icon-add-wishlist"></i>
                                        </a>


                                        <a class="image-sq" href="property_page.html">
                    	                    <span class="image-wrapper">
                    	                        <span class="image-inner">
                    	                            <img src="new-assets/images/property/property_little_06.jpg" alt="" class="">
                    	                        </span>
                    	                    </span>
                                        </a>

                                        <div class="main-details">

                                            <div class="title-row">
                                                <a href="property_page.html" class="title-sq">Quit and bright room in the heart of Amsterdam</a>
                                                <a href="vendor_details.html" class="avatar-sq">
                                                    <img src="new-assets/images/avatar/avatar_06.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="icons-row">
                                                <div class="icons-column">
                                                    <i class="icon icon-heart"></i> 7.5
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-account-group-5"></i> x 7
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-door-simple"></i> x 2
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-bed-double"></i> x 2
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <a href="listing_page.html" class="more-trigger" data-more="Discover All">
                            <i class="icon icon-arrow-down-122"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="promo-section">

            <!-- content -->
            <div class="ui container grid centered">
                <div class="row">
                    <div class="ui twelve wide mobile ten wide tablet eight wide computer six wide large screen six wide widescreen column">
                        <div class="promo-content style-02">
                            <h2>Beautiful Experiences</h2>
                            <p>Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. </p>

                            <a href="listing_page.html" class="button-sq see-through-sq"> See Map </a>
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

        <div class="ui grid container">
            <div class="row">
                <div class="ui column">
                    <div class="typo-section-sq bottom-big">

                        <div class="typo-section-header-sq">
                            <h2 class="text-align-center-sq">Top Interest</h2>
                            <p class="text-align-center-sq">In hac habitasse platea dictumst. Integer quis tortor enim. Integer et elit nec magna ultricies convallis. <br> In venenatis eu erat et facilisis. Vestibulum congue enim nisl.</p>
                        </div>

                        <div class="magic-grid category-sq special-sq hover-scale">
                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" src="new-assets/images/magic_grid/magic_grid_category_special_01.png" alt="">

                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="article_listing.html" class="typo-sq">
                                        <p class="typo-title-sq">Wildlife</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" src="new-assets/images/magic_grid/magic_grid_category_special_02.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="article_listing.html" class="typo-sq">
                                        <p class="typo-title-sq">Adventure</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" src="new-assets/images/magic_grid/magic_grid_category_special_03.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="article_listing.html" class="typo-sq">
                                        <p class="typo-title-sq">Beaches</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" src="new-assets/images/magic_grid/magic_grid_category_special_04.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="article_listing.html" class="typo-sq">
                                        <p class="typo-title-sq">Monuments</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" src="new-assets/images/magic_grid/magic_grid_category_special_05.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="article_listing.html" class="typo-sq">
                                        <p class="typo-title-sq">Food</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" src="new-assets/images/magic_grid/magic_grid_category_special_06.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="article_listing.html" class="typo-sq">
                                        <p class="typo-title-sq">Party</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq" src="new-assets/images/magic_grid/magic_grid_category_special_07.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="article_listing.html" class="typo-sq">
                                        <p class="typo-title-sq">Museum</p>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="typo-section-sq bottom-big">
                        <div class="typo-section-header-sq">
                            <h2 class="text-align-center-sq">News</h2>
                            <p class="text-align-center-sq"> Nunc sit amet velit nibh. Proin consectetur, ante quis tristique mattis, massa massa condimentum enim.</p>
                        </div>


                        <div class="magic-grid article-sq hover-scale">

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <a class="image-sq" href="article.html">
                    	                <span class="image-wrapper">
                    	                    <span class="image-inner">
                    	                        <img class="image-sq" src="new-assets/images/magic_grid/magic_grid_article_01.jpg" alt="">
                    	                    </span>
                    	                </span>
                                    </a>

                                    <!-- typography container-->
                                    <div class="typo-sq">
                                        <p class="typo-label-sq" data-label-before="Travel" data-label-after="Book a home in"></p>
                                        <p class="typo-title-sq">Getting Cheap Airfare For Last Minute Travel</p>
                                        <p class="typo-desc-sq">The city of southern California, san diego is locally known as ‘America’s Finest City’. It’s located on San Diego Bay, an inlet of the Pacific Ocean near the Mexican border. San Diego is the second largest city in</p>

                                        <a href="article.html" class="read-more-sq">read more <i class="icon icon-arrow-right-122"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <a class="image-sq" href="article.html">
                    	                <span class="image-wrapper">
                    	                    <span class="image-inner">
                    	                        <img class="image-sq" src="new-assets/images/magic_grid/magic_grid_article_02.jpg" alt="">
                    	                    </span>
                    	                </span>
                                    </a>

                                    <!-- typography container-->
                                    <div class="typo-sq">
                                        <p class="typo-label-sq" data-label-before="Beauty" data-label-after="Book a home in"></p>
                                        <p class="typo-title-sq">10 Steps To Look Younger</p>
                                        <p class="typo-desc-sq">Lots of people are unaware of the fact that adult acne exists and they seem not to know how to treat adult acne. People have this misconception that acne only happens during teenage years and gradually wears off as they age. For most people, this fact may be true but it is important to note that acne does not start during teenage years only. However, it is important to note that there are a significant number of adults that experience such condition.</p>

                                        <a href="" class="read-more-sq">read more <i class="icon icon-arrow-right-122"></i></a>
                                    </div>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <a class="image-sq" href="article.html">
                    	                <span class="image-wrapper">
                    	                    <span class="image-inner">
                    	                        <img class="image-sq" src="new-assets/images/magic_grid/magic_grid_article_03.jpg" alt="">
                    	                    </span>
                    	                </span>
                                    </a>

                                    <!-- typography container-->
                                    <div class="typo-sq">
                                        <p class="typo-label-sq" data-label-before="Cooking" data-label-after="Book a home in"></p>
                                        <p class="typo-title-sq">The Benefits And Drawbacks Of Buying Designer Kitchenware Products</p>
                                        <p class="typo-desc-sq">When it is time to bake cookies, we usually think that it is complicated, that it takes a lot of time. In one word : that it is not worthwhile ! We will show you hereunder that it is simply not true. Baking cookies is easy, fast and, most important, fun. Come and join all our readers who decided to give it a try and now,</p>


                                        <a href="" class="read-more-sq">read more <i class="icon icon-arrow-right-122"></i></a>
                                    </div>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <a class="image-sq" href="article.html">
                    	                <span class="image-wrapper">
                    	                    <span class="image-inner">
                    	                        <img class="image-sq" src="new-assets/images/magic_grid/magic_grid_article_04.jpg" alt="">
                    	                    </span>
                    	                </span>
                                    </a>

                                    <!-- typography container-->
                                    <div class="typo-sq">

                                        <p class="typo-label-sq" data-label-before="Advertising" data-label-after="Book a home in"></p>
                                        <p class="typo-title-sq">Enhance Your Brand Potential With Giant Advertising Blimps</p>
                                        <p class="typo-desc-sq">It is a small world after all. Globalization is that great process that started perhaps with Mr. Marco Polo, but has since regained its prestige after a short stint of protectionism following the great depression</p>

                                        <a href="" class="read-more-sq">read more <i class="icon icon-arrow-right-122"></i></a>
                                    </div>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <a class="image-sq" href="article.html">
                    	                <span class="image-wrapper">
                    	                    <span class="image-inner">
                    	                        <img class="image-sq" src="new-assets/images/magic_grid/magic_grid_article_05.jpg" alt="">
                    	                    </span>
                    	                </span>
                                    </a>

                                    <!-- typography container-->
                                    <div class="typo-sq">
                                        <p class="typo-label-sq" data-label-before="Motivation" data-label-after="Book a home in"></p>
                                        <p class="typo-title-sq">Counting Your Chicken Before They Hatch</p>
                                        <p class="typo-desc-sq">Be more concerned with your character than with your reputation. Your character is what you really are while your reputation is merely what others think you are.</p>

                                        <a href="" class="read-more-sq">read more <i class="icon icon-arrow-right-122"></i></a>
                                    </div>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <a class="image-sq" href="article.html">
                    	                <span class="image-wrapper">
                    	                    <span class="image-inner">
                    	                        <img class="image-sq" src="new-assets/images/magic_grid/magic_grid_article_06.jpg" alt="">
                    	                    </span>
                    	                </span>
                                    </a>

                                    <!-- typography container-->
                                    <div class="typo-sq">
                                        <p class="typo-label-sq" data-label-before="Tech" data-label-after="Book a home in"></p>
                                        <p class="typo-title-sq">Download Anything Now A Days</p>
                                        <p class="typo-desc-sq">Do you want to download free song for ipod? If so, reading this article could save you from getting in to a lot of trouble! Downloading music to your Ipod has more than one pitfall associated with it, and this article will tell you the best way to download free song for Ipod.</p>

                                        <a href="" class="read-more-sq">read more <i class="icon icon-arrow-right-122"></i></a>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <a href="article_listing.html" class="more-trigger" data-more="View More">
                            <i class="icon icon-arrow-down-122"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <!--FOOTER-->
    <div id="footer">

        <div class="footer-top">

            <div class="ui grid container">
                <div class="row">
                    <div class="ui six wide tablet four wide computer column">
                        <h5>Hosting</h5>

                        <ul class="list-default-sq">
                            <li><a href="">Etiam consequat</a></li>
                            <li><a href="">Phasellus sed neque </a></li>
                            <li><a href="">Morbi suscipit convallis</a></li>
                            <li><a href="">Praesent diam</a></li>
                        </ul>

                    </div>
                    <div class="ui six wide tablet four wide computer column">
                        <h5>Useful Links</h5>

                        <ul class="list-default-sq">
                            <li><a href="">Aenean sit amet ipsum</a></li>
                            <li><a href="">Sed mollis</a></li>
                            <li><a href="">Aliquam porttitor</a></li>
                            <li><a href="">Nulla vitae</a></li>
                        </ul>
                    </div>
                    <div class="ui twelve wide tablet four wide computer column">
                        <h5>Title</h5>

                        <p><em>In hac habitasse platea dictumst. Integer quis tortor enim. Integer et elit nec magna ultricies convallis. In venenatis eu erat et facilisis. Vestibulum congue enim nisl. Fusce arcu enim, porta a auctor vel, hendrerit a libero. Vivamus vel dapibus sem.</em></p>
                    </div>
                </div>
            </div>


        </div>

        <div class="footer-bottom">
            <div class="ui grid container">
                <div class="row">
                    <div class="ui twelve wide mobile eight wide computer column">
                        <a href="" class="footer-logo">
                            <img src="new-assets/images/logo-mybnb-transparent.png" srcset="new-assets/images/logo-mybnb-transparent.png 1x, new-assets/images/logo-mybnb-transparent@2x.png 2x" alt="mybnb logo" >
                            © SeventhQueen 2018                   </a>
                    </div>
                    <div class="ui twelve wide mobile four wide computer column">
                        <ul class="social-links-sq list-style-inline-sq list-default-sq">
                            <li><a href="" class="fb"><i class="icon icon-logo-facebook2"></i></a></li>

                            <li><a href="" class="tw"><i class="icon icon-logo-twitter-bird2"></i></a></li>

                            <li><a href="" class="gp"><i class="icon icon-logo-circle-google-plus-22"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
