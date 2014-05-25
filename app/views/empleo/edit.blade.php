@extends('layout.main')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-push-3 col-sm-6 col-sm-push-3">
        <div class="text-center">
            <h2>{{$empleo->titulo}}</h2>
        </div>

    </div>
</div>
<div>{{ var_dump(Input::old()) }}</div>
<div class="row">
    <div class="col-md-5 col-md-push-3">
        {{ Form::open([
                'route'     => ['empleos.update', $empleo->id, $empleo->slug],
                'method'    => 'PUT'
            ])
        }}
        <div class="form-group">
            <!-- {{ Form::label('username', 'Username') }} -->
            <div class="input-group">
                <span class="input-group-addon"><span class="fui-new"></span></span>
                {{ Form::text('titulo', $empleo->titulo, [
                        'class'         => 'form-control error',
                        'placeholder'   => 'Se necesita docente de matemática'
                    ])
                }}
            </div>
        </div>
        <div class="form-group">
            <!-- {{ Form::label('password', 'Password') }} -->
            <div class="input-group">
                <span class="input-group-addon"><span class="fui-chat"></span></span>
                {{ Form::textarea('descripcion', $empleo->descripcion, [
                        'class'         => 'form-control',
                        'placeholder'   => 'blah blah'
                    ])
                }}
            </div>
        </div>
        <div class="form-action">
            {{ Form::submit('Actualizar', [
                    'class' => 'btn btn-embossed btn-success btn-hg btn-block'
                ])
            }}
            <div class="text-center">
                @if ( Session::has('mensaje') )
                    <div class="alert {{ Session::get('mensaje')['tipo'] }}">
                        <b>{{ Session::get('mensaje')['mensaje'] }}</b>
                    </div>
                @endif
            </div>
        </div>

        {{ Form::close() }}
    </div>
</div>
@stop
