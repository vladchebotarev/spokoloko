@extends('layouts.app')

@section('content')
    <div class="ui layout">
        <div class="ui centered grid container">
            <div class="row">
                <div class="ui twelve wide tablet six wide computer six wide widescreen six wide large screen column">

                    <br>
                    <h3 class="text-align-center-sq">
                        {{ __('Resetuj hasło') }}
                    </h3>
                    <br>

                    <div class="content">
                        @if (session('status'))
                            <div class="alert alert-success" style="color: green;">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="div-c">
                                <div class="divided-column">
                                    <input id="email" type="email" class="{{ $errors->has('email') ? 'has-error' : '' }}" placeholder="{{ __('E-Mail') }}" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <small class="small-display-has-error">{{ $errors->first('email') }}</small>
                                    @endif
                                </div>
                            </div>

                            <button type="submit" class="button-sq fullwidth-sq">{{ __('Wyślij link do resetowania hasła') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
