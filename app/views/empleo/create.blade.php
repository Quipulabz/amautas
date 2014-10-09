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
                {{ Form::entities('especialidad', 'Especialidad', '', [
                        'class'         => 'js-select select-block',
                    ])
                }}
            </div>
            <div class="form-group">
                <!-- {{ Form::label('departamento', 'Departamento') }} -->
                {{ Form::entities('departamento', 'Departamento', '', [
                        'class'         => 'js-select select-block',
                    ])
                }}
            </div>
            <div class="form-group">
                <!-- {{ Form::label('especialidad', 'Especialidad') }} -->
                <div class="input-group">
                    <span class="input-group-addon"><strong>S/.</strong></span>
                    {{ Form::text('sueldo', '', [
                            'class'         => 'form-control',
                            'placeholder'   => '1500.00'
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
            {{ Form::token() }}
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

@section('scripts')
<script type="text/javascript">
$(document).ready(function(){

    $('select.js-select').selectpicker({style: 'btn-primary', menuStyle: 'dropdown-inverse'});

});
</script>
@stop