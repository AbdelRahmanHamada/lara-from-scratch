@extends('layout')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cards List</div>

                <div class="panel-body">

                    @foreach($cards as $card)
                        <div>
                            <a href="/cards/{{ $card->id }}"> {{ $card->title }} </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection
