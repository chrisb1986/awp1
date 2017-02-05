<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- <link rel="stylesheet" href="/css/styles.css"> -->
        <link rel="stylesheet" href="/css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
        @yield('header')
    </head>
    <body>
      <div class="container">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <!-- Laravel homepage! -->
                </div>
            </div>
        </div>

          @yield('content')

          @yield('footer')
      </div> <!-- End container -->
    </body>
</html>
