<!DOCTYPE html>
<html dir="ltr" lang="pl">
<head>
    <!-- Standard Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SeventhQueen"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href={{ asset('new-assets/less/base.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('new-assets/less/header.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('new-assets/less/theme.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('css/my_styles.css') }}>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic-ui/loader.min.css') }}">

    {{--<link rel="stylesheet" type="text/css" href={{ asset('css/main.css') }}>--}}


    <link rel="stylesheet" type="text/css" href={{ asset('new-assets/icon/style.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('icon/css/font-awesome.min.css') }}>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic-ui/message.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic-ui/popup.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic-ui/labeled.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic-ui/transition.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic-ui/rating.css') }}">

    @if(Request::is('user/share-venue') or Request::is('user/update-venue/*'))
        <link rel="stylesheet" type="text/css" href="{{ asset('css/scss/share/share-venue.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/scss/validation/validation.min.css') }}">
    @endif

    <link rel="icon" href={{ asset('favicon.ico') }}>


    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">

    <meta property="og:image" content="
              @if(View::hasSection('ogimage'))
                @yield('ogimage')
                @else
            https://res.cloudinary.com/spokoloko/image/upload/v1527650330/app/icons/og-image.jpg
                @endif
            ">
    <meta property="og:image:width" content="1190">
    <meta property="og:image:height" content="623">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:url" content="{{url()->current()}}">

</head>
<body class="no-transition"
      @if(Request::is('user/share-venue') or Request::is('user/share-service'))
      style="overflow: hidden;"
        @endif>
<div id="page-wrapper">

@component('components.header')
@endcomponent


@yield('content')

<!-- Modals -->

@guest
    @if(!Request::is('login') and !Request::is('register') and !Request::is('password/*'))

        {{--@component('components.register-modal')
        @endcomponent

        @component('components.register-email-modal')
        @endcomponent

        @component('components.login-modal')
        @endcomponent--}}

    @endif
@else
    @if(Request::is('user/profile'))
        @component('user.components.update_image_modal')
        @endcomponent
    @endif
@endguest



<!-- Wishlist -->
    <div class="ui modal small" data-for="wishlist">
        <i class="icon icon-close close-modal"></i>

        <div class="header center">
            <h4>Wishlist</h4>
        </div>

        <div class="content">
            <p>Mauris malesuada leo libero, vitae tempor ante sagittis vitae. Suspendisse consectetur facilisis
                enim.</p>
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

    <div class="ui active page dimmer" id="dimmer" style="display: none;">
        <div class="ui loader"></div>
    </div>

    @if(!Request::is('login') and
        !Request::is('register') and
        !Request::is('password/*') and
        !Request::is('venues/*') and
        !Request::is('venue/*') and
        !Request::is('services/*') and
        !Request::is('service') and
        !Request::is('user/*'))
        @component('components.footer')
        @endcomponent
    @endif
</div><!--end #page-wrapper-->
{{--<script src={{ asset('new-assets/library/jquery-2.2.0.min.js') }}></script>--}}
<script src='https://cf.spokoloko.club/new-assets/library/jquery-2.2.0.min.js'></script>

<script src={{ asset('new-assets/library/modernizr-custom.js') }}></script>

<script src={{ asset('new-assets/library/flexmenu.js') }}></script>
<script src={{ asset('new-assets/library/wNumb.js') }}></script>
<script src={{ asset('new-assets/library/jrespond.min.js') }}></script>
<script src={{ asset('new-assets/library/scrollspy.min.js') }}></script>
<script src={{ asset('js/transition.js') }}></script>
<script src={{ asset('new-assets/library/nouislider.min.js') }}></script>
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


<script src={{ asset('js/jquery.lazy.min.js') }}></script>

<!-- Slick -->
<script src={{ asset('new-assets/library/slick.js') }}></script>

<script src={{ asset('new-assets/library/header.js') }}></script>
<script src={{ asset('new-assets/library/functions.js') }}></script>
<script src={{ asset('js/semantic-ui/dimmer.js') }}></script>
<script src={{ asset('js/facebook_messenger.js') }}></script>
<script src={{ asset('js/semantic-ui/message.js') }}></script>

