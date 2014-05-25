@extends('layout.main')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-push-3 col-sm-6 col-sm-push-3">
        <div class="text-center">
            <h1>Empleos</h1>
            <h2>Los empleos que buscas</h2>
        </div>

    </div>
</div>
<div class="row">
    @foreach($empleos as $empleo)
    <div class="col-xs-3">
        <div class="tile tile-hot">
            <img src="{{ URL::asset('packages/Flat-UI/images/icons/svg/clipboard.svg') }}" alt="{{$empleo->titulo}}" class="tile-image">
            <h3 class="tile-title">{{ str_limit($empleo->titulo, 20, '...') }}</h3>
            <p>{{ str_limit($empleo->descripcion, 50, '...') }}</p>
            <a class="btn btn-primary btn-embossed btn-large btn-block" href="{{ route('empleos.show', $empleo->id.'--'.$empleo->slug ) }}">Postular</a>
         </div>
    </div>
    @endforeach 
</div>
@stop
