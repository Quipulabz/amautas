@extends('layout.main')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-push-3 col-sm-6 col-sm-push-3">
        <div class="text-center">
            <h2>{{$empleo->titulo}}</h2>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-xs-3">
        <div class="tile tile-hot">
            <img src="{{ URL::asset('packages/Flat-UI/images/icons/svg/clipboard.svg') }}" alt="{{$empleo->titulo}}" class="tile-image">
            <h3 class="tile-title">{{$empleo->titulo}}</h3>
            <p>{{ $empleo->descripcion }}</p>
            <small>{{$empleo->slug}}</small>
            @if (Auth::check())
                <a class="btn btn-danger btn-embossed btn-large btn-block" href="{{ route('empleos.edit', $empleo->id.'--'.$empleo->slug ) }}">Editar</a>
            @endif
         </div>
    </div>
</div>
@stop
