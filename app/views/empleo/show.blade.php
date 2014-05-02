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
            <a class="btn btn-primary btn-large btn-block" href="{{ route('empleos.show', $empleo->id.'--'.$empleo->slug ) }}">Postular</a>
         </div>
    </div>
</div>
@stop
