@extends('layout.main')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-push-3 col-sm-6 col-sm-push-3">
        <div class="text-center">
            <h1>{{$empleo->titulo}}</h1>
        </div>
        {{ Form::open([
                'route'     => ['empleos.update', $empleo->id.'--'.$empleo->slug],
                'autocomplete' => 'off',
                'method'    => 'PUT'
            ])
        }}
        <div class="form-group">
            <!-- {{ Form::label('username', 'Username') }} -->
            <div class="input-group">
                <span class="input-group-addon"><span class="fui-new"></span></span>
                {{ Form::text('titulo', $empleo->titulo, [
                        'class'         => 'form-control',
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
                        'placeholder'   => 'Prestigiosa Institución Educativa está en busca de un docente de matemática'
                    ])
                }}
            </div>
        </div>
        <div class="form-action">
            {{ Form::submit('Actualizar', [
                    'class' => 'btn btn-embossed btn-success btn-hg btn-block'
                ])
            }}
        </div>
        {{ Form::close() }}
        <br>
        <div class="row">
            <div class="col-sm-3 pull-left">
                {{ Form::open([
                        'route'     => ['empleos.destroy', $empleo->id.'--'.$empleo->slug],
                        'method'    => 'DELETE'
                    ])
                }}
                    {{ Form::submit('Eliminar', [
                        'class' => 'btn btn-danger btn-xs pull-left quipu_tt',
                        'data-placement'    => "top",
                        'title' => "Puede recuperar los empleos eliminados"
                        ])
                    }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@stop

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('input.quipu_tt').tooltip({'trigger':'hover'})
    });
</script>
@stop