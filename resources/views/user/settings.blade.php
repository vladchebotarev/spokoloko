@extends('user.layouts.user')

@section('user_content')

    <div class="typo-header-sq">
        <div class="ui grid">
            <div class="row">
                <div class="ui twelve wide computer column">
                    <h2>{{ __('Ustawienia') }}</h2>

                    <ul class="inline-menu-sq list-default-sq list-style-inline-sq">
                        <li class="active">
                            <a href="">{{ __('Ustawienia') }}</a>
                        </li>
                        <li class="">
                            <a href="">{{ __('Płatności') }}</a>
                        </li>
                        <li class="">
                            <a href="">{{ __('Wypłaty') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>




    <div class="ui grid">
        <div class="row">

            <div class="ui twelve wide tablet twelve wide computer twelve wide widescreen twelve wide large screen column">
                <hr>
            </div>

            <div class="ui twelve wide tablet six wide computer six wide widescreen six wide large screen column">
                <br>
                <strong>Change E-mail adress</strong>
                <p>You can renew the e-mail account adress.</p>

                <a href="" class="button-sq small-sq see-through-sq modal-ui-trigger" data-trigger-for="login">Change Email</a>

            </div>

            <div class="ui twelve wide tablet six wide computer six wide widescreen six wide large screen column">
                <br>
                <strong>Change Password</strong>
                <p>You can renew the password account adress.</p>

                <a href="" class="button-sq small-sq see-through-sq modal-ui-trigger" data-trigger-for="login">Change Password</a>

            </div>

            <div class="ui twelve wide tablet twelve wide computer twelve wide widescreen twelve wide large screen column">
                <br>
                <hr>
                <br>
                <strong>Notifications</strong>
                <p>Receive messages from hosts and guests.</p>
                <br>

                <div class="div-c inline-3">
                    <div class="divided-column">
                        <input type="checkbox" id="checkbox1">
                        <label for="checkbox1">Email</label>
                    </div>

                    <div class="divided-column">
                        <input type="checkbox" id="checkbox2">
                        <label for="checkbox2">Text messages</label>
                    </div>

                    <div class="divided-column">
                        <input type="checkbox" id="checkbox3">
                        <label for="checkbox3">Push Notifications</label>
                    </div>
                </div>


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

                <br>
                <br>
            </div>

        </div>
    </div>
@endsection