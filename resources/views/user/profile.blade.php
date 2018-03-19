@extends('layouts.app')

@section('content')
    <div class="ui layout">

        <!-- grid -->
        <div class="ui grid container">

            <div class="row">

                <div class="ui twelve wide tablet three wide computer three wide widescreen three wide large screen column">

                    <div class="sticky-element sticky-desktop sticky-large-desktop under-ths">

                        <div class="dashboard-sticky">
                            <div class="dashboard-sticky-inner">

                                <div class="dashboard-menu has-submenu">
                                    <a href="#" class="item">
                                        <i class="icon icon-side-sticky-menu"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li class="active"><a class="item" href="my_profile.html">My Profile</a></li>
                                        <li class=""><a class="item" href="my_listings.html">My Listings</a></li>
                                        <li class=""><a class="item" href="my_settings.html">My Settings</a></li>
                                        <li class=""><a class="item" href="messages.html">Messages</a></li>
                                        <li class=""><a class="item" href="orders.html">Trips</a></li>
                                        <li class=""><a class="item" href="coupons.html">Coupons</a></li>
                                        <li class=""><a class="item" href="charts.html">Reports</a></li>
                                        <li class=""><a class="item" href="reviews.html">Reviews</a></li>

                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="ui twelve wide tablet nine wide computer nine wide widescreen nine wide large screen column">

                    <div class="typo-header-sq">
                        <div class="ui grid">
                            <div class="row">
                                <div class="ui twelve wide computer column">
                                    <h2>My Profile</h2>
                                </div>

                                <div class="ui twelve wide tablet eight wide computer eight wide widescreen eight wide large screen column">
                                    <ul class="inline-menu-sq list-default-sq list-style-inline-sq">
                                        <li class="active">
                                            <a href="">Edit Profile</a>
                                        </li>
                                        <li class="">
                                            <a href="">Verification</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="ui twelve wide tablet four wide computer four wide widescreen four wide large screen column">
                                    <p><strong>85%</strong> Profile Complete</p>
                                    <div class="basic-progressbar dashboard-progressbar-sq without-percentage-sq">
                                        <div class="inner" data-percentage="85%" style="width:58%"></div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="ui grid">
                        <div class="row">

                            <div class="ui twelve wide tablet six wide computer six wide widescreen six wide large screen column">
                                <div class="my-profile-avatar-container">
                                    <a class="avatar-sq extreme-avatar-sq verified-sq upload-sq" href="#">
                                        <img src="assets/images/avatar/default_avatar.jpg" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="ui twelve wide tablet six wide computer six wide widescreen six wide large screen column">

                                <div class="div-c">
                                    <div class="divided-column">
                                        <label>First Name</label>
                                        <input type="text" placeholder="" value="Emma">
                                    </div>

                                    <div class="divided-column">
                                        <label>Last Name</label>
                                        <input type="text" placeholder="" value="Cruz">
                                    </div>

                                    <div class="divided-column">
                                        <label>Vendor Name</label>
                                        <input type="text" placeholder="" value="Emma">
                                    </div>
                                </div>

                                <br>
                            </div>

                            <div class="ui twelve wide tablet twelve wide computer twelve wide widescreen twelve wide large screen column">
                                <hr class="margin-null-sq">
                                <br>
                            </div>

                            <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">
                                <div class="div-c">
                                    <div class="divided-column">
                                        <label>Location</label>
                                        <input type="text" placeholder="" value="Bucharest, Romania">
                                    </div>
                                </div>
                            </div>

                            <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">
                                <div class="div-c">
                                    <div class="divided-column">
                                        <label>Phone</label>
                                        <input type="text" placeholder="" value="07*****721">
                                    </div>
                                </div>
                            </div>

                            <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">
                                <div class="div-c inline-3 one-label">
                                    <label>Birthday</label>
                                    <div class="divided-column">
                                        <select class="dropdown">
                                            <option value="0">01</option>
                                            <option value="1">02</option>
                                            <option value="2">03</option>
                                            <option value="3">04</option>
                                            <option value="4">05</option>
                                            <option value="5">06</option>
                                            <option value="6">07</option>
                                            <option value="7">08</option>
                                            <option value="8">09</option>
                                            <option value="9">10</option>
                                            <option value="11">...</option>
                                            <option value="12">31</option>
                                        </select>
                                    </div>

                                    <div class="divided-column">
                                        <select class="dropdown">
                                            <option value="0">Jan</option>
                                            <option value="1">Feb</option>
                                            <option value="2">Mar</option>
                                            <option value="3">Apr</option>
                                            <option value="4">May</option>
                                            <option value="5">Jun</option>
                                            <option value="6">July</option>
                                            <option value="7">Aug</option>
                                            <option value="8">Sep</option>
                                            <option value="9">Oct</option>
                                            <option value="10">Nov</option>
                                            <option value="11">Dec</option>
                                        </select>
                                    </div>

                                    <div class="divided-column">
                                        <select class="dropdown">
                                            <option value="0">2001</option>
                                            <option value="1">2002</option>
                                            <option value="2">2003</option>
                                            <option value="3">2004</option>
                                            <option value="4">2005</option>
                                            <option value="5">2006</option>
                                            <option value="6">2007</option>
                                            <option value="7">2008</option>
                                            <option value="8">2009</option>
                                            <option value="9">2010</option>
                                            <option value="11">...</option>
                                            <option value="12">2031</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">
                                <div class="div-c">
                                    <div class="divided-column">
                                        <label>Gender</label>
                                        <select name="dropdown" class="dropdown">
                                            <option value="0">Male</option>
                                            <option value="1">Female</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="ui twelve wide tablet twelve wide computer twelve wide widescreen twelve wide large screen column">
                                <div class="div-c">
                                    <div class="divided-column">
                                        <label>Description</label>
                                        <textarea cols="30" rows="5" placeholder="Be clear and descriptive">How wonderful it is that nobody need wait a single moment before starting to improve the world. – Anne Frank</textarea>
                                    </div>

                                </div>
                            </div>

                            <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">
                                <div class="div-c">
                                    <div class="divided-column">
                                        <label>Main Language</label>
                                        <select data-placeholder="Choose a Language..." class="dropdown">
                                            <option value="AF">Afrikanns</option>
                                            <option value="SQ">Albanian</option>
                                            <option value="AR">Arabic</option>
                                            <option value="HY">Armenian</option>
                                            <option value="EU">Basque</option>
                                            <option value="BN">Bengali</option>
                                            <option value="BG">Bulgarian</option>
                                            <option value="CA">Catalan</option>
                                            <option value="KM">Cambodian</option>
                                            <option value="ZH">Chinese (Mandarin)</option>
                                            <option value="HR">Croation</option>
                                            <option value="CS">Czech</option>
                                            <option value="DA">Danish</option>
                                            <option value="NL">Dutch</option>
                                            <option value="EN">English</option>
                                            <option value="ET">Estonian</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finnish</option>
                                            <option value="FR">French</option>
                                            <option value="KA">Georgian</option>
                                            <option value="DE">German</option>
                                            <option value="EL">Greek</option>
                                            <option value="GU">Gujarati</option>
                                            <option value="HE">Hebrew</option>
                                            <option value="HI">Hindi</option>
                                            <option value="HU">Hungarian</option>
                                            <option value="IS">Icelandic</option>
                                            <option value="ID">Indonesian</option>
                                            <option value="GA">Irish</option>
                                            <option value="IT">Italian</option>
                                            <option value="JA">Japanese</option>
                                            <option value="JW">Javanese</option>
                                            <option value="KO">Korean</option>
                                            <option value="LA">Latin</option>
                                            <option value="LV">Latvian</option>
                                            <option value="LT">Lithuanian</option>
                                            <option value="MK">Macedonian</option>
                                            <option value="MS">Malay</option>
                                            <option value="ML">Malayalam</option>
                                            <option value="MT">Maltese</option>
                                            <option value="MI">Maori</option>
                                            <option value="MR">Marathi</option>
                                            <option value="MN">Mongolian</option>
                                            <option value="NE">Nepali</option>
                                            <option value="NO">Norwegian</option>
                                            <option value="FA">Persian</option>
                                            <option value="PL">Polish</option>
                                            <option value="PT">Portuguese</option>
                                            <option value="PA">Punjabi</option>
                                            <option value="QU">Quechua</option>
                                            <option value="RO">Romanian</option>
                                            <option value="RU">Russian</option>
                                            <option value="SM">Samoan</option>
                                            <option value="SR">Serbian</option>
                                            <option value="SK">Slovak</option>
                                            <option value="SL">Slovenian</option>
                                            <option value="ES">Spanish</option>
                                            <option value="SW">Swahili</option>
                                            <option value="SV">Swedish</option>
                                            <option value="TA">Tamil</option>
                                            <option value="TT">Tatar</option>
                                            <option value="TE">Telugu</option>
                                            <option value="TH">Thai</option>
                                            <option value="BO">Tibetan</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TR">Turkish</option>
                                            <option value="UK">Ukranian</option>
                                            <option value="UR">Urdu</option>
                                            <option value="UZ">Uzbek</option>
                                            <option value="VI">Vietnamese</option>
                                            <option value="CY">Welsh</option>
                                            <option value="XH">Xhosa</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">
                                <div class="div-c">
                                    <div class="divided-column">
                                        <label>Preferred Currency</label>
                                        <select class="dropdown">
                                            <option value="0">USD</option>
                                            <option value="1">EUR</option>
                                            <option value="2">GBP</option>
                                            <option value="2">RON</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="ui twelve wide tablet twelve wide computer twelve wide widescreen twelve wide large screen column">
                                <br>
                                <hr>
                                <br>
                            </div>

                            <div class="ui twelve wide tablet twelve wide computer twelve wide widescreen twelve wide large screen column">
                                <strong>Optional</strong>
                                <br>
                                <br>

                                <div class="div-c">
                                    <div class="divided-column">
                                        <label>Studies</label>
                                        <input type="text" placeholder="" value="Enter your studies">
                                    </div>
                                </div>

                                <div class="div-c">
                                    <div class="divided-column">
                                        <label>Work</label>
                                        <input type="text" placeholder="" value="Where do you work?">
                                    </div>
                                </div>

                                <label>Languages</label>
                                <div class="ui accordion multiple-selection">
                                    <div class="title">
                                        <div class="selected-items">
                                            <span>Tagalog
                                            <i class="icon icon-close"></i></span>
                                            <span>Gujarati
                                            <i class="icon icon-close"></i></span>
                                            <span>Maltese
                                            <i class="icon icon-close"></i></span>

                                            <a class="accordion-trigger more-trigger" data-more="Add Language"
                                               data-less="Show Less">
                                                <i class="icon icon-add-1"></i>
                                            </a>

                                        </div>


                                    </div>


                                    <div class="content">
                                        <div class="div-c inline-3">
                                            <div class="divided-column">
                                                <input type="checkbox" id="l01">
                                                <label for="l01">Afrikanns</label>
                                            </div>

                                            <div class="divided-column">
                                                <input type="checkbox" id="l02">
                                                <label for="l02">Albanian</label>
                                            </div>

                                            <div class="divided-column">
                                                <input type="checkbox" id="l03">
                                                <label for="l03">Arabic</label>
                                            </div>

                                            <div class="divided-column">
                                                <input type="checkbox" id="l04">
                                                <label for="l04">Armenian</label>
                                            </div>

                                            <div class="divided-column">
                                                <input type="checkbox" id="l05">
                                                <label for="l05">Basque</label>
                                            </div>

                                            <div class="divided-column">
                                                <input type="checkbox" id="l06">
                                                <label for="l06">Bengali</label>
                                            </div>

                                            <div class="divided-column">
                                                <input type="checkbox" id="l07">
                                                <label for="l07">Bulgarian</label>
                                            </div>

                                            <div class="divided-column">
                                                <input type="checkbox" id="l08">
                                                <label for="l08">Catalan</label>
                                            </div>

                                            <div class="divided-column">
                                                <input type="checkbox" id="l09">
                                                <label for="l09">Cambodian</label>
                                            </div>

                                            <div class="divided-column">
                                                <input type="checkbox" id="l10">
                                                <label for="l10">Chinese (Mandarin)</label>
                                            </div>

                                            <div class="divided-column">
                                                <input type="checkbox" id="l11">
                                                <label for="l11">Croation</label>
                                            </div>

                                            <div class="divided-column">
                                                <input type="checkbox" id="l12">
                                                <label for="l12">Czech</label>
                                            </div>

                                            <div class="divided-column">
                                                <input type="checkbox" id="l13">
                                                <label for="l13">Danish</label>
                                            </div>

                                            <div class="divided-column">
                                                <input type="checkbox" id="l14">
                                                <label for="l14">Dutch</label>
                                            </div>

                                            <div class="divided-column">
                                                <input type="checkbox" id="l15">
                                                <label for="l15">English</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <p>Add languages you speak.</p>

                                <br>
                                <br>


                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>




    @component('components.footer')
    @endcomponent

@endsection