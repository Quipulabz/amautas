@extends('layout.main')

@section('content')
<div class="row row-offcanvas row-offcanvas-right">
    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#"><span class="fui-user"></span> Perfil</a></li>
            <li><a href="#"><span class="fui-new"></span> Anuncios</a></li>
            <li><a href="#"><span class="fui-gear"></span> Cuenta</a></li>
        </ul>
    </div>

    <div class="col-xs-12 col-sm-9">
        <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
        </p>

        <h4><span class="fui-user"></span> {{ Auth::user()->username }}</h4>
        <h4><span class="fui-mail"></span> {{ Auth::user()->email }}</h4>
        <h4><span class="fui-time"></span> {{ Auth::user()->created_at->diffForHumans() }}</h4>
        <h4><span class="fui-time"></span> {{ Session::get('login_date')->diffForHumans() }}</h4>

        <div class="panel">
            <ul class="job-list">
            @foreach($empleos as $empleo)
                <li class="">
                    <a href="{{ route('empleos.show', $empleo->id.'--'.$empleo->slug ) }}" title="Oferta de empleo: {{ $empleo->titulo }}">
                        <div class="job-logo" style="background-image: url(http://lorempixel.com/64/64/technics/1)"></div>

                        <div class="job-content">
                            <h4>{{ $empleo->titulo }}</h4>
                            <p>{{ $empleo->descripcion }}</p>
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