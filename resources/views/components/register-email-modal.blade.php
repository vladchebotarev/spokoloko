<!-- Sign Up with mail -->
<div class="ui full modal" data-for="modal03">
    <div class="modal-full-background">
        <img src="new-assets/images/modal/modal_background_001.jpg" alt="">
    </div>

    <i class="icon icon-close close-modal"></i>

    <div class="header center">
        {{ __('Zarejestruj się') }}
    </div>

    <div class="content">
        <form method="POST" id="formRegisterEmail" action="{{ route('register') }}">
            @csrf

            <div class="div-c">
                <div class="divided-column">
                    <input id="name" type="text" placeholder="{{ __('Imię') }}" name="name" required>
                    <small class="small-has-error"></small>
                </div>
                <div class="divided-column">
                    <input id="email_reg" type="email" name="email" placeholder="Email" required>
                    <small class="small-has-error"></small>
                </div>
                <div class="divided-column">
                    <input id="password_reg" type="password" name="password" placeholder="{{ __('Hasło') }}" required>
                    <small class="small-has-error"></small>
                </div>
            </div>

            <button type="submit" class="button-sq fullwidth-sq">{{ __('Zarejestruj się') }}</button>
            <small>Rejestrując się, zgadzasz się z Regulaminem Spokoloko.</small>
        </form>
    </div>

</div>