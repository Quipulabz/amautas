<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Amautas | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Loading Bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('packages/flat-ui/bootstrap/css/bootstrap.css') }}">
    <!-- Loading Flat UI -->
    <link rel="stylesheet" href="{{ URL::asset('packages/flat-ui/css/flat-ui.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/quipulabz.css') }}">
    <!-- <link rel="stylesheet" href="{{ URL::asset('packages/flat-ui/css/demo.css') }}"> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="{{ URL::asset('packages/flat-ui/js/html5shiv.js') }}"></script>
      <script src="{{ URL::asset('packages/flat-ui/js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>
    <header id="header">
        @include('layout.navigation')
    </header>

    @if ( Session::has('mensaje') )
    <div class="alert {{ Session::get('mensaje')['tipo'] }} alert-dismissable text-center">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>{{ Session::get('mensaje')['mensaje'] }}</strong>
    </div>
    @endif

    <div id="main-container">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <footer id="footer">
        @include('layout.footer')
    </footer>
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
    <script src="{{ URL::asset('packages/flat-ui/js/application.js') }}"></script>
    <!-- // <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <!-- // <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> -->
    @yield('scripts')
</body>
</html>
