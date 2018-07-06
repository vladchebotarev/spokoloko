@extends('layouts.app')

@section('content')
    <div class="ui layout">
        <div class="ui centered grid container">
            <div class="row">
                <div class="ui twelve wide tablet five wide computer five wide widescreen five wide large screen column">
                    <br>
                    @if (session('confirmation-success'))
                        <div class="ui twelve wide computer column">
                            <div class="ui positive message">
                                <p>{{ session('confirmation-success') }}</p>
                            </div>
                        </div>
                    @endif

                    <h3 class="text-align-center-sq">
                        {{ __('Zarejestruj się') }}
                    </h3>
                    <br>

                    <div class="content">
                        <a href="{{ url('/auth/facebook') }}" class="button-sq fullwidth-sq facebook-button">
                            <i class="icon icon-logo-facebook2"></i>
                            <span>{{ __('Zarejestruj się poprzez Facebook') }}</span>
                        </a>
                        <br>
                        <br>
                        <a href="/auth/google" class="button-sq fullwidth-sq google-button">
                            <img src="new-assets/images/icon-google-plus.svg" alt="">
                            <span>{{ __('Zarejestruj się poprzez Google') }}</span>
                        </a>
                        <br>
                        <br>
                        <br>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="div-c">
                                <div class="divided-column">
                                    <input id="name" type="text" class="{{ $errors->has('name') ? 'has-error' : '' }}" placeholder="{{ __('Imię') }}" name="name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <small class="small-display-has-error">{{ $errors->first('name') }}</small>
                                    @endif
                                </div>
                                <div class="divided-column">
                                    <input id="email" type="email" class="{{ $errors->has('email') ? 'has-error' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>
                                    @if ($errors->has('email'))
                                        <small class="small-display-has-error">{{ $errors->first('email') }}</small>
                                    @endif
                                </div>
                                <div class="divided-column">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? 'has-error' : '' }}" name="password" placeholder="{{ __('Hasło') }}" required>
                                    @if ($errors->has('password'))
                                        <small class="small-display-has-error">{{ $errors->first('password') }}</small>
                                    @endif
                                </div>
                            </div>
                            <input type="checkbox" id="terms" required>
                            <label for="terms">Oświadczam, że zapoznałem się i akceptuję <a href="https://res.cloudinary.com/spokoloko/image/upload/v1528125324/docs/Terms-Of-Service-PL.pdf" target="_blank">regulamin</a> i <a
                                        href="https://res.cloudinary.com/spokoloko/image/upload/v1528125326/docs/Privacy-Policy-PL.pdf" target="_blank">politykę prywatności</a> serwisu.</label>
                            <button type="submit" class="button-sq fullwidth-sq">{{ __('Zarejestruj się') }}</button>

                        </form>
                    </div>

                    <div class="actions" style="padding-top: 0px !important;">
                        <div class="border-container">
                            <div class="button-sq link-sq">{{ __('Już masz konto?') }}</div>

                            <div class="button-sq link-sq login-sq">
                                <a href="{{ route('login') }}">
                                    {{ __('Zaloguj się') }}
                                    <i class="icon icon-person-lock-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>



                </div>

            </div>


        </div>
    </div>

@endsection
