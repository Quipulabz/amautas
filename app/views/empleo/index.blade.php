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
    <div class="col-lg-4 col-md-4 col-xs-12">
        <div class="todo">
            <div class="todo-search">
              <input class="todo-search-field" type="search" value="" placeholder="Search">
            </div>
            <ul>
              <li class="todo-done">
                <div class="todo-icon fui-user"></div>
                <div class="todo-content">
                  <h4 class="todo-name">
                    Meet <strong>Adrian</strong> at <strong>6pm</strong>
                  </h4>
                  Times Square
                </div>
              </li>
              <li>
                <div class="todo-icon fui-list"></div>
                <div class="todo-content">
                  <h4 class="todo-name">
                    Chat with <strong>V.Kudinov</strong>
                  </h4>
                  Skype conference an 9 am
                </div>
              </li>
              <li>
                <div class="todo-icon fui-eye"></div>
                <div class="todo-content">
                  <h4 class="todo-name">
                    Watch <strong>Iron Man</strong>
                  </h4>
                  1998 Broadway
                </div>
              </li>
              <li>
                <div class="todo-icon fui-time"></div>
                <div class="todo-content">
                  <h4 class="todo-name">
                    Fix bug on a <strong>Website</strong>
                  </h4>
                  As soon as possible
                </div>
              </li>
            </ul>
          </div>
    </div>
    <div class="col-lg-8 col-md-8 col-xs-12">
        <h2>Empleos encontrados</h2>
        <ul class="job-list">
        @foreach($empleos as $empleo)
            <li class="">
                <a href="{{ route('empleos.show', $empleo->id.'--'.$empleo->slug ) }}" title="Oferta de empleo: {{ $empleo->titulo }}">
                    <div class="job-logo" style="background-image: url(http://lorempixel.com/64/64/technics/1)"></div>

                    <div class="job-content">
                        <h4>{{ str_limit($empleo->titulo, 20, '...') }}</h4>
                        <p>{{{ $empleo->descripcion }}}</p>
                        <span class="label label-success">
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
@stop
