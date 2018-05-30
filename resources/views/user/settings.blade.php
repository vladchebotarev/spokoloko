@extends('user.layouts.user')

@section('user_content')

    <div class="typo-header-sq">
        <div class="ui grid">
            <div class="row">
                @if ($errors->any())
                    <div class="ui twelve wide computer column">
                        <div class="ui negative message" style="margin-bottom: 30px;">
                            <i class="fa fa-times close" aria-hidden="true" style="float: right;"></i>
                            <div class="header">
                                Błąd
                            </div>
                            @if($errors->has('db_error'))
                                <p>{{ $errors->get('db_error') }}</p>
                            @else
                                <p>Popraw wszystkie błędy i spróbuj ponownie</p>
                            @endif
                        </div>
                    </div>
                @endif

                @if (session('status'))
                    <div class="ui twelve wide computer column">
                        <div class="ui positive message" style="margin-bottom: 30px;">
                            <i class="close icon"></i>
                            <i class="fa fa-times close" aria-hidden="true" style="float: right;"></i>
                            <div class="header">
                                Powodzenie
                            </div>
                            <p>{{ session('status') }}</p>
                        </div>
                    </div>
                @endif
                <div class="ui twelve wide computer column">
                    <h2>{{ __('Ustawienia') }}</h2>

                    <ul class="inline-menu-sq list-default-sq list-style-inline-sq">
                        <li class="active">
                            <a href="">{{ __('Ustawienia') }}</a>
                        </li>
                        {{--<li class="">
                            <a href="">{{ __('Płatności') }}</a>
                        </li>
                        <li class="">
                            <a href="">{{ __('Wypłaty') }}</a>
                        </li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="ui grid">
        <div class="row">

            <div class="ui twelve wide tablet twelve wide computer twelve wide widescreen twelve wide large screen column">
                <form method="POST" id="formNotifications" action="{{ route('settings.notifications') }}">
                    @csrf
                    <strong>{{ __('Powiadomienia') }}</strong>
                    {{--<p>{{ __('Odbieraj wiadomości od gospodarzy i gości.') }}</p>--}}
                    <br>
                    <br>

                    <div class="div-c inline-3">
                        <div class="divided-column">
                            <input type="checkbox" name="notifications[]" value="1" id="Email"
                                   @if(in_array(1, $notifications)) checked @endif>
                            <label for="Email">Email</label>
                        </div>

                        <div class="divided-column">
                            <input type="checkbox" name="notifications[]" value="2" id="SMS"
                                   @if(in_array(2, $notifications)) checked @endif>
                            <label for="SMS">SMS</label>
                        </div>

                        <div class="divided-column">
                            <input type="checkbox" name="notifications[]" value="3" id="Push"
                                   @if(in_array(3, $notifications)) checked @endif>
                            <label for="Push">{{ __('Push Powiadomienia') }}</label>
                        </div>
                    </div>
                    <button class="button-sq small-sq see-through-sq" type="submit">{{ __('Zapisz') }}</button>
                    <br>
                    <br>
                </form>
            </div>

            <div class="ui twelve wide tablet twelve wide computer twelve wide widescreen twelve wide large screen column">
                <hr>
            </div>

            <div class="ui twelve wide tablet six wide computer six wide widescreen six wide large screen column">
                <form method="POST" id="formPhone" action="{{ route('settings.phone') }}">
                    @csrf
                    <br>
                    <strong>{{ __('Zmiana telefonu') }}</strong>
                    {{--<p>You can renew the password account adress.</p>--}}
                    <br>
                    <br>
                    <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">
                        <div class="div-c">
                            <div class="divided-column">
                                <div class="ui labeled input">
                                    <div class="ui label">
                                        +48
                                    </div>
                                    <input type="text" class="req-check {{ $errors->has('phone') ? 'has-error' : '' }}"
                                           name="phone" id="phone"
                                           data-mask-clearifnotmatch="true"
                                           data-mask="000 000 000" placeholder="730 000 000"
                                           value="{{ Auth::user()->phone }}" required>
                                </div>
                                @if ($errors->has('phone'))
                                    <small class="small-display-has-error">{{ $errors->first('phone') }}</small>
                                @endif
                            </div>
                        </div>
                    </div>
                    <button class="button-sq small-sq see-through-sq" type="submit">{{ __('Zapisz') }}</button>
                    <br>
                    <br>
                </form>
            </div>

            <div class="ui twelve wide tablet twelve wide computer twelve wide widescreen twelve wide large screen column">
                <hr>
            </div>

            <div class="ui twelve wide tablet six wide computer six wide widescreen six wide large screen column">
                <form method="POST" id="formPass" action="{{ route('settings.password') }}">
                    @csrf
                    <br>
                    <strong>{{ __('Zmiana hasła') }}</strong>
                    {{--<p>You can renew the password account adress.</p>--}}
                    <br>
                    <br>

                    <div class="ui twelve wide tablet twelve wide computer six wide widescreen six wide large screen column">
                        <div class="div-c">
                            <div class="divided-column">
                                <input type="password" name="current_password"
                                       class="{{ $errors->has('current_password') ? 'has-error' : '' }}"
                                       placeholder="{{ __('Stare hasło') }}" required>
                                @if ($errors->has('current_password'))
                                    <small class="small-display-has-error">{{ $errors->first('current_password') }}</small>
                                @endif
                            </div>

                            <div class="divided-column">
                                <input type="password" name="password"
                                       class="{{ $errors->has('password') ? 'has-error' : '' }}"
                                       placeholder="{{ __('Nowe hasło') }}" required>
                                @if ($errors->has('password'))
                                    <small class="small-display-has-error">{{ $errors->first('password') }}</small>
                                @endif
                            </div>

                            <div class="divided-column">
                                <input type="password" name="password_confirmation"
                                       class="{{ $errors->has('password') ? 'has-error' : '' }}"
                                       placeholder="{{ __('Powtórz nowe hasło') }}" required>
                            </div>
                        </div>
                    </div>

                    <button class="button-sq small-sq see-through-sq" type="submit">{{ __('Zmień hasło') }}</button>
                    <br>
                    <br>
                </form>
            </div>


            {{--
            <div class="ui twelve wide tablet twelve wide computer twelve wide widescreen twelve wide large screen column">
                            <br>
                            <hr>

                            <br>
                            <strong>Login History</strong>
                            <table class="dashboard-table-sq">

                                <thead>
                                <tr>
                                    <th><p>Browser / Device</p></th>
                                    <th><p>Location</p></th>
                                    <th><p>Recent activity</p></th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td><div><strong>Chrome</strong></div>OS X 10.13.0</td>
                                    <td><p>Bucharest, B, Romania</p></td>
                                    <td><p>about 1 hour ago</p></td>
                                    <td>
                                        <div>
                                            <a class="button-sq see-through-sq small-sq" href="">Log Out</a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td><div><strong>Chrome</strong></div>OS X 10.12.3</td>
                                    <td><p>Bucharest, B, Romania</p></td>
                                    <td><p>8 months ago</p></td>
                                    <td>
                                        <div>
                                            <a class="button-sq see-through-sq small-sq" href="">Log Out</a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td><div><strong>Chrome</strong></div>iPhone</td>
                                    <td><p>Bucharest, B, Romania</p></td>
                                    <td><p>about 1 year ago</p></td>
                                    <td>
                                        <div>
                                            <a class="button-sq see-through-sq small-sq" href="">Log Out</a>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>

                            </table>
                            </div>--}}


        </div>
    </div>

@endsection