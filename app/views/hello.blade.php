@extends('layout.main')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="jumbotron">
            <h1>Empleos</h1>
            <h4 class="lead">Hoy tenemos 22 empleos disponibles para ti</h4>
            <a class="btn btn-success btn-embossed btn-hg" role="button" href="{{ route('empleos.create') }}">Crear nuevos empleos</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-3 col-md-6 col-xs-offset-1 col-xs-10">
            <div class="row">
                <p>Dream & Develop

                    Visual designer

                    Dream & Develop is a startup that aims to provide communication and branding solutions for startups. Responsibilities as a visual designer include the creation of wireframes and mockups of websites, front-end development of said website and designing print items such as posters, business cards and stationery.</p>
            </div>
        </div>
    </div>
</div>
@stop

