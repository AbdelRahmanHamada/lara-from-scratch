@extends('layout')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Laravel</div>
                <div class="panel-body">
                    Welcome visitor you must <a href="{{ url('/login') }}">login</a> or <a href="{{ url('/register') }}">register</a>
                </div>
            </div>
        </div>
    </div>

@endsection
