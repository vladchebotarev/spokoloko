<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <!-- Standard Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SeventhQueen" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href={{ asset('new-assets/less/base.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('new-assets/less/header.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('new-assets/less/theme.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('new-assets/icon/style.css') }}>
    <link rel="icon" href={{ asset('new-assets/images/ico/favicon.ico') }}>

    <script src={{ asset('new-assets/library/modernizr-custom.js') }}></script>

    <title>Homepage</title>

</head>
<body class="no-transition">
<div id="page-wrapper">


    <!--

Default Header with a White Background & Dark text.

-->

    <!--DEFAULT HEADER-->

    <header class="header-section ths header-shadow header-sticky header-slide-up equal-tablet-header-items equal-mobile-header-items header-transparent is-transparent">
        <div class="header-content">

            <div class="ui container grid">
                <div class="header-item header-left flex-order-tablet-second flex-order-mobile-second flex-grow-tablet-true flex-grow-mobile-true">

                    <a href="homepage.html" class="logo item">
                        <img src="new-assets/images/logo-mybnb-transparent.png" srcset="new-assets/images/logo-mybnb-transparent.png 1x, new-assets/images/logo-mybnb-transparent@2x.png 2x" alt="mybnb logo" class="logo-transparent">

                        <img src="new-assets/images/logo-mybnb.png" srcset="new-assets/images/logo-mybnb.png 1x, new-assets/images/logo-mybnb@2x.png 2x" alt="mybnb logo">
                    </a>


                </div>

                <div class="header-item header-center flex-align-left flex-order-tablet-first flex-order-mobile-first flex-grow-large-desktop-true flex-grow-desktop-true flex-grow-tablet-false flex-grow-mobile-false">

                </div>

                <div class="header-item header-right flex-order-tablet-third flex-order-mobile-third flex-shrink-true flex-align-right">

                    <!-- Sidemenu Trigger -->
                    <a class="sidemenu-trigger close-sq hamburger hamburger-spin item hidden-desktop hidden-large-desktop" data-trigger-for="menu01">

                    <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                    </span>
                    </a>

                    <!-- Include Menu -->

                    <!-- Header Menu-->

                    <div class="item menu-default burger-mobile-sidemenu burger-tablet-sidemenu sidemenu-open-right icons-left profile-priority slide-out-sq dimmed flexMenu dropdown-open-right" data-burger="menu01">

                        <ul class="main-menu">

                            <li><a href="become_a_vendor.html" class="item">
                                    <span>Become a Vendor</span>
                                </a>
                            </li>

                            <li class="has-submenu">
                                <a href="#" class="item">
                                    <span>Features</span>
                                </a>
                                <ul class="submenu">
                                    <li><a href="../features/fts_default_grid.html" class="item"><span>Default Grid</span></a></li>
                                    <li><a href="../features/fts_divided_container.html" class="item"><span>Divided Container</span></a></li>
                                    <li><a href="../features/fts_magic_grid.html" class="item"><span>Magic Grid</span></a></li>
                                    <li>
                                        <hr>
                                    </li>
                                    <li><a href="../features/fts_header.html" class="item"><span>Header</span></a></li>
                                    <li><a href="../features/fts_menu.html" class="item"><span>Menu Default</span></a></li>
                                    <li><a href="../features/fts_dashboard_menu.html" class="item"><span>Dashboard Menu</span></a></li>
                                    <li><a href="../features/fts_logo.html" class="item"><span>Logo</span></a></li>
                                    <li><a href="../features/fts_buttons.html" class="item"><span>Buttons</span></a></li>
                                    <li><a href="../features/fts_icons.html" class="item"><span>Icons</span></a></li>
                                    <li><a href="../features/fts_form_elements.html" class="item"><span>Form Elements</span></a></li>
                                    <li><a href="../features/fts_floating_placeholder.html" class="item"><span>Floating Placeholder</span></a></li>
                                    <li><a href="../features/fts_sticky_element.html" class="item"><span>Sticky Element</span></a></li>
                                    <li><a href="../features/fts_property_items.html" class="item"><span>Property Items</span></a></li>
                                    <li><a href="../features/fts_articles.html" class="item"><span>Articles</span></a></li>
                                    <li><a href="../features/fts_promo_section.html" class="item"><span>Promo Sections</span></a></li>
                                    <li><a href="../features/fts_modals.html" class="item"><span>Modals</span></a></li>
                                    <li><a href="../features/fts_accordion.html" class="item"><span>Accordion</span></a></li>
                                    <li><a href="../features/fts_hero_search_horizontal.html" class="item"><span>Hero Search Horizontal</span></a></li>
                                    <li><a href="../features/fts_hero_search_vertical.html" class="item"><span>Hero Search Vertical</span></a></li>
                                    <li><a href="../features/fts_slick_carousel.html" class="item"><span>Slick Carousel</span></a></li>
                                    <li><a href="../features/fts_slick_hero_big.html" class="item"><span>Slick Hero Big</span></a></li>
                                    <li><a href="../features/fts_slick_full_page_search.html" class="item"><span>Slick Full Page Search</span></a></li>
                                    <li><a href="../features/fts_charts.html" class="item"><span>Charts</span></a></li>
                                    <li><a href="../features/fts_progressbar.html" class="item"><span>Progressbar</span></a></li>
                                    <li><a href="../features/fts_hamburger_icon.html" class="item"><span>Hamburger Icon</span></a></li>
                                    <li><a href="../features/fts_calendar.html" class="item"><span>Calendar</span></a></li>
                                    <li><a href="../features/fts_price_range_slider.html" class="item"><span>Price Range Slider</span></a></li>
                                    <li>
                                        <hr>
                                    </li>
                                    <li><a href="../features/fts_typography.html" class="item"><span>Typography</span></a></li>
                                    <li><a href="../features/fts_code.html" class="item"><span>Code</span></a></li>
                                    <li><a href="../features/fts_image.html" class="item"><span>Image</span></a></li>
                                    <li><a href="../features/fts_image_gallery.html" class="item"><span>Image Gallery</span></a></li>
                                    <li><a href="../features/fts_table.html" class="item"><span>Table</span></a></li>

                                </ul>
                            </li>

                            <li><a href="#" class="item modal-ui-trigger" data-trigger-for="modal01">
                                    <span>Sign Up</span>
                                </a>
                            </li>

                            <li><a href="#" class="item modal-ui-trigger" data-trigger-for="modal02">
                                    <span>Log In</span>
                                </a>
                            </li>

                        </ul>
                    </div>

                    <!-- End of Header Menu-->


                </div>
            </div>

        </div>
    </header>

    @yield('content')