{{--<script src={{ asset('js/main.js') }}></script>


@if(Request::is('/'))
    <script src={{ asset('js/welcome.js') }}></script>
@endif


<!-- Other scripts -->
{{--TODO--}}
{{--@switch(1)
    @case('/')
    <script>
        $("#searchSubmit").click(function () {
            $('#searchForm').attr('action', 'venues/' + $("#select_city").val()).submit();
        });
    </script>
    @break

    @case('user/profile')
    <script src={{ asset('js/user/profile-form.js') }}></script>
    @break

    @case(Request::is('user/share-venue'))
    @case(Request::is('user/share-service'))
    @case(Request::is('user/update-venue/*'))
    <script src={{ asset('js/jquery.mask.min.js') }}></script>
    <script src={{ asset('js/velocity.min.js')}}></script>
    --}}{{--<script src={{ asset('js/move.min.js')}}></script>--}}{{--
    <script src={{ asset('js/share/steps.js') }}></script>
    --}}{{--<script src={{ asset('js/share/mapImagesLocation.js') }}></script>--}}{{--
    --}}{{--<script src={{ asset('js/share/weekButtons.js') }}></script>--}}{{--
    <script src="{{ asset('js/share/checkbox.js') }}"></script>
    <script src={{ asset('js/share/photoModel.js') }}></script>
    <script src={{ asset('js/share/validation.js') }}></script>
    <script src={{ asset('js/share/addPhotos.js') }}></script>
    @break

    @case(Request::is('services/*'))
    <script src={{ asset('js/search/services.js') }}></script>
    @break

    @case(Request::is('venues/*'))
    <script src={{ asset('js/search/venues.js') }}></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChkty9f2wYPlTFsghY4y-3GYHkch6EGnY&callback=initMap"></script>
    <script src={{ asset('js/search/venues_map.js') }}></script>
    @break

@endswitch--}}

{{--TODO customize--}}
@if(Request::is('venue/*') or Request::is('service') or Request::is('contact'))
    <script src={{ asset('js/property-page/map.js') }}></script>
    <script src={{ asset('js/semantic-ui/rating.js') }}></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChkty9f2wYPlTFsghY4y-3GYHkch6EGnY&callback=initMap&language=pl"></script>
    {{--<script src="{{ asset('new-assets/library/checkbox2.js') }}"></script>--}}

@endif

{{--TODO customize--}}
@if(Request::is('user/update-venue/*') or Request::is('user/share-venue') or Request::is('user/share-service'))
    <script src={{ asset('new-assets/library/map_adding.js') }}></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChkty9f2wYPlTFsghY4y-3GYHkch6EGnY&callback=initMap&sensor=false&libraries=places&language=pl"></script>
@endif

@if(Request::is('venues/*'))
    <script src={{ asset('js/search/venues.js') }}></script>

    <script src={{ asset('js/search/venues_map.js') }}></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChkty9f2wYPlTFsghY4y-3GYHkch6EGnY&callback=initMap&language=pl"></script>

@endif

@if(Request::is('user/profile'))
    <script src={{ asset('js/user/profile-form.js') }}></script>
@endif


@if(Request::is('user/share-venue') or Request::is('user/share-service') or Request::is('user/update-venue/*'))

    <script src={{ asset('js/jquery.mask.min.js') }}></script>
    <script src={{ asset('js/velocity.min.js')}}></script>
    <script src={{ asset('js/move.min.js')}}></script>
    <script src={{ asset('js/share/steps.js') }}></script>
    {{--<script src={{ asset('js/share/mapImagesLocation.js') }}></script>--}}
    {{--<script src={{ asset('js/share/weekButtons.js') }}></script>--}}
    <script src={{ asset('js/share/checkbox.js') }}></script>
    <script src={{ asset('js/share/photoModel.js') }}></script>
    <script src={{ asset('js/share/validation.js') }}></script>
    <script src={{ asset('js/share/addPhotos.js') }}></script>
    <script src={{ asset('js/share/sendData.js') }}></script>
@endif

@if(Request::is('user/update-venue/*'))
    <script src={{ asset('js/update/addModifyPhotos.js') }}></script>
@endif

@if(Request::is('services/*'))
    <script src={{ asset('js/search/services.js') }}></script>
@endif



@if(Request::is('/'))
    <script src={{ asset('js/welcome/welcome.js') }}></script>
@endif

</body>
</html>
