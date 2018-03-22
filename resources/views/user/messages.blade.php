@extends('user.layouts.user')

@section('user_content')
    <div class="typo-header-sq">
        <div class="ui grid">
            <div class="row">
                <div class="ui twelve wide computer column">
                    <h2>{{ __('Wiadomości') }} <sup>6</sup></h2>

                    <ul class="inline-menu-sq list-default-sq list-style-inline-sq">
                        <li class="active">
                            <a href="messages.html">Inbox</a>
                        </li>
                        <li class="">
                            <a href="messages_favorites.html">Favorites</a>
                        </li>
                        <li class="">
                            <a href="#">Unread</a>
                        </li>
                        <li class="">
                            <a href="#">Archive</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="ui grid">
        <div class="row">

            <div class="ui twelve wide tablet twelve wide computer twelve wide widescreen twelve wide large screen column">

                <!-- Message -->
                <div class="message-sq in-pending-sq">

                    <div class="ui grid">
                        <div class="ui twelve wide mobile eight wide tablet eight wide computer eight wide widescreen eight wide large screen column">

                            <a class="avatar-sq verified-sq" href="message_inner.html">
                                <img src="{{ asset('new-assets/images/avatar/avatar_01.jpg') }}" alt="">
                            </a>

                            <a class="message-content-sq" href="message_inner.html">
                                <h3 class="message-title-sq">Danny Martinez</h3>
                                <span class="message-date-sq">30 Apr 2017</span>

                                <p class="message-body-sq">
                                    Whether you enjoy city breaks or extended holidays in the sun, you can always improve your travel experiences by staying in a small, charming hotel, where the atmosphere is welcoming and friendly and the service is fabulous.
                                </p>

                            </a>

                        </div>


                        <div class="ui twelve wide mobile four wide tablet four wide computer for wide widescreen four wide large screen column">

                            <div class="message-status-sq">
                                In pending
                            </div>

                            <div class="message-related-sq">
                                <span>related to: </span>
                                <a href="">Become A Travel Pro In One Easy Lesson</a>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Message -->
                <div class="message-sq completed-sq favorite-sq">

                    <div class="ui grid">
                        <div class="ui twelve wide mobile eight wide tablet eight wide computer eight wide widescreen eight wide large screen column">

                            <a class="avatar-sq verified-sq" href="message_inner.html">
                                <img src="{{ asset('new-assets/images/avatar/avatar_03.jpg') }}" alt="">
                            </a>

                            <a class="message-content-sq" href="message_inner.html">
                                <h3 class="message-title-sq">Nathaniel Brown</h3>
                                <span class="message-date-sq">02 Apr 2017</span>

                                <p class="message-body-sq">
                                    With your budget in mind, it is easy to plan a chartered yacht vacation. Companies often have a fleet of sailing vessels that can accommodate parties of various sizes. You may want to make it a more intimate trip with only close family. There are charters that can be rented for as few as two people.
                                </p>

                            </a>

                        </div>


                        <div class="ui twelve wide mobile four wide tablet four wide computer for wide widescreen four wide large screen column">

                            <div class="message-status-sq">
                                Completed
                            </div>

                            <div class="message-related-sq">
                                <span>related to: </span>
                                <a href="">Get Around Easily With A New York Limousine Service</a>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Message -->
                <div class="message-sq declined-sq">

                    <div class="ui grid">
                        <div class="ui twelve wide mobile eight wide tablet eight wide computer eight wide widescreen eight wide large screen column">

                            <a class="avatar-sq verified-sq" href="message_inner.html">
                                <img src="{{ asset('new-assets/images/avatar/avatar_02.jpg') }}" alt="">
                            </a>

                            <a class="message-content-sq" href="message_inner.html">
                                <h3 class="message-title-sq">Adele Burke</h3>
                                <span class="message-date-sq">26 Mar 2017</span>

                                <p class="message-body-sq">
                                    Even the ancient Mayan sites of Tulum and Coba are open and looking better than ever. In an effort to repair the beaches, engineers have been working around the clock building the equivalent of two American football fields of beach a day by collecting the displaced sand, from 22 miles off shore, onto two ships and re-depositing it back in it’s original location.

                                </p>

                            </a>

                        </div>


                        <div class="ui twelve wide mobile four wide tablet four wide computer for wide widescreen four wide large screen column">

                            <div class="message-status-sq">
                                Declined
                            </div>

                            <div class="message-related-sq">
                                <span>related to: </span>
                                <a href="">A Guide To Rocky Mountain Vacations</a>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Message -->
                <div class="message-sq completed-sq favorite-sq">

                    <div class="ui grid">
                        <div class="ui twelve wide mobile eight wide tablet eight wide computer eight wide widescreen eight wide large screen column">

                            <a class="avatar-sq verified-sq" href="message_inner.html">
                                <img src="{{ asset('new-assets/images/avatar/avatar_04.jpg') }}" alt="">
                            </a>

                            <a class="message-content-sq" href="message_inner.html">
                                <h3 class="message-title-sq">Charlotte Wagner</h3>
                                <span class="message-date-sq">05 Feb 2017</span>

                                <p class="message-body-sq">
                                    A round-the-world trip remains the world’s greatest journey. For two out of every three people, this is the ultimate travel experience, according to recent research. Needless to say, in a world obsessed by travel, travelers and travel agents are both looking for the cheapest tickets and airfares available.
                                </p>

                            </a>

                        </div>


                        <div class="ui twelve wide mobile four wide tablet four wide computer for wide widescreen four wide large screen column">

                            <div class="message-status-sq">
                                Completed
                            </div>

                            <div class="message-related-sq">
                                <span>related to: </span>
                                <a href="">Do A Sporting Stag Do In Birmingham</a>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Message -->
                <div class="message-sq completed-sq favorite-sq">

                    <div class="ui grid">
                        <div class="ui twelve wide mobile eight wide tablet eight wide computer eight wide widescreen eight wide large screen column">

                            <a class="avatar-sq verified-sq" href="message_inner.html">
                                <img src="{{ asset('new-assets/images/avatar/avatar_05.jpg') }}" alt="">
                            </a>

                            <a class="message-content-sq" href="message_inner.html">
                                <h3 class="message-title-sq">Dale Houston</h3>
                                <span class="message-date-sq">22 Jan 2017</span>

                                <p class="message-body-sq">
                                    People are wanting to fly to international destinations for vacations but planning a holiday getaway can easily turn into a stressful venture when the matter of costs comes up. However, airfare can be very expensive. Air fare by itself can kill the excitement. And when people already factor in accommodations, food, and shopping, or any other would just give up and stay home.If you think on taking a vacation that requires an
                                </p>

                            </a>

                        </div>


                        <div class="ui twelve wide mobile four wide tablet four wide computer for wide widescreen four wide large screen column">

                            <div class="message-status-sq">
                                Completed
                            </div>

                            <div class="message-related-sq">
                                <span>related to: </span>
                                <a href="">Les Houches The Hidden Gem Of The Chamonix Valley</a>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Message -->
                <div class="message-sq completed-sq">

                    <div class="ui grid">
                        <div class="ui twelve wide mobile eight wide tablet eight wide computer eight wide widescreen eight wide large screen column">

                            <a class="avatar-sq verified-sq" href="message_inner.html">
                                <img src="{{ asset('new-assets/images/avatar/avatar_07.jpg') }}" alt="">
                            </a>

                            <a class="message-content-sq" href="message_inner.html">
                                <h3 class="message-title-sq">Clyde Hansen</h3>
                                <span class="message-date-sq">07 Jan 2017</span>

                                <p class="message-body-sq">
                                    At Hilton Head Rentals we recommend the following. Use the services of a travel professional, especially if you will be vacationing during hurricane season. When buying vacation
                                </p>

                            </a>

                        </div>


                        <div class="ui twelve wide mobile four wide tablet four wide computer for wide widescreen four wide large screen column">

                            <div class="message-status-sq">
                                Completed
                            </div>

                            <div class="message-related-sq">
                                <span>related to: </span>
                                <a href="">New Ideas For A Low Cost Vacation On Water</a>
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