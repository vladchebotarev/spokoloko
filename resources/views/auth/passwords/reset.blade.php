@extends('layouts.app')

@section('content')
    <div class="ui layout">
        <div class="ui centered grid container">
            <div class="row">
                <div class="ui twelve wide tablet six wide computer six wide widescreen six wide large screen column">

                    <br>
                    <h3 class="text-align-center-sq">
                        {{ __('Ustaw nowe hasło') }}
                    </h3>
                    <br>

                    <div class="content">
                        <form method="POST" action="{{ route('password.request') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="div-c">
                                <div class="divided-column">
                                    <input id="email" type="email" class="{{ $errors->has('email') ? 'has-error' : '' }}" placeholder="{{ __('E-Mail') }}" name="email" value="{{ $email or old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <small class="small-display-has-error">{{ $errors->first('email') }}</small>
                                    @endif
                                </div>
                                <div class="divided-column">
                                    <input id="password" type="password" class="{{ $errors->has('password') ? 'has-error' : '' }}" placeholder="{{ __('Nowe hasło') }}" name="password" required>
                                    @if ($errors->has('password'))
                                        <small class="small-display-has-error">{{ $errors->first('password') }}</small>
                                    @endif
                                </div>
                                <div class="divided-column">
                                    <input id="password-confirm" type="password" class="{{ $errors->has('password_confirmation') ? 'has-error' : '' }}" placeholder="{{ __('Powtórz hasło') }}" name="password_confirmation" required>
                                    @if ($errors->has('password_confirmation'))
                                        <small class="small-display-has-error">{{ $errors->first('password_confirmation') }}</small>
                                    @endif
                                </div>
                            </div>

                            <button type="submit" class="button-sq fullwidth-sq">{{ __('Ustaw nowe hasło') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
