<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Amautas | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@if( App::isLocal() )
    <!-- Loading Bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('packages/flat-ui/dist/css/vendor/bootstrap.min.css') }}">
    <!-- Loading Flat UI -->
    <link rel="stylesheet" href="{{ URL::asset('packages/flat-ui/dist/css/flat-ui.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/quipulabz.css') }}">
@else
    <link rel="stylesheet" href="{{ URL::asset('css/flat-ui.min.css') }}?v=0.1">
@endif
    <!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css"> -->
    <!-- Montserrat|Varela+Round| HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="{{ URL::asset('packages/flat-ui/dist/js/vendor/html5shiv.js') }}"></script>
      <script src="{{ URL::asset('packages/flat-ui/dist/js/vendor/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>
    @section('header')
    <header id="header">
        @include('layout.navigation')
    </header>
    @show

    <div id="main-container">
        @if ( Session::has('mensaje') )
            <div class="alert {{ Session::get('mensaje')['tipo'] }} alert-dismissable text-center">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>{{ Session::get('mensaje')['mensaje'] }}</strong>
            </div>
        @endif
        @section('container')
        <div class="container">
            @yield('content')
        </div>
        @show
    </div>

    @section('footer')
    <footer id="footer">
        @include('layout.footer')
    </footer>
    @show

@if( App::isLocal() )
    <script src="{{ URL::asset('packages/flat-ui/dist/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('packages/flat-ui/dist/js/vendor/video.js') }}"></script>
    <script src="{{ URL::asset('packages/flat-ui/dist/js/flat-ui.min.js') }}"></script>
    <script src="{{ URL::asset('packages/flat-ui/js/radiocheck.js') }}"></script>
    <script src="{{ URL::asset('js/quipulabz.js') }}"></script>
@else
    <script src="{{ URL::asset('js/flat-ui-min.js') }}?v=0.1"></script>
@endif
    {{--CDN Libraries--}}
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> -->

    @yield('scripts')
</body>
</html>