<!-- Modals -->

    <!-- Sign Up -->
    <div class="ui full modal" data-for="modal01">
        <div class="modal-full-background">
            <img src="new-assets/images/modal/modal_background_001.jpg" alt="">
        </div>

        <i class="icon icon-close close-modal"></i>

        <div class="header center">
            Sign Up Now
        </div>

        <div class="content">
            <a href="" class="button-sq fullwidth-sq modal-ui-trigger" data-trigger-for="modal03">
                <i class="icon icon-email-2"></i>
                <span>Sign Up with Email</span>
            </a>

            <a href="" class="button-sq fullwidth-sq facebook-button">
                <i class="icon icon-logo-facebook2"></i>
                <span>Sign Up with Facebook</span>
            </a>

            <a href="" class="button-sq fullwidth-sq google-button">
                <img src="new-assets/images/icon-google-plus.svg" alt="">
                <span>Sign Up with Google</span>
            </a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur faucibus magna vel ex semper, in pharetra justo pulvinar. </p>
        </div>

        <div class="actions">
            <div class="border-container">
                <div class="button-sq link-sq modal-ui-trigger" data-trigger-for="modal02">Already a member?</div>

                <div class="button-sq link-sq login-sq modal-ui-trigger" data-trigger-for="modal02">
                    Log In
                    <i class="icon icon-person-lock-2"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Log In -->
    <div class="ui full modal" data-for="modal02">
        <div class="modal-full-background">
            <img src="new-assets/images/modal/modal_background_001.jpg" alt="">
        </div>

        <i class="icon icon-close close-modal"></i>

        <div class="header center">
            Log In
        </div>

        <div class="content">
            <div class="div-c">
                <div class="divided-column">
                    <input type="text" placeholder="E-mail Adress">
                </div>
                <div class="divided-column">
                    <input type="text" placeholder="Password">
                </div>
            </div>

            <div class="button-sq fullwidth-sq">Sign Up</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur faucibus magna vel ex semper, in pharetra justo pulvinar. </p>
        </div>

        <div class="actions">
            <div class="border-container">
                <div class="button-sq link-sq modal-ui-trigger" data-trigger-for="modal01">Don’t have an account?</div>

                <div class="button-sq link-sq login-sq modal-ui-trigger" data-trigger-for="modal01">
                    Sign Up
                    <i class="icon icon-person-add-1"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Sign Up with mail -->
    <div class="ui full modal" data-for="modal03">
        <div class="modal-full-background">
            <img src="new-assets/images/modal/modal_background_001.jpg" alt="">
        </div>

        <i class="icon icon-close close-modal"></i>

        <div class="header center">
            Sign Up Now
        </div>

        <div class="content">

            <div class="div-c inline-2">
                <div class="divided-column">
                    <input type="text" placeholder="First Name">
                </div>
                <div class="divided-column">
                    <input type="text" placeholder="Last Name">
                </div>
            </div>

            <div class="div-c">
                <div class="divided-column">
                    <input type="text" placeholder="E-mail Adress">
                </div>
                <div class="divided-column">
                    <input type="text" placeholder="Password">
                </div>
            </div>

            <div class="div-c inline-3 one-label">
                <label>Birthday</label>
                <div class="divided-column">
                    <select name="dropdown"  class="dropdown">
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">...</option>
                    </select>
                </div>
                <div class="divided-column">
                    <select name="dropdown"  class="dropdown">
                        <option value="1">Jan</option>
                        <option value="2">Feb</option>
                        <option value="3">Mar</option>
                        <option value="4">Apr</option>
                        <option value="5">May</option>
                        <option value="6">...</option>
                    </select>
                </div>
                <div class="divided-column">
                    <select name="dropdown"  class="dropdown">
                        <option value="1">1985</option>
                        <option value="2">1986</option>
                        <option value="3">1987</option>
                        <option value="4">1988</option>
                        <option value="5">1989</option>
                        <option value="6">...</option>
                    </select>
                </div>
            </div>

            <div class="button-sq fullwidth-sq">Sign Up</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur faucibus magna vel ex semper, in pharetra justo pulvinar. </p>

        </div>

        <div class="actions">
            <div class="border-container">
                <div class="button-sq link-sq"></div>

                <div class="button-sq link-sq login-sq modal-ui-trigger" data-trigger-for="modal01">
                    Log In
                    <i class="icon icon-person-lock-2"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Wishlist -->
    <div class="ui modal small" data-for="wishlist">
        <i class="icon icon-close close-modal"></i>

        <div class="header center">
            <h4>Wishlist</h4>
        </div>

        <div class="content">
            <p>Mauris malesuada leo libero, vitae tempor ante sagittis vitae. Suspendisse consectetur facilisis enim.</p>
            <br>
            <input type="checkbox" id="c01">
            <label for="c01">Beautiful Places</label>
            <input type="checkbox" id="c02">
            <label for="c02">For Summer</label>
            <input type="checkbox" id="c03">
            <label for="c03">Dream Houses</label>
        </div>

        <div class="actions">
            <div class="div-c inline-2">
                <div class="divided-column">
                    <div class="button-sq cancel-sq fullwidth-sq">Cancel</div>
                </div>

                <div class="divided-column">
                    <div class="button-sq fullwidth-sq">OK</div>
                </div>
            </div>
        </div>

    </div>
