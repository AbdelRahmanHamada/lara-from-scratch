<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    </head>
    <body>

    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">Laravel</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                @if (!Auth::guest())
                <ul class="nav navbar-nav" style="margin-left: 30px">
                    <li class="active"><a href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="{{ url('/cards') }}">Cards</a></li>
                </ul>
                @endif

                <ul class="nav navbar-nav navbar-right">

                    @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                    <li><a href="#">' {{  Auth::user()->name }} '</a></li>
                    <li>
                        <a href="{{ url('/logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

      <div class="container">
        @yield('content')
      </div>
    </body>
</html>
