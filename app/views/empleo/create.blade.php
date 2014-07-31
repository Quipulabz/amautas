@extends('layout.main')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-push-3 col-sm-6 col-sm-push-3">
        <div class="text-center">
            <h1>Crear nuevo empleo</h1>
        </div>
        {{ Form::open([
                'route'     => ['empleos.store'],
                'autocomplete' => 'off',
                'method'    => 'POST'
            ])
        }}
        <div class="form-group">
            <!-- {{ Form::label('username', 'Username') }} -->
            <div class="input-group">
                <span class="input-group-addon"><span class="fui-new"></span></span>
                {{ Form::text('titulo', '', [
                        'class'         => 'form-control',
                        'placeholder'   => 'Se necesita docente de comunicación'
                    ])
                }}
            </div>
        </div>
        <div class="form-group">
            <!-- {{ Form::label('especialidad', 'Especialidad') }} -->
            <div class="input-group">
                <span class="input-group-addon"><span class="fui-new"></span></span>
                {{ Form::select('especialidad', $especialidades, '', [
                        'class'         => 'form-control',
                    ])
                }}
            </div>
        </div>
        <div class="form-group">
            <!-- {{ Form::label('especialidad', 'Especialidad') }} -->
            <div class="input-group">
                <span class="input-group-addon"><span class="fui-new"></span></span>
                {{ Form::departamentos('departamento', '', [
                        'class'         => 'form-control',
                    ])
                }}
            </div>
        </div>
        <div class="form-group">
            <!-- {{ Form::label('password', 'Password') }} -->
            <div class="input-group">
                <span class="input-group-addon"><span class="fui-chat"></span></span>
                {{ Form::textarea('descripcion', '', [
                        'class'         => 'form-control',
                        'placeholder'   => 'Prestigiosa Institución Educativa está en busca de un docente de comunicación'
                    ])
                }}
            </div>
        </div>
        <div class="form-action">
            {{ Form::submit('Publicar', [
                    'class' => 'btn btn-embossed btn-success btn-hg btn-block'
                ])
            }}
        </div>

        {{ Form::close() }}
    </div>
</div>
@stop
