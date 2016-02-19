@extends('layout.main')

@section('header')
@stop

@section('container')
    <div class="jumbotron">
        <div class="row text-center">
            <h1>Amautas</h1>
            <h4 class="lead">Empleos para <span id="titles">docentes</span> comprometidos con la educación.</h4>
            <div class="text-center form-inline">
                <div class="form-group">
                    <input type="text" class="form-control input-hg" placeholder="Ingresa tu email">
                    <a id="sign-up" class="btn btn-success btn-embossed btn-hg" role="button" href="{{ route('empleos.create') }}">Quiero inscribirme!</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-offset-2">
                <img src="//" alt="">
            </div>
            <div class="col-sm-8">
                LOREM IPSUM
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script src="{{ URL::asset('packages/typed.js/dist/typed.min.js') }}?v=0.1"></script>
    <script src="{{ URL::asset('packages/vue/dist/vue.min.js') }}?v=0.1"></script>
    <script type="text/javascript">
        $(function(){
            $('.jumbotron').css('height', $(window).height());
            $('#titles').typed({
                strings: ['educadores', 'promotores', 'directores', 'auxiliares', 'maestros', 'profesores', 'estudiantes'],
                typeSpeed: 200,
                backSpeed: 50,
                cursorChar: "_",
                loop: true
            });
        });
    </script>
@stop

@section('footer')
@stop
