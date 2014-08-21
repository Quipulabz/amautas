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
                <!-- {{ Form::label('especialidad', 'Especialidad') }} -->
                {{ Form::entities('especialidad', 'Especialidad', $empleo->especialidad_id, [
                        'class'         => 'js-select select-block',
                    ])
                }}
            </div>
            <div class="form-group">
                <!-- {{ Form::label('departamento', 'Departamento') }} -->
                {{ Form::entities('departamento', 'Departamento', $empleo->departamento_id, [
                        'class'         => 'js-select select-block',
                    ])
                }}
            </div>
            <div class="form-group">
                <!-- {{ Form::label('especialidad', 'Especialidad') }} -->
                <div class="input-group">
                    <span class="input-group-addon"><strong>S/.</strong></span>
                    {{ Form::text('sueldo', $empleo->sueldo, [
                            'class'         => 'form-control',
                            'placeholder'   => '1500.00'
                        ])
                    }}
                </div>
            </div>
            <div class="form-group">
                <!-- {{ Form::label('password', 'Password') }} -->
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-headphones"></span></span>
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
        <hr>
        <div class="row">
            <div class="col-sm-3 pull-left">
                {{ Form::open([
                        'route'     => ['empleos.destroy', $empleo->id.'--'.$empleo->slug],
                        'method'    => 'DELETE'
                    ])
                }}
                    {{ Form::submit('Eliminar', [
                        'class' => 'btn btn-danger btn-xs pull-left js-tooltip',
                        'data-placement'    => "top",
                        'title' => "Puede recuperar los empleos eliminados"
                        ])
                    }}
                {{ Form::close() }}
            </div>
            <!-- Button trigger modal -->
{{--
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#my-modal">
  Launch demo modal
</button>

<div id="my-modal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
--}}

        </div>
    </div>
</div>
@stop

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){

        $('input.js-tooltip').tooltip({'trigger':'hover'});

        $('select.js-select').selectpicker({style: 'btn-primary', menuStyle: 'dropdown-inverse'});

    });
</script>
@stop