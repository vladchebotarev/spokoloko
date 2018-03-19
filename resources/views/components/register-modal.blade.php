<!-- Sign Up -->
<div class="ui full modal" data-for="modal01">
    <div class="modal-full-background">
        <img src="new-assets/images/modal/modal_background_001.jpg" alt="">
    </div>

    <i class="icon icon-close close-modal"></i>

    <div class="header center">
        {{ __('Zarejestruj się') }}
    </div>

    <div class="content">
        <a href="" class="button-sq fullwidth-sq modal-ui-trigger" data-trigger-for="modal03">
            <i class="icon icon-email-2"></i>
            <span>{{ __('Zarejestruj się poprzez Email') }}</span>
        </a>

        <a href="{{ url('/auth/facebook') }}" class="button-sq fullwidth-sq facebook-button">
            <i class="icon icon-logo-facebook2"></i>
            <span>{{ __('Zarejestruj się poprzez Facebook') }}</span>
        </a>

        <a href="/auth/google" class="button-sq fullwidth-sq google-button">
            <img src="new-assets/images/icon-google-plus.svg" alt="">
            <span>{{ __('Zarejestruj się poprzez Google') }}</span>
        </a>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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