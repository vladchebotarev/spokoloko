<!--

Default Header with a White Background & Dark text.

-->

<!--DEFAULT HEADER-->

<header class="header-section ths header-shadow header-sticky header-slide-up equal-tablet-header-items equal-mobile-header-items
@if(Route::current()->getName() == 'index')
        header-transparent is-transparent
@endif ">
    <div class="header-content">

        <div class="ui container grid">
            <div class="header-item header-left flex-order-tablet-second flex-order-mobile-second flex-grow-tablet-true flex-grow-mobile-true">

                <a href="{{ url('/') }}" class="logo item">
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


                        @guest

                        <li><a href="{{ url('/') }}" class="item">
                                <span>Blog</span>
                            </a>
                        </li>

                        <li><a href="{{ url('/b2b') }}" class="item">
                                <span>Zostań gospodarzem</span>
                            </a>
                        </li>

                        <li><a href="#" class="item modal-ui-trigger" data-trigger-for="modal01">
                                <span>Zarejestruj się</span>
                            </a>
                        </li>

                        <li><a href="#" class="item modal-ui-trigger" data-trigger-for="modal02">
                                <span>Zaloguj się</span>
                            </a>
                        </li>
                        @else
                            <li><a href="messages.html" class="item">
                                    <span>Messages</span>
                                </a>
                            </li>
                            <li class="has-submenu">
                                <a href="" class="item">Vendor</a>
                                <ul class="submenu">
                                    <li><a href="my_listings.html" class="item"><span>My Listings</span></a></li>
                                    <li>
                                        <div class="item">
                                            <a href="add_listing.html" class="button-sq small-sq fullwidth-sq"><i class="icon icon-add-1"></i><span>Add New Listing</span></a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="profile-item has-submenu">
                                <a href="#" class="item">
                                    <span>{{ Auth::user()->name }}</span>
                                    <img src="new-assets/images/avatar/my_avatar.jpg" alt="">
                                </a>
                                <ul class="submenu">
                                    <li><a href="my_profile.html" class="item"><span>Mój profil</span></a></li>
                                    <li><a href="my_settings.html" class="item"><span>Ustawienia</span></a></li>
                                    <li>
                                        <hr>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}" class="item"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <span>Wyloguj się</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest

                    </ul>
                </div>

                <!-- End of Header Menu-->


            </div>
        </div>

    </div>
</header>