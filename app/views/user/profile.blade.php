@extends('layout.main')

@section('content')
<div class="row">
    <div class="col-sm-3 col-lg-4 sidebar" id="sidebar">
        <ul class="nav nav-sidebar">
            <li class="active"><a href="#"><span class="fui-user"></span> Perfil</a></li>
            <li><a href="#"><span class="fui-new"></span> Anuncios</a></li>
            <li><a href="#"><span class="fui-gear"></span> Cuenta</a></li>
        </ul>
    </div>

    <div class="col-sm-9 col-lg-8">
        {{ dump(Auth::user()) }}
        <h4><span class="fui-user"></span> {{ Auth::user()->nombre .' '. Auth::user()->apellido }}</h4>
        <h4><span class="fui-mail"></span> {{ Auth::user()->email }}</h4>
        <h4><span class="glyphicon glyphicon-certificate"></span> {{ Auth::user()->pais->nombre }}</h4>
        <h4><span class="glyphicon glyphicon-check"></span> {{ Auth::user()->especialidad->nombre }}</h4>
        <h4><span class="glyphicon glyphicon-leaf "></span> {{ Auth::user()->departamento->nombre }}</h4>
        {{-- <h4><span class="fui-time"></span> {{ Session::get('login_date')->diffForHumans() }}</h4> --}}

        <div class="panel">
            <ul class="job-list">
            @foreach($empleos as $empleo)
                <li class="">
                    <a href="{{ route('empleos.show', $empleo->id.'--'.$empleo->slug ) }}" title="Oferta de empleo: {{ $empleo->titulo }}">
                        <div class="job-logo" style="background-image: url(http://lorempixel.com/64/64/technics/1)"></div>
                        <div class="job-content">
                            <h4>{{ $empleo->titulo }}</h4>
                            <p>{{{ $empleo->descripcion }}}</p>
                            <span class="label label-default">
                                <span class="fui-calendar-solid"></span>
                                {{ $empleo->created_at->diffForHumans() }}
                            </span>
                        </div>
                    </a>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
</div>
@stop