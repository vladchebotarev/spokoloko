<div class="ui twelve wide tablet three wide computer three wide widescreen three wide large screen column">
    <div class="sticky-element sticky-desktop sticky-large-desktop under-ths">

        <div class="dashboard-sticky">
            <div class="dashboard-sticky-inner">

                <div class="dashboard-menu has-submenu">
                    <a href="#" class="item">
                        <i class="icon icon-side-sticky-menu"></i>
                    </a>
                    <ul class="submenu">
                        <li class="@if(Route::current()->getName() == 'profile') active @endif"><a class="item"
                                                                                                   href="{{ url('user/profile') }}">{{ __('Mój Profil') }}</a>
                        </li>
                        <li class="@if(Route::current()->getName() == 'listings') active @endif"><a class="item"
                                                                                                    href="{{ url('user/listings') }}">{{ __('Mój Biznes') }}</a>
                        </li>
                        <li class="@if(Route::current()->getName() == 'settings') active @endif"><a class="item"
                                                                                                    href="{{ url('user/settings') }}">{{ __('Ustawienia') }}</a>
                        </li>
                        <li class="@if(Route::current()->getName() == 'messages-inbox'
                        or Route::current()->getName() == 'message-inbox'
                        or Route::current()->getName() == 'messages-sent'
                        or Route::current()->getName() == 'message-sent') active @endif"><a class="item"
                                                                                             href="{{ url('user/messages-inbox') }}">{{ __('Wiadomości') }}</a>
                        </li>
                        <li class="@if(Route::current()->getName() == 'wishlist') active @endif"><a class="item"
                                                                                                    href="{{ url('user/wishlist') }}">{{ __('Ulubione') }}</a>
                        </li>
                        {{--<li class="@if(Route::current()->getName() == '') active @endif"><a class="item" href="orders.html">Trips</a></li>
                        <li class="@if(Route::current()->getName() == '') active @endif"><a class="item" href="coupons.html">Coupons</a></li>
                        <li class="@if(Route::current()->getName() == '') active @endif"><a class="item" href="charts.html">Reports</a></li>
                        <li class="@if(Route::current()->getName() == '') active @endif"><a class="item" href="reviews.html">Reviews</a></li>--}}

                    </ul>
                </div>

            </div>

        </div>
    </div>

</div>
