@extends('layout.main')

@section('content')

<div class="row">
    <div class="jumbotron">
        <h1>Empleos<h1>
        <h4 class="lead">Hoy tenemos {{ $total_empleos ? : 0 }} empleos disponibles para ti</h4>
        <a class="btn btn-success btn-embossed btn-hg" role="button" href="{{ route('empleos.create') }}">Crear nuevos empleos</a>
    </div>
</div>
<div class="row">
    @foreach($empleos as $empleo)
        <div class="col-xs-3">
            <div class="tile tile-hot">
                <img src="{{ URL::asset('packages/Flat-UI/images/icons/svg/clipboard.svg') }}" alt="{{$empleo->titulo}}" class="tile-image">
                <h3 class="tile-title">{{ str_limit($empleo->titulo, 20, '...') }}</h3>
                <p class="lead">{{ str_limit($empleo->descripcion, 50, '...') }}<br>
                <span class="label label-primary pull-right">Creado {{$empleo->created_at->diffForHumans()}}</span>
                </p>

                @if ($empleo->user->id == Session::get('user'))
                    <a class="btn btn-warning btn-embossed btn-large btn-block" href="{{ route('empleos.edit', $empleo->id.'--'.$empleo->slug ) }}">Editar</a>
                @else
                    <a class="btn btn-info btn-embossed btn-large btn-block" href="{{ route('empleos.show', $empleo->id.'--'.$empleo->slug ) }}">Postular</a>
                @endif
             </div>
        </div>
    @endforeach
</div>
@stop
