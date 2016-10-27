@extends('layout')
@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <h1>{{ $card->title}}</h1>

            <ul class="list-group">
                @foreach($card->notes as $note)
                    <li class="list-group-item">
                        {{ $note->body }}
                        @if(Auth::user()->id == $note->user_id)
                            <a href="/notes/{{ $note->id }}/edit"><span class="glyphicon glyphicon-edit"></span></a>
                        @endif
                        <a href="#" class="pull-right"> {{ $note->user->name }} </a>
                    </li>
                @endforeach
            </ul>
            <hr>
            <h3>Add New Note</h3>
            <form method="POST" action="/cards/{{ $card->id }}/notes">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" class="form-control">{{ old('body') }}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Note</button>
                </div>
            </form>

            @if(Session::has('status'))
                <div class="alert alert-success">
                  <h4><span class="glyphicon glyphicon-ok"></span> {{ Session::get('status') }}</h4>
                 </div>
            @endif

            @if(count($errors))
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
    </div>
@endsection
