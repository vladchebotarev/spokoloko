@extends('layouts.app-old')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="ui positive message transition hidden">
                            <i class="close icon"></i>

                            <p>{{ session('status') }}</p>
                        </div>

                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
