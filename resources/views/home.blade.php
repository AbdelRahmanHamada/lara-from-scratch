@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Welcome Back <span style="color:green;">{{  Auth::user()->name }}</span> You are logged in!
                </div>
            </div>
        </div>
    </div>

@endsection
