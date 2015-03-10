<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Amautas | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@if( App::isLocal() )
    <!-- Loading Bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('packages/flat-ui/bootstrap/css/bootstrap.min.css') }}">
    <!-- Loading Flat UI -->
    <link rel="stylesheet" href="{{ URL::asset('packages/flat-ui/css/flat-ui.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/quipulabz.css') }}">
@else
    <link rel="stylesheet" href="{{ URL::asset('css/flat-ui.min.css') }}?v=0.1">
@endif
    {{--<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">--}}
    <!-- Montserrat|Varela+Round| HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="{{ URL::asset('packages/flat-ui/js/html5shiv.js') }}"></script>
      <script src="{{ URL::asset('packages/flat-ui/js/respond.min.js') }}"></script>
      <script src="{{ URL::asset('packages/flat-ui/js/icon-font-ie7.js') }}"></script>
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
    <script src="{{ URL::asset('packages/flat-ui/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ URL::asset('packages/flat-ui/js/jquery-ui-1.10.3.custom.min.js') }}"></script>
    <script src="{{ URL::asset('packages/flat-ui/js/jquery.ui.touch-punch.min.js') }}"></script>
    <script src="{{ URL::asset('packages/flat-ui/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('packages/flat-ui/js/bootstrap-select.js') }}"></script>
    <script src="{{ URL::asset('packages/flat-ui/js/bootstrap-switch.js') }}"></script>
    <script src="{{ URL::asset('packages/flat-ui/js/flatui-checkbox.js') }}"></script>
    <script src="{{ URL::asset('packages/flat-ui/js/flatui-radio.js') }}"></script>
    <script src="{{ URL::asset('packages/flat-ui/js/jquery.placeholder.js') }}"></script>
    <script src="{{ URL::asset('packages/flat-ui/js/jquery.tagsinput.js') }}"></script>
    <script src="{{ URL::asset('packages/flat-ui/js/typeahead.js') }}"></script>
    <script src="{{ URL::asset('packages/flat-ui/js/application.js') }}"></script>
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
