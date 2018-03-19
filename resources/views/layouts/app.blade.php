<!DOCTYPE html>
<html dir="ltr" lang="pl">
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
    <link rel="stylesheet" type="text/css" href={{ asset('css/my_styles.css') }}>
    <link rel="icon" href={{ asset('new-assets/images/ico/favicon.ico') }}>

    <script src={{ asset('new-assets/library/modernizr-custom.js') }}></script>

    <title>Homepage</title>

</head>
<body class="no-transition">
<div id="page-wrapper">

@component('components.header')
@endcomponent

    @yield('content')

<!-- Modals -->

@guest
@component('components.register-modal')
@endcomponent

@component('components.register-email-modal')
@endcomponent

@component('components.login-modal')
@endcomponent
@endguest



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
<script>
    /* AJAX Login Function*/
    $(function () {
        $(document).on('submit', '#formLogin', function (e) {
            e.preventDefault();

            $('#loginError').fadeOut();

            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                dataType: "json",
                data: $(this).serialize(),

            })
                .always(function (data) {
                    if (data.status === 200) {
                        location.reload();
                    } else {
                        $('#loginError').text(data.responseJSON.errors.email[0]).fadeIn();

                    }

                });
        });
    })
    /* END */

    /* AJAX Email Register Function*/
    $(function(){

        $(document).on('submit', '#formRegisterEmail', function(e) {
            e.preventDefault();

            $('input+small').text('').fadeOut();
            $('input').removeClass('has-error');

            $.ajax({
                method: $(this).attr('method'),
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json"
            })
                .always(function (data) {
                    if (data.status === 200) {
                        location.reload();
                    } else {
                        $.each(data.responseJSON.errors, function (key, value) {
                            var input = '#formRegisterEmail input[name=' + key + ']';
                            $(input + '+small').text(value).fadeIn();
                            $(input).addClass('has-error');
                        });
                    }

                });

        });

    })
    /* END */
</script>
</body>

</html>