</div><!--end #page-wrapper-->
<script src={{ asset('new-assets/library/jquery-2.2.0.min.js') }}></script>
<script src={{ asset('new-assets/library/flexmenu.js') }}></script>
<script src={{ asset('new-assets/library/nouislider.min.js') }}></script>

<script src={{ asset('new-assets/library/wNumb.js') }}></script>

<script src={{ asset('new-assets/library/jrespond.min.js') }}></script>
<script src={{ asset('new-assets/library/scrollspy.min.js') }}></script>

<script src={{ asset('new-assets/library/visibility.js') }}></script>

<script src={{ asset('new-assets/library/accordion.js') }}></script>
<script src={{ asset('new-assets/library/dropdown-custom.js') }}></script>
<script src={{ asset('new-assets/library/sticky.js') }}></script>

<script src={{ asset('new-assets/library/page-transition.js') }}></script>
<script src={{ asset('new-assets/library/checkbox.js') }}></script>
<script src={{ asset('new-assets/library/transition.js') }}></script>
<script src={{ asset('new-assets/library/sidebar.js') }}></script>

<script src={{ asset('new-assets/library/modal.js') }}></script>
<script src={{ asset('new-assets/library/dimmer.js') }}></script>

<!-- Datepicker -->
<script src={{ asset('new-assets/library/popup.js') }}></script>
<script src={{ asset('new-assets/library/calendar.js') }}></script>

<!-- Slick -->
<script src={{ asset('new-assets/library/slick.js') }}></script>

<script src={{ asset('new-assets/library/header.js') }}></script>
<script src={{ asset('new-assets/library/functions.js') }}></script>

</body>

</html>
