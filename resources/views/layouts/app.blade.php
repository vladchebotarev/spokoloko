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
    <link rel="stylesheet" type="text/css" href={{ asset('new-assets/less/header.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('new-assets/less/theme.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('new-assets/icon/style.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('css/my_styles.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('icon/css/font-awesome.min.css') }}>
    <link rel="icon" href={{ asset('favicon.ico') }}>

    <script src={{ asset('new-assets/library/modernizr-custom.js') }}></script>
{{--TODO customize--}}
    @if(Request::is('venues/*') or Request::is('venue'))
            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFGjWRN0ddQwopal_6VZNmz-9PJCX-caI&callback=initMap"></script>
            <script src={{ asset('new-assets/library/map.js') }}></script>
    @endif

    <title>Spokoloko @yield('title')</title>

</head>
<body class="no-transition">
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


    @if(!Request::is('login') and
        !Request::is('register') and
        !Request::is('password/*') and
        !Request::is('venues/*') and
        !Request::is('venue/') and
        !Request::is('user/share-venue'))
            @component('components.footer')
            @endcomponent
    @endif
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

<!-- Other scripts -->
{{--TODO--}}
@guest
    @if(!Request::is('login'))
        @if(!Request::is('register'))
            @if(!Request::is('password/*'))
                <script src={{ asset('js/auth-modals.js') }}></script>
            @endif
        @endif
    @endif
@else
    @if(Request::is('user/profile'))
        <script src={{ asset('js/profile-avatar.js') }}></script>
        <script src={{ asset('js/profile-form.js') }}></script>
    @endif
@endguest


<script>

    var startSlider = document.getElementById('price-range-slider');

    if (startSlider) {
        noUiSlider.create(startSlider, {
            start: [{{$min_price}}, {{$max_price}}],
            tooltips: true,
            format: wNumb({
                decimals: 0,
                postfix: 'zł'
            }),
            connect: true,
            range: {
                'min': [0],
                'max': [10000]
            }
        });
    }

    startSlider.noUiSlider.on('change.one', function(){
        var prices = startSlider.noUiSlider.get();
        $( "#minPrice" ).val(parseInt(prices[0].replace('zł','')));
        $( "#maxPrice" ).val(parseInt(prices[1].replace('zł','')));
        $('#search_form').submit();
    });

    $( "#select_city" ).change(function() {
        $('#search_form').attr('action', $( "#select_city" ).val()).submit();
    });

    $( "#select_event_type" ).change(function() {
        $('#search_form').submit();
    });

    $( "#clearFilters" ).on('click', function(){
        $('input:checkbox').removeAttr('checked');
    });



</script>

</body>

</html>
