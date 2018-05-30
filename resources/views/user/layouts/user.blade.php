@extends('layouts.app')

@section('title', 'Profil')

@section('content')
    <div class="ui layout">
        <!-- grid -->
        <div class="ui grid container">
            <div class="row">


                    @component('user.components.navbar')
                    @endcomponent

                    <div class="ui twelve wide tablet nine wide computer nine wide widescreen nine wide large screen column">
                        @yield('user_content')
                    </div>


            </div><!-- row end -->
        </div><!-- grid end -->
    </div><!-- ui layout end -->




@endsection