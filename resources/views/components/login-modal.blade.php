<!-- Log In -->
<div class="ui full modal" data-for="modal02">
    <div class="modal-full-background">
        <img src="new-assets/images/modal/modal_background_001.jpg" alt="">
    </div>

    <i class="icon icon-close close-modal"></i>

    <div class="header center">
        {{ __('Zaloguj się') }}
    </div>

    <div class="content">
        <form method="POST" id="formLogin" action="{{ route('login') }}">
            @csrf
            <div class="div-c">
                <div class="divided-column">
                    <input id="email" type="email" placeholder="{{ __('E-Mail') }}" name="email" required autofocus>
                </div>
                <div class="divided-column">
                    <input id="password" type="password" placeholder="{{ __('Hasło') }}" name="password" required>
                    <small id="loginError" class="small-has-error"></small>
                </div>
            </div>

            <button type="submit" class="button-sq fullwidth-sq">{{ __('Zaloguj się') }}</button>

        </form>
    </div>

    <div class="actions" style="padding-top: 0px !important;">
        <div class="border-container">

            <div class="button-sq link-sq"><a href="{{ route('password.request') }}">{{ __('Zapamniałeś hasło?') }}</a></div><br>
            <div class="button-sq link-sq modal-ui-trigger" data-trigger-for="modal01">{{ __('Nie masz konta?') }}</div>


        </div>
    </div>
</div>

